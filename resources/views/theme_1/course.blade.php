@extends('theme_1.layout.course')
@section('title')
    Courses
@endsection


@section('content')
    @php
        $user = auth('course')->user();
    @endphp

    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            @auth('course')
                <p>Logged in Course User: {{ Auth::guard('course')->user()->name }}</p>
            @endauth
            <a href="#" class="btn btn-primary">Create Class +</a>
        </div>


        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>Error:</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-4"> <!-- Add spacing using Bootstrap gutter -->
            @foreach ($courses as $course)
                @php
                    $hasPaid = $user
                        ? $user
                            ->paidCourses()
                            ->where('course_id', $course->id)
                            ->where('payment_status', 'success')
                            ->exists()
                        : false;
                @endphp

                <div class="col-md-3"> <!-- 4 cards per row on desktop -->
                    <x-course-card :has-paid="$hasPaid" :id="$course->id" :price="$course->price" :title="$course->title" :image="asset('file/img/courses/thumbnail/' . $course->thumbnail_img)"
                        :instructor="$course->publisher->name" :instructor-image="asset('file/img/courses/publishers/' . $course->publisher->img)" :role="'Organization'" :students="'50+ Students'" :rating="5"
                        :rating-count="10" :badge="'80 Hours'" :tag="$course->status" />
                </div>
            @endforeach

        </div>

    </div>
@endsection

@section('style')
    <link href="{{ asset('file/css/course-card.css') }}" rel="stylesheet">
@endsection
