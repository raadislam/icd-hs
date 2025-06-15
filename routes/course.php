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

    Route::get('/course/{id}/modules', [CourseController::class, 'showModules'])->name('course.modules');

    Route::get('/signout-course-user', [CourseUserController::class, 'signout'])->name('course-user-signout');

    Route::get('/exam', [ExamController::class, 'startExam'])->name('exam.start');
    Route::post('/exam-submit', [ExamController::class, 'submitExam'])->name('exam.submit');

    Route::middleware(['auth.course_paid'])->group(function () {
        Route::get('/course/start/{id}', [CourseController::class, 'start'])->name('course.start');
        Route::get('/courses/{course}/modules/{module}/content', [CourseController::class, 'showModuleContent'])->name('courses.modules.content');
    });
    Route::post('/module/progress', function () {
        \Log::info('DEBUG: Route hit!');
        return response()->json(['debug' => true]);
    });

    Route::post('/module/progress', [CourseController::class, 'updateModuleProgress'])
        ->name('module.progress.update');
});
