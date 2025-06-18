@extends('theme_1.layout.course')

@section('title', 'Course Contents')

@section('style')
    <link href="{{ asset('file/css/course-learnings.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="learning-outer">

        {{-- Stepper --}}
        <div class="learning-stepper">
            @for ($i = 0; $i < count($steps); $i++)
                <div class="learning-step {{ $i == $lastStep ? 'active' : '' }} {{ $i < $lastStep ? 'done' : '' }}">
                    <span>{{ $i + 1 }}</span>
                </div>
                @if ($i < count($steps) - 1)
                    <div class="learning-step-connector"></div>
                @endif
            @endfor
        </div>

        <div class="learning-card">
            <div class="learning-header">
                Step <span id="step-number">{{ $lastStep + 1 }}</span> / {{ count($steps) }}
            </div>
            <div class="learning-content" id="typing-text">Loading...</div>
            <div class="learning-footer">
                <button class="learning-prev-btn" id="prevBtn" style="display: none;">&laquo; Previous</button>
                <div>
                    <button class="learning-next-btn" id="nextBtn">Next &raquo;</button>
                </div>
            </div>
            <div class="learning-progress-bar">
                <div class="learning-progress-fill" id="learningProgressBar" style="width: 0%"></div>
            </div>
            @if ($isComplete)
                <div class="learning-complete-banner">
                    🎉 All steps complete! You can now take the exam.
                </div>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script>
        const steps = @json($steps);
        const courseId = {{ $course->id }};
        const moduleIndex = {{ $module }};
        const isComplete = @json($isComplete);
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
            const contentEl = document.getElementById('typing-text');
            const stepEl = document.getElementById('step-number');
            const progressEl = document.getElementById('learningProgressBar');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            contentEl.innerHTML = steps[index];
            stepEl.innerText = index + 1;

            const isFirst = index === 0;
            const stepCount = steps.length;
            const isLast = (index + 1) === stepCount;

            // === YOUR MATH ===
            let progress = 0;
            if (stepCount > 1) {
                progress = Math.round(90 * (index + 1) / stepCount);

                console.log(Math.round(90 * (index + 1) / stepCount), "in:", index, "step:", stepCount)
            }
            progressEl.style.width = isLast && isComplete ? '100%' : `${progress}%`;
            console.log("islast:", isLast, "isComp", isComplete)


            if (!isComplete) updateProgress(progress);

            prevBtn.style.display = isFirst ? 'none' : 'inline-block';
            nextBtn.disabled = false;

            if (isLast) {
                nextBtn.innerText = 'Give Exam';
                nextBtn.onclick = () => {
                    window.location.href = "{{ route('exam.start', ['course' => $course->id, 'module' => $module]) }}";
                };
            } else {
                nextBtn.innerText = 'Next »';
                nextBtn.onclick = () => {
                    currentStep++;
                    renderStep(currentStep);
                };
            }

            // Update stepper UI visually for active/done
            document.querySelectorAll('.learning-step').forEach((el, idx) => {
                el.classList.toggle('active', idx === index);
                el.classList.toggle('done', idx < index);
            });
        }

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                renderStep(currentStep);
            }
        });

        // Initial load
        renderStep(currentStep);
    </script>
@endsection
