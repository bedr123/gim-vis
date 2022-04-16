<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Direction;
use App\Models\IndexSlider;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        $slides = indexSlider::orderBy('redoslijed', 'asc')->paginate(3);
        $directions = Direction::all();
        $firstSlide = IndexSlider::where('redoslijed', 1)->first();
        $lastSlide = IndexSlider::where('redoslijed', 3)->first();

        return view('index')
            ->with('posts', $posts)
            ->with('slides', $slides)
            ->with('directions', $directions)
            ->with('firstSlide', $firstSlide)
            ->with('lastSlide', $lastSlide);
    }

    public function oSkoli()
    {
        return view('skola');
    }

    public function historija()
    {
        return view('historija');
    }

    public function kodeks()
    {
        return view('kodeks');
    }

    public function uposlenici()
    {
        return view('uposlenici');
    }
    
    public function kontakt()
    {
        return view('kontakt');
    }
}
