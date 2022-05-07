<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\CollectionResource;
use Illuminate\Support\Str;
use App\Models\Employee;
use Intervention\Image\ImageManagerStatic as Image;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin/novosti/index')->with('posts', $posts);
    }

    public function create()
    {
        $employees = Employee::all();
        return view('admin/novosti/kreiraj')->with('employees', $employees);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(368,250)->save('storage/novosti/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/novosti/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/novosti'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }

        $post = Post::create($data);

        if (isset($data['uposlenici'])) {
            foreach ($data['uposlenici'] as $employeeId) {
                $post->employees()->attach($employeeId);
            }
        }

        return redirect(config('app.url') . '/admin/novosti')->with([
            'message' => 'Uspjesno objavljeno!'
        ]);
    }

    public function show($postId)
    {
        $post = Post::findOrFail($postId);

        return view('novosti/novosti')->with('post', $post);
    }

    public function edit($postId)
    {
        $employees = Employee::all();
        $post = Post::findOrFail($postId);

        return view('admin/novosti/uredi')->with('post', $post)->with('employees', $employees);
    }

    public function update(UpdatePostRequest $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(368,250)->save('storage/novosti/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/novosti/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/novosti'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }
        
        if ($request->naslov) {
            $post->slug = null;
        }
        
        $post->update($data);

        if (isset($data['uposlenici'])) {
            $post->employees()->detach();
            foreach ($data['uposlenici'] as $employeeId) {
                $post->employees()->attach($employeeId);
            }
        }

        return redirect(config('app.url') . '/admin/novosti')->with([
            'message' => 'Uspjesno spremljeno!'
        ]);
    }

    public function delete($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        return redirect(config('app.url') . '/admin/novosti')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }

    public function showSinglePost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('novosti/single')->with('post', $post);
    }

    public function getAllPosts()
    {
        $posts = Post::latest()->paginate(12);
        return view('novosti')->with('posts', $posts);
    }
}
