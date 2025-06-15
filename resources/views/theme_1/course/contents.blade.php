@extends('theme_1.layout.course')
@section('title')
    Course Contents
@endsection

@section('script')
    <script>
        const steps = @json($steps);
        let currentStep = 0;

        function typeText(text, elementId, speed = 30) {
            let i = 0;
            const el = document.getElementById(elementId);
            el.innerHTML = "";

            function type() {
                if (i < text.length) {
                    el.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        function showStep(index) {
            if (index < steps.length) {
                document.getElementById('typing-text').innerHTML = steps[index];
                document.getElementById('step-number').innerText = index + 1;
            }

            if (index === steps.length - 1) {
                document.getElementById('nextBtn').innerText = 'Give Exam';
                document.getElementById('nextBtn').onclick = () => {
                    window.location.href = "{{ route('exam.start') }}";
                };
            }
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Initial Load
        showStep(currentStep);
    </script>
@endsection

@section('style')
    <link href="{{ asset('file/css/course-learnings.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="learning-wrapper">
        <div class="learning-header"><span>📘</span> Step <span id="step-number">1</span> / 3</div>
        <div class="learning-content" id="typing-text">Loading...</div>
        <div class="learning-footer">
            <button class="learning-next-btn" id="nextBtn">Next &raquo;</button>
        </div>
    </div>
@endsection
