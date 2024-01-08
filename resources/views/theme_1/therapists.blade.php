@extends('theme_1.layout.layout')
@section('title')
    Our Therapists
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <div class="container py-5">
        <div class="row pt-3">
            @foreach ($therapists as $therapist)
                <div class="col-lg-4 col-md-6 pb-2">
                    <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                        <div class="card-body p-3 z-index-1 text-center">
                            <a href="{{ route('viewTherapist', $therapist->id) }}" class="d-block text-center bg-color-grey">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('images') }}/therapist/{{ $therapist->img }}">
                            </a>
                            <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                                <span class="text-dark">
                                    {{ $therapist->name }}
                                </span>
                            </strong>
                            <span
                                class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">{{ $therapist->qualification }}</span>
                            <p class="pt-2"> {{ $therapist->designation }}</p>
                            <div>
                                <a href="{{ route('appointment.create', $therapist->id) }}"
                                    class="btn btn-primary bg-hover-light  text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-2  text-2">
                                    Make An Appointment
                                </a>
                            </div>
                            <a href="{{ route('viewTherapist', $therapist->id) }}"
                                class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View
                                More +</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
