<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CollectionResource;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin/kategorije/index')->with('categories', $categories);
    }

    public function create()
    {
        return view('admin/kategorije/kreiraj');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'string|required'
        ]);

        $category = Category::create([
            'naziv' => $request->naziv
        ]);

        return redirect(config('app.url') . '/admin/kategorije')->with([
            'message' => 'Uspjesno spremljeno!'
        ]);
    }

    public function delete($categoryId)
    {
        $category = Category::findOrFail($categoryId);

        $category->delete();

        return redirect(config('app.url') . '/admin/kategorije')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }
}
