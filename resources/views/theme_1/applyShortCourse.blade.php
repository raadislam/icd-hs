@extends('theme_1.layout.layout')
@section('title')
    Student Services
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')

<div class="row pt-4 mb-4">
    <div class="col-lg-6">
        <div id="googlemaps" class="google-map m-0 mb-5"></div>
    </div>
    <div class="col-lg-6">

        <h4 class="font-weight-semibold mb-4">Send a Message to Us</h4>

        <form class="contact-form" action="php/contact-form.php" method="POST">
            <div class="contact-form-success alert alert-success d-none mt-4">
                <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="contact-form-error alert alert-danger d-none mt-4">
                <strong>Error!</strong> There was an error sending your message.
                <span class="mail-error-message text-1 d-block"></span>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
                </div>
            </div>
        </form>

    </div>
</div>
@endsection