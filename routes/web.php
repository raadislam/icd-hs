<?php

use App\Http\Controllers\AmarPayController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\NoticeboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ShortCourseController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapyController;
use App\Http\Controllers\TherapistScheduleController;
use App\Models\Therapist;
use App\Models\TherapistSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/pay', [AmarPayController::class, 'pay'])->name('amarpaybuynow');
Route::any('/amarpay/success', [AmarPayController::class, 'success']);
Route::any('/amarpay/fail', [AmarPayController::class, 'fail']);
Route::any('/amarpay/cancel', [AmarPayController::class, 'cancel']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', function () {
        return view('dashboard/main');
    });

    Route::resource('dashboard-short-course', ShortCourseController::class);
    Route::resource('dashboard-instructors', InstructorController::class);
    Route::resource('dashboard-course-schedule', CourseScheduleController::class);
    Route::resource('dashboard-therapy', TherapyController::class);
    Route::resource('dashboard-therapist', TherapistController::class);
    Route::resource('dashboard-therapy-schedule', TherapistScheduleController::class);

    Route::group(['prefix' => 'admin'], function () {

        Route::resource('noticeboard', NoticeboardController::class);

        Route::get('/sub-category/{category}', [SubCategoryController::class, 'show'])->name('showSubCategory');
    });

    Route::view('planner', 'dashboard.schedule.planner');
});


/*
|--------------------------------------------------------------------------
| Web Page View Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/earn-leave', [FrontendController::class, 'earnLeave'])->name('earnLeave');
Route::get('/short-course', [FrontendController::class, 'shortCourse'])->name('shortCourse');
Route::get('/program-of-study', [FrontendController::class, 'programofStudy'])->name('programofStudy');
Route::get('/apply/short-course/{shortCourses}', [FrontendController::class, 'shortCourseRegistration'])->name('shortCourseRegistration');
Route::get('/apply/short-course/{therapy}', [FrontendController::class, 'therapyRegistration'])->name('therapyRegistration');
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contactus');
Route::post('/contact-us-send', [FrontendController::class, 'contactusSend'])->name('contactusSend');
Route::get('/our-therapists', [FrontendController::class, 'ourTherapists'])->name('ourTherapists');
Route::get('/our-doctors', [FrontendController::class, 'ourDoctors'])->name('ourDoctors');
Route::get('/speech-therapy', [FrontendController::class, 'speechTherapist'])->name('speechTherapist');
Route::get('/mmi-ent', [FrontendController::class, 'entDoctors'])->name('entDoctors');
Route::get('/our-team', [FrontendController::class, 'ourTeam'])->name('ourTeam');
Route::get('/view/therapy/{therapy}', [FrontendController::class, 'viewTherapy'])->name('viewTherapy');
Route::get('/therapist/{therapist}', [FrontendController::class, 'viewTherapist'])->name('viewTherapist');
Route::get('/pranic-therapy', [FrontendController::class, 'pranicTherapy'])->name('pranicTherapy');
Route::get('/school-of-unique-learners', [FrontendController::class, 'som'])->name('som');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/daycare', [FrontendController::class, 'daycare'])->name('daycare');
Route::get('/care-giving', [FrontendController::class, 'careGiving'])->name('careGiving');
Route::get('/coming-soon', [FrontendController::class, 'comingSoon'])->name('comingSoon');
Route::get('/reasearch-support', [FrontendController::class, 'researchSupport'])->name('researchSupport');


Route::get('/make-appointment/{therapist}', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/confirm-appointment', [PatientController::class, 'store'])->name('appointment.store');


Route::get('get-schedule/{therapist}', function ($therapist) {
    $schedules = TherapistSchedule::where('therapist_id', $therapist)->orderBy('weekday', "ASC")->get()->groupBy('weekday');
    return response()->json([
        "schedules" => $schedules,
    ]);
});

require __DIR__ . '/auth.php';
