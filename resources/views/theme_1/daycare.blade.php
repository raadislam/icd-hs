@extends('theme_1.layout.layout')
@section('title')
    Introduction
@endsection
@section('meta')
@endsection
@section('content')
    <section class="position-relative" style="background-color: #7ca2c5">
        <div id="sticky-sub-header" class="w-100 border-top-light h-50px" style="background-color: #7ca2c5">
            <div class="container d-flex align-items-center gap-4 hide-scroll h-100"
                style="background-color: #7ca2c5; overflow-x: scroll;">
                <a href="#" class="btn btn-secondary btn-with-arrow" style="white-space: nowrap;">
                    Day Care
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>

                <a href="#mission" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Mission
                    </span>
                </a>

                <a href="#vision" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Vision
                    </span>
                </a>

                <a href="#selectionCriteria" data-hash data-hash-offset="0" data-hash-offset-lg="155"
                    style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Selection Criteria
                    </span>
                </a>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ms-0">
                            <img src="{{ asset('file') }}/img/default/daycare.jpg"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </div>


                        <div class="post-content ms-0">
                            <section id="intro">
                                <h2 class="font-weight-bold text-primary my-3">
                                    Introducing To Our Day Care Services & Policies
                                </h2>


                                <p class='bottom-6 text-dark quote-read-short' style='text-align: justify;'>

                                    Many Parents are not able to take care of them at home during working hours. With a view
                                    to
                                    supporting these parents ICD-HS has established a Daycare Center. These policy
                                    guidelines
                                    will help function the ICD-HS Daycare in a professional manner.
                                    <br>
                                    <br>
                            </section>
                            <section id="mission">
                                <strong>
                                    Mission:
                                </strong>
                                <ol class="list list-ordened">
                                    <li>To provide parental care of the children so that they can contribute dedicated time
                                        to
                                        the work without any mental stress</li>
                                    <li>To provide pre-school learning facilities of these children in a congenial
                                        atmosphere
                                        with fun and interactions</li>
                                </ol>
                            </section>


                            <section id="selectionCriteria">

                                <strong>
                                    Selection Criteria:
                                </strong>
                                <br>
                                Children from the age of minimum 3 months up to the age of maximum10 are eligible to avail
                                the services of the ICD-HS Daycare.
                                <br>
                                <br>
                            </section>

                            <section id="vision">
                                <strong>
                                    Our Vision:
                                </strong>
                                <br>
                                <ol class="list list-ordened">
                                    <li>One-stop daycare service and pre-education.</li>
                                    <li>Run by national and internationally experienced persons.</li>
                                    <li>Expert teachers and caring persons.</li>
                                    <li>Complete parental care and environment.</li>
                                    <li>Necessary service for mental, social, physical growth/ development of the child.
                                    </li>
                                    <li>Best fit room, toys and environment for a particular age group.</li>
                                    <li>High security and CCTV controlled zone.</li>
                                    <li>Right information pass to the guardians/ parents.</li>
                                    <li>Air-Conditioned, Spacious room.</li>
                                    <li>Fire extinguisher, First aid and hygienic environment.</li>
                                    <li>Necessary instant medical support.</li>
                                </ol>
                                <strong>
                                    ICD-HS will provide the following services:
                                </strong>
                                <br>
                                <br>
                                <ol class="list list-ordened">
                                    <li>Daycare services for the child of 3-months to less than 10 years.</li>
                                    <li>Pre-school play services for the child above 2 years to 5 years.</li>
                                    <li>Daycare services for the children above 4 years up to 10 years.</li>
                                    <li>Reading room facility for children above 3 years.</li>
                                    <li>Open from 7: 30 am to 6:30 pm (Full time and Part-time).</li>
                                    <li>Preschool 9:00am - 10:30am and 11: 00am- 12:30pm.</li>
                                    <li>Interactive learning through Music and Movement.</li>
                                    <li>Creative activity and educational game.</li>
                                    <li>Certified Trainer.</li>
                                </ol>
                                </p>
                            </section>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .sticky {
            position: fixed;
            z-index: 100;
            top: 61px;
            left: 0;
            width: 100%
        }

        @media only screen and (max-width: 600px) {
            .sticky {
                position: fixed;
                z-index: 100;
                top: 0px;
                left: 0;
                width: 100%
            }
        }

        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge add Firefox */
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endpush

@section('script')
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
@endsection
