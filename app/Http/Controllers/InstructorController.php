<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Instructors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());

        $path_string = "instructors";

        if ($request->img) {
            $image_path = $this->uploadImage($request->img, $path_string);
            $image_name = $image_path;
        } else {
            $image_name = null;
        }

        Instructor::create([
            'name' => $request->name,
            'email' => $request->email,
            'img' => $image_name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'nid' => $request->nid,
            'about' => $request->about,
        ]);

        return back()->with('instructor_added', 'Instructor Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
