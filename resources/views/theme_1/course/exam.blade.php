@extends('theme_1.layout.course')
@section('title')
    Course Learnings
@endsection

@section('content')
    <div class="exam-container">

        <div class="exam-header">
            <h2 class="exam-title">Final Exam</h2>
            <div id="exam-timer" class="exam-timer">Time Left: <span id="timer-display"></span></div>
        </div>

        @if (isset($results))
            <div class="exam-score-header">
                <h2>Your Score: {{ $score }} / {{ $total }}</h2>
            </div>
        @endif

        <form method="POST" action="{{ route('exam.submit') }}" id="exam-form">
            @csrf
            @foreach ($questions as $index => $question)
                <div class="question-block">
                    <p><strong>{{ $index + 1 }}. {{ $question['question'] }}</strong></p>
                    @foreach ($question['options'] as $option)
                        @php
                            $userAnswer = $userAnswer = request()->input("q$index") ?? null;
                            $isCorrect = isset($results) && $question['answer'] === $option;
                        @endphp

                        <label style="display:block;">
                            <input type="radio" name="q{{ $index }}" value="{{ $option }}"
                                {{ isset($results) ? 'disabled' : '' }}
                                {{ isset($results) && $userAnswer === $option ? 'checked' : '' }}>
                            {{ $option }}

                            @if (isset($results) && $isCorrect)
                                <span style="color: green;">(Correct)</span>
                            @endif
                        </label>
                    @endforeach
                </div>
            @endforeach
            @if (!isset($results))
                <button type="submit" class="exam-submit-btn" id="submit-btn">Finish Exam</button>
            @endif
        </form>

    </div>
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

@section('style')
    <link href="{{ asset('file/css/exam.css') }}" rel="stylesheet">
@endsection
