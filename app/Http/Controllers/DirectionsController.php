<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Direction;
use App\Http\Requests\StoreDirectionRequest;
use App\Http\Requests\UpdateDirectionRequest;

class DirectionsController extends Controller
{
    public function index()
    {
        $directions = Direction::all();
        return view('admin/smjerovi/index')->with('directions', $directions);
    }

    public function create()
    {
        return view('admin/smjerovi/kreiraj');
    }

    public function store(StoreDirectionRequest $request)
    {
        $data = $request->validated();

        if ($request->slike) {
            for ($i = 0; $i < count($request->slike); $i++) {
                $request->validate([
                    'slike.' . $i => 'mimes:png,jpg,jpeg'
                ]);
            }
        }

        if ($request->hasFile('ikonica')) {
            $newimagename = Str::random(25) . '.' . $request->ikonica->extension();

            $request->ikonica->move(storage_path('app/public/smjerovi'), $newimagename);

            $data['ikonica'] = config('app.url') . '/storage/smjerovi/' . $newimagename;
        }

        $direction = Direction::create($data);

        if ($request->slike) {
            foreach ($request->slike as $slika) {
                $newimagename = Str::random(25) . '.' . $slika->extension();
    
                $slika->move(storage_path('app/public/galerija'), $newimagename);
    
                $direction->images()->create([
                    'slika' => config('app.url') . '/storage/galerija/' . $newimagename
                ]);
            }
        }

        return redirect(config('app.url') . '/admin/smjerovi')->with([
            'message' => 'Uspjesno kreirano!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $direction = Direction::where('slug', $slug)->firstOrFail();

        return new DirectionResource($direction);
    }

    public function edit($directionId)
    {
        $direction = Direction::findOrFail($directionId);

        return view('admin/smjerovi/uredi')->with('direction', $direction);
    }
    
    public function update(UpdateDirectionRequest $request, $directionId)
    {
        $direction = Direction::findOrFail($directionId);

        $data = $request->validated();

        if ($request->slike) {
            for ($i = 0; $i < count($request->slike); $i++) {
                $request->validate([
                    'slike.' . $i => 'mimes:png,jpg,jpeg'
                ]);
            }
        }

        if ($request->ikonica) {
            $newimagename = Str::random(25) . '.' . $request->ikonica->extension();

            $request->ikonica->move(storage_path('app/public/smjerovi'), $newimagename);

            $data['ikonica'] = config('app.url') . '/storage/smjerovi/' . $newimagename;
        }

        if ($request->naziv) {
            $direction->slug = null; 
        }

        $direction->update($data);

        if ($request->slike) {
            foreach ($request->slike as $slika) {
                $newimagename = Str::random(25) . '.' . $slika->extension();
    
                $slika->move(storage_path('app/public/galerija'), $newimagename);
    
                $direction->images()->create([
                    'slika' => config('app.url') . '/storage/galerija/' . $newimagename
                ]);
            }
        }

        return redirect(config('app.url') . '/admin/smjerovi')->with([
            'message' => 'Uspjesno spremljeno!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($directionId)
    {
        $direction = Direction::findOrFail($directionId);
        $direction->delete();
        return redirect(config('app.url') . '/admin/smjerovi')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }

    public function showSingleDirection($slug)
    {
        $direction = Direction::where('slug', $slug)->firstOrFail();
        return view('smjerovi/single')->with('direction', $direction);
    }
}
