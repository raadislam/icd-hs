@extends('theme_1.layout.layout')
@section('title')
    Student Services
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section section-default section-no-border my-0" data-therapist="{{ $therapist->id }}">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col-lg-6">
                    <div class="google-map m-0 mb-5">
                        <div>
                            <div class="custom-step-item" style="padding: 5em;">

                                <div class="step-content">
                                    {{-- <h4 class="mb-3"><br> <strong>{{ $shortCourses->title }}</strong></h4> --}}
                                    <p> caregiving courses and equip yourself with the skills necessary to provide effective
                                        health and safety care to your clients.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <h4 class="font-weight-semibold mb-4">Make Appointment</h4>

                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <input type="text" placeholder="Your Name" value=""
                                    data-msg-required="Please enter your name." maxlength="100" class="form-control"
                                    name="name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <input type="text" placeholder="Address" value=""
                                    data-msg-required="Please enter your name." maxlength="100" class="form-control"
                                    name="name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <input type="email" placeholder="Your E-mail" value=""
                                    data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <input type="number" placeholder="Phone Number" value=""
                                    data-msg-required="Please enter the phone number." maxlength="100" class="form-control"
                                    name="phoneNumber" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <input type="text" placeholder="Last Academic Background" value=""
                                    data-msg-required="Please enter your name." maxlength="100" class="form-control"
                                    name="name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <input id="appointmentDate" type="text" placeholder="Date" value=""
                                    data-msg-required="Please enter the appointment." maxlength="100" class="form-control"
                                    name="appointmentDate" required>
                            </div>
                        </div>

                        {{-- <div class="col-sm-6" bis_skin_checked="1">
                            <label>
                                Slot
                            </label>
                            <div class="form-group clearfix" bis_skin_checked="1">
                                @foreach ($therapist->schedules->groupBy('weekday') as $weekday => $schedules)
                                    <div class="icheck-success d-inline" bis_skin_checked="1">
                                        <input type="radio" name="issuable" checked="" id="radioSuccess1"
                                            value="1">

                                        <span for="radioSuccess1">{{ jddayofweek($weekday, 1) }} :</span>
                                        @foreach ($schedules as $schedule)
                                            <span>{{ $schedule->slot }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif &nbsp;
                                            </span>
                                        @endforeach
                                    </div>
                                    <br />
                                @endforeach
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="form-group col">
                                <textarea maxlength="5000" placeholder="Say something about yourself" data-msg-required="Say something about yourself"
                                    rows="5" class="form-control" name="description" required></textarea>
                            </div>
                        </div>
                        <h4>Pay Now</h4>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Apply" class="btn btn-primary btn-lg mb-5"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let route = "/get-schedule/" + $("[data-therapist]").data('therapist');
            let token = "{{ csrf_token() }}";

            $.ajax({
                url: route,
                type: 'GET',

                success: (response) => {
                    var daysOfWeekDisabled = [...Array(7).keys()].filter(x => !Object.keys(response
                            .schedules)
                        .includes(
                            '' + x))

                    console.log(daysOfWeekDisabled);

                    $('#appointmentDate').datepicker({
                        format: 'dd-mm-yyyy',
                        autoclose: true,
                        todayHighlight: true,
                        multidate: true,
                        daysOfWeekDisabled: daysOfWeekDisabled
                        //    datesDisabled: datesForDisable
                    });
                },
                error: function(xhr) {
                    console.log(xhr)
                }
            });
        });
    </script>
@endsection
