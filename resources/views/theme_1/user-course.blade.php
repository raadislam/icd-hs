@extends('theme_1.layout.course')
@section('title')
    Sign In
@endsection

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">My Courses</h2>
            <a href="#" class="btn btn-primary">Create Class +</a>
        </div>

        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="#">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ongoing <span class="badge bg-danger ms-1">2</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Completed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Draft</a>
            </li>
        </ul>

        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm position-relative">
                        <img src="https://via.placeholder.com/600x300?text=Course+{{ $i }}" class="card-img-top"
                            alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Course Title {{ $i }}</h5>
                            <p class="mb-1 text-muted">Herman Wong</p>
                            <div class="d-flex justify-content-between small text-muted">
                                <span><i class="fas fa-users me-1"></i>10/{{ 20 + $i }}</span>
                                <span><i class="fas fa-calendar-alt me-1"></i>Dec {{ 10 + $i }}</span>
                                <span><i class="fas fa-map-marker-alt me-1"></i>HCMC</span>
                            </div>
                        </div>
                        @if ($i % 3 === 0)
                            <div class="position-absolute top-0 end-0 mt-2 me-2 badge bg-success">
                                ✓
                            </div>
                        @elseif ($i % 4 === 0)
                            <div class="position-absolute top-0 end-0 mt-2 me-2 badge bg-warning text-dark">
                                ⏳
                            </div>
                        @endif
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('style')
    <style>
        .card-title {
            font-weight: 600;
            font-size: 1rem;
        }

        .card-body p {
            margin-bottom: 0.25rem;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.4em 0.6em;
        }
    </style>
@endsection
