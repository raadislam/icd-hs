@extends('theme_1.layout.course')

@section('title')
    Exam – {{ $moduleTitle }} | {{ $courseTitle }}
@endsection

@section('style')
    <link href="{{ asset('file/css/exam.css') }}" rel="stylesheet">
    <style>
        .exam-meta {
            font-size: 1.08rem;
            margin-bottom: 10px;
            color: #447;
        }

        .question-block {
            background: #f7f9fb;
            border-radius: 12px;
            margin: 18px 0;
            padding: 20px;
        }

        .exam-submit-btn {
            background: #007bff;
            color: #fff;
            border-radius: 8px;
            border: none;
            padding: 12px 24px;
            font-size: 1.09rem;
            margin-top: 22px;
        }

        .exam-submit-btn:hover {
            background: #0056b3;
        }

        .alert.alert-warning {
            color: #856404;
            background: #fff3cd;
            border: 1px solid #ffeeba;
            border-radius: 6px;
            padding: 16px;
        }
    </style>
@endsection

@push('scripts')
    <script>
        const duration = 15 * 60;
        const display = document.getElementById('timer-display');
        const form = document.getElementById('exam-form');
        const submitBtn = document.getElementById('submit-btn');
        const EXAM_KEY = 'exam_start_time';

        let startTime = localStorage.getItem(EXAM_KEY);
        if (!startTime) {
            startTime = Date.now();
            localStorage.setItem(EXAM_KEY, startTime);
        } else {
            startTime = parseInt(startTime);
        }

        function updateTimer() {
            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            const remaining = duration - elapsed;

            if (remaining <= 0) {
                display.textContent = "00:00";
                localStorage.removeItem(EXAM_KEY);
                if (form && !form.submitted) {
                    form.submitted = true;
                    form.submit();
                }
                return;
            }

            const mins = Math.floor(remaining / 60).toString().padStart(2, '0');
            const secs = (remaining % 60).toString().padStart(2, '0');
            display.textContent = `${mins}:${secs}`;
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    </script>
@endpush


@section('content')
    <div class="exam-container">
        <div class="exam-header">
            <h2 class="exam-title">Exam</h2>
            <div class="exam-meta">
                <strong>Course:</strong> {{ $courseTitle }}<br>
                <strong>Module:</strong> {{ $moduleTitle }}
            </div>
            <div id="exam-timer" class="exam-timer">
                <span class="timer-badge">
                    <i class="fas fa-clock"></i>
                    <span id="timer-display"></span>
                </span>
            </div>

        </div>

        @if (empty($questions))
            <div class="alert alert-warning mt-4">
                <strong>No exam questions found for this module.</strong>
            </div>
        @else
            <form method="POST" action="{{ route('exam.submit', ['course' => $courseId, 'module' => $moduleIndex]) }}"
                id="exam-form">
                @csrf
                <input type="hidden" name="course_id" value="{{ $courseId }}">
                <input type="hidden" name="module_index" value="{{ $moduleIndex }}">

                @foreach ($questions as $index => $question)
                    <div class="question-block">
                        <span class="question-badge">
                            Q{{ $index + 1 }} / {{ count($questions) }}
                        </span>
                        <p><strong>{{ $question['question'] }}</strong></p>
                        @foreach ($question['options'] as $option)
                            <label style="display:block;">
                                <input type="radio" name="q{{ $index }}" value="{{ $option }}">
                                {{ $option }}
                            </label>
                        @endforeach
                    </div>
                @endforeach
                <button type="submit" class="exam-submit-btn" id="submit-btn">Finish Exam</button>
            </form>
        @endif
    </div>
@endsection
