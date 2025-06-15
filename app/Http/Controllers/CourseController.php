<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\CourseUser;
use App\Models\CourseUserModuleProgress;
use App\Models\CourseUserPayment;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showModules($id)
    {
        $course = Course::with('publisher')->findOrFail($id);
        $data = json_decode($course->description, true);
        $rawModules = $data['modules'] ?? [];

        $user = auth('course')->user();

        $progressData = $user->moduleProgress()
            ->where('course_id', $course->id)
            ->pluck('progress', 'module_index')
            ->toArray();

        $modules = [];

        foreach ($rawModules as $index => $module) {
            $contents = $module['contents'] ?? [];
            $stepsCount = count($contents);
            $storedProgress = $progressData[$index] ?? 0;
            $stepsDone = round(($storedProgress / 100) * $stepsCount);

            $modules[] = [
                'title' => $module['title'],
                'outcomes' => $module['outcomes'],
                'hours' => $module['hours'],
                'progress' => $storedProgress,
                'steps_done' => $stepsDone,
                'total_steps' => $stepsCount,
            ];
        }

        return view('theme_1.course.module', compact('course', 'modules'));
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

        $user = auth('course')->user();

        // Get user's saved progress for this module
        $progress = $user->moduleProgress()
            ->where('course_id', $course->id)
            ->where('module_index', $module)
            ->value('progress') ?? 0;

        // Estimate step index (e.g. 45% of 5 steps = index 2)
        $lastStep = floor(($progress / 100) * count($steps));

        return view('theme_1.course.contents', compact('steps', 'course', 'module', 'lastStep'));
    }


    public function updateModuleProgress(Request $request)
    {
        $request->validate([
            'course_id' => 'required|integer',
            'module_index' => 'required|integer',
            'progress' => 'required|integer|min:0|max:100',
        ]);

        $user = auth('course')->user();

        if (!$user) {
            Log::error('❌ Unauthenticated course user.');
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        Log::info('✅ Progress update request received:', $request->all());

        // Save or update the module progress using the relationship
        $user->moduleProgress()->updateOrCreate(
            [
                'course_id' => $request->course_id,
                'module_index' => $request->module_index,
            ],
            [
                'progress' => $request->progress,
            ]
        );

        Log::info("✅ Progress updated for CourseUser ID: {$user->id}");

        return response()->json(['success' => true]);
    }
}
