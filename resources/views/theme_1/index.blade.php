@extends('theme_1.layout.layout')
@section('title')
    Home
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section section-funnel border-0 m-0 p-0">
        <div class="owl-carousel-wrapper" style="height: 991px;">
            <div class="owl-carousel dots-inside dots-horizontal-center custom-dots-style-1 show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
                data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-250px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

                <!-- Carousel Slide 1 -->
                <div class="position-relative overflow-hidden pb-5"
                    data-dynamic-height="['991px','991px','991px','650px','650px']" style="height: 991px;">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url({{ asset('file') }}/img/demos/medical-2/slides/slide-medical-2-1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center pb-5 h-100">
                            <div class="col-md-10 col-lg-6 text-center text-md-end pb-5 ms-auto">
                                <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-2 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                    data-plugin-options="{'minWindowWidth': 0}">Improving support for people with
                                    disabilities through better documentation</h1>
                                <h2 class="text-color-default font-weight-normal text-4-5 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                    data-plugin-options="{'minWindowWidth': 0}">RELIABLE MEDICAL SERVICES LOCATED
                                    NARAYANGANJ, BD</h2>
                                <a href="#"
                                    class="btn btn-primary btn-modern font-weight-semibold text-3 btn-py-3 px-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                    data-plugin-options="{'minWindowWidth': 0}">
                                    GET STARTED
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="position-relative overflow-hidden pb-5"
                    data-dynamic-height="['991px','991px','991px','650px','650px']" style="height: 991px;">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url({{ asset('file') }}/img/demos/medical-2/slides/slide-medical-2-2.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 pb-5 h-100">
                        <div class="row align-items-center pb-5 h-100">
                            <div class="col-md-10 col-lg-6 text-center text-md-start pb-5">
                                <h1 class="text-color-dark font-weight-extra-bold text-10 line-height-2 mb-3 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                    data-plugin-options="{'minWindowWidth': 0}">Supporting people with intellectual and
                                    developmental disabilities around the world</h1>
                                <h2 class="text-color-default font-weight-normal text-4-5 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                    data-plugin-options="{'minWindowWidth': 0}">CONTACT ANYTIME FROM ANYWHERE</h2>
                                <a href="#"
                                    class="btn btn-primary btn-modern font-weight-semibold text-3 btn-py-3 px-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                    data-plugin-options="{'minWindowWidth': 0}">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-funnel-layer-bottom d-none d-xl-block z-index-1">
            <div class="section-funnel-layer bg-light"></div>
            <div class="section-funnel-layer bg-light"></div>
        </div>
    </section>

    <div class="cards custom-cards container z-index-2">
        <div class="cards-container row justify-content-center justify-content-xl-between w-100 my-5 mt-xl-0 mx-0">
            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                        <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-healthcare-center.png"
                            alt="Healthcare Center">
                        <h4 class="card-title mb-1 font-weight-bold">Healthcare Center</h4>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                    data-appear-animation="zoomIn" data-appear-animation-delay="100">
                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                        <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-immediate-center.png"
                            alt="Immediate Center">
                        <h4 class="card-title mb-1 font-weight-bold">Immediate Center</h4>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                        <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-diagnostic-center.png"
                            alt="Diagnostic Center">
                        <h4 class="card-title mb-1 font-weight-bold">Diagnostic Center</h4>
                        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-me mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="100">
                    <h3 class="text-color-quaternary mb-3 font-weight-semibold text-capitalize pe-5">The Highest Standard Of
                        Health Care Medical Clinic</h3>
                    <p class="text-uppercase mb-3">John Doe - Main Doctor</p>
                    <img src="{{ asset('file') }}/img/demos/medical-2/others/signature.png" alt="Signature">
                </div>
                <div class="col-xs-12 col-lg-8 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <p class="p-relative bottom-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet
                        libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper
                        vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh
                        ipsum, blandit id faucibus ac, finibus vitae dui.</p>
                    <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default section-no-border my-0">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-dark">- Program of Study</h2>
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots ps-1 pe-1"
                        data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false, 'autoplay': true, 'autoplayTimeout': 4000, 'autoplayHoverPause': true}">
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-dark">- Short Courses</h2>
                    <div class="accordion without-bg custom-accordion-style-1" id="accordion7">
                        @foreach ($shortCourses as $shortCourse)
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion7" href="#collapse7One" aria-expanded="true">
                                            {{ $shortCourse->title }}
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7One" class="collapse" aria-expanded="true">
                                    <div class="card-body">
                                        <p>{{ $shortCourse->description }}</p>
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
                                            <a href="#"
                                                class="btn btn-secondary btn-modern font-weight-semibold text-3 btn-py-2 px-5 ">
                                                Apply Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div style="margin-top: 2em">
                        <a href="{{ route('shortCourse') }}"
                            class="btn btn-primary btn-modern font-weight-semibold text-3 btn-py-2 px-5 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                            data-plugin-options="{'minWindowWidth': 0}">
                            See all
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="more-about lazyload" data-bg-src="{{ asset('file') }}/img/demos/medical-2/bg/medical2-bg-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6 p-relative overflow-hidden col-cuttin-more-about"></div>
                <div class="col-xs-12 col-lg-6 p-relative py-5 bg-color-light z-index-1 ps-lg-5 ps-xl-0">
                    <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">More About Porto Medical
                    </h3>
                    <p class="font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut
                        tellus ante. Nam suscipit urna risus, fermentum commodo ipsum porta id.</p>
                    <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
                        semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <div class="row counters mb-4 flex-nowrap flex-sm-wrap">
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                            <div class="counter counter-primary appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                                <strong class="number-counter text-10" data-to="35" data-append="+">0</strong>
                                <label
                                    class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Business
                                    Year</label>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                            <div class="counter counter-primary appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750">
                                <strong class="number-counter text-10" data-to="50" data-append="+">0</strong>
                                <label
                                    class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Specialist
                                    Doctors</label>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex justify-content-center">
                            <div class="counter counter-primary appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                <strong class="number-counter text-10" data-to="200" data-append="+">0</strong>
                                <label
                                    class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Modern
                                    Rooms</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-default section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn"
                        data-appear-animation-delay="100">Who We Are</h2>
                    <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <p class="font-weight-medium text-4">Founded in 2001 by John Doe, gravida nibh vel. Aenean
                            sollicitudin, lorem quis, <span
                                class="highlight highlight-primary highlight-bg-opacity highlight-animated px-0"
                                data-appear-animation="highlight-animated-start" data-appear-animation-delay="200"
                                data-plugin-options="{'flagClassOnly': true}">nisi elit consequat ipsum</span> nec sagittis
                            sem nibh id elit. </p>
                        <p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            bibendum ultricies nunc, eu interdum enim convallis pretium.</p>

                        <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-about-us.html">Learn More<img
                                width="27" height="27"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-0 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="400">
                        Our Commitment</h4>
                    <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <p class="mt-4 mb-0">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                            bibendum auctor, nisi elit consequat ipsum.</p>
                        <p class="mt-4 mb-0">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare
                            odio. Sed non mauris vitae erat consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-transparent section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">Our Products</h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="0">
                        <div class="feature-box-icon mt-3">
                            <img width="50" height="50"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/special-education.svg"
                                alt="" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Special & Inclusive Education</h4>
                            <p style="text-align: justify">Provide better learning opportunities. Children with different
                                abilities are often more
                                motivated to learn together with other
                                children.Expectations are even higher for all children.Successful inclusion requires
                                developing individual strengths and talents.</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="0">
                        <div class="feature-box-icon mt-3">
                            <img width="48" height="48"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/speech-therapy.svg" alt="" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Speech Therapy</h4>
                            <p style="text-align: justify">The goals of speech therapy include improving pronunciation,
                                strengthening the muscles used
                                in speech, and learning to speak correctly. Speech therapy can be used for a lot of
                                different speech problems and disorders, from smaller problems like a hoarse voice up to
                                partial loss of speech due to brain damage.</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="0">
                        <div class="feature-box-icon mt-3">
                            <img width="48" height="48"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/health-law.svg" alt=""
                                data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Care Giving</h4>
                            <p style="text-align: justify">Caregiving is essential to safeguard the well-being of those
                                incapable of independently managing their daily activities and health requirements; this
                                proves particularly vital for aging populations, individuals enduring chronic illnesses or
                                disabilities, those recovering from medical.</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-3">
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <div class="feature-box-icon mt-3">
                            <img width="48" height="48"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/divorce-law.svg" alt=""
                                data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Occupational Therapy</h4>
                            <p style="text-align: justify">OT helps kids play, improves their school performance, and aids
                                their daily activities. It also boosts their self-esteem and sense of accomplishment. With
                                OT, kids can: Develop fine motor skills so they can grasp and release toys and develop good
                                handwriting or computer skills..</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <div class="feature-box-icon mt-3">
                            <img width="48" height="48"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/physiotherapy.svg" alt="" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Physiotherapy</h4>
                            <p>Physiotherapy is a hugely beneficial specialist treatment of injury, disease and disorders.
                                Through physical methods, it helps them to restore function and movement in the area that
                                has been affected. Physiotherapy also helps with preventing further damage or injury on the
                                previously affected body part..</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <div class="feature-box-icon mt-3">
                            <img width="48" height="48"
                                src="{{ asset('file') }}/img/demos/law-firm/icons/accident-law.svg" alt=""
                                data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark d-inline-block ms-2 p-relative bottom-1'}" />
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="mb-2">Accident Law</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                                imperdiet. Nulla lacinia iaculis nulla.</p>
                            <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 bg-primary order-2 order-lg-1 p-0"
                style="background: url({{ asset('file') }}/img/demos/law-firm/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-right text-color-light py-5 ms-auto">
                            <div class="p-3">
                                <div class="appear-animation" data-appear-animation="fadeInRightShorter"
                                    data-appear-animation-delay="200">
                                    <h2 class="mb-0 font-weight-bold text-light">Testimonials</h2>
                                    <div class="divider divider-dark divider-small mt-2 mb-4">
                                        <hr class="my-0 me-auto">
                                    </div>

                                    <div class="owl-carousel owl-theme dots-align-left dots-light dots-modern custom-dots-modern-1 dots-modern-lg pt-3"
                                        data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': true}">
                                        <div>
                                            <div
                                                class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
                                                <blockquote class="opacity-7 pb-3">
                                                    <p
                                                        class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">
                                                        Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast
                                                        ehicula leo, vel efficitur felis ultrices non cras a elit sit amet
                                                        leo acun volutpat.</p>
                                                </blockquote>
                                                <div class="testimonial-author text-start ps-5 ms-3">
                                                    <strong class="text-color-light">Anne Doe Smith</strong>
                                                    <p class="text-color-light mb-0 text-start">Porto Client</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
                                                <blockquote class="opacity-7 pb-3">
                                                    <p
                                                        class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">
                                                        Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast
                                                        ehicula leo, vel efficitur felis ultrices non cras a elit sit amet
                                                        leo acun volutpat.</p>
                                                </blockquote>
                                                <div class="testimonial-author text-start ps-5 ms-3">
                                                    <strong class="text-color-light">Anne Doe Smith</strong>
                                                    <p class="text-color-light mb-0 text-start">Porto Client</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
                                                <blockquote class="opacity-7 pb-3">
                                                    <p
                                                        class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">
                                                        Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast
                                                        ehicula leo, vel efficitur felis ultrices non cras a elit sit amet
                                                        leo acun volutpat.</p>
                                                </blockquote>
                                                <div class="testimonial-author text-start ps-5 ms-3">
                                                    <strong class="text-color-light">Anne Doe Smith</strong>
                                                    <p class="text-color-light mb-0 text-start">Porto Client</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 p-0 bg-color-quaternary">
                <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0"
                    data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                    data-image-src="{{ asset('file') }}/img/demos/law-firm/backgrounds/background-2.jpg"
                    style="min-height: 450px;">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="p-3 p-relative zindex-1">
                                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter"
                                        data-appear-animation-delay="400">
                                        <h2 class="mb-0 font-weight-bold text-dark">Our History</h2>
                                        <div class="divider divider-primary divider-small mt-2 mb-4">
                                            <hr class="my-0 me-auto">
                                        </div>

                                        <div class="owl-carousel owl-theme dots-align-left dots-dark dots-modern dots-modern-lg pt-3"
                                            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': true}">
                                            <div>
                                                <p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 1985, Opening</p>
                                                <p>Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc
                                                    umsan ipsum velit. Duis sed odio sit amet nibh vulputate cur sus a sit
                                                    amet mauris morbi.</p>
                                                <p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
                                            </div>
                                            <div>
                                                <p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 1988, Law Firm
                                                    Fact</p>
                                                <p>Odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc umsan
                                                    ipsum velit. Duis sed odio sit amet nibh vulputate cur sus a sit amet
                                                    mauris morbi.</p>
                                                <p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
                                            </div>
                                            <div>
                                                <p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 2001, Law Firm
                                                    Fact</p>
                                                <p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc
                                                    umsan ipsum velit. Duis sed odio sit amet nibh vulputate cur sus a sit
                                                    amet mauris morbi.</p>
                                                <p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
                                            </div>
                                            <div>
                                                <p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 2006, Law Firm
                                                    Fact</p>
                                                <p>Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc
                                                    umsan ipsum velit. Duis sed odio sit amet nibh vulputate cur sus a sit
                                                    amet mauris morbi.</p>
                                                <p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <section class="meet-doctors mb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0 mt-5">Profile</p>
                    <h3 class="font-weight-bold  mb-3 text-capitalize">Meet Our Co-ordinators</h3>
                    <div class="owl-carousel owl-theme custom-owl-carousel stage-margin nav-style-1"
                        data-plugin-options="{'items': 5, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div class="text-center">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('file') }}/img/demos/law-firm/team/team-6.png">
                                <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">Mohammad Salim
                                    Miah</strong>
                                <img width="50" height="50"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/bangladesh.svg" alt="" />
                                <p class="text-2 text-primary"
                                    style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Founder and Director
                                </p>
                                <span
                                    class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">
                                    Dhaka, Bangladesh
                                </span>

                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">
                                    smiah_bd@yahoo.com
                                </p>
                            </a>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('file') }}/img/demos/law-firm/team/team-3.jpg">
                                <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">
                                    MD. Najmul Hasan
                                </strong>

                                <img width="50" height="50"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/united-kingdom.svg"
                                    alt="" />
                                <p class="text-2 text-primary"
                                    style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    International Co-Ordinator
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Tottenham, United Kingdom
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">
                                    najmulh@eccollege.org.uk
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">
                                    najmulh@olceurope.com
                                </p>
                            </a>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('file') }}/img/demos/law-firm/team/team-5.jpg">
                                <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">
                                    Mutkijoddha Farida Akter
                                </strong>

                                <img width="50" height="50"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/bangladesh.svg" alt="" />
                                <p class="text-2 text-primary"
                                    style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Founder and Director
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Dhaka, Bangladesh
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">
                                    রোকেয়া পদক প্রাপ্ত নারী কমান্ডার, sector-2, 1971
                                </p>

                            </a>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('file') }}/img/demos/law-firm/team/team-5.jpg">
                                <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">
                                    Monzur Ali
                                </strong>

                                <img width="50" height="50"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/canada.svg" alt="" />
                                <p class="text-2 text-primary"
                                    style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Founder and Director
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Dhaka, Bangladesh
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">
                                    রোকেয়া পদক প্রাপ্ত নারী কমান্ডার, sector-2, 1971
                                </p>

                            </a>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                                <img alt="Doctor" class="img-fluid rounded"
                                    src="{{ asset('file') }}/img/demos/law-firm/team/team-5.jpg">
                                <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">
                                    Pratik Tarafdar
                                </strong>

                                <img width="50" height="50"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/india.svg" alt="" />
                                <p class="text-2 text-primary"
                                    style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Adviser
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important; font-weight: 700">
                                    Kalkata, India
                                </p>
                                <p class="text-2" style="padding: 0 !important; margin: 0 !important">

                                </p>

                            </a>
                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="insurance-providers pt-5 pb-lg-5 bg-color-grey">
        <div class="container my-lg-3 py-lg-2">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">MAJOR BRANDS</p>
                    <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Insurance Providers</h3>
                    <p class="mb-5 d-block text-center appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        imperdiet libero id nisi euismod.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-1.png"
                        alt="Provider">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-2.png"
                        alt="Provider">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-3.png"
                        alt="Provider">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-4.png"
                        alt="Provider">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-5.png"
                        alt="Provider">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex align-items-center justify-content-center mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <img class="img-fluid" src="{{ asset('file') }}/img/demos/medical-2/logos/provider-6.png"
                        alt="Provider">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
