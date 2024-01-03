<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsmail;
use App\Models\Event;
use App\Models\ShortCourse;
use App\Models\Therapist;
use App\Models\Therapy;
use App\Models\TherapistSchedule;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $shortCourses = ShortCourse::limit(4)->get();
        $services = Therapy::limit(6)->get();
        return view('theme_1.index', compact('shortCourses', 'services'));
    }

    public function daycare()
    {
        return view('theme_1.daycare');
    }
    public function earnLeave()
    {
        return view('theme_1.earnAndLive');
    }
    public function ourTeam()
    {
        return view('theme_1.ourTeam');
    }
    public function services()
    {
        $services = Therapy::get();
        return view('theme_1.services', compact('services'));
    }
    public function shortCourse()
    {
        $shortCourses = ShortCourse::get();
        return view('theme_1.shortCourses', compact('shortCourses'));
    }

    public function speechTherapist()
    {
        $therapists = Therapist::with('schedules')->where('sub_category_id', 1)->get();
        return view('theme_1.therapists', compact('therapists'));
    }

    public function entDoctors()
    {
        $therapists = Therapist::with('schedules')->where('sub_category_id', 2)->get();
        return view('theme_1.therapists', compact('therapists'));
    }

    public function ourDoctors()
    {
        $therapists = Therapist::with('schedules')->where('category_id', 2)->get();
        return view('theme_1.therapists', compact('therapists'));
    }
    public function ourTherapists()
    {
        $therapists = Therapist::with('schedules')->where('category_id', 1)->get();
        return view('theme_1.therapists', compact('therapists'));
    }

    public function viewTherapy(Therapy $therapy)
    {
        $therapists = Therapist::whereRelation('therapies', function ($query) use ($therapy) {
            $query->where('therapies.id', $therapy->id);
        })->with('schedules')->get();

        return view('theme_1.viewTherapy', compact('therapy', 'therapists'));
    }


    public function shortCourseRegistration(ShortCourse $shortCourses)
    {
        return view('theme_1.applyShortCourse', compact('shortCourses'));
    }

    public function therapyRegistration(Therapy $therapy)
    {
        return view('theme_1.applyShortCourse', compact('therapy'));
    }

    public function getschedule(Request $request)

    {
        $schedule = TherapistSchedule::where([['therapist_id', $request->therapist_id], ['therapy_id', $request->therapy_id]])->get();
        return response(compact('schedule'));
    }

    public function aboutus()
    {
        return view('theme_1.aboutus');
    }

    public function contactus()
    {
        return view('theme_1.contactus');
    }

    public function appointment($therapist)
    {
        // $schedules = TherapistSchedule::where('th')
        return view('theme_1.makeAppointement');
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
