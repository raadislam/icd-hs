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
                            {{-- <section id="intro">
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
                                    <li>Bathing.</li>
                                    <li>Companionship.</li>
                                </ol>
                                <p></p>
                            </section> --}}

                            <section id="courses">


                                <h2 class="font-weight-bold text-primary my-3">
                                    Offered Courses
                                </h2>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <h1 class="text-4-5 font-weight-bold">
                                            Introduction to Caregiving
                                        </h1>
                                        <p class="text-justify">
                                            <strong>
                                                Learn about caregiving skills including legal and ethical responsibilities,
                                                and
                                                working as part of a team.
                                            </strong>
                                            </br>
                                            </br>
                                            This free online Caregiver training course will give you an understanding of the
                                            basics of caregiving, including legal and ethical responsibilities and working
                                            as
                                            part of a team. Caregivers are highly valued and in-demand professionals who
                                            make a
                                            big
                                            difference to the health organizations they work for. This course will give you
                                            a
                                            full run-through of these essential concepts so that you can give your
                                            caregiving
                                            career a real boost today.
                                        </p>
                                    </div>
                                    {{-- ///// --}}

                                    <div class="col-lg-5">
                                        <div class="cg-card-wrapper">

                                            <!-- Video Section -->
                                            <div class="cg-card-video">
                                                <img src="https://alison.com/blog/wp-content/uploads/2021/04/Header.png"
                                                    alt="Course Preview">
                                                <a href="https://www.lipsum.com/" class="cg-play-btn" target="_blank">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <div class="cg-free-label">
                                                    <span>FREE COURSE</span>
                                                    <div class="cg-badge-category">HEALTHCARE</div>
                                                </div>
                                                <div class="cg-brand-logo">Alison</div>
                                            </div>

                                            <div class="cg-card-content">
                                                <div class="cg-card-badge">
                                                    <i class="fas fa-signal"></i> BEGINNER LEVEL
                                                </div>

                                                <h3 class="cg-card-title">Introduction to Caregiving</h3>
                                                <p class="cg-card-enrolled">
                                                    <i class="fas fa-graduation-cap"></i>
                                                    <span class="cg-card-highlight">244,016</span> Learners already enrolled
                                                </p>

                                                <div class="cg-card-reactions">
                                                    <span><i class="fas fa-thumbs-up"></i> 1,852</span>
                                                    <span><i class="fas fa-thumbs-up"></i> 624</span>
                                                    <span><i class="fas fa-thumbs-down"></i> Not Interested</span>
                                                </div>

                                                <div class="cg-card-info">
                                                    <div><i class="far fa-clock"></i> 1.5-3 Avg Hours</div>
                                                    <div><i class="fas fa-certificate"></i> CPD Accredited</div>
                                                </div>

                                                <div class="cg-card-price">
                                                    <h3 class="cg-card-amount"> &nbsp; BDT &nbsp;
                                                        <span
                                                            style="
                                                                text-decoration-line: line-through;
                                                                font-weight: bold;
                                                                color: #eb5904;
                                                                font-size: 1.5em">
                                                            7,500
                                                        </span>
                                                        &nbsp;
                                                        <span
                                                            style="
                                                                font-weight: bold;
                                                                color: #00b386;
                                                                font-size: 1.5em">
                                                            5,000
                                                        </span>
                                                    </h3>
                                                </div>

                                                <a href="{{ route('user-signin') }}" class="cg-card-button">Start
                                                    Learning</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr>
                                <div class="row">
                                    <div class="col-lg-4 align-center">
                                        <img class="w-100" src="https://oncreditschool.com/file/img/ccgp_cla/logo.png" />
                                    </div>
                                    <div class="col-lg-5">
                                        <p>
                                            COURSE PUBLISHER
                                            </br>
                                            <a href="https://oncreditschool.com/" class="link-dark link-underline">
                                                CCGP Learning Academy, Ontario, Canada
                                            </a>
                                            </br>
                                            Path to career development
                                        </p>
                                    </div>
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <a href="#" class="mb-1 mt-1 me-1 btn btn-primary">
                                            GET STARTED NOW <i class="fas fa-arrow-right ms-1"></i>
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

                                    <ul class="list list-icons list-icons-style-3 list-icons-sm text-justify"
                                        style="column-count: 2;">
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
                                                        <img src="https://flagcdn.com/w40/gh.png" alt="Flag"
                                                            class="cr-flag">
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
                                                        <img src="https://flagcdn.com/w40/us.png" alt="Flag"
                                                            class="cr-flag">
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
                                                <div class="feature-box-icon"
                                                    style="background-color: #6ecf8b;!important">
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
                                                <div class="feature-box-icon"
                                                    style="background-color: #6ecf8b;!important">
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
                                                <div class="feature-box-icon"
                                                    style="background-color: #6ecf8b;!important">
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
                                                src="https://cdn01.alison-static.net/public/html/site/img/course-landing-v2/certificate.png">
                                        </div>
                                    </div>


                                </div>
                            </section>
                        </div>
                    </article>

                </div>
            </div>

            <div class="col-lg-3 position-relative">
                <aside class="sidebar" id="sidebar" data-plugin-sticky
                    data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                    <h4 class="pt-2">Get In Touch</h4>
                    <p>
                        <strong class="text-primary">Corporate Address:</strong><br>
                        89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, (West Side of Proposed N.ganj DOHS)
                        Narayanganj-1400, Bangladesh.
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
