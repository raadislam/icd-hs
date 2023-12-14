<?php

namespace App\Http\Controllers;

use App\Models\Therapy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $therapies = Therapy::get();
        return view('dashboard.therapy.index', compact('therapies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.therapy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Therapy::create([
            "title" => $request['title'],
            "fee" => $request['fee'],
            "description" => $request['description'],
        ]);

        return back()->with('therapy', 'Therapy Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapy $therapy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Therapy $therapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Therapy $therapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Therapy $therapy)
    {
        //
    }
}
