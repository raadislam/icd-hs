@extends('theme_1.layout.layout')
@section('title')
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0"
                data-plugin-options="{'minWindowWidth': 0}">
                <h3 class="mt-4 pt-1 mb-0 pb-0"><span class="text-primary">{{ $therapy->id }}
                        &nbsp;&nbsp;</span>{{ $therapy->title }}</h3>
                <div class="divider divider-primary divider-small my-3">
                    <hr class="mt-2 me-auto">
                </div>

                <p class="mt-4 mb-2">{{ $therapy->description }}</p>

                <div class="row mt-4 pt-2">
                    <div class="col-lg-4">
                        <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                            <li style="font-size: 1.1em">
                                <i class="fas fa-coins"></i>&nbsp;
                                Fee:&nbsp; {{ number_format($therapy->fee) }} TK
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0">Related Therapist</p>
                    <h3 class="font-weight-bold mb-2 text-capitalize">Meet Our Therapist Under This Therapy</h3>
                    <p class="mt-0">These Therapist are specialist who are giving this therapy. Please Make an appointemnt
                        with therapist.
                    </p>
                </div>
            </div>
            @foreach ($therapists as $key => $therapist)
                {{ json_encode($key) }}
                @foreach ($therapist as $key => $value)
                @endforeach
            @endforeach

            {{-- @foreach ($therapists as $therapist)
                <div class="row" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                    <div class="col-lg-4 pb-4 pb-lg-0">
                        <div class="card border-0 border-radius-0 box-shadow-1 mb-4">
                            <div class="card-body p-3 z-index-1 text-center">

                                <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                                    <img alt="Doctor" class="img-fluid rounded"
                                        src="{{ asset('images') }}/therapist/{{ $therapist->therapist->img }}"> </a>

                                <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                                    <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                        {{ $therapist->therapist->name }}
                                    </a>
                                </strong>

                                <span
                                    class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">
                                    Therapists
                                </span>

                                <a href="{{ route('makeAppointment', [$therapist->therapist->id, $therapy->id]) }}"
                                    class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2">
                                    Make An Appointment
                                </a>
                            </div>
                        </div>
                        <hr class="mt-4 mb-5">
                    </div>
                    <div class="col-lg-8">

                        <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2">About Me</h3>
                        <p class="mb-4">{{ $therapist->therapist->about }}</p>

                        <h3 class="text-color-quaternary font-weight-bold text-capitalize mt-2 mb-2">Contact Info</h3>

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
                                <p class="m-0"><a
                                        href="mailto:{{ $therapist->therapist->email }}">{{ $therapist->therapist->email }}</a>
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
                                    <div class="info custom-info pt-0">
                                        <span>Mon-Fri</span>
                                        <span>8:30 am to 5:00 pm</span>
                                    </div>
                                    <div class="info custom-info">
                                        <span>Saturday</span>
                                        <span>9:30 am to 1:00 pm</span>
                                    </div>
                                    <div class="info custom-info pb-0 border-bottom-0">
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-0 mb-5">
                    </div>
                </div>
            @endforeach --}}
        </div>
    </section>
@endsection
