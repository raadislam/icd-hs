<?php

namespace App\Http\Controllers;

use App\Models\TherapistSchedule;
use App\Http\Controllers\Controller;
use App\Models\Therapist;
use App\Models\Therapy;
use Illuminate\Http\Request;

class TherapistScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.TherapistSchedule.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $therapies = Therapy::get();
        $therapists = Therapist::get();
        $schedules = TherapistSchedule::orderBy('weekday', "ASC")->get()->groupBy('weekday');
        return view('dashboard.therapistSchedule.create', compact('therapists', 'therapies', 'schedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = TherapistSchedule::create([
            'therapist_id' => $request->therapist_id,
            'weekday' => $request->weekday,
            // 'slot' => date('h:i A', strtotime($request->slot)),
            'slot' => $request->slot,
        ]);

        return response(compact('schedule'));
    }

    /**
     * Display the specified resource.
     */
    public function show($therapists)
    {
        $therapist = TherapistSchedule::where('therapist_id', $therapists)->get();
        return response(compact('therapist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TherapistSchedule $TherapistSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TherapistSchedule $TherapistSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dashboard_therapy_schedule)
    {
        TherapistSchedule::find($dashboard_therapy_schedule)->delete();
        return true;
    }
}
