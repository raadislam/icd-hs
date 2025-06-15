@extends('theme_1.layout.course')

@section('title', 'Course Modules')

@section('style')
    <link href="{{ asset('file/css/course-module-box.css') }}" rel="stylesheet">
    <style>
        .elearn-status-tag {
            font-size: 0.85rem;
            font-weight: 600;
            padding: 6px 10px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 8px;
            white-space: nowrap;
        }

        .elearn-status-tag i {
            font-size: 0.9rem;
        }

        .elearn-status-tag.completed {
            color: #28a745;
            background-color: #e6f4ea;
            border: 1px solid #b4e2c1;
        }

        .elearn-status-tag.in-progress {
            color: #856404;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
        }
    </style>
@endsection

@section('content')

    @php
        $unlockNext = true;
    @endphp

    @foreach ($modules as $index => $module)
        @php
            $progress = $progressMap[$index] ?? 0;
            $isLocked = $index > 0 && ($progressMap[$index - 1] ?? 0) < 100;
            $cardClass = $isLocked ? 'elearn-card-disabled' : '';
        @endphp


        <div class="elearn-card-container {{ $cardClass }}" id="module-card-{{ $index }}">
            <div class="elearn-card">
                <div class="elearn-left">
                    <div class="elearn-avatar"><span>{{ $index + 1 }}</span></div>
                    <div class="elearn-text">
                        <h3 class="elearn-title">{{ strtoupper($module['title']) }}</h3>
                        <div class="elearn-date">{{ implode(', ', $module['outcomes']) }}</div>
                    </div>
                </div>
                <div class="elearn-right">
                    <div class="elearn-rating">{{ $module['hours'] }} hrs</div>

                    <div class="elearn-status-tag {{ $module['progress'] == 100 ? 'completed' : 'in-progress' }}">
                        @if ($module['progress'] == 100)
                            <i class="fas fa-check-circle"></i> Completed
                        @else
                            <i class="fas fa-spinner"></i> {{ $module['steps_done'] }} / {{ $module['total_steps'] }} steps
                        @endif
                    </div>


                    @if ($isLocked)
                        <div class="elearn-locked-note" title="Complete previous module to unlock">
                            <i class="fas fa-lock"></i> Locked
                        </div>
                    @else
                        <a href="{{ route('courses.modules.content', ['course' => $course->id, 'module' => $index]) }}"
                            class="elearn-start-btn">
                            <i class="fas fa-play"></i> Start
                        </a>
                    @endif
                </div>
            </div>
            <div class="elearn-progress-bar">
                <div id="progress-fill-{{ $index }}" class="elearn-progress-fill" style="width: 0%"></div>
            </div>
        </div>
    @endforeach
@endsection

@section('script')
    <script>
        $(function() {
            @foreach ($modules as $index => $module)
                $('#progress-fill-{{ $index }}').animate({
                    width: '{{ (int) $module['progress'] }}%'
                }, 800);
            @endforeach
        });
    </script>
@endsection
