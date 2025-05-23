<?php

namespace App\Http\Controllers;

use App\Models\ShortCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shortCourses = ShortCourse::get();
        return view('dashboard.shortCourses.index', compact('shortCourses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shortCourses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShortCourse::create([
            "title" => $request['title'],
            "fee" => $request['fee'],
            "description" => $request['description'],
            "type" => $request['type'],
        ]);

        return back()->with('short_course', 'Course Added To Short Course');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShortCourse $shortCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShortCourse $shortCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShortCourse $shortCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortCourse $shortCourse)
    {
        //
    }
}
