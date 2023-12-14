@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Therapy</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('dashboard-therapy.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>


                            <div class="form-group" bis_skin_checked="1">
                                <label for="price">Title
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="fee" placeholder="Course Title"
                                    name="title" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="fee"> Fee
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="fee" placeholder="Course Fee"
                                    name="fee" required>
                            </div>

                            {{-- <div class="form-group">
                                <label>Instructor</label>
                                <select class="select2" multiple="multiple" name="donors" data-placeholder="Select a State"
                                    style="width: 100%;">
                                    <option value="1">Mr X</option>
                                    <option value="1">Mr Y</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Days of Course</label>
                                <select class="select2" multiple="multiple" name="donors" data-placeholder="Select a State"
                                    style="width: 100%;">
                                    <option value="0">Sunday</option>
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option value="3">Wednesday</option>
                                    <option value="4">Thursday</option>
                                    <option value="5">Friday</option>
                                    <option value="6">Saturday</option>
                                </select>
                            </div>

                            <div class="col-md-6">

                                <div class="row-md-6 row">

                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                            <label>Slot One:</label>
                                            <label>Start Time</label>
                                            <div class="input-group date" id="timepicker" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#timepicker">
                                                <div class="input-group-append" data-target="#timepicker"
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
                                            <div class="input-group date" id="timepicker" data-target-input="nearest"
                                                bis_skin_checked="1">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#timepicker">
                                                <div class="input-group-append" data-target="#timepicker"
                                                    data-toggle="datetimepicker" bis_skin_checked="1">
                                                    <div class="input-group-text" bis_skin_checked="1"><i
                                                            class="far fa-clock"></i></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group" bis_skin_checked="1">
                                <label for="description">Description
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea class="form-control" id="description" rows="5" placeholder="Write Course Description" name="description"
                                    required></textarea>
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

    @if (Session::has('therapy'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('therapy') }}", {
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
        $('#timepicker').datetimepicker({
            format: 'LT'
        });
    </script>
@endsection
