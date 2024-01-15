<?php

namespace App\Http\Controllers;

use App\Models\Noticeboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Noticeboard::get();

        return view('dashboard.noticeboard.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.noticeboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path_string = "notice";

        if ($request->img) {
            $image_path = $this->uploadImage($request->img, $path_string);
            $image_name = $image_path;
        } else {
            $image_name = null;
        }


        Noticeboard::create([
            'title' => $request->title,
            'img' => $image_name,
            'description' => $request->description,
        ]);

        return back()->with('notice_created', 'Notice Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticeboard $noticeboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticeboard $noticeboard)
    {
        //
    }
}
