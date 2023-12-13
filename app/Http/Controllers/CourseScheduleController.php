<?php

namespace App\Http\Controllers;

use App\Models\CourseSchedule;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\ShortCourse;
use Illuminate\Http\Request;

class CourseScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.courseSchedule.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = ShortCourse::get();
        $instructors = Instructor::get();
        return view('dashboard.courseSchedule.create', compact('instructors', 'courses'));
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
    public function show(CourseSchedule $courseSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseSchedule $courseSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseSchedule $courseSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseSchedule $courseSchedule)
    {
        //
    }
}
