<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsmail;
use App\Models\Event;
use App\Models\ShortCourse;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $shortCourses = ShortCourse::limit(4)->get();
        return view('theme_1.index', compact('shortCourses'));
    }
    public function shortCourse()
    {
        $shortCourses = ShortCourse::get();
        return view('theme_1.shortCourses', compact('shortCourses'));
    }
    public function shortCourseRegistration()
    {
        $shortCourses = ShortCourse::get();
        return view('theme_1.applyShortCourse', compact('shortCourses'));
    }
    public function aboutus()
    {
        return view('theme_1.aboutus');
    }
    public function contactus()
    {
        return view('theme_1.contactus');
    }
    public function training()
    {
        return view('theme_1.training');
    }
    public function certification()
    {
        return view('theme_1.certification');
    }
    public function afterSchoolProgram()
    {
        return view('theme_1.program');
    }
    public function studentServices()
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
