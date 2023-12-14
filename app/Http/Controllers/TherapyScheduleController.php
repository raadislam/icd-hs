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
        return view('dashboard.therapySchedule.create', compact('therapists', 'therapies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(TherapySchedule $therapySchedule)
    {
        //
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
    public function destroy(TherapySchedule $therapySchedule)
    {
        //
    }
}
