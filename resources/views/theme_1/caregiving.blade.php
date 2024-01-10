@extends('theme_1.layout.layout')
@section('title')
    Care Giving
@endsection

@section('content')
    <section class="position-relative bg-color-grey">
        <div id="sticky-sub-header" class="w-100 border-top-light h-50px bg-color-grey">
            <div class="container d-flex align-items-center gap-4  h-100 bg-color-grey">
                <a href="#" class="btn btn-primary btn-with-arrow">
                    Care Giving
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>

                <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="155">
                    <span class="text-2-5 text-primary font-weight-semi-bold">
                        Introduction
                    </span>
                </a>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">

                        {{-- <div class="post-image ms-0">
                            <img src="{{ asset('file') }}/img/default/som.jpg"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </div> --}}


                        <div class="post-content ms-0">
                            <section id="intro">
                                <h2 class="font-weight-bold text-primary my-3">
                                    Care Giving
                                </h2>
                            </section>

                            <section id="intro">
                                <p class="text-justify"> We provide support assistance to the persons who are unable to
                                    fully care themselves due
                                    to age, disability, illness, dementia, or other circumstances. This support encompasses
                                    a range of activities, including personal care, medical tasks, and emotional support. We
                                    also provide training and certification courses with the affiliation from international
                                    bodies so that our professionals can serve like a family members. We provide care giving
                                    services at home for 24/7 which includes following supports.
                                    Administer medication.
                                </p>
                                <ol class="list list-ordened">
                                    <li>Cleaning.</li>
                                    <li>Preparing meals.</li>
                                    <li>Bathing and dressing patients.</li>
                                    <li>Mobility.</li>
                                    <li>Personal care.</li>
                                    <li> Bathing.</li>
                                    <li>Companionship.</li>
                                </ol>
                                <p></p>
                            </section>
                        </div>
                    </article>

                </div>
            </div>

            <div class="col-lg-3 position-relative">
                <aside class="sidebar" id="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 210}}">

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
@endsection
@push('styles')
    <style>
        .sticky {
            position: fixed;
            z-index: 100;
            top: 93px;
            left: 0;
            width: 100%
        }
    </style>
@endpush

@push('scripts')
    <script>
        console.log("first")
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#sticky-sub-header').addClass('sticky')
            } else {
                $('#sticky-sub-header').removeClass('sticky')
            }
        });
    </script>
@endpush
