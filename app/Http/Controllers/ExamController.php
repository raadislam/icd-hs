<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExamController extends Controller
{
    public function startExam()
    {
        $file = public_path('file/data/que_ans.json');
        $questions = json_decode(file_get_contents($file), true);

        return view('theme_1.course.exam', compact('questions'));
    }

    public function submitExam(Request $request)
    {
        $questions = json_decode(file_get_contents(public_path('file/data/que_ans.json')), true);
        $score = 0;
        $results = [];

        foreach ($questions as $index => $question) {
            $userAnswer = $request->input("q$index", null); // null if unanswered
            $correctAnswer = $question['answer'];

            $isCorrect = $userAnswer === $correctAnswer;
            if ($isCorrect) {
                $score++;
            }

            $results[] = [
                'question' => $question['question'],
                'your_answer' => $userAnswer ?? 'No Answer',
                'correct_answer' => $correctAnswer,
                'result' => $isCorrect ? 'Correct' : 'Wrong'
            ];
        }

        // Save to file (optional)
        file_put_contents(public_path('file/data/results.json'), json_encode([
            'submitted_at' => now()->toDateTimeString(),
            'score' => $score,
            'total' => count($questions),
            'details' => $results
        ], JSON_PRETTY_PRINT));

        // Return to same page with results
        return view('theme_1.course.exam', [
            'questions' => $questions,
            'results' => $results,
            'score' => $score,
            'total' => count($questions),
            'request' => $request
        ]);
    }
}
