@extends('theme_1.layout.layout')
@section('title')
    Diagonistic Center
@endsection
@section('meta')
@endsection
@section('content')
<div role="main" class="main">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-9"> 
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h2 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">This Facility is Coming Soon</strong></h2>
                        {{-- <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p> --}}
                        {{-- <p class="mb-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-6">
                        <div class="progress-bars mt-4">
                            <div class="progress-label text-2">
                                <span><strong>Conception:</strong> Finished</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
                                    <span class="progress-bar-tooltip">100%</span>
                                </div>
                            </div>
                            <div class="progress-label text-2">
                                <span><strong>Design</strong></span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
                                    <span class="progress-bar-tooltip">85%</span>
                                </div>
                            </div>
                            <div class="progress-label text-2">
                                <span><strong>Development</strong></span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600">
                                    <span class="progress-bar-tooltip">75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 position-relative">
                <aside class="sidebar" id="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 100}}">

                    <h4 class="pt-2">Get In Touch</h4>
                    <p>
                        <strong class="text-primary">Corporate Address:</strong><br>
                        123 89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, (West Side of Proposed N.ganj DOHS)
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
</div>
@endsection

