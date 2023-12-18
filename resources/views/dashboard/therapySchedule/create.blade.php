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
        $('#slot').datetimepicker({
            format: 'LT'
        });
    </script>
@endpush
