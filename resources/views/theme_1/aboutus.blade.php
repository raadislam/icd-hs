@extends('theme_1.layout.layout')
@section('title')
    About us
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary p-relative">
        <div class="container">
            <div class="row py-5">
                <div class="align-self-center text-center p-static">
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">About Us</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="container pt-3 my-5-5">
        <div class="container container-xl-custom mt-4">
            <div class="row bg-color-grey">

                <div class="col" style="">
                    <div class="row">
                        <div class="col py-5">
                            <div class="overflow-hidden px-4">
                                <p class="text-4 mb-3-5 text-color-dark appear-animation text-justify"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Our team of IT
                                    professionals provides you with the best possible education and
                                    preparation for a career in the technology industry.
                                </p>
                                <p class="font-weight-light text-4 mb-3-5 text-justify appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our
                                    experienced
                                    instructors bring real-world expertise to the
                                    classroom, giving you the opportunity to learn from the best in the field. We pride
                                    ourselves on our
                                    small class sizes and
                                    state-of-the-tech lab environments, which allow us to provide you with personalized
                                    attention and
                                    the latest hardware devices. As one of the top IT colleges in Canada, we also offer a
                                    Career
                                    Services
                                    staff who will work with you from day one to ensure that you are fully prepared and
                                    job-ready upon
                                    graduation. Join us at Brighthill Academy and become a part of the next generation of IT
                                    leaders. We
                                    can’t wait
                                    to help you achieve your goals and make a positive impact on the world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-5 mb-5 mb-lg-0 align-self-center">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-4/generic/about-us.png"
                        class="img-fluid position-relative z-index-1 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" alt="Our Company" />
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-3 mt-4"
        style="background-image: url({{ asset('file') }}/img/demos/it-services/backgrounds/dots-background-3.png); background-repeat: no-repeat; background-position: 112% 100%;">
        <div class="container container-xl-custom mt-4">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-7 col-xl-5 mb-5 mb-lg-0">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-4/generic/generic-10.png"
                        class="img-fluid position-relative z-index-1 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1500" alt="Our Company" />
                </div>
                <div class="col-md-10 col-lg-5 ms-xl-auto">
                    <span class="d-block custom-text-color-dark lead-2 font-weight-bold mb-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">WHO WE ARE</span>

                    <p class="font-weight-light text-4 mb-3-5 pb-3 mb-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        Brighthill Academy are a diverse community of scholars and educators committed to provide quality
                        training and learning through
                        hands-on programs.
                    </p>
                    <h2 class="font-weight-light text-4 mb-3-5 pb-3 mb-4 text-justify appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    </h2>
                </div>

            </div>
        </div>
    </section>

    <section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
        <div class="shape-divider" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
        <div class="container pb-5">
            <div class="row align-items-center py-2 my-5 mb-lg-0 my-xl-5">
                <div class="col-lg-7 col-xl-5 mb-5 mb-lg-0">
                    <span class="d-block lead-2 font-weight-bold mb-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">WHO WE DO</span>
                    <h2 class="text-5 line-height-3 text-transform-none font-weight-semibold mb-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Skills That Make You
                        Meaningful Difference from Others</h2>
                    <p class="font-weight-light text-4 mb-3-5 pb-3 mb-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                        Brighthill Academy offer Information technology training that
                        helps
                        processionals and students to get into the high paid job market. </p>
                </div>
                <div class="col-md-10 col-lg-5 ms-xl-auto" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="1100">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-3/generic/generic-4-grey.jpg"
                        class="img-fluid" alt="" />
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="row mt-5 py-3">
                <div class="col-md-6">
                    <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                        <section class="toggle active mt-0">
                            <a class="toggle-title" style="font-size: 1.5em">
                                Our Mission</a>
                            <div class="toggle-content">
                                <p class="font-weight-light text-4 mb-3-5">Brighthill Academy provides challenging and
                                    engaging project based
                                    learning through
                                    hands-on, and
                                    collaboration for success.</p>
                            </div>
                        </section>
                        <section class="toggle active">
                            <a class="toggle-title" style="font-size: 1.5em">Our Vision</a>
                            <div class="toggle-content">
                                <p class="font-weight-light text-4 mb-3-5">Brighthill Academy will be a top performing
                                    technology training and
                                    education institute
                                    in Canada.</p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                        <section class="toggle active mt-0">
                            <a class="toggle-title" style="font-size: 1.5em">Teacher Credential</a>
                            <div class="toggle-content">
                                <p class="font-weight-light text-4 mb-3-5">All teachers are highly educated, trained and
                                    certified from different
                                    vendors Microsoft,
                                    AWS, Cisco etc.</p>
                            </div>
                        </section>
                        <section class="toggle active">
                            <a class="toggle-title" style="font-size: 1.5em">Company Information</a>
                            <div class="toggle-content">
                                <p class="font-weight-light text-4 mb-3-5">Brighthill Academy is a federally registered
                                    educational institute that
                                    register in
                                    Canada.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-4">
                    <hr class="solid">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
