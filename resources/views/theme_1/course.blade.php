@extends('theme_1.layout.course')
@section('title')
    Courses
@endsection

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            @auth('course')
                <p>Logged in Course User: {{ Auth::guard('course')->user()->name }}</p>
            @endauth
            <a href="#" class="btn btn-primary">Create Class +</a>
        </div>

        <div class="row g-4"> <!-- Add spacing using Bootstrap gutter -->
            @foreach ($courses as $course)
                <div class="col-md-3"> <!-- 4 cards per row on desktop -->
                    <x-course-card image="{{ asset('file/img/courses/thumbnail/' . $course->thumbnail_img) }}"
                        badge="80 Hours" tag="{{ $course->status }}" title="{{ $course->title }}"
                        instructor-image="{{ asset('file/img/courses/publishers/' . $course->publisher->img) }}"
                        instructor="{{ $course->publisher->name }}" role="Organization" students="50+ Students"
                        rating="5" rating-count="10" price="5000" />
                </div>
            @endforeach

        </div>

    </div>
@endsection

@section('style')
    <link href="{{ asset('file/css/course-card.css') }}" rel="stylesheet">
@endsection

@push('scripts')
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
@endpush
