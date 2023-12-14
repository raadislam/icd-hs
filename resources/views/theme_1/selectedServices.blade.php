@extends('theme_1.layout.layout')
@section('title')
Services
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            @foreach ($shortCourses as $key => $shortCourse)
                <div class="row mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                    <h3 class="mt-4 pt-1 mb-0 pb-0"><span
                            class="text-primary">{{ $key + 1 }} &nbsp;&nbsp;</span>{{ $shortCourse->title }}</h3>
                    <div class="divider divider-primary divider-small my-3">
                        <hr class="mt-2 me-auto">
                    </div>

                    <p class="mt-4 mb-2">{{ $shortCourse->description }}</p>

                    <div class="row mt-4 pt-2">
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
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
                                <a href={{ route('shortCourseRegistration', $shortCourse->id) }}
                                    class="btn btn-secondary btn-modern font-weight-semibold text-3 btn-py-2 px-5 ">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
