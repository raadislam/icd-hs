<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsmail;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\SubcribersEmail;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('theme_1.index');
    }
    public function aboutus(Request $request)
    {
        return view('theme_1.aboutus');
    }
    public function contactus(Request $request)
    {
        return view('theme_1.contactus');
    }
    public function training(Request $request)
    {
        return view('theme_1.training');
    }
    public function certification(Request $request)
    {
        return view('theme_1.certification');
    }
    public function afterSchoolProgram(Request $request)
    {
        return view('theme_1.program');
    }
    public function studentServices(Request $request)
    {
        return view('theme_1.studentService');
    }
    public function event(Request $request)
    {
        $events = Event::all();
        return view('theme_1.event', compact('events'));
    }
    public function contactusSend(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required | string',
        ]);
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        \Mail::to('brighthillacademyinfo@gmail.com')->send(new ContactUsmail($mailData));


        return back()->with('message', 'Message Send Successfully');
    }
}
