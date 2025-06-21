@extends('theme_1.layout.course')

@section('title', 'Course Modules')

@section('style')
    <link href="{{ asset('file/css/course-module-box.css') }}" rel="stylesheet">
    <style>
        .certificate-score-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 35px 0 36px 0;
            gap: 16px;
        }

        .certificate-score-card {
            background: linear-gradient(90deg, #00c3ff 0, #77e0d3 100%);
            color: #fff;
            padding: 20px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 18px #007c8c21;
            font-size: 1.42rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 14px;
            letter-spacing: 1px;
        }

        .score-icon {
            font-size: 2.1rem;
            margin-right: 12px;
        }

        .score-label {
            font-size: 1.13rem;
            font-weight: 500;
            margin-right: 8px;
        }

        .score-value {
            font-size: 1.37rem;
            font-weight: 900;
            margin-left: 5px;
        }

        .btn-certificate {
            background: linear-gradient(90deg, #28a745 0, #28cdb5 100%);
            color: #fff;
            padding: 14px 35px;
            border-radius: 12px;
            font-size: 1.17rem;
            font-weight: 700;
            border: none;
            cursor: pointer;
            box-shadow: 0 2px 8px #3ecb8e1a;
            transition: background 0.22s, transform 0.18s;
        }

        .btn-certificate:hover {
            background: linear-gradient(90deg, #20b35c 0, #17a39a 100%);
            transform: translateY(-2px) scale(1.04);
        }

        .cert-badge {
            padding: 10px 28px;
            font-size: 1.13rem;
            border-radius: 20px;
            display: inline-block;
            margin-top: 7px;
        }
    </style>
@endsection

@section('content')
    <div class="certificate-score-wrapper">
        <div class="certificate-score-card">
            <span class="score-icon"><i class="fas fa-graduation-cap"></i></span>
            <span class="score-label">Total Score:</span>
            <span class="score-value">{{ $grandScore }} / {{ $grandTotal }}</span>
        </div>

        @if (!$certificateRequested)
            <form action="{{ route('certificate.request', ['course' => $course->id]) }}" method="POST" class="cert-form">
                @csrf
                <button class="btn-certificate">
                    <i class="fas fa-certificate"></i> Request Certificate
                </button>
            </form>
        @elseif($certificateStatus == 'pending')
            <span class="badge badge-warning cert-badge">Certificate Pending</span>
        @elseif($certificateStatus == 'failed')
            <span class="badge badge-danger cert-badge">Certificate Failed (will retry)</span>
        @else
            <span class="badge badge-success cert-badge">Certificate Sent</span>
        @endif
    </div>


    @foreach ($modules as $index => $module)
        @php
            // First module always unlocked. Others: locked if previous progress < 100.
            $isLocked = $index > 0 && ($modules[$index - 1]['progress'] ?? 0) < 100;
            $cardClass = $isLocked ? 'elearn-card-disabled' : '';
        @endphp

        <div class="elearn-card-container {{ $cardClass }}" id="module-card-{{ $index }}">
            <div class="elearn-card">
                <div class="elearn-left">
                    <div class="elearn-avatar"><span>{{ $index + 1 }}</span></div>
                    <div class="elearn-text">
                        <h3 class="elearn-title">
                            {{ strtoupper($module['title']) }}
                        </h3>
                        <div class="elearn-date">{{ implode(', ', $module['outcomes']) }}</div>
                    </div>
                </div>
                <div class="elearn-right">
                    <div class="elearn-rating">{{ $module['hours'] }} hrs</div>

                    <div class="elearn-status-tag {{ $module['progress'] == 100 ? 'completed' : 'in-progress' }}">
                        @if ($module['progress'] == 100)
                            <i class="fas fa-check-circle"></i> Completed
                        @else
                            <i class="fas fa-spinner"></i> {{ $module['steps_done'] }} / {{ $module['total_steps'] }}
                            steps
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
