@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Instructor</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('dashboard-course-schedule.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>

                            <div class="form-group">
                                <label>
                                    Course Title
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2" id="course" name="course" required>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Instructor
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2" id="instructor" name="instructor" required>
                                    @foreach ($instructors as $instructor)
                                        <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Days of Course</label>
                                <select class="select2" multiple="multiple" name="weekdays"
                                    data-placeholder="Select a State" style="width: 100%;">
                                    <option value="0">Sunday</option>
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option value="3">Wednesday</option>
                                    <option value="4">Thursday</option>
                                    <option value="5">Friday</option>
                                    <option value="6">Saturday</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">

                                <div style="display: flex; justify-content: space-between" class="row-md-6 row">
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot One:</label>
                                            <label>Start Time</label>
                                            <div class="input-group date" id="slotOneStartTime" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input name="slotOneStartTime" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#slotOneStartTime">
                                                <div class="input-group-append" data-target="#slotOneStartTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot One:</label>
                                            <label>End Time</label>
                                            <div class="input-group date" id="slotOneEndTime" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input name="slotOneEndTime" type="text"
                                                    class="form-control datetimepicker-input" data-target="#slotOneEndTime">
                                                <div class="input-group-append" data-target="#slotOneEndTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div style="display: flex; justify-content: space-between" class="row-md-6 row">
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot Two:</label>
                                            <label>Start Time</label>
                                            <div class="input-group date" id="slotTwoStartTime" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input name="slotTwoStartTime" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#slotTwoStartTime">
                                                <div class="input-group-append" data-target="#slotTwoStartTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot Two:</label>
                                            <label>End Time</label>
                                            <div class="input-group date" id="slotTwoEndTime" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input name="slotTwoStartTime" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#slotTwoEndTime">
                                                <div class="input-group-append" data-target="#slotTwoEndTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between" class="row-md-6 row">
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot Three:</label>
                                            <label>Start Time</label>
                                            <div class="input-group date" id="slotThreeStartTime"
                                                data-target-input="nearest" bis_skin_checked="1">
                                                <input name="slotThreeStartTime" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#slotThreeStartTime">
                                                <div class="input-group-append" data-target="#slotThreeStartTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot Three:</label>
                                            <label>End Time</label>
                                            <div class="input-group date" id="slotThreeEndTime"
                                                data-target-input="nearest" bis_skin_checked="1">
                                                <input name="slotThreeEndTime" type="text"
                                                    class="form-control datetimepicker-input"
                                                    data-target="#slotThreeEndTime">
                                                <div class="input-group-append" data-target="#slotThreeEndTime"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>

            <div class="card-footer" bis_skin_checked="1" style="display: block;">
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        var disabledResults = $(".select2-us");
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
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>

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

    <script>
        $('#slotOneStartTime').datetimepicker({
            format: 'LT'
        });
        $('#slotOneEndTime').datetimepicker({
            format: 'LT'
        });
        $('#slotTwoStartTime').datetimepicker({
            format: 'LT'
        });
        $('#slotTwoEndTime').datetimepicker({
            format: 'LT'
        });
        $('#slotThreeStartTime').datetimepicker({
            format: 'LT'
        });
        $('#slotThreeEndTime').datetimepicker({
            format: 'LT'
        });
    </script>
@endsection
