@extends('theme_1.layout.layout')
@section('title')
    MMI ENT Center
@endsection

@section('content')
    <section class="position-relative" style="background-color: #7ca2c5">
        <div id="sticky-sub-header" class="w-100 border-top-light h-50px" style="background-color: #7ca2c5">
            <div class="container d-flex align-items-center gap-4  h-100" style="background-color: #7ca2c5">
                <a href="#" class="btn btn-secondary btn-with-arrow">
                    MMI ENT Center
                    <span>
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>

                <a href="#specialist" data-hash data-hash-offset="0" data-hash-offset-lg="155">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        ENT Specialists
                    </span>
                </a>

                <a href="#nose" data-hash data-hash-offset="0" data-hash-offset-lg="155">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Treatment of Nose Diseases
                    </span>
                </a>

                <a href="#ear" data-hash data-hash-offset="0" data-hash-offset-lg="155">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Treatment of Ear Diseases
                    </span>
                </a>

                <a href="#throat" data-hash data-hash-offset="0" data-hash-offset-lg="155">
                    <span class="text-2-5 text-secondary font-weight-semi-bold">
                        Treatment of Throat Diseases
                    </span>
                </a>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="container py-4">
                    <div class="row">
                        <div class="col">
                            <div class="blog-posts single-post">
                                <article class="post post-large blog-single-post border-0 m-0 p-0">
                                    {{-- <div class="post-image ms-0">
                                        <img src="{{ asset('file') }}/img/default/som.jpg"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                    </div> --}}


                                    <div class="post-content ms-0">
                                        <section id="intro">
                                            <h2 class="font-weight-bold text-primary my-3">
                                                MMI ENT Center
                                            </h2>
                                        </section>

                                        <section id="nose">
                                            <strong>
                                                Treatment of Diseases of the Nose:
                                            </strong>
                                            <br>
                                            <ol class="list list-ordened">
                                                <li>Increased nasal meatus (নাকের মাংস বৃদ্ধি).</li>
                                                <li>Fungal infections of the nose (নাকের ফাংগাল ইনফেকশন).</li>
                                                <li>Nasal erosion (নাকের ক্ষয়রোগ).</li>
                                                <li>Nasal congestion during winter (শীতের সময় নাক বন্ধ থাকা).</li>
                                                <li>Chronic nasal mucosa problems (দীর্ঘদিন ধরে নাকের শ্লেষ্মা সমস্যা).</li>
                                                <li>Treatment of various diseases of the nose (নাকের বিভিন্ন রোগের চিকিৎসা).
                                                </li>
                                                <li>Nasal Infection (নাকের ইনফেকশন).</li>
                                                <li>Nasal Alergy (নাকের অ্যালার্জি ).</li>
                                                <li>Bleeding of Nose (নাক দিয়ে রক্ত পড়া).</li>
                                                <li>Polyp and Adenoid (পলিপ ও এডিনয়েড).</li>
                                                <li>Sever Sinus Infection (জটিল সাইনাসের ইনফেকশন).</li>
                                                <li>Sore Inside The Nose (নাকের ভিতর ঘা).</li>
                                            </ol>
                                            </p>
                                        </section>

                                        <section id="ear">
                                            <strong>
                                                Treatment of Ear Diseases:
                                            </strong>
                                            <br>
                                            <ol class="list list-ordened">
                                                <li>Ear pain (কানে ব্যথা).</li>
                                                <li>Itching and watery pain (চুলকানি ও পানি ঢুকে যন্ত্রণা).</li>
                                                <li>Ear rot disease (কান পচা রোগ).</li>
                                                <li>Perforated eardrum (কানের পর্দা ছিদ্র হয়ে যাওয়া).</li>
                                                <li>Loss of hearing in the ear (কানে শ্রবণশক্তি কমে যাওয়া).</li>
                                                <li>Ear hearing problems (কানের শ্রবণ সমস্যা).</li>
                                                <li>Treatment of various ear diseases (কানের বিভিন্ন রোগের চিকিৎসা).</li>
                                                <li>Ringing in the ears (কানের ভেতর শোঁ শোঁ শব্দ হওয়া).</li>
                                                <li>Turning heads with the field (ক্ষেত্রবিশেষে এর সঙ্গে মাথা ঘুরানো).</li>
                                                <li>Ear infections (কানে ইনফেকশন).</li>
                                                <li>Decreasing hearing in the ears (কানে কম শোনা).</li>
                                                <li>Cancer inside the ear (কানের ভেতরে ক্যান্সার).</li>
                                                <li>Ear infections (কান পাকা রোগ).</li>
                                                <li>Uncomfortable feeling in the ears (কানে অস্বস্তিকর অনুভূতি হওয়া).</li>
                                            </ol>
                                            </p>
                                        </section>

                                        <section id="throat">
                                            <strong>
                                                Treatment of Throat Diseases:
                                            </strong>
                                            <br>
                                            <ol class="list list-ordened">
                                                <li>Tonsils (টনসিল).</li>
                                                <li>Whooping cough (খুসখুসে কাশি).</li>
                                                <li>Throat allergy (গলার অ্যালার্জি).</li>
                                                <li>Pain in the oral cavity (মুখ গহ্বরে ব্যথা).</li>
                                                <li>Inflammation of the pharynx (ফ্যারিংসে প্রদাহ).</li>
                                                <li>Difficulty swallowing (ঢোঁক গিলতে কষ্ট হওয়া).</li>
                                                <li>Accumulation of phlegm in the throat (গলায় কফ জমে থাকা).</li>
                                                <li>Treatment of various diseases of the throat (গলার বিভিন্ন রোগের
                                                    চিকিৎসা).</li>
                                                <li>Voice change (গলার স্বরের পরিবর্তন হওয়া).</li>
                                                <li>Throat disease (গলা ফোলা রোগ).</li>
                                                <li>Sore throat (গলাব্যথা).</li>
                                                <li>Growth of flesh inside the throat (গলার ভিতরে মাংস বৃদ্ধি).</li>
                                                <li>Throat tumor (গলার টিউমার).</li>
                                                <li>Lump on side of throat (গলার পাশে গুটি).</li>
                                            </ol>
                                            </p>
                                        </section>

                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="specialist" class="container">
                    <div class="row" bis_skin_checked="1">
                        <div class="col" bis_skin_checked="1">
                            <h3 class="font-weight-bold mb-2 text-capitalize">Meet Our ENT Specialist</h3>
                            <p class="mt-0">These Therapist are specialist who are giving this therapy.
                                <strong>
                                    Please Select a Therapist And Make an appointemnt.
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="row pt-3">
                        @foreach ($therapists as $therapist)
                            <div class="col-lg-6 col-md-6 pb-2">
                                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                                    <div class="card-body p-3 z-index-1 text-center">
                                        <a href="{{ route('viewTherapist', $therapist->id) }}"
                                            class="d-block text-center bg-color-grey">
                                            <img alt="Doctor" class="img-fluid rounded"
                                                src="{{ asset('images') }}/therapist/{{ $therapist->img }}">
                                        </a>
                                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                                            <span class="text-dark">
                                                {{ $therapist->name }}
                                            </span>
                                        </strong>
                                        <span
                                            class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">{{ $therapist->qualification }}</span>
                                        <p class="pt-2"> {{ $therapist->designation }}</p>
                                        <div>
                                            <a href="{{ route('appointment.create', $therapist->id) }}"
                                                class="btn btn-primary bg-hover-light  text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-2  text-2">
                                                Make An Appointment
                                            </a>
                                        </div>
                                        <a href="{{ route('viewTherapist', $therapist->id) }}"
                                            class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View
                                            More +</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
@push('styles')
    <style>
        .sticky {
            position: fixed;
            z-index: 100;
            top: 61px;
            left: 0;
            width: 100%
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
