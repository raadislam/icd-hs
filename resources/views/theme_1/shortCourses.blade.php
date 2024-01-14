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
            <div class="row">
                <div class="col-lg-9 px-3">
                    @foreach ($shortCourses as $key => $shortCourse)
                        <div class="row mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                            <h3 class="mt-4 pt-1 mb-0 pb-0"><span class="text-primary">{{ $key + 1 }}
                                    &nbsp;&nbsp;</span>{{ $shortCourse->title }}</h3>
                            <div class="divider divider-primary divider-small my-3">
                                <hr class="mt-2 me-auto">
                            </div>

                            <p class="mt-4 mb-2">{{ $shortCourse->description }}</p>

                            <div class="row mt-4 pt-2">
                                <div class="col-lg-4">
                                    <ul
                                        class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                        <li style="font-size: 1.1em">
                                            <i class="fas fa-clock"></i>&nbsp;
                                            Duration:&nbsp;{{ $shortCourse->duration }}
                                        </li>
                                        <li style="font-size: 1.1em">
                                            <i class="fas fa-coins"></i>&nbsp;
                                            Course Fee:&nbsp; {{ number_format($shortCourse->price) }} TK
                                        </li>
                                    </ul>

                                    <div style="margin-top: 2em">
                                        <a href={{ route('shortCourseRegistration', $shortCourse->id) }}
                                            class="btn btn-secondary btn-modern font-weight-semibold text-3 btn-py-2 px-5 ">
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-3 position-relative">
                    <aside class="sidebar" id="sidebar" data-plugin-sticky
                        data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 210}}">

                        <h4 class="pt-2">Get In Touch</h4>
                        <p>
                            <strong class="text-primary">Corporate Address:</strong><br>
                            89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, (West Side of Proposed N.ganj
                            DOHS)
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
    </section>
@endsection
