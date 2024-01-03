@extends('theme_1.layout.layout')
@section('title')
    Services
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section bg-transparent section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">Services</h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="feature-box feature-box-style-2 mb-5 appear-animation" data-appear-animation="fadeInUp"
                            data-appear-animation-delay="0">
                            <div class="feature-box-icon mt-3">
                                <img width="50" height="50" src="{{ asset('images') }}/therapy/{{ $service->icon }}"
                                    alt="" />
                            </div>
                            <div class="feature-box-info ms-3">
                                <h4 class="mb-2">{{ $service->title }}</h4>
                                <p class="quote-read-short" style="text-align: justify">{!! $service->description !!}</p>
                                {{-- <a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn
                                More<img width="27" height="27"
                                    src="{{ asset('file') }}/img/demos/law-firm/icons/arrow-right.svg" alt=""
                                    data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a> --}}


                                <div style="margin-top: 2em">
                                    <a href="{{ route('viewTherapy', $service->id) }}"
                                        class="btn btn-dark btn-outline ms-2 font-weight-extra-bold text-3 px-5 py-2 border-width-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter">
                                        READ MORE
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        .quote-read-short {
            display: -webkit-box;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endpush
