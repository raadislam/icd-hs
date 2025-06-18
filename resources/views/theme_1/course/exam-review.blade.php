@extends('theme_1.layout.course')
@section('title')
    Exam Review – {{ $moduleTitle }} | {{ $courseTitle }}
@endsection

@section('content')
    <div class="exam-review-container">
        <h2>Exam Review</h2>
        <div class="score-box">
            <span class="score-badge">Your Score: {{ $score }} / {{ $total }}</span>
        </div>

        @foreach ($questions as $index => $question)
            <div class="question-block">
                <span class="question-badge">Q{{ $index + 1 }}</span>
                <p><strong>{{ $question['question'] }}</strong></p>
                @foreach ($question['options'] as $option)
                    <label style="display:block;">
                        <input type="radio" disabled {{ $userAnswers[$index] === $option ? 'checked' : '' }}>
                        {{ $option }}
                        @if ($question['answer'] === $option)
                            <span style="color: green; font-weight: bold;">(Correct)</span>
                        @elseif ($userAnswers[$index] === $option)
                            <span style="color: #d81b60; font-weight: bold;">(Your Answer)</span>
                        @endif
                    </label>
                @endforeach
            </div>
        @endforeach

        @if ($allModulesComplete && $grandTotal > 0)
            <div class="exam-grand-score" style="margin: 30px 0 24px 0;">
                <span class="badge badge-info" style="font-size:1.25rem;padding:16px 36px;">
                    🎓 Total Course Score: {{ $grandScore }} / {{ $grandTotal }}
                </span>
            </div>
            @if ($grandScore / $grandTotal >= 0.8)
                <a href="{{ route('certificate.download', ['course' => $courseId]) }}" class="btn btn-success mt-3">
                    <i class="fas fa-certificate"></i> Download Certificate
                </a>
            @endif
        @endif
    </div>
@endsection

@section('style')
    <style>
        .score-box {
            margin: 18px 0 28px 0;
        }

        .score-badge {
            background: #e3f3ff;
            color: #0056b3;
            border-radius: 18px;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 10px 24px;
            display: inline-block;
        }

        .question-badge {
            display: inline-block;
            background: #e9fbe8;
            color: #169638;
            border-radius: 12px;
            font-weight: bold;
            padding: 4px 14px;
            margin-bottom: 5px;
            font-size: 1.07rem;
            box-shadow: 0 1px 4px #1aaf3c1a;
        }

        .exam-grand-score .badge-info {
            background: #f1f5fb;
            color: #2176b5;
            border-radius: 15px;
            box-shadow: 0 2px 12px #4886c342;
        }
    </style>
@endsection
