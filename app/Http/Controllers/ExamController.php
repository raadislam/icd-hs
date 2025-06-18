<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUserModuleExamResult;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function startExam($course, $module)
    {
        $user = auth('course')->user();

        // 1. Find course and module
        $course = \App\Models\Course::findOrFail($course);
        $description = json_decode($course->description, true);
        $modules = $description['modules'] ?? [];
        if (!isset($modules[$module])) abort(404, 'Module not found');

        // 2. Only allow if module is unlocked for this user
        $progressData = $user->moduleProgress()
            ->where('course_id', $course->id)
            ->pluck('progress', 'module_index')
            ->toArray();

        // Only unlocked if all previous modules (or itself if index 0) are 100%
        $unlocked = true;
        if ($module > 0) {
            for ($i = 0; $i < $module; $i++) {
                if (($progressData[$i] ?? 0) < 100) {
                    $unlocked = false;
                    break;
                }
            }
        }

        if (!$unlocked) {
            abort(403, 'You must complete previous modules first.');
        }

        $questions = $modules[$module]['questions'] ?? [];

        return view('theme_1.course.exam', [
            'questions' => $questions,
            'courseId' => $course->id,
            'moduleIndex' => $module,
            'courseTitle' => $course->title,
            'moduleTitle' => $modules[$module]['title'],
        ]);
    }

    public function submitExam(Request $request, $course, $module)
    {
        $courseModel = Course::findOrFail($course);
        $description = json_decode($courseModel->description, true);
        $modules = $description['modules'] ?? [];
        $questions = $modules[$module]['questions'] ?? [];

        $user = auth('course')->user();
        $courseUser = $user; // If your user is CourseUser, else fetch from CourseUser

        $userAnswers = [];
        $score = 0;
        foreach ($questions as $i => $q) {
            $ans = $request->input("q$i");
            $userAnswers[$i] = $ans;
            if ($ans === $q['answer']) $score++;
        }
        $total = count($questions);

        // Store module exam result
        CourseUserModuleExamResult::updateOrCreate(
            [
                'course_user_id' => $courseUser->id,
                'course_id' => $course,
                'module_index' => $module,
            ],
            [
                'score' => $score,
                'total' => $total,
                'answers' => $userAnswers,
            ]
        );

        // Mark module progress as 100%
        $user->moduleProgress()->updateOrCreate(
            [
                'course_id' => $course,
                'module_index' => $module,
            ],
            ['progress' => 100]
        );

        // Compute grand total and completion status
        $allResults = CourseUserModuleExamResult::where([
            ['course_user_id', '=', $courseUser->id],
            ['course_id', '=', $course]
        ])->get();

        $grandScore = $allResults->sum('score');
        $grandTotal = $allResults->sum('total');
        $moduleCount = count($modules);
        $completedModuleCount = $allResults->count();
        $allModulesComplete = ($moduleCount == $completedModuleCount);

        return view('theme_1.course.exam-review', [
            'questions' => $questions,
            'userAnswers' => $userAnswers,
            'score' => $score,
            'total' => $total,
            'courseTitle' => $courseModel->title,
            'moduleTitle' => $modules[$module]['title'],
            'grandScore' => $grandScore,
            'grandTotal' => $grandTotal,
            'allModulesComplete' => $allModulesComplete,
            'courseId' => $course,
        ]);
    }
}
