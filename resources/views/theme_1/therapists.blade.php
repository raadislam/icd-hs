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
        @foreach ($therapists as $therapist)
            <div class="row" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                <div class="col-lg-4 pb-4 pb-lg-0">
                    <div class="card border-0 border-radius-0 box-shadow-1 mb-4">
                        <div class="card-body p-3 z-index-1 text-center">

                            <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('images') }}/therapist/{{ $therapist->img }}"> </a>

                            <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                                <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                    {{ $therapist->name }}
                                </a>
                            </strong>

                            <span
                                class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">
                                {{ $therapist->designation }}
                            </span>

                            <a href="{{ route('appointment.create', $therapist->id) }}"
                                class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2">
                                Make An Appointment
                            </a>
                        </div>
                    </div>
                    <hr class="mt-4 mb-5">
                </div>
                <div class="col-lg-8">

                    <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2">About Me</h3>
                    <p class="mb-4">{{ $therapist->about }}</p>

                    <h3 class="text-color-quaternary font-weight-bold text-capitalize mt-2 mb-2">Contact Info
                    </h3>

                    <div class="feature-box feature-box-style-2 mb-4">
                        <div class="feature-box-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="feature-box-info">
                            <h5 class="m-0 font-weight-bold">Direct Phone Number</h5>
                            <p class="m-0"><a href="tel:+1234567890">403</a></p>
                        </div>
                    </div>

                    <div class="feature-box feature-box-style-2 mb-4">
                        <div class="feature-box-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="feature-box-info">
                            <h5 class="m-0 font-weight-bold">E-mail Address</h5>
                            <p class="m-0"><a href="mailto:{{ $therapist->email }}">{{ $therapist->email }}</a>
                            </p>
                        </div>
                    </div>

                    <div class="feature-box feature-box-style-2 mb-4">
                        <div class="feature-box-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="feature-box-info">
                            <div class=" pt-4 pt-lg-0  text-start footer-column footer-column-opening-hours">
                                <h4 class="mb-4 text-uppercase">Opening Hours</h4>
                                @foreach ($therapist->schedules->groupBy('weekday') as $weekday => $schedules)
                                    <div class="info custom-info pt-0">
                                        <span>{{ jddayofweek($weekday, 1) }} :</span>
                                        @foreach ($schedules as $schedule)
                                            <span>{{ $schedule->slot }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif &nbsp;
                                            </span>
                                        @endforeach
                                    </div>

                                    <br />
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <hr class="mt-0 mb-5">
                </div>
            </div>
        @endforeach
    </div>
@endsection
