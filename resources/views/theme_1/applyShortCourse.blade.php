@extends('theme_1.layout.layout')
@section('title')
    Student Services
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="section section-default section-no-border my-0">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col-lg-6">
                    <div class="google-map m-0 mb-5">
                        <div>
                            <div class="custom-step-item" style="padding: 5em;">

                                <div class="step-content">
                                    <h4 class="mb-3"><br> <strong>{{ $shortCourses->title }}</strong></h4>
                                    <p> caregiving courses and equip yourself with the skills necessary to provide effective
                                        health and safety care to your clients.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">

                    <h4 class="font-weight-semibold mb-4">Apply For This Course</h4>

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
                                <input type="text" placeholder="Last Academic Background Dropdown" value=""
                                    data-msg-required="Please enter your name." maxlength="100" class="form-control"
                                    name="name" required>
                            </div>
                        </div>

                        <div class="col-sm-6" bis_skin_checked="1">
                            <label>
                                Slot
                            </label>
                            <div class="form-group clearfix" bis_skin_checked="1">
                                <div class="icheck-success d-inline" bis_skin_checked="1">
                                    <input type="radio" name="issuable" checked="" id="radioSuccess1" value="1">
                                    <label for="radioSuccess1">
                                        10:00 AM
                                    </label>
                                </div>
                                <div class="icheck-success d-inline" bis_skin_checked="1">
                                    <input type="radio" name="issuable" id="radioSuccess2" value="0">
                                    <label for="radioSuccess2">
                                        3:00 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                        


                        {{-- <div class="row">
                            <div class="form-group col">
                                <input id="appointmentDate" type="text" placeholder="Date" value=""
                                    data-msg-required="Please enter the appointment." maxlength="100" class="form-control"
                                    name="appointmentDate" required>
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
        var datesForDisable = ["12-12-2023", "09-12-2023", "15-12-2023", "08-12-2023"]

        $('#appointmentDate').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
            multidate: true,
            daysOfWeekDisabled: [1, 2, 4]
            //    datesDisabled: datesForDisable
        });
    </script>
@endsection
