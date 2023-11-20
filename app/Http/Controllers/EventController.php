<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate(15);
        return view('dashboard/event/index', compact('events'));
    }

    public function create()
    {
        return view('dashboard/event/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $events = new Event;
        if ($request->hasFile('img_url')) {
            $file = $request->img_url;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = 'events' . time() . $ext;
            $request->img_url->move(public_path('images/events/'), $imageName);
            $events->img_url = $imageName;
        }
        $events->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $eventImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $eventImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, Request $request)
    {
        if (File::exists(public_path('images/events/' . $event->img_url))) {
            File::delete(public_path('images/events/' . $event->img_url));
        }
        $event->delete();
        return back();
    }
}
