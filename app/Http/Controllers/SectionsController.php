<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionsController extends Controller
{
    public function index()
    {
        $sections = Section::latest()->paginate(10);

        return view('admin/sekcije/index')->with('sections', $sections);
    }

    public function create()
    {
        return view('admin/sekcije/kreiraj');
    }

    public function store(StoreSectionRequest $request)
    {
        $data = $request->validated();

        $section = Section::create($data);

        foreach ($request->profesori as $pId) {
            $section->employees()->attach($pId);
        }

        $profesori = [];

        foreach ($section->employees() as $employee) {
            $profesori[] = $employee->ime_i_prezime;
        }

        $section->profesori = implode(', ', $profesori);
        $section->save();

        return redirect(config('app.url') . '/admin/sekcije')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function edit($sectionId)
    {
        $section = Section::findOrFail($sectionId);

        return view('admin/sekcije/uredi')->with('section', $section);
    }

    public function update(UpdateSectionRequest $request, $sectionId)
    {
        $section = Section::findOrFail($sectionId);

        $data = $request->validated();
        
        if ($request->naziv) {
            $post->slug = null;
        }

        $section->update($data);

        $section->employees()->detach();

        foreach ($request->profesori as $pId) {
            $section->employees()->attach($pId);
        }

        $profesori = [];

        foreach ($section->employees() as $employee) {
            $profesori[] = $employee->ime_i_prezime;
        }

        $section->profesori = implode(', ', $profesori);
        $section->save();

        return redirect(config('app.url') . '/admin/sekcije')->with([
            'message' => 'Uspjesno uređeno!'
        ]);
    }

    public function delete($sectionId)
    {
        $section = Section::findOrFail($sectionId);

        $section->delete();

        return redirect(config('app.url') . '/admin/sekcije')->with([
            'message' => 'Uspjesno Izbrisano!'
        ]);
    }

    public function getAllSections()
    {
        $sections = Section::latest()->paginate(10);

        return view('sekcije')->with('sections', $sections);
    }

    public function showSingleSection($slug)
    {
        $section = Section::where('slug', $slug)->firstOrFail();

        return view('sekcije/single')->with('section', $section);
    }
}
