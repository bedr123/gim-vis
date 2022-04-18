<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\CollectionResource;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Employee;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin/novosti/index')->with('posts', $posts);
    }

    public function create()
    {
        $categories = Category::all();
        $employees = Employee::all();
        return view('admin/novosti/kreiraj')->with('categories', $categories)->with('employees', $employees);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('slika')) {
            $newImageName = Str::random(50) . "." . $request->slika->extension();
            $request->slika->move(storage_path('app/public/novosti'), $newImageName);
            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }

        $post = Post::create($data);

        if (isset($data['employees'])) {
            foreach ($data['employees'] as $employeeId) {
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
        $post = Post::findOrFail($postId);

        $categories = Category::all();

        return view('admin/novosti/uredi')->with('categories', $categories)->with('post', $post);
    }

    public function update(UpdatePostRequest $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $newImageName = Str::random(50) . "." . $request->slika->extension();
            $request->slika->move(storage_path('app/public/novosti'), $newImageName);
            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }
        
        if ($request->naslov) {
            $post->slug = null;
        }
        
        $post->update($data);

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
}