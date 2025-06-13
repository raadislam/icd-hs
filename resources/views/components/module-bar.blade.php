@props(['title', 'outcomes', 'hours', 'progress', 'id', 'locked' => false])

@php
    $cardClass = $locked ? 'elearn-card-disabled' : '';
    $btnClass = $locked ? 'elearn-btn-disabled' : '';
    $btnAttr = $locked ? 'disabled' : '';
@endphp

<div class="elearn-card-container {{ $cardClass }}" id="module-card-{{ $id }}">
    <div class="elearn-card">
        <div class="elearn-left">
            <div class="elearn-avatar"><span>{{ $id + 1 }}</span></div>
            <div class="elearn-text">
                <h3 class="elearn-title">{{ $title }}</h3>
                <div class="elearn-date">{{ implode(', ', $outcomes) }}</div>
            </div>
        </div>
        <div class="elearn-right">
            <div class="elearn-rating">{{ $hours }} hrs</div>
            @if ($isLocked)
                <div class="elearn-locked-note" title="Complete previous module to unlock">
                    <i class="fas fa-lock"></i> Locked
                </div>
            @else
                <button class="elearn-start-btn" data-module="{{ $index }}">
                    <i class="fas fa-play"></i> Start
                </button>
            @endif
        </div>
    </div>
    <div class="elearn-progress-bar">
        <div id="progress-fill-{{ $id }}" class="elearn-progress-fill" style="width: 0%"></div>
    </div>
</div>
