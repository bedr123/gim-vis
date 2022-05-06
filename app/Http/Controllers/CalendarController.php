<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Calendar;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = Calendar::first();
        return view('admin/kalendar/index')->with('calendar', $calendar);
    }

    public function create()
    {
        return view('admin/kalendar/kreiraj');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'slika' => 'required|mimes:png,jpeg,jpg'
        ]);

        $oldCalendar = Calendar::first();

        if ($oldCalendar) {
            $oldCalendar->delete();
        }

        $newImageName = Str::random(50) . "." . $request->slika->extension();

        $request->slika->move(storage_path('app/public/kalendar'), $newImageName);  
        
        $data['slika'] = config('app.url') . '/storage/kalendar/' . $newImageName;

        Calendar::create($data);

        return redirect(config('app.url') . '/admin/kalendar')->with([
            'message' => 'Uspjesno objavljeno!'
        ]);
    }

    public function destroy($calendarId)
    {
        $calendar = Calendar::findOrFail($calendarId);
        $calendar->delete();
        return redirect(config('app.url') . '/admin/kalendar')->with([
            'message' => 'Uspjesno izbrisano!'
        ]);
    }

    public function showCalendar()
    {
        $calendar = Calendar::first();
        return view('kalendar')->with('calendar', $calendar);
    }
}
