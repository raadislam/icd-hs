@extends('theme_1.layout.layout')
@section('title')
    Reasearch Support
@endsection

@section('content')
    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row mb-2 appear-animation animated fadeInUpShorter appear-animation-visible"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0"
                data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 0ms;" bis_skin_checked="1">
                <h3 class="mt-4 pt-1 mb-0 pb-0"><span class="text-primary">5 &nbsp;&nbsp;</span>Research Consultaion Service
                </h3>
                <div class="divider divider-primary divider-small my-3" bis_skin_checked="1">
                    <hr class="mt-2 me-auto">
                </div>

                <p class="mt-4 mb-2">We provide consultation support to the new researchers in the field of social science
                    for doing their research work. You may seek proper guidance from our researchers' panel at any stage of
                    your research project. University faculty and experienced research scholars will guide you individually
                    both online and offline.</p>

                <div class="row mt-4 pt-2" bis_skin_checked="1">
                    <div class="col-lg-4" bis_skin_checked="1">
                        {{-- <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                            <li style="font-size: 1.1em">
                                <i class="fas fa-clock"></i>&nbsp;
                                Duration:&nbsp;
                            </li>
                            <li style="font-size: 1.1em">
                                <i class="fas fa-coins"></i>&nbsp;
                                Course Fee:&nbsp; 0 TK
                            </li>
                        </ul> --}}

                        <div style="margin-top: 2em" bis_skin_checked="1">
                            <a href="http://icd-hs.test/apply/short-course/7"
                                class="btn btn-secondary btn-modern font-weight-semibold text-3 btn-py-2 px-5 ">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0">Related Instructors</p>
                    <h3 class="font-weight-bold mb-2 text-capitalize">Meet Our Instructors</h3>
                    <p class="mt-0">These Instructors are specialist who are taking calsses.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 pb-4 pb-lg-0" bis_skin_checked="1">
                <div class="card border-0 border-radius-0 box-shadow-1 mb-4" bis_skin_checked="1">
                    <div class="card-body p-3 z-index-1 text-center" bis_skin_checked="1">

                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded"
                                src="{{ asset('file') }}/img/demos/law-firm/team/team-3.jpg"> </a>

                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                MD. Najmul Hasan
                            </a>
                        </strong>

                        <span
                            class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">
                            Instructor
                        </span>

                        {{-- <a href="http://icd-hs.test/make-appointment/4"
                            class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2">
                            Make An Appointment
                        </a> --}}
                    </div>
                </div>
                <hr class="mt-4 mb-5">
            </div>

        </div>
    </section>
@endsection
