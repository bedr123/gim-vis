<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

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
