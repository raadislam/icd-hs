<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
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
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contactus');
Route::get('/training', [FrontendController::class, 'training'])->name('training');
Route::get('/certification', [FrontendController::class, 'certification'])->name('certification');
Route::get('/after-school-program', [FrontendController::class, 'afterSchoolProgram'])->name('afterSchoolProgram');
Route::get('/student-services', [FrontendController::class, 'studentServices'])->name('studentServices');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::post('/contact-us-send', [FrontendController::class, 'contactusSend'])->name('contactusSend');
Route::resource('events', EventController::class);


require __DIR__ . '/auth.php';
