<?php

namespace App\Http\Controllers;

use App\Models\TherapySchedule;
use App\Http\Controllers\Controller;
use App\Models\Therapist;
use App\Models\Therapy;
use Illuminate\Http\Request;

class TherapyScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.therapySchedule.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $therapies = Therapy::get();
        $therapists = Therapist::get();
        $schedules = TherapySchedule::get();
        return view('dashboard.therapySchedule.create', compact('therapists', 'therapies', 'schedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = TherapySchedule::create([
            'therapist_id' => $request->therapist_id,
            'therapy_id' => $request->therapy_id,
            'weekday' => $request->weekday,
            'slot' => $request->slot,
        ]);

        return response(compact('schedule'));
    }

    /**
     * Display the specified resource.
     */
    public function show($therapists)
    {
        $therapist = TherapySchedule::where('therapist_id', $therapists)->get();
        return response(compact('therapist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TherapySchedule $therapySchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TherapySchedule $therapySchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dashboard_therapy_schedule)
    {
        TherapySchedule::find($dashboard_therapy_schedule)->delete();
        return true;
    }
}
