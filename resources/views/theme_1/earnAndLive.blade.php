@extends('theme_1.layout.layout')
@section('title')
    About us
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="100">Earn & Leave</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">Earn & Leave</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="text-3-5 text-justify">Our Project <span
                        class="highlight highlight-primary highlight-bg-opacity highlight-animated px-0"
                        data-appear-animation="highlight-animated-start" data-appear-animation-delay="200"
                        data-plugin-options="{'flagClassOnly': true}">“I Owe You” (IOU) </span>is a non-profit
                    project which is specially designed to create employment opportunity for the people with
                    different disabilities, we organize training, provide jobs around the world. We are open to
                    get supports, suggestions, ideas, collaboration from any organizations and persons to create
                    more job opportunities. This is our signature project to ensure a peaceful, secured life for
                    the persons with disabilities. For More information contact us
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
                                    src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-1.jpg" alt="Card Image">
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
                                    src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-2.jpg" alt="Card Image">
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
                                    src="{{ asset('file') }}/img/demos/medical-2/gallery/gallery-3.jpg" alt="Card Image">
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
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Need a Answer?
                    </p>
                    <h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        Wanna know someting about? Just ask
                    </h3>
                    <a href="demo-medical-2-contact-us.html"
                        class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
