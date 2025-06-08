<div class="elearn-card-container">
    <div class="elearn-card">
        <div class="elearn-left">
            <div class="elearn-avatar">
                <span>{{ $id + 1 }}</span>
            </div>
            <div class="elearn-text">
                <h3 class="elearn-title">{{ $title }}</h3>

                <div class="elearn-date">
                    {{ implode(', ', $outcomes) }}
                </div>
            </div>
        </div>
        <div class="elearn-right">
            <div class="elearn-rating">
                <span> {{ $hours }} hrs</span>
            </div>
            <button class="elearn-start-btn">
                <i class="fas fa-play"></i> Start
            </button>
        </div>
    </div>
    <div class="elearn-progress-bar">
        <div id="progress-fill-{{ $id }}" class="elearn-progress-fill" style="width: 0%"></div>
    </div>
</div>
