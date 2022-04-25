<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Intervention\Image\ImageManagerStatic as Image;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin/uposlenici/index')->with('employees', $employees);
    }

    public function create()
    {
        return view('admin/uposlenici/kreiraj');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(250,350)->save('storage/uposlenici/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/uposlenici/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/uposlenici'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/uposlenici/' . $newImageName;
        }

        Employee::create($data);

        return redirect(config('app.url') . '/admin/uposlenici')->with([
            'message' => 'Uspjesno Dodano!'
        ]);
    }

    public function show($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        return new EmployeeResource($Employee);
    }

    public function edit($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        return view('admin/uposlenici/uredi')->with('employee', $employee);
    }

    public function update(UpdateEmployeeRequest $request, $employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $imgRealPath = $request->slika->getRealPath();

            $newImageName = Str::random(50) . "." . $request->slika->extension();

            Image::make($imgRealPath)->fit(250,350)->save('storage/uposlenici/thumb/' . $newImageName);

            $data['thumb'] = config('app.url') . '/storage/uposlenici/thumb/' . $newImageName;

            $request->slika->move(storage_path('app/public/uposlenici'), $newImageName);

            $data['slika'] = config('app.url') . '/storage/uposlenici/' . $newImageName;
        }

        $employee->update($data);

        return redirect(config('app.url') . '/admin/uposlenici')->with([
            'message' => 'Uspjesno Spremljeno!'
        ]);
    }

    public function delete($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        
        $employee->delete();

        return redirect(config('app.url') . '/admin/uposlenici')->with([
            'message' => 'Uspjesno Izbrisano!'
        ]);
    }

    public function getAllEmployees()
    {
        $employees = Employee::all();
        return view('uposlenici')->with('employees', $employees);
    }
}
