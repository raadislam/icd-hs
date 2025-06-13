<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function start($id)
    {
        $course = Course::findOrFail($id);
        return view('theme_1.course_start', compact('course'));
    }
}
