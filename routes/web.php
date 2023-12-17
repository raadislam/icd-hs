<?php

use App\Http\Controllers\CourseScheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ShortCourseController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapyController;
use App\Http\Controllers\TherapyScheduleController;
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
Route::get('/view/therapy/{therapy}', [FrontendController::class, 'viewTherapy'])->name('viewTherapy');
Route::get('/make-appointment/{therapist}', [FrontendController::class, 'makeAppointment'])->name('makeAppointment');


require __DIR__ . '/auth.php';
Route::resource('dashboard-short-course', ShortCourseController::class);
Route::resource('dashboard-instructors', InstructorController::class);
Route::resource('dashboard-course-schedule', CourseScheduleController::class);
Route::resource('dashboard-therapy', TherapyController::class);
Route::resource('dashboard-therapist', TherapistController::class);
Route::resource('dashboard-therapy-schedule', TherapyScheduleController::class);


Route::view('planner', 'dashboard.schedule.planner');
