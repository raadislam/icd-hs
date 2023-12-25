<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ShortCourseController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapyController;
use App\Http\Controllers\TherapistScheduleController;
use App\Models\Therapist;
use App\Models\TherapistSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::view('planner', 'dashboard.schedule.planner');
});


/*
|--------------------------------------------------------------------------
| Web Page View Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/short-course', [FrontendController::class, 'shortCourse'])->name('shortCourse');
Route::get('/apply/short-course/{shortCourses}', [FrontendController::class, 'shortCourseRegistration'])->name('shortCourseRegistration');
Route::get('/apply/short-course/{therapy}', [FrontendController::class, 'therapyRegistration'])->name('therapyRegistration');
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contactus');
Route::post('/contact-us-send', [FrontendController::class, 'contactusSend'])->name('contactusSend');
Route::get('/our-therapists', [FrontendController::class, 'ourTherapists'])->name('ourTherapists');
Route::get('/our-team', [FrontendController::class, 'ourTeam'])->name('ourTeam');
Route::get('/view/therapy/{therapy}', [FrontendController::class, 'viewTherapy'])->name('viewTherapy');
Route::get('/services', [FrontendController::class, 'services'])->name('services');

Route::get('/make-appointment/{therapist}', [AppointmentController::class, 'create'])->name('appointment.create');


Route::get('get-schedule/{therapist}', function ($therapist) {
    $schedules = TherapistSchedule::where('therapist_id', $therapist)->orderBy('weekday', "ASC")->get()->groupBy('weekday');
    return response()->json([
        "schedules" => $schedules,
    ]);
});

require __DIR__ . '/auth.php';
