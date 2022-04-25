<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin/ucenici/index');
    }

    public function create()
    {
        return view('admin/ucenici/kreiraj');
    }

    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(250,350)->save('storage/ucenici/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/ucenici/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/ucenici'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/ucenici/' . $newImageName;
        }

        Student::create($data);

        return redirect(config('app.url') . '/admin/ucenici')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function edit($studentId)
    {
        $student = Student::findOrFail($studentId);
        return view('admin/ucenici/uredi');
    }

    public function update(UpdateStudentRequest $request, $studentId)
    {
        $student = Student::findOrFail($studentId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(250,350)->save('storage/ucenici/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/ucenici/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/ucenici'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/ucenici/' . $newImageName;
        }

        $student->update($data);

        return redirect(config('app.url') . '/admin/ucenici')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function destroy($studentId)
    {
        $student = Student::findOrFail($studentId);

        $student->delete();

        return redirect(config('app.url') . '/admin/novosti')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }
}
