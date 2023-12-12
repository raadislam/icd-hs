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
                                <input id="appointmentDate" type="date" placeholder="Phone Number" value=""
                                    data-msg-required="Please enter the phone number." maxlength="100" class="form-control"
                                    name="phoneNumber" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <textarea maxlength="5000" placeholder="Say something about yourself" data-msg-required="Say something about yourself"
                                    rows="5" class="form-control" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5"
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
        var disabledDates = ["2023-12-16", "2023-12-12"];
        for (var i = 0; i < disabledDates.length; i++) {
            var date = disabledDates[i];
            var dateInput = document.getElementById("#appointmentDate");
            dateInput.type = "hidden";
            dateInput.name = "disabledDate";
            dateInput.value = date;
            document.body.appendChild(dateInput);
        }
    </script>
@endsection
