@extends('theme_1.layout.layout')
@section('title')
    About us
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn"
                            data-appear-animation-delay="100">About Us</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeIn"
                            data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <p> Mukijoddha Farida Akter Institute of Communication Disorders and Health Sciences(ICDTR) is an
                        organization providing education and health services in the field of health sciences which includes
                        care giving, nursing, therapeutic services, speech therapy, day care, telemedicine, inclusive
                        school, ENT consultation and clinical services , most importantly creating employment opportunities
                        for the people with disabilities. We have experienced team and international consultant to exchange
                        contemporary practices, ideas and knowledge.
                        <br />
                        <br />
                        Our aim is to provide quality education to create skilled health professionals thus providing health
                        & clinical services to the people and to create employment opportunity (Non-Profit) to the person
                        with disabilities is the core area of our activities.
                    </p>
                </div>
            </div>

        </div>

        <div class="container pb-5">
            <div class="lightbox"
                data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="row pt-4 pb-4">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-1.jpg">
                                    <img class="card-img-top border-radius-0"
                                        src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-1.jpg"
                                        alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-2.jpg">
                                    <img class="card-img-top border-radius-0"
                                        src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-2.jpg"
                                        alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-3.jpg">
                                    <img class="card-img-top border-radius-0"
                                        src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-3.jpg"
                                        alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-color-primary">
            <div class="container">
                <div class="row py-2">
                    <div class="col py-5 text-center text-color-light">
                        <p class="text-uppercase text-color-light d-block mb-0 text-center appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Need a Speciallist?
                        </p>
                        <h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Get Better Now! Just
                            Make An Appointment</h3>
                        <a href="{{ route('ourTherapists') }}"
                            class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">make an
                            appointment</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
@endsection
