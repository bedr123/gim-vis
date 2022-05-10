<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin/projekti/index')->with('projects', $projects);
    }

    public function create()
    {
        return view('admin/projekti/kreiraj');
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(368,250)->save('storage/projekti/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/projekti/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/projekti'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/projekti/' . $newImageName;
        }

        Project::create($data);

        return redirect(config('app.url') . '/admin/projekti')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function edit($projectId)
    {
        $project = Project::findOrFail($projectId);

        return view('admin/projekti/uredi')->with('project', $project);
    }

    public function update(UpdateProjectRequest $request, $projectId)
    {
        $project = Project::findOrFail($projectId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(368,250)->save('storage/projekti/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/projekti/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/projekti'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/projekti/' . $newImageName;
        }
        
        if ($request->naziv) {
            $post->slug = null;
        }

        $project->update($data);

        return redirect(config('app.url') . '/admin/projekti')->with([
            'message' => 'Uspjesno uređeno!'
        ]);
    }

    public function delete($projectId)
    {
        $project = Project::findOrFail($projectId);

        $project->delete();

        return redirect(config('app.url') . '/admin/projekti')->with([
            'message' => 'Uspjesno Izbrisano!'
        ]);
    }

    public function getAllProjects()
    {
        $projects = Project::latest()->paginate(10);

        return view('projekti')->with('projects', $projects);
    }

    public function showSingleProject($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('projekti/single')->with('projects', $projects);
    }
}
