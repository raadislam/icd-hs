@extends('theme_1.layout.course')

@section('title', 'Course Contents')

@section('style')
<link href="{{ asset('file/css/course-learnings.css') }}" rel="stylesheet">
<style>
.learning-outer {
    max-width: 720px;
    margin: 40px auto;
    padding: 30px 0;
}
.learning-stepper {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    gap: 0;
}
.learning-step {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #e0e0e0;
    color: #888;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    position: relative;
    transition: all 0.3s;
}
.learning-step.active {
    background: #007bff;
    color: #fff;
    border: 2px solid #007bff;
    box-shadow: 0 0 8px #007bff55;
    z-index: 1;
}
.learning-step.done {
    background: #28a745;
    color: #fff;
    border: 2px solid #28a745;
}
.learning-step-connector {
    width: 48px;
    height: 4px;
    background: #e0e0e0;
    margin: 0 -2px;
}
.learning-step.active ~ .learning-step-connector,
.learning-step.done ~ .learning-step-connector {
    background: #007bff;
}
.learning-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 2px 16px rgba(0,0,0,0.10);
    padding: 32px 28px 24px 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    position: relative;
}
.learning-header {
    font-size: 1.25rem;
    font-weight: 700;
    color: #444;
    margin-bottom: 10px;
}
.learning-content {
    font-size: 1.09rem;
    color: #353535;
    min-height: 120px;
    line-height: 1.7;
}
.learning-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    gap: 12px;
}
.learning-prev-btn,
.learning-next-btn {
    padding: 10px 20px;
    border-radius: 7px;
    border: none;
    font-size: 1rem;
    font-weight: 600;
    transition: background 0.25s;
}
.learning-prev-btn {
    background: #6c757d;
    color: #fff;
}
.learning-prev-btn:hover {
    background: #545b62;
}
.learning-next-btn {
    background: #007bff;
    color: #fff;
}
.learning-next-btn:disabled {
    background: #aaa;
    cursor: not-allowed;
}
.learning-next-btn:hover:enabled {
    background: #0056b3;
}
.learning-progress-bar {
    width: 100%;
    height: 8px;
    background: #f3f3f3;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 22px;
}
.learning-progress-fill {
    height: 100%;
    background: linear-gradient(90deg,#007bff,#00c6ff);
    width: 0%;
    transition: width 0.45s cubic-bezier(.4,2,.5,1);
}
.learning-complete-banner {
    background: #e7ffe7;
    color: #28a745;
    text-align: center;
    font-weight: 700;
    border-radius: 8px;
    padding: 10px;
    margin-top: 12px;
    font-size: 1rem;
}
</style>
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
            if (isComplete) {
                nextBtn.innerText = 'Give Exam';
                nextBtn.onclick = () => {
                    updateProgress(100);
                    window.location.href = "{{ route('exam.start') }}";
                };
            } else {
                nextBtn.innerText = 'Complete All Steps First';
                nextBtn.disabled = true;
            }
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
