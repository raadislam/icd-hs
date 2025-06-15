<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\CourseUser;
use App\Models\CourseUserPayment;

class CourseController extends Controller
{
    public function showModules($id)
    {
        $course = Course::findOrFail($id);

        $user = auth('course')->user();

        $hasPaid = $user->payments()
            ->where('course_id', $course->id)
            ->where('payment_status', 'success')
            ->exists();

        if (!$hasPaid) {
            return redirect()->route('user-signin')->with('error', 'Access denied. Please complete payment.');
        }

        $data = json_decode($course->description, true);
        $modules = $data['modules'] ?? [];
        $totalDuration = $data['total_duration'] ?? 'Unknown';

        return view('theme_1.course.module', compact('course', 'modules', 'totalDuration'));
    }
    public function showModuleContent($course, $module)
    {
        $course = Course::findOrFail($course);
        $data = json_decode($course->description, true);
        $modules = $data['modules'] ?? [];
        if (!isset($modules[$module])) {
            abort(404);
        }

        $currentModule = $modules[$module];
        $steps = $currentModule['contents'] ?? [];

        return view('theme_1.course.contents', compact('course', 'currentModule', 'steps', 'module'));
    }
}
