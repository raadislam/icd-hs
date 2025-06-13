<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsmail;
use App\Mail\GreetingsMail;
use App\Models\Course;
use App\Models\Event;
use App\Models\Noticeboard;
use App\Models\ShortCourse;
use App\Models\Therapist;
use App\Models\Therapy;
use App\Models\TherapistSchedule;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $notices = Noticeboard::get();
        $shortCourses = ShortCourse::limit(4)->get();
        $services = Therapy::limit(6)->get();
        return view('theme_1.index', compact('shortCourses', 'services', 'notices'));
    }

    public function researchSupport()
    {
        return view('theme_1.reasearchSupport');
    }

    public function som()
    {
        return view('theme_1.schoolofMinds');
    }

    public function programofStudy()
    {
        return view('theme_1.programofStudy');
    }

    public function comingSoon()
    {
        return view('theme_1.comingsoon');
    }

    public function pranicTherapy()
    {
        $therapy = Therapy::query()->where('id', 13)->first();
        $therapists = Therapist::whereRelation('therapies', function ($query) {
            $query->where('therapies.id', 13);
        })->with('schedules')->get();

        return view('theme_1.pranicTherapy', compact('therapy', 'therapists'));
    }

    public function daycare()
    {
        return view('theme_1.daycare');
    }

    public function careGiving()
    {
        $caregiving_course = Course::query()->where('id', 2)->first();
        return view('theme_1.caregiving', compact('caregiving_course'));
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
        $therapists = Therapist::with('schedules')->where('sub_category_id', 2)->orderBy('id', 'ASC')->get();
        return view('theme_1.mmient', compact('therapists'));
    }

    public function ourDoctors()
    {
        $therapists = Therapist::with('schedules')->where('category_id', 2)->orderBy('id', 'ASC')->get();
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
        })->get();

        return view('theme_1.viewTherapy', compact('therapy', 'therapists'));
    }
    public function viewTherapist($therapist)
    {
        $therapist = Therapist::where('id', $therapist)->with('schedules')->first();

        return view('theme_1.personalView', compact('therapist'));
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
            'phone' => 'required | string',
            'message' => 'required | string',
        ]);

        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'subject' => $request->subject,
        ];
        \Mail::to('raadislam09@gmail.com')->send(new ContactUsmail($mailData));
        \Mail::to($request->email)->send(new GreetingsMail($mailData));

        return back()->with('message', 'Message Send Successfully');
    }
}
