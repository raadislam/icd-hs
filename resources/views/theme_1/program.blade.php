@extends('theme_1.layout.layout')
@section('title')
    After School Program
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
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">After School Program </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-3 my-5-5">
        <div class="container container-xl-custom mt-4">
            <div class="row justify-content-center justify-content-lg-around align-items-lg-center ">
                <div class=" col-lg-7 col-xl-5 mb-5 mb-lg-0">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-4/generic/stem-education.png"
                        class="img-fluid position-relative z-index-1 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" alt="Our Company" />
                </div>
                <div class="col-md-10 col-lg-5">
                    <div class="row">
                        <div class="col align-content-lg-end">
                            <div class="overflow-hidden">
                                <h2 class="font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" style="animation-delay: 100ms;"
                                    style="letter-spacing: 0.01em">
                                    STEM education
                                </h2>
                                <p class="font-weight-light text-3-5 mb-3-5 text-color-default appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" data-appear-animation-delay="200"
                                    style="animation-delay: 200ms;">
                                    STEM is an approach to learning and development that integrates the areas of science,
                                    technology, engineering and mathematics
                                    Through STEM, students develop key skills including: problem solving.

                                <div class="d-flex justify-content-between align-content-center ">
                                    <ul class="list list-icons list-icons-style-2 list-icons-lg appear-animation animated fadeInRightShorter appear-animation-visible"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Science
                                        </li>
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Technology
                                        </li>
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Engineering
                                        </li>
                                    </ul>
                                    <ul class="list list-icons list-icons-style-2 list-icons-lg appear-animation animated fadeInRightShorter appear-animation-visible"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Mathematics
                                        </li>
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Coding
                                        </li>
                                        <li class="font-weight-light text-3-5 mb-3-5 text-color-default">
                                            <i class="fas fa-check border-width-2 text-3"></i>Programming
                                        </li>
                                    </ul>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section position-relative overflow-hidden border-0 m-0">
        <div class="container pt-5-5 pb-5 mb-3">
            <div class="row mb-5-5">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        Tutoring
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="550"
                    style="animation-delay: 550ms;">
                    <div class="d-flex">
                        <i class="icon-featured icon-doc icons text-color-dark text-12-13 bg-color-grey"></i>
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Prepare Class
                                Assignment</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">An assignment is a piece of (academic) work or
                                task. It provides opportunity for students to learn, practice and demonstrate they have
                                achieved the learning goals. It provides the evidence for the teacher that the students have
                                achieved the goals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750"
                    style="animation-delay: 750ms;">
                    <div class="d-flex">
                        <i class="icon-featured icon-graph icons text-color-dark text-12-13 bg-color-grey"></i>
                        <div class="ps-3">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Math Skill
                                Development</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Mathematical skills are conceptualized as a
                                separate area that includes verbal components (number knowledge, counting, computation, and
                                reasoning) and nonverbal components (math notation, reasoning in time and space, and
                                computation).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950"
                    style="animation-delay: 950ms;">
                    <div class="d-flex">
                        <i class="icon-featured icon-user icons text-color-dark text-12-13 bg-color-grey"></i>
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Tutoring Science,
                                Math etc.</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Tutoring can help strengthen subject comprehension,
                                boost confidence, and build important learning skills. Tutoring gives students
                                individualized attention that they don't get in a crowded classroom. This helps children who
                                struggle to keep up, as well as those who aren't challenged enough.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute transform3dy-n50 right-0 pe-5 me-4">
            <div class="appear-animation animated fadeInRightShorterPlus appear-animation-visible"
                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1700"
                data-appear-animation-duration="750ms" style="animation-delay: 1700ms;">
                <div class="custom-square-1 bg-primary mb-5"></div>
            </div>
        </div>
        <div class="position-absolute transform3dy-n50 right-15 pe-5 me-5">
            <div class="appear-animation animated fadeInRightShorterPlus appear-animation-visible"
                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500"
                data-appear-animation-duration="750ms" style="animation-delay: 1500ms;">
                <div class="custom-square-1 bg-dark pe-5 me-5 mt-4 mb-5"></div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
