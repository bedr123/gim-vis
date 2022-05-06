<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Schedule::first();
        return view('admin/raspored/index')->with('schedule', $schedule);
    }

    public function create()
    {
        return view('admin/raspored/kreiraj');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'slika' => 'required|mimes:png,jpeg,jpg'
        ]);

        $oldSchedule = Schedule::first();

        if ($oldSchedule) {
            $oldSchedule->delete();
        }

        $newImageName = Str::random(50) . "." . $request->slika->extension();

        $request->slika->move(storage_path('app/public/raspored'), $newImageName);  
        
        $data['slika'] = config('app.url') . '/storage/raspored/' . $newImageName;

        Schedule::create($data);

        return redirect(config('app.url') . '/admin/raspored')->with([
            'message' => 'Uspjesno objavljeno!'
        ]);
    }

    public function destroy($scheduleId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        $schedule->delete();
        return redirect(config('app.url') . '/admin/raspored')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }

    public function showSchedule()
    {
        $schedule = Schedule::first();
        return view('raspored')->with('schedule', $schedule);
    }
}
