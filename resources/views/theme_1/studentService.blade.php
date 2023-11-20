@extends('theme_1.layout.layout')
@section('title')
    Student Services
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
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">Student Services</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="section custom-bg-color-light-2 position-relative border-0 pt-4 m-0">
        <div class="container position-relative z-index-1 mt-3 mb-5">
            <div class="row pb-2 mb-4">
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                    style="animation-delay: 450ms;">
                    <h2 class="font-weight-light text-6 mb-3-5 text-color-dark font-weight-semibold">
                        International
                        Student Support.</h2>

                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-primary top-0">
                            <i class="fas fa-briefcase position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Job Placement</h4>
                            <p class="font-weight-light text-4 mb-3-5 text-color-default">This service places the
                                candidates at the suitable position in best companies
                                according to their expertise and experience.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-dark top-0">
                            <i class="fas fa-id-card position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Work Experience
                            </h4>
                            <p class="font-weight-light text-4 mb-3-5 text-color-default"> This will find a student a
                                suitable work experience placements based on their
                                career aspirations.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-primary top-0">
                            <i class="fas fa-graduation-cap position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Skill Development
                            </h4>
                            <p class="font-weight-light text-4 mb-3-5 text-color-default"> Skills development can reduce un-
                                and underemployment, increase productivity,
                                and improve standards
                                of living.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-dark top-0">
                            <i class="fas fa-handshake position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Job Reference</h4>
                            <p class="font-weight-light text-4 mb-3-5 text-color-default">It gives employers a way to verify your qualifications and experience.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-4/generic/concept-2.png"
                        class="img-fluid appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" alt=""
                        style="animation-delay: 600ms;">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
