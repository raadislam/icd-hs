@extends('theme_1.layout.layout')
@section('title')
    Introduction
@endsection
@section('meta')
@endsection
@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ms-0">
                            <a href="blog-post.html">
                                <img src="{{ asset('file') }}/img/default/daycare.jpg"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>


                        <div class="post-content ms-0">

                            <h2 class="font-weight-bold text-primary my-3">
                                Introducing To Our Day Care Services & Policies
                            </h2>

                            {{--
                            <div class="row">
                                <div class="col">
                                    <h4>"We begin with the end in mind"</h4>

                                    <blockquote>
                                        <footer>Stephen Covey <cite title="Source Title">www.ikes-world.com</cite></footer>
                                    </blockquote>
                                    <hr class="solid my-5">
                                </div>
                            </div> --}}



                            <p class='bottom-6 text-dark quote-read-short' style='text-align: justify;'>

                                Many Parents are not able to take care of them at home during working hours. With a view to
                                supporting these parents ICD-HS has established a Daycare Center. These policy guidelines
                                will help function the ICD-HS Daycare in a professional manner.
                                <br>
                                <br>
                                <strong>
                                    Mission:
                                </strong>
                            <ol class="list list-ordened">
                                <li>To provide parental care of the children so that they can contribute dedicated time to
                                    the work without any mental stress</li>
                                <li>To provide pre-school learning facilities of these children in a congenial atmosphere
                                    with fun and interactions</li>
                            </ol>

                            <strong>
                                Selection Criteria:
                            </strong>
                            <br>
                            Children from the age of minimum 3 months up to the age of maximum10 are eligible to avail
                            the services of the ICD-HS Daycare.
                            <br>
                            <br>
                            <strong>
                                Our Vision:
                            </strong>
                            <br>
                            <ol class="list list-ordened">
                                <li>One-stop daycare service and pre-education.</li>
                                <li>Run by national and internationally experienced persons.</li>
                                <li>Expert teachers and caring persons.</li>
                                <li>Complete parental care and environment.</li>
                                <li>Necessary service for mental, social, physical growth/ development of the child.</li>
                                <li>Best fit room, toys and environment for a particular age group.</li>
                                <li>High security and CCTV controlled zone.</li>
                                <li>Right information pass to the guardians/ parents.</li>
                                <li>Air-Conditioned, Spacious room.</li>
                                <li>Fire extinguisher, First aid and hygienic environment.</li>
                                <li>Necessary instant medical support.</li>
                            </ol>
                            <strong>
                                ICD-HS will provide the following services:
                            </strong>
                            <br>
                            <br>
                            <ol class="list list-ordened">
                                <li>Daycare services for the child of 3-months to less than 10 years.</li>
                                <li>Pre-school play services for the child above 2 years to 5 years.</li>
                                <li>Daycare services for the children above 4 years up to 10 years.</li>
                                <li>Reading room facility for children above 3 years.</li>
                                <li>Open from 7: 30 am to 6:30 pm (Full time and Part-time).</li>
                                <li>Preschool 9:00am - 10:30am and 11: 00am- 12:30pm.</li>
                                <li>Interactive learning through Music and Movement.</li>
                                <li>Creative activity and educational game.</li>
                                <li>Certified Trainer.</li>
                            </ol>
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
@endsection
@section('script')
@endsection
