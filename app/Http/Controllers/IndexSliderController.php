<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\IndexSlider;
use App\Http\Resources\IndexSliderResource;
use App\Http\Resources\CollectionResource;
use App\Http\Requests\StoreSlideRequest;
use App\HTTP\Requests\UpdateSlideRequest;

class IndexSliderController extends Controller
{
    public function index()
    {
        $indexSlider = IndexSlider::latest()->paginate(10);
        
        return view('admin/slajdovi/index')->with('slides', $indexSlider);
    }

    public function create()
    {
        return view('admin/slajdovi/kreiraj');
    }
    
    public function store(StoreSlideRequest $request) {
        $data = $request->validated();

        $oldSlide = IndexSlider::where('redoslijed', $data['redoslijed'])->first();

        if ($oldSlide) {
            $oldSlide->delete();
        }

        $newImageName = Str::random(50) . "." . $request->slika->extension();

        $request->slika->move(storage_path('app/public/slajdovi'), $newImageName);
        
        $data['slika'] = config('app.url') . '/storage/slajdovi/' . $newImageName;

        $slide = IndexSlider::create($data);

        return redirect(config('app.url') . '/admin/slajdovi')->with([
            'message' => 'Uspjesno objavljeno!'
        ]);
    }

    public function edit($slideId)
    {
        $slide = IndexSlider::findOrfail($slideId);

        return view('admin/slajdovi/uredi')->with('slide', $slide);
    }

    public function update(UpdateSlideRequest $request, $slideId) {
        $slide = IndexSlider::findOrFail($slideId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $newImageName = Str::random(50) . "." . $request->slika->extension();
            $request->slika->move(storage_path('app/public/slajdovi'), $newImageName);
            $data['slika'] = config('app.url') . '/storage/slajdovi/' . $newImageName;
        }

        $orderExists = IndexSlider::where('redoslijed', $request->redoslijed)->first();

        if ($orderExists && $orderExists != $slide) {
            $orderExists->update([
                'redoslijed' => $slide->redoslijed
            ]);
        }
        
        $slide->update($data);

        return redirect(config('app.url') . '/admin/slajdovi')->with([
            'message' => 'Uspjesno spremljeno!'
        ]);
    }

    public function destroy($slideId) {
        $slide = IndexSlider::findOrFail($slideId);
        $slide->delete();
        return redirect(config('app.url') . '/admin/slajdovi')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }
}
