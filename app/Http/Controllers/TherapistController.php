<?php

namespace App\Http\Controllers;

use App\Models\Therapist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.therapists.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.therapists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());

        $path_string = "therapist";

        if ($request->img) {
            $image_path = $this->uploadImage($request->img, $path_string);
            $image_name = $image_path;
        } else {
            $image_name = null;
        }

        Therapist::create([
            'name' => $request->name,
            'email' => $request->email,
            'img' => $image_name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'nid' => $request->nid,
            'about' => $request->about,
        ]);

        return back()->with('therapist_added', 'Therapist Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapist $therapist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Therapist $therapist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Therapist $therapist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Therapist $therapist)
    {
        //
    }
}
