@props(['hasPaid' => false])
<div class="course-card">
    <div class="course-card-image-wrapper">
        <img src="{{ $image }}" alt="Course Image" class="course-card-image">
    </div>
    <div class="course-card-body">
        <div class="course-card-badge">
            <span><i class="fas fa-clock"></i> {{ $badge }}</span>
            <span class="course-card-tag">{{ $tag }}</span>
        </div>
        <h3 class="course-card-title">{{ $title }}</h3>
        <hr>
        <div class="course-card-instructor">
            <img src="{{ $instructorImage }}" alt="{{ $instructor }}">
            <div class="course-card-instructor-info">
                <div class="course-card-instructor-name">{{ $instructor }}</div>
                <div class="course-card-instructor-role">{{ $role }}</div>
            </div>

        </div>
        <div class="course-card-stars">
            @for ($i = 0; $i < $rating; $i++)
                <i class="fas fa-star"></i>
            @endfor
            ({{ $ratingCount }})
            {{-- <div class="course-card-students">{{ $students }}</div> --}}
        </div>
    </div>
    <div class="course-card-footer">
        <div class='row '>
            <div class='col-lg-6'>
                <h2 class="text-5-6 course-card-title">TK {{ $price }}</h2>
            </div>
            <div class='col-lg-6'>

                @if ($hasPaid)
                    <a style="width: 100%" href="{{ route('course.start', $id) }}"
                        class="btn btn-success rounded">Start</a>
                @else
                    <a style="width: 100%" href="{{ route('amarpaybuynow', ['course_id' => $id]) }}"
                        class="btn btn-primary">Buy Now</a>
                @endif

            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">BKash Transaction Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group col">
                    <label class="form-label mb-1 text-2">Bkash Trxid</label>
                    <input type="text" value="" data-msg-required="Please enter the bkash Trxid."
                        maxlength="100" class="form-control text-3 h-auto py-2" name="bkash" required="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
