@extends('theme_1.layout.layout')
@section('title')
    contact-us
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
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">Contact Us</h1>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div role="main" class="main">

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div class="container">

                <div class="row py-4">
                    <div class="col-lg-6">

                        <h4 class="font-weight-bold text-6 mt-2 mb-0">Let's Start a Conversation</h4>
                        <p class="mb-4">Want to get in touch? We'd love to hear from you.Feel free to ask for details,
                            don't save any questions!</p>

                        <form class="contact-form" action="{{ route('contactusSend') }}" method="POST">
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
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control text-3 h-auto py-2 border border-dark"
                                        name="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control text-3 h-auto py-2 border border-dark" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Message</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                        class="form-control text-3 h-auto py-2 border border-dark" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-modern"
                                        data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">

                        <!-- <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                                     <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                            <h4 class="mt-2 mb-1">Corporate <strong>Information</strong></h4>
                            <ul class="list list-icons list-icons-style-2 mt-2">
                                <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong>
                                    3205 Danforth Avenue, Scarborough
                                    ON M1L 1B8 Canada</li>
                                <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong>
                                    416-266-7300
                                </li>
                                <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a
                                        href="mailto:info@brighthillacademy.com"> info@brighthillacademy.com</a></li>
                            </ul>
                        </div>
                        <div class="mb-8">
                            <h4 class="mt-2 mb-1">Social <strong>Links</strong></h4>
                            <ul
                                class="footer-social-icons social-icons social-icons-clean social-icons-icon-primary social-icons-big">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                        title="Facebook"><i class="fab fa-facebook-f text-4-5"></i></a></li>
                                <li class="social-icons-google"><a href="http://www.google.com/" target="_blank"
                                        title="google"><i class="fab fa-google text-4-5"></i></a></li>
                                <li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank"
                                        title="Youtube"><i class="fab fa-youtube text-4-5"></i></a></li>
                            </ul>
                        </div>
                        <div class="mt-4">

                            <div id="googlemaps" class="google-map mt-0" style="height: 200px;"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- <div class="container pt-4 pb-5 mb-3">
                                 <div class="row align-items-center">
                                  <div class="container py-5">
                                   <div class="row">
                                    <div class="col pt-3">

                                     <h3 class="text-color-dark font-weight-bold text-capitalize mb-2">Contact Info</h3>

                                     <div class="d-flex justify-content-between text-center pb-3 pt-4">
                                      <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                       <img width="60" src="{{ asset('file') }}/img/demos/medical-2/icons/icon-location.svg" alt="" />
                                       <h4 class="m-0 pt-4 font-weight-bold text-color-primary">Address</h4>
                                       <p class="m-0">3205 Danforth Avenue, Scarbrough</p>
                                      </div>
                                      <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                       <img width="60" src="{{ asset('file') }}/img/demos/medical-2/icons/icon-phone.svg" alt="" />
                                       <h4 class="m-0 pt-4 font-weight-bold text-color-primary ">Phone Number</h4>
                                       <p class="m-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary">416-2667300</a></p>
                                      </div>
                                      <div class="col-lg-3 col-md-6 pb-4 pb-md-0">
                                       <img width="60" src="{{ asset('file') }}/img/demos/medical-2/icons/icon-envelope.svg" alt="" />
                                       <h4 class="m-0 pt-4 font-weight-bold text-color-primary">E-mail Address</h4>
                                       <p class="m-0"><a href="mailto:info@brighthillacademy.com" class="text-default text-hover-primary">info@brighthillacademy.com</a></p>
                                      </div>
                                     </div>
                                    </div>
                                   </div>

                                   <div class="row">
                                    <div class="col">
                                     <hr class="my-5">
                                    </div>
                                   </div>

                                   <div class="row">
                                    <div class="col">
                                     <h3 class="text-color-dark font-weight-bold text-capitalize mb-2">Send a Message</h3>
                                     <p>Reach Out To Us Any Time And We'll Happily Answer Your Questions</p>
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


                                     <form action="{{ route('contactusSend') }}" method="post" class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">

                                      @csrf

                                      <div class="row">
                                       <div class="form-group col-lg-6">
                                        <input id="name" type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                                       </div>
                                       <div class="form-group col-lg-6">
                                        <input id="email" type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                       </div>
                                      </div>

                                      <div class="row">
                                       <div class="form-group col">
                                        <textarea id="message" placeholder="Your Message..." maxlength="5000"
                                            data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
                                       </div>
                                      </div>
                                      <div class="row">
                                       <div class="form-group col">
                                        <input id="submit" type="submit" value="Send Message" class="btn btn-primary px-4 py-3 text-center text-uppercase font-weight-semibold" data-loading-text="Loading...">
                                       </div>
                                      </div>
                                     </form>
                                    </div>
                                   </div>
                                  </div>
                                 </div>
                                </div> -->

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
@endsection
@section('script')
    <script>
        /*
                                			Map Settings

                                				Find the Latitude and Longitude of your address:
                                					- https://www.latlong.net/
                                					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

                                			*/
        function initializeGoogleMaps() {
            // Map Markers
            var mapMarkers = [{
                address: "Scarborough, ON M1L 1B8, Canada",
                html: "<strong>Canada Office</strong><br>Scarborough",
                icon: {
                    image: "img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                },
                popup: true
            }];

            // Map Initial Location

            var initLatitude = 43.692355347004224;
            var initLongitude = -79.28322854654607;

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    draggable: (($.browser.mobile) ? false : true),
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 11
            };

            var map = $('#googlemaps').gMap(mapSettings);
        }

        // Initialize Google Maps when element enter on browser view
        theme.fn.intObs('.google-map', 'initializeGoogleMaps()', {});

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }
    </script>
@endsection
