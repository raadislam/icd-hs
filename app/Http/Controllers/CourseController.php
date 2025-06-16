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
        $course = \App\Models\Course::findOrFail($course);
        $data = json_decode($course->description, true);
        $modules = $data['modules'] ?? [];

        if (!isset($modules[$module])) {
            abort(404);
        }

        $currentModule = $modules[$module];
        $steps = $currentModule['contents'] ?? [];

        $user = auth('course')->user();
        $progress = $user->moduleProgress()
            ->where('course_id', $course->id)
            ->where('module_index', $module)
            ->value('progress') ?? 0;

        $stepCount = count($steps);
        if ($stepCount < 1) $stepCount = 1;

        $lastStep = 0;
        if ($progress >= 100) {
            $lastStep = $stepCount - 1;
        } elseif ($stepCount > 1) {
            for ($i = 1; $i < $stepCount; $i++) {
                $boundary = 90 * $i / $stepCount;
                if ($progress >= $boundary) {
                    $lastStep = $i;
                }
            }
        }

        $isComplete = $progress >= 90;

        return view('theme_1.course.contents', compact('steps', 'course', 'module', 'lastStep', 'isComplete'));
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

        // Find or create the progress row
        $user->moduleProgress()->updateOrCreate(
            [
                'course_id' => $request->course_id,
                'module_index' => $request->module_index,
            ],
            [
                'progress' => $request->progress,
            ]
        );

        return response()->json(['success' => true]);
    }
}
