@extends('theme_1.layout.layout')
@section('title')
    Event
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
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">Events & Schedule</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="container pb-1">
        <div>
            <div class="col">
                <h4 class="mb-0">All Events</h4>

                <div class="col d-flex justify-content-center align-items-center " style="gap: 4em; flex-wrap: wrap ">
                    @foreach ($events as $event)
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox"
                            href="img/projects/project-4.jpg" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src={{ asset('images/events/' . $event->img_url) }} alt="Project Image"
                                width="200">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
