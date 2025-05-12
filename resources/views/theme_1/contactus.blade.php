@extends('theme_1.layout.layout')
@section('title')
    contact-us
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <div class="custom-page-wrapper pt-5 pb-1">
        <div class="container container-xl-custom pb-5 mb-5">
            <div class="row pb-3">
                <div class="col-lg-6 position-relative">

                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="200">WE'RE HERE TO HELP</h2>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="400">Ask Your Quetions Here</h3>
                    </div>
                    <img src="{{ asset('file') }}/img/demos/architecture-2/divider.jpg"
                        class="img-fluid opacity-5 mb-4 mt-2 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                        data-appear-animation-delay="600" alt="" />

                    <p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="800">Our aim is to provide quality education to create skilled health
                        professionals thus providing health & clinical services to the people and to create employment
                        opportunity (Non-Profit) to the person with disabilities is the core area of our activities. </p>
                    <div class="row">

                        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="1200">
                            <h4
                                class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                Address</h4>
                            <p class="mb-0">89/17 New Chashara, Muktijoddha Farida Akter Road,Chanmari, <br>(West Side
                                of
                                Proposed N.ganj DOHS) Narayanganj-1400, Bangladesh.</p>
                            <h4
                                class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                Email</h4>
                            <a href="mailto:info@ICDTR.com"
                                class="text-decoration-none text-color-default text-color-hover-primary">info@ICDTR.com</a>
                        </div>
                        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="1400">
                            <h4
                                class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                Opening Hours
                            </h4>
                            <p class="mb-0">Sat - Thu 8:00am - 5:00pm<br>Friday - CLOSED</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden mb-4 mt-4">
                        <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="1800">Send a Message</h3>
                    </div>
                    <form class="contact-form custom-form-style-1 appear-animation" action="{{ route('contactusSend') }}"
                        method="POST" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2000">
                        @csrf

                        @if ($errors->any())
                            <div class="card">
                                <div class="card-body">
                                    @include('alerts.alert')
                                </div>
                            </div>
                        @endif

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="form-group col mb-3">
                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control border-radius-0" name="name" id="name"
                                    required placeholder="Name *" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group col mb-3">
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control border-radius-0" name="email" id="email" required
                                        placeholder="E-mail *" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group col mb-3">
                                    <input type="text" value="" data-msg-required="Please enter your phone number."
                                        maxlength="100" class="form-control border-radius-0" name="phone" id="phone"
                                        required placeholder="Phone *" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-3">
                                <input type="text" value="" data-msg-required="Please enter your subject."
                                    maxlength="100" class="form-control border-radius-0" name="subject" id="subject"
                                    required placeholder="Subject *" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-4">
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                    class="form-control border-radius-0" name="message" id="message" required placeholder="Message *" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-0">
                                <button type="submit"
                                    class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3"
                                    data-loading-text="Loading...">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
