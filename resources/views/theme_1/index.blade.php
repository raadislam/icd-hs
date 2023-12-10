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
                                    data-plugin-options="{'minWindowWidth': 0}">GEST STARTED</a>
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
                    <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="100">Pellentesque ultricies nibh gravida, accumsan libero luctus,
                        molestie nunc. In nibh ipsum, blandit id faucibus ac.</p>
                    <div class="d-flex justify-content-start flex-column flex-xl-row">
                        <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons mb-1 mb-xl-3">
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"><i
                                    class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i
                                    class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                            <li class="text-color-quaternary font-weight-bold appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><i
                                    class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                        </ul>
                        <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons">
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><i
                                    class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><i
                                    class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                            <li class="text-color-quaternary font-weight-bold appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"><i
                                    class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                        </ul>
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
                                src="{{ asset('file') }}/img/demos/law-firm/icons/special-education.svg" alt="" />
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

    <section class="medical-services py-5 p-relative overflow-hidden lazyload"
        data-bg-src="{{ asset('file') }}/img/demos/medical-2/bg/medical2-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col pt-4">
                    <p class="text-uppercase mb-0 text-color-light appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Departments</p>
                    <h3 class="text-color-quaternary mb-2 text-color-light font-weight-bold text-capitalize appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Our Medical Services
                    </h3>
                    <p class="mb-5 text-color-light appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
                        semper.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="cards-medical-services row flex-wrap justify-content-center">
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-cardiology.png"
                                    class="img-fluid mb-5" alt="Cardiology">
                                <h4 style="text-align: center"
                                    class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Research
                                    Consultation Service</h4>
                                <p class="card-text mb-2 text-center">We provide consultation support to the new
                                    researchers in the field of social science for doing their research work. You may seek
                                    proper guidance from our researchers' panel at any stage of your research project.
                                    University faculty and experienced research scholars will guide you individually both
                                    online and offline.
                                </p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-gastroenterology.png"
                                    class="img-fluid mb-5" alt="Gastroenterology">
                                <h4 style="text-align: center"
                                    class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                    Counseling and Psychotherapy
                                </h4>
                                <p class="card-text mb-2 text-center">Six month long part-time course with two months
                                    practical. Appropriate for, parents, teachers and medical professionals.
                                    Classes will be conducted by competent university faculty and practicing counselors.
                                </p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-pulmonology.png"
                                    class="img-fluid mb-5" alt="Pulmonology">
                                <h4 style="text-align: center"
                                    class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Special and
                                    Inclusive Education</h4>
                                <p class="card-text mb-2 text-center">Most suitable course for parents and teachers of
                                    children with special needs. It covers the understanding of all types of disability
                                    their etiology, treatment, and education. No matter whether you are a teacher of a
                                    regular or special school equip yourself with knowledge and skills of dealing with such
                                    children in school or at home. It is an easy-going course, no time needed for study or
                                    exam.</p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-dental.png"
                                    class="img-fluid mb-5" alt="Dental Care">
                                <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                    Special and Inclusive Education</h4>
                                <p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-gynecology.png"
                                    class="img-fluid mb-5" alt="Gynecology">
                                <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Gynecology</h4>
                                <p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                        <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                            <div
                                class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                <img src="{{ asset('file') }}/img/demos/medical-2/icons/icon-hepatology.png"
                                    class="img-fluid mb-5" alt="Hepatology">
                                <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">Hepatology</h4>
                                <p class="card-text mb-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                <a href="demo-medical-2-departments-detail.html"
                                    class="font-weight-semibold text-uppercase text-decoration-none">read more +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col text-center pb-lg-5 mb-lg-5">
                    <p class="text-uppercase text-color-light d-block text-center mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Need a Speciallist?</p>
                    <h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Get Better Now! Just
                        Make An Appointment</h3>
                    <a href="demo-medical-2-contact-us.html"
                        class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">make an appointment</a>
                </div>
            </div>
        </div>

        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-color-light"></div>
            <div class="section-funnel-layer bg-color-light"></div>
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
