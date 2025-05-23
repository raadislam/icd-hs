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
                <div class="col-lg-9">
                    <div>
                        <div class="custom-step-item">
                            <span class="step text-uppercase">

                                <span style="font-size: 2em !important" class="step-number text-color-primary">
                                    01
                                </span>
                            </span>
                            <div class="step-content">
                                <h4 class="mb-3"><br> <strong>Care Giving</strong></h4>
                                <p> caregiving courses and equip yourself with the skills necessary to provide effective
                                    health and safety care to your clients.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="custom-step-item">
                            <span class="step text-uppercase">
                                <span style="font-size: 2em !important" class="step-number text-color-primary">
                                    02
                                </span>
                            </span>>
                            <div class="step-content">
                                <h4 class="mb-3"><br> <strong>Nursing</strong></h4>
                                <p>Nurses make a real difference in people's lives Nurses' expertise, innovation, and
                                    compassion enable nurses to make a meaningful impact in the communities they serve
                                    by providing essential healthcare, advocacy, and leadership where and when it is
                                    needed most.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="custom-step-item">
                            <span class="step text-uppercase">
                                <span style="font-size: 2em !important" class="step-number text-color-primary">
                                    03
                                </span>
                            </span>
                            <div class="step-content">
                                <h4 class="mb-3"><br> <strong>Speech Pathology</strong></h4>
                                <p>Speech pathologists play an essential role in improving quality of life for others.
                                    SLPs show clients how to make positive changes that have a lasting impact on their
                                    lives. That's why it's important to have enthusiasm for helping people if you aspire
                                    to be a speech therapist.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="custom-step-item">
                            <span class="step text-uppercase">
                                <span style="font-size: 2em !important" class="step-number text-color-primary">
                                    04
                                </span>
                            </span>
                            <div class="step-content">
                                <h4 class="mb-3"><br> <strong>Audiology</strong></h4>
                                <p>Audiologists have the ability to positively impact people's lives by helping them
                                    improve their hearing and communication abilities. As an audiologist, you would have
                                    the opportunity to work with patients of all ages, from infants to seniors.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="custom-step-item">
                            <span class="step text-uppercase">
                                <span style="font-size: 2em !important" class="step-number text-color-primary">
                                    05
                                </span>
                            </span>
                            <div class="step-content">
                                <h4 class="mb-3"><br> <strong>Occupational English Test (OET)</strong></h4>
                                <p>Audiologists have the ability to positively impact people's lives by helping them
                                    improve their hearing and communication abilities. As an audiologist, you would have
                                    the opportunity to work with patients of all ages, from infants to seniors.</p>
                            </div>
                        </div>
                    </div>
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
