@extends('theme_1.layout.course')

@section('title', 'Course Modules')

@section('style')
    <link href="{{ asset('file/css/course-module-box.css') }}" rel="stylesheet">
@endsection

@section('content')

    @php
        $unlockNext = true;
    @endphp

    @foreach ($modules as $index => $module)
        @php
            $isLocked = !$unlockNext;
            $unlockNext = $module['progress'] == 100;

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
