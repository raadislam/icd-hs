@extends('theme_1.layout.course')

@section('title', 'Course Contents')

@section('style')
    <link href="{{ asset('file/css/course-learnings.css') }}" rel="stylesheet">
    <style>
        .learning-progress-bar {
            width: 100%;
            height: 8px;
            background-color: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .learning-progress-fill {
            height: 100%;
            background-color: #28a745;
            width: 0%;
            transition: width 0.5s ease;
        }

        .learning-skip-btn {
            background: transparent;
            border: none;
            color: #007bff;
            cursor: pointer;
            margin-top: 0.5rem;
            font-size: 0.9rem;
        }

        .learning-skip-btn:hover {
            text-decoration: underline;
        }

        .learning-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .learning-prev-btn {
            background-color: #6c757d;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            cursor: pointer;
        }

        .learning-prev-btn:hover {
            background-color: #5a6268;
        }
    </style>
@endsection

@section('content')
    <div class="learning-wrapper">
        <div class="learning-header"><span>📘</span> Step <span id="step-number">1</span> / {{ count($steps) }}</div>
        <div class="learning-progress-bar">
            <div class="learning-progress-fill" id="learningProgressBar" style="width: 0%"></div>
        </div>
        <div class="learning-content" id="typing-text">Loading...</div>
        <div class="learning-footer">
            <button class="learning-prev-btn" id="prevBtn" style="display: none;">&laquo; Previous</button>
            <div>
                <button class="learning-next-btn" id="nextBtn">Next &raquo;</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const steps = @json($steps);
        const courseId = {{ $course->id }};
        const moduleIndex = {{ $module }};
        let currentStep = {{ $lastStep ?? 0 }};

        async function updateProgress(percent) {
            await fetch("{{ route('module.progress.update') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    course_id: courseId,
                    module_index: moduleIndex,
                    progress: percent
                })
            });
        }

        function renderStep(index) {
            const stepEl = document.getElementById('step-number');
            const contentEl = document.getElementById('typing-text');
            const progressEl = document.getElementById('learningProgressBar');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            stepEl.innerText = index + 1;
            const isLast = index === steps.length - 1;
            const isFirst = index === 0;
            const progress = Math.floor((index / (steps.length - 1)) * 90);
            progressEl.style.width = `${progress}%`;

            if (!isLast) updateProgress(progress);

            prevBtn.style.display = isFirst ? 'none' : 'inline-block';
            nextBtn.innerText = isLast ? 'Give Exam' : 'Next »';

            contentEl.innerHTML = steps[index];
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                renderStep(currentStep);
            } else {
                window.location.href = "{{ route('exam.start') }}";
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                renderStep(currentStep);
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            let savedStep = localStorage.getItem(`course_${courseId}_module_${moduleIndex}_step`);
            if (savedStep !== null) currentStep = parseInt(savedStep);
            renderStep(currentStep);
        });

        window.addEventListener('beforeunload', () => {
            localStorage.setItem(`course_${courseId}_module_${moduleIndex}_step`, currentStep);
        });
    </script>
@endsection
