<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DirectionGallery;
use App\Models\Direction;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
    public function index()
    {
        $directions = Direction::latest()->paginate(10);
        return view('admin/galerija/index')->with('directions', $directions);
    }

    public function showGallery($id)
    {
        $direction = Direction::findOrFail($id);
        return view('admin/galerija/galerija')->with('direction', $direction);
    }

    public function store(Request $request, $id)
    {
        $direction = Direction::findOrFail($id);

        $request->validate([
            'slike' => 'required|array',
            'slike.*' => 'mimes:png,jpg,jpeg'
        ]);

        $slike = [];

        foreach ($request->slike as $slika) {
            $imgArray = [];

            $imgRealPath = $slika->getRealPath();

            $newImageName = Str::random(50) . "." . $slika->extension();

            Image::make($imgRealPath)->fit(400,400)->save('storage/galerija/thumb/' . $newImageName);

            $imgArray['thumb'] = config('app.url') . '/storage/galerija/thumb/' . $newImageName;

            $slika->move(storage_path('app/public/galerija/'), $newImageName);

            $imgArray['slika'] = config('app.url') . '/storage/galerija/' . $newImageName;
        
            $slike[] = $imgArray;
        }

        foreach ($slike as $slika) {
            $direction->images()->create($slika);
        }

        return redirect(config('app.url') . '/admin/galerija/' . $id)->with([
            'message' => 'Uspjesno objavljeno!'
        ]);
    }

    public function deleteImage($id, $imageId)
    {
        $direction = Direction::findOrFail($id);
        $image = $direction->images()->where('id', $imageId)->firstOrFail();
        $image->delete();
        return redirect(config('app.url') . '/admin/galerija/' . $id)->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }
}
