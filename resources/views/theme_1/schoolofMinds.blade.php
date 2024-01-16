@extends('theme_1.layout.layout')
@section('title')
    Speech Therapy
@endsection

@section('content')
    <section class="position-relative" style="background-color: #7ca2c5">
        <div id="sticky-sub-header" class="w-100  h-50px" style="background-color: #7ca2c5">
            <div class="container d-flex align-items-center gap-4 hide-scroll h-100"
                style="background-color: #7ca2c5; overflow-x: scroll;">
                <a href="#" class="btn btn-secondary btn-with-arrow" style="white-space: nowrap;">
                    School Of Mind
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>

                <a href="#schoolHours" data-hash data-hash-offset="0" data-hash-offset-lg="155"
                    style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        School Hours
                    </span>
                </a>

                <a href="#curriculum" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Curriculum
                    </span>
                </a>

                <a href="#aim" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Our Aim
                    </span>
                </a>

                <a href="#encouragedValue" data-hash data-hash-offset="0" data-hash-offset-lg="155"
                    style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Encouraged Value
                    </span>
                </a>

                <a href="#commitment" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Commitment
                    </span>
                </a>

                <a href="#campus" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Campus
                    </span>
                </a>

                <a href="#employment" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Employment Oppurtunity
                    </span>
                </a>

                <a href="#services" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Services
                    </span>
                </a>

                <a href="#admission" data-hash data-hash-offset="0" data-hash-offset-lg="155" style="white-space: nowrap;">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Admission
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
                            <img src="{{ asset('file') }}/img/default/som.jpg"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </div>


                        <div class="post-content ms-0">
                            <section id="intro">
                                <h2 class="font-weight-bold text-primary my-3">
                                    School of Minds (SOM)
                                </h2>


                                <p class='bottom-6 text-dark quote-read-short' style='text-align: justify;'>
                                    School of Minds is a school for students with special educational needs. We provide
                                    supports for the students with their learning disabilities between the ages of 5 and 17
                                    in Narayanganj, Bangladesh. A team of experience teachers have been working to provide
                                    one to one and group supports to improve the cognitive and physical development of the
                                    students with learning disabilities.
                                    <br>
                                    <br>
                            </section>

                            <section id="schoolHours">
                                <strong>
                                    School Hours:
                                </strong>
                                <br>
                                Different schedule is being maintained based on the necessity of the children, we are open
                                from 7:30 am to 5 pm.
                                <br>
                                <br>
                            </section>


                            <section id="curriculum">
                                <strong>
                                    Curriculum :
                                </strong>
                                <br>
                                We create individual curriculum according to the needs of the students after assessing the
                                students individually.We prepare Individualized Educational Program(IEP) to ensure that a
                                child with an identified disability can addressed.
                                Our teachers and therapist ensure that each student will access program at their level using
                                the latest resources and pedagogies to promote learning.
                                We focus on helping students to become as independent as possible, being able to communicate
                                and manage themselves to their best abilities.
                                We report each student’s learning progress through online digital portfolios which allows
                                families to access to their regular development, exciting information and the ability to
                                comment and interact with the teachers throughout the year.

                                <br>
                                <br>
                            </section>

                            <section id="aim">
                                <strong>
                                    Our Aim:
                                </strong>
                                <br>
                                We focus on continuous improvement for achievement of equity and excellence..we ensure Our
                                support with the most qualified, experienced and appropriate personnel to provide the
                                expertise in order to expedite quality learning environment.
                                <br>
                                <br>
                            </section>

                            <section id="encouragedValue">
                                <strong>
                                    Students will be encouraged to value:
                                </strong>
                                <br>
                                Excellence , Innovation, Diversity, Equity, Community, Ecological sustainability,
                                and Integrity which involves being honest, responsible, accountable and acting
                                ethically;
                                <br>
                                <br>
                            </section>
                            <section id="commitment">
                                <strong>
                                    We are committed to:
                                </strong>
                                <br>
                                <ol class="list list-ordened">
                                    <li>Ensuring to experience the success by providing specialist program.</li>
                                    <li>High expectations of pupil achievement with an emphasis on literacy, numeracy and
                                        communicative skills.</li>
                                    <li>Maintain professional learning, reflection and personal development.</li>
                                    <li>To create Opportunity for demonstrating enthusiasm, optimism and professionalism in
                                        their interactions with students, colleagues, community.

                                    </li>
                                </ol>
                                </p>
                            </section>

                            <section id="campus">
                                <strong>
                                    Our Campus:
                                </strong>
                                <br>
                                <ol class="list list-ordened">
                                    <li>Safe and secure environment for teachers and students.</li>
                                    <li>Reflect teaching and learning program.</li>
                                    <li>Reflect our cultural and ethnic diversity.</li>
                                </ol>
                                </p>
                            </section>

                            <section id="employment">
                                <strong>
                                    Opportunity for Employment:
                                </strong>
                                <br>
                                The teachers and staff are our core strength. We often looking for teacher aides, teachers
                                and therapists to work in classes supporting our fabulous learners. If you are passionate
                                about supporting the success of neuro-diverse children/young people there could be an
                                opportunity for you to join our team and make a real impact.You are requested to send your
                                profile to <a href="https://icd-hs.com/">
                                    info@icd-hs.com
                                </a>
                                <br>
                                <br>
                            </section>
                            <section id="services">
                                <strong>
                                    Our services :
                                </strong>
                                <br>
                                Schooling, Counseling, Therapy, One to One Learning, Group Learning, Specialized Speech
                                Therapy, Pediatric Counseling, Counseling for the Pregnant Women.
                                <br>
                                <br>
                            </section>

                            <section id="admission">
                                <strong>
                                    Admission :
                                </strong>
                                <br>
                                Admission is open, interested parents are requested to contact our office/ Call 01972524253
                                <br>
                                <br>
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
            top: 60px;
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
