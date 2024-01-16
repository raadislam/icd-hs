@extends('theme_1.layout.layout')
@section('title')
    {{ $therapist->name }}
@endsection
@section('content')
    <div id="examples" class="container" style="padding: 5em 0 5em 0 !important">

        <div class="row">
            <div class="col-lg-9">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <img alt="Doctor" class="img-fluid rounded"
                                src="{{ asset('images') }}/therapist/{{ $therapist->img }}">
                        </div>
                        <div class="col-lg-9 ">
                            <p class="text-4 font-weight-semibold text-primary">{{ $therapist->designation }}</p>
                            <div class="">
                                <span class="text-4 font-weight-semibold text-dark text-uppercase">
                                    {{ $therapist->name }}
                                </span>

                                <p class="text-3-5  m-0 text-dark ">
                                    {{ $therapist->qualification }}
                                </p>
                                <p class="text-3-5  m-0 text-dark ">
                                    <a href="mailto:{{ $therapist->email }}">{{ $therapist->email }}</a>
                                </p>
                                <br>
                                <p class="text-dark font-weight-semi-bold" style="margin: 0">Schedule</p>

                                @foreach ($therapist->schedules->groupBy('weekday') as $weekday => $schedules)
                                    <div class="info custom-info pt-0">
                                        <span>{{ $weekday }} :</span>
                                        <span>{{ jddayofweek($weekday, 1) }} :</span>
                                        @foreach ($schedules as $schedule)
                                            <span>{{ $schedule->slot }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif &nbsp;
                                            </span>
                                        @endforeach
                                    </div>
                                @endforeach



                                <a href="{{ route('appointment.create', $therapist->id) }}"
                                    class="btn btn-primary bg-hover-light  text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2">
                                    Make An Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="font-weight-normal text-7 my-2"><strong class="font-weight-extra-bold">About</strong>
                    Myself</h2>
                <p class="text-3-5 text-justify">{!! $therapist->about !!}</p>

            </div>

            <div class="col-lg-3 position-relative">
                <aside class="sidebar" id="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                    <h4 class="pt-2">Get In Touch</h4>
                    <p>
                        <strong class="text-primary">Corporate Address:</strong><br>
                        89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, (West Side of Proposed N.ganj DOHS)
                        Narayanganj-1400, Bangladrsh.
                    </p>
                    <div class="nav-item pb-3 d-none d-xl-inline-flex">
                        <span
                            class="header-top-phone d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
                            <i class="icon-phone icons text-5 me-2"></i> <a href="tel:+8801972524253">
                                (+880) 1972524253
                            </a>
                        </span>
                    </div>

                    <a class="btn btn-modern btn-primary mb-4" href="{{ route('contactus') }}">Contact Us Now!</a>

                </aside>
            </div>


        </div>

    </div>
@endsection
