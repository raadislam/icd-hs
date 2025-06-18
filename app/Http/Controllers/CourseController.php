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
    public function showModules($courseId)
    {
        // Get course and module data
        $course = \App\Models\Course::findOrFail($courseId);
        $user = auth('course')->user();

        $data = json_decode($course->description, true);
        $rawModules = $data['modules'] ?? [];
        $moduleCount = count($rawModules);

        // Fetch all progress for this user & course
        $progressData = $user->moduleProgress()
            ->where('course_id', $course->id)
            ->pluck('progress', 'module_index')
            ->toArray();

        // Fetch exam results for grand total
        $examResults = \App\Models\CourseUserModuleExamResult::where([
            ['course_user_id', '=', $user->id],
            ['course_id', '=', $course->id]
        ])->get();
        $grandScore = $examResults->sum('score');
        $grandTotal = $examResults->sum('total');

        // Check if all modules complete
        $completedModuleCount = 0;
        $modules = [];
        foreach ($rawModules as $i => $module) {
            $progress = $progressData[$i] ?? 0;
            $modules[] = array_merge($module, [
                'progress' => $progress,
                'steps_done' => $progress == 100 ? $module['total_steps'] ?? 0 : 0, // Or compute steps as needed
                'total_steps' => $module['total_steps'] ?? (isset($module['contents']) ? count($module['contents']) : 0),
            ]);
            if ($progress == 100) $completedModuleCount++;
        }
        $allModulesComplete = ($completedModuleCount === $moduleCount);

        // Certificate request status
        $certReq = \App\Models\CertificateRequest::where('course_user_id', $user->id)
            ->where('course_id', $course->id)
            ->latest('id')->first();

        $certificateRequested = $certReq && $certReq->status === 'success';
        $certificateStatus = $certReq ? $certReq->status : null;

        return view('theme_1.course.module', [
            'course' => $course,
            'modules' => $modules,
            'grandScore' => $grandScore,
            'grandTotal' => $grandTotal,
            'allModulesComplete' => $allModulesComplete,
            'certificateRequested' => $certificateRequested,
            'certificateStatus' => $certificateStatus,
        ]);
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
