@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Therapy Schedule</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">

                <div bis_skin_checked="1">
                    <div bis_skin_checked="1">
                        <h6 style=" color: red;">* marks are required field</h6>

                        <div class="form-group">
                            <label>
                                Therapy Title
                                <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                            </label>
                            <select class="form-control select2" id="therapy" name="therapy" required>
                                @foreach ($therapies as $therapy)
                                    <option value="{{ $therapy->id }}">{{ $therapy->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>
                                Therapist
                                <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                            </label>
                            <select class="form-control select2" id="therapist" name="therapist" required>
                                @foreach ($therapists as $therapist)
                                    <option value="{{ $therapist->id }}">{{ $therapist->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @include('dashboard.schedule.planner')


                        <button id="schedule-table-modal-btn" type="submit" class="btn btn-primary mt-3">
                            Make Schedule
                        </button>
                    </div>
                </div>
                <div>
                    <div x-if="$store.slotModal.show">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" bis_skin_checked="1">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" bis_skin_checked="1">
                                        <div class="bootstrap-timepicker" bis_skin_checked="1">
                                            <div class="form-group" bis_skin_checked="1">
                                                <div class="input-group date" id="slot" data-target-input="nearest"
                                                    bis_skin_checked="1">
                                                    <input name="slot" type="text"
                                                        class="form-control datetimepicker-input" data-target="#slot">
                                                    <div class="input-group-append" data-target="#slot"
                                                        data-toggle="datetimepicker" bis_skin_checked="1">
                                                        <div class="input-group-text" bis_skin_checked="1">
                                                            <i class="far fa-clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between" bis_skin_checked="1">
                                        <button id="slot-add" type="button" class="btn btn-default">ADD</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer" bis_skin_checked="1" style="display: block;">
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        var disabledResults = $(".weekdaysSlotOne");
        disabledResults.select2();
    </script>

    @if (Session::has('instructor_added'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('instructor_added') }}", {
                timeout: 3000
            });
        </script>
    @endif



    <script>
        $(function() {
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

            // Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            var slotTarget = null;
            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);

                $('#slot-add').on('click', function(e) {

                    $('#schedule-modal').modal('hide')

                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var value = $('input.datetimepicker-input').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();
                    var weekday = $(slotTarget).attr('data-id');


                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: therapist,
                            therapy_id: therapyId,
                            weekday: weekday,
                            slot: value,
                        },
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });


                    var slotElement = `<span class='timeslot'> ${value} &nbsp;&#9747;</span>`;
                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);
                    $slotModal.modal('hide');
                    $('#schedule-modal').modal('show')
                });

            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
                $('#schedule-modal').modal('hide')
            });

            $(document).on('click', '#schedule-table-modal-btn', function(e) {
                var $scheduleModal = $('#schedule-modal').modal({
                    show: true
                })

                let route = "{{ route('getschedule') }}";
                let token = "{{ csrf_token() }}";

                var therapist = $('#therapist').val();
                var therapyId = $('#therapy').val();
                console.log(therapist)

                $.ajax({
                    url: route,
                    type: 'GET',
                    data: {
                        _token: token,
                        therapist_id: therapist,
                        therapy_id: therapyId,
                    },
                    success: function(response) {
                        $('.modal-body').val(response)
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr)
                    }
                });

            })
        });
    </script>



    <script>
        $(document).on("click", '.timeslot', function(e) {
            var id = $(e.target).attr("data-id");
            let route = "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
            route = route.replace(':dashboard_therapy_schedule', id)

            $.ajax({
                url: route,
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

            $(e.target).remove();
        });
    </script>

    <script>
        $('#slot').datetimepicker({
            format: 'LT'
        });
    </script>
@endpush
