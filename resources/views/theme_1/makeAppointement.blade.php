@extends('theme_1.layout.layout')
@section('title')
    Make Appointment
@endsection

@section('content')
    <section class="section section-default section-no-border my-0" data-therapist="{{ $therapist->id }}">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col-lg-6">
                    <img src="{{ asset('images') }}/default/appointment-bg.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-semibold mb-4">Make Appointment</h4>

                    <form class="contact-form" action="{{ route('appointment.store') }}" method="POST">
                        @csrf

                        @if ($errors->any())
                            <div class="card">
                                <div class="card-body">
                                    @include('alerts.alert')
                                </div>
                            </div>
                        @endif

                        @if (session()->has('appointment'))
                            <div class="alert alert-success">
                                {{ session()->get('appointment') }}
                            </div>
                        @endif


                        <input type="text" name="therapistId" value="{{ $therapist->id }}" hidden required>

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
                        <div x-data>

                            <div class="row">
                                <div class="form-group col">
                                    <input @date-change="()=>{ $store.appointmentslot.weekday = $event.detail}"
                                        id="appointmentDate" type="text" placeholder="Date" value=""
                                        data-msg-required="Please enter the appointment." maxlength="100"
                                        class="form-control" name="appointmentDate" required>
                                </div>
                            </div>
                            <template x-if="$store.appointmentslot.week !== null">

                                <div class="feature-box feature-box-style-2 mb-4">
                                    <div class="text-start">
                                        <p class="text-uppercase text-dark font-weight-bold">Select a Slot</p>

                                        @foreach ($therapist->schedules->groupBy('weekday') as $weekday => $schedules)
                                            <div class="info custom-info pt-0">
                                                @foreach ($schedules as $schedule)
                                                    <template x-if="{!! $schedule->weekday !!} == $store.appointmentslot.week">
                                                        <div class="form-check justify-content-center">
                                                            <input class="form-check-input" type="radio" name="slot"
                                                                id="slot" value="{{ $schedule->slot }}" required>
                                                            <label class="form-check-label" for="slot">
                                                                {{ $schedule->slot }}
                                                            </label>
                                                        </div>
                                                    </template>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </template>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Submit" class="btn btn-primary btn-lg mb-5 w-100"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
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


                    $('#appointmentDate').datepicker({
                        format: 'dd-mm-yyyy',
                        autoclose: true,
                        todayHighlight: true,
                        multidate: true,
                        daysOfWeekDisabled: daysOfWeekDisabled,
                        //    datesDisabled: datesForDisable
                    }).on('changeDate', function(e) {
                        e.target.dispatchEvent(
                            new CustomEvent('date-change', {
                                "detail": new Date(e.date).getDay(),
                            })
                        );
                    });
                },
                error: function(xhr) {
                    console.log(xhr)
                }
            });
        });
    </script>

    <script>
        document.addEventListener('alpine:init', () => {

            Alpine.store('appointmentslot', {
                week: null,

                set weekday(id) {
                    console.log(this.week);
                    return this.week = id;
                },

                get weekday() {
                    return this.week
                },
            });
        })
    </script>
@endpush
