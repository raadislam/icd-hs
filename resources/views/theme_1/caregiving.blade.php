@extends('theme_1.layout.layout')
@section('title')
    Care Giving
@endsection

@section('content')
    <section class="position-relative" style="background-color: #7ca2c5">
        <div id="sticky-sub-header" class="w-100 border-top-light h-50px" style="background-color: #7ca2c5">
            <div class="container d-flex align-items-center gap-4 hide-scroll h-100"
                style="background-color: #7ca2c5; overflow-x: scroll;">
                <a href="#" class="btn btn-secondary btn-with-arrow" style="white-space: nowrap;">
                    Care Giving
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>

                <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Introduction
                    </span>
                </a>

                <a href="#courses" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Offered Courses
                    </span>
                </a>
            </div>
        </div>
    </section>
    {{-- {{ asset('file') }}/img/courses/generic/course-details-bg.png --}}
    <section class="container py-4">

        <section class="ug-course-hero"
            style="background-image: url({{ asset('file') }}/img/courses/generic/course-details-bg-canada.jpg);">
            <div class="ug-course-container">

                <div class="ug-hero-left">
                    <div class="ug-video-preview">
                        <img src="{{ asset('file/img/courses/thumbnail/') . '/' . $caregiving_course->thumbnail_img }}"
                            alt="Course Video Thumbnail">
                        <div class="ug-play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>

                <div class="ug-hero-right">
                    <p class="ug-author">A course by <span>Bill Finger</span></p>
                    <h1 class="ug-title">Advanced Design Tools for Modern Designs</h1>
                    <div class="ug-rating">
                        <span>4.8</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ug-reviews">(6,899 reviews)</span>
                    </div>
                    <p class="ug-description">
                        Exploring Photoshop, Illustrator, Krita, Procreate, and Canva; trace the evolution of graphic design
                        from ancient... <a href="#">See more</a>
                    </p>
                </div>

            </div>

            <div class="ug-course-meta">
                <span><i class="fas fa-user"></i> 7,302 Learners</span>
                <span><i class="fas fa-check-circle"></i> 91% Completion</span>
                <span><i class="fas fa-globe"></i> English</span>
                <span><i class="fas fa-closed-captioning"></i> English</span>
            </div>
        </section>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-8">

                <div class="ug-benefits-3col">
                    <div class="ug-benefit-item">
                        <i class="fas fa-bullseye"></i>
                        <h4>Improve in A purposed Manner</h4>
                        <p>Improve your skills by immersing yourself in a learning environment with professional instruction
                            and limited access at a time.</p>
                    </div>
                    <div class="ug-benefit-item">
                        <i class="fas fa-certificate"></i>
                        <h4>Get Exclusive Deals and Discounts</h4>
                        <p>Online discussion and crucial insights, Adobe vouchers, and more are all available solely to you
                            and your fellow learners to get you going.</p>
                    </div>
                    <div class="ug-benefit-item">
                        <i class="fas fa-users"></i>
                        <h4>Networking with Fellow Artists</h4>
                        <p>Learn, work together and connect with other learners tools like a common purpose Discord and
                            Slack channel and showcase your works.</p>
                    </div>
                </div>


                <div class="ug-course-learn-box">
                    <div class="ug-course-learn-header">
                        <h3>This Course Will Teach You</h3>
                        <button class="ug-preview-btn">Preview <i class="fas fa-angle-right"></i></button>
                    </div>
                    <div class="ug-course-learn-points">
                        <ul>
                            <li>Introduction to Caregiving (4 Hours)</li>
                            <li>Human Anatomy & Physiology (10 Hours)</li>
                            <li>Common Diseases and Conditions (8 Hours)</li>
                            <li>Vital Signs and Clinical Observation (6 Hours)</li>
                            <li>Practical Clinical Skills (10 Hours)</li>
                            <li>Occupational Safety & Health (6 Hours)</li>
                            <li>Nutrition and Food Safety (6 Hours)</li>
                            <li>Communication Skills (8 Hours)</li>
                            <li>Elderly and Special Needs Care (10 Hours)</li>
                            <li>Final Assessment and Review (2 Hours)</li>
                        </ul>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-lg-3 align-center">
                        <img class="w-50"
                            src="{{ asset('file/img/courses/publishers' . '/' . $caregiving_course->publisher->img) }}" />
                    </div>
                    <div class="col-lg-6">
                        <p>
                            COURSE PUBLISHER
                            </br>
                            <a href="{{ $caregiving_course->publisher->web_link }}" class="link-dark link-underline">
                                {{ $caregiving_course->publisher->name }}
                            </a>
                            </br>
                            Path to career development
                        </p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <a href="{{ $caregiving_course->publisher->web_link }}" class="mb-1 mt-1 me-1 btn btn-primary">
                            Learn More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <hr>

                <div
                    style="
                background-color: #e0f4f9;
                border-radius: 8px;
                color: #2d3941;
                font-size: 14px;
                padding: 25px 40px 23px 24px;
                    ">
                    <h3 style="font-size: 1.2em; line-height: 1.5em; font-weight: bold">
                        What You Will Learn In This Free Course
                    </h3>

                    <ul class="list list-icons list-icons-style-3 list-icons-sm text-justify" style="column-count: 2;">
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Define the roles and responsibilities of a career.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Describe the various legal issues that carers must be familiar with when
                            they work with clients.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Develop the skills necessary to communicate effectively with all members
                            of the care service team.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Develop an understanding of how to communicate with individuals with various
                            disabilities.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Discuss the correct etiquette when working with a wheelchair-bound client.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Outline the causes and effects of stress and the most efficient ways of
                            preventing and managing it.
                        </li>
                        <li class="pb-3"><i class="fas fa-check"></i>
                            Develop the time management and organizational skills necessary to provide
                            efficient care for clients.
                        </li>
                    </ul>
                </div>

                <hr>

                <div class="cr-review-container">
                    <div class="cr-header">
                        <h2>Learner Reviews & Feedback</h2>
                        <h3>Introduction to Caregiving</h3>
                        <div class="cr-meta">
                            <span><strong>259</strong> Total Reviews</span>
                            <span><i class="fas fa-circle cr-dot"></i></span>
                            <span><i class="fas fa-thumbs-up"></i> 1,852</span>
                            <span><i class="fas fa-thumbs-up"></i> 624</span>
                        </div>
                    </div>

                    <div class="cr-review-list">
                        <!-- Review Item 1 -->
                        <div class="cr-review-card">
                            <div class="cr-review-top">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                    class="cr-avatar">
                                <div class="cr-reviewer-info">
                                    <div class="cr-name">
                                        <strong>Lemuel O.</strong>
                                        <img src="https://flagcdn.com/w40/gh.png" alt="Flag" class="cr-flag">
                                        <span class="cr-badge"><i class="fas fa-certificate"></i> Alison
                                            Graduate</span>
                                    </div>
                                    <div class="cr-reaction cr-loved"><i class="fas fa-thumbs-up"></i>
                                        Loved This Course</div>
                                </div>
                            </div>
                            <p class="cr-comment">Very Informative.</p>
                            <div class="cr-footer">
                                <span class="cr-helpful">Was This Review Helpful?</span>
                                <span class="cr-help-actions"><i class="fas fa-thumbs-up"></i> <i
                                        class="fas fa-flag"></i> Report</span>
                            </div>
                        </div>

                        <!-- Review Item 2 -->
                        <div class="cr-review-card">
                            <div class="cr-review-top">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                    class="cr-avatar">
                                <div class="cr-reviewer-info">
                                    <div class="cr-name">
                                        <strong>Q-P D.</strong>
                                        <img src="https://flagcdn.com/w40/us.png" alt="Flag" class="cr-flag">
                                        <span class="cr-badge"><i class="fas fa-certificate"></i> Alison
                                            Graduate</span>
                                    </div>
                                    <div class="cr-reaction cr-liked"><i class="fas fa-thumbs-up"></i>
                                        Liked This Course</div>
                                </div>
                            </div>
                            <p class="cr-comment">
                                All reading course with very basic introductory caregiving information.
                                Thanks for the opportunity to learn + featuring this on resumes.
                            </p>
                            <div class="cr-footer">
                                <span class="cr-helpful">Was This Review Helpful?</span>
                                <span class="cr-help-actions"><i class="fas fa-thumbs-up"></i> <i
                                        class="fas fa-flag"></i> Report</span>
                            </div>
                        </div>

                        <div class="cr-more-reviews">
                            View 257 More Reviews
                        </div>
                    </div>
                </div>

                <hr>
                <div
                    style="
                background-color: #e6f6eb;
                border-radius: 8px;
                color: #2d3941;
                font-size: 14px;
                padding: 25px 40px 23px 24px;
            ">

                    <h3 style="font-size: 1.2em; line-height: 1.5em; font-weight: bold">
                        Complete This CPD Accredited Course & Get Your certificate!
                    </h3>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="feature-box">
                                <div class="feature-box-icon" style="background-color: #6ecf8b;!important">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h5 class="mb-2">Certify Your Skills</h5>
                                    <p class="mb-4">
                                        A CPD accredited Alison Diploma/Certificate certifies the skills
                                        you’ve learned
                                    </p>
                                </div>
                            </div>

                            <div class="feature-box">
                                <div class="feature-box-icon" style="background-color: #6ecf8b;!important">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h5 class="mb-2">Stand Out From The Crowd</h5>
                                    <p class="mb-4">
                                        Add your Alison Certification to your resumé and stay ahead of the
                                        competition
                                    </p>
                                </div>
                            </div>

                            <div class="feature-box">
                                <div class="feature-box-icon" style="background-color: #6ecf8b;!important">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h5 class="mb-2">Advance in Your Career</h5>
                                    <p class="mb-4">
                                        Share your Alison Certification with potential employers to show off
                                        your skills and capabilities
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <img class="w-100"
                                src="{{ asset('file/img/courses/certificate/sample-certificate-01.jpg') }}">
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-lg-4 position-relative">
                <aside class="sidebar" id="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <div class="ug-card">
                        <h3 class="ug-card-title">Plan Your Dream Career</h3>

                        <div class="ug-pricing-row">
                            <span class="ug-price">$47.49</span>
                            <span class="ug-original-price">$69.99</span>
                        </div>

                        <p class="ug-timer">
                            <i class="fas fa-clock"></i> Sale ends in <span>13h : 25m : 54s</span>
                        </p>

                        <a href="#" class="ug-buy-button">Purchase this course</a>

                        <p class="ug-refund">14 day Refund Policy</p>

                        <hr class="ug-divider">

                        <div class="ug-section">
                            <p class="ug-section-title">Course Contents</p>
                            <ul class="ug-features">
                                <li><i class="fas fa-video"></i> Total 13 hours of video lectures</li>
                                <li><i class="fas fa-file-alt"></i> 12 premium article access</li>
                                <li><i class="fas fa-download"></i> 11 downloadable resources</li>
                                <li><i class="fas fa-mobile-alt"></i> Mobile, Tab or TV friendly content</li>
                                <li><i class="fas fa-certificate"></i> Certificate upon completion</li>
                                <li><i class="fas fa-infinity"></i> Lifetime permission to access</li>
                            </ul>
                        </div>

                        <hr class="ug-divider">

                        <div class="ug-share">
                            <p class="ug-section-title">Share with friends</p>
                            <div class="ug-social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

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
            top: 60px;
            left: 0;
            width: 100%;
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

        @media only screen and (max-width: 600px) {
            .sticky {
                position: fixed;
                z-index: 100;
                top: 0px;
                left: 0;
                width: 100%
            }
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

@push('styles')
    <link href="{{ asset('file/css/care-giving-course.css') }}" rel="stylesheet">
@endpush
