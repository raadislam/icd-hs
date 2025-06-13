<?php

use App\Http\Controllers\AmarPayController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return view('theme_1.user-signin');
})->name('user-signin');

Route::get('/signup', function () {

    return view('theme_1.user-signup');
})->name('user-signup');

Route::post('/register-course-user', [CourseUserController::class, 'register'])->name('course-user-registration');
Route::post('/signin-course-user', [CourseUserController::class, 'signin'])->name('course-user-signin');


Route::group(['middleware' => ['web', 'auth:course']], function () {

    Route::get('/pay', [AmarPayController::class, 'pay'])->name('amarpaybuynow');

    Route::get('/course', function () {
        $courses = Course::with(['publisher'])->get();
        return view('theme_1.course', compact('courses'));
    })->name('course');

    Route::get('/teaching', function () {

        $path = asset('file/data/caregiving_modules.json');

        $json = file_get_contents($path);
        $modules = json_decode($json, true); // Decode as associative array
        return view('theme_1.course.courseModule', compact('modules'));
    })->name('course-teaching');


    Route::get('/learning-care-giving', function () {
        $jsonPath = public_path('file/data/paragraph.json');

        if (!file_exists($jsonPath)) {
            abort(404, 'Paragraph file not found.');
        }

        $json = file_get_contents($jsonPath);
        $parsed = json_decode($json, true);

        if (!is_array($parsed) || !isset($parsed['steps'])) {
            abort(500, 'Invalid paragraph file structure.');
        }

        $steps = $parsed['steps'];

        return view('theme_1.course.learning', compact('steps'));
    })->name('course-learning');

    Route::get('/signout-course-user', [CourseUserController::class, 'signout'])->name('course-user-signout');

    Route::get('/exam', [ExamController::class, 'startExam'])->name('exam.start');
    Route::post('/exam-submit', [ExamController::class, 'submitExam'])->name('exam.submit');

    Route::get('/course/start/{id}', [CourseController::class, 'start'])
        ->middleware(['auth:course', 'auth.course_paid'])
        ->name('course.start');
});
