@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">

        
        <div class="row" bis_skin_checked="1">
            <div class="col-md-6" bis_skin_checked="1">
                <div class="card card-success collapsed-card" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">Create Course Title</h3>
                        <div class="card-tools" bis_skin_checked="1">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body" bis_skin_checked="1" style="display: none;">
                        <div bis_skin_checked="1">
                            <div bis_skin_checked="1">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="form-group" bis_skin_checked="1">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category"
                                            placeholder="Category Name" name="category" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" bis_skin_checked="1" style="display: none;">
                    </div>
                </div>
            </div>

           
        </div>

        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Short Course</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('dashboard-short-course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>
                            <div class="form-group">
                                <label>Title</label>
                                <select class="select2" multiple="multiple" name="donors"
                                    data-placeholder="Select a State" style="width: 100%;">
                                    <option value="1">Course one</option>
                                    <option value="1">Course two</option>
                                    <option value="1">Course three</option>
                                </select>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="price"> Price
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="price" placeholder="Course Price"
                                    name="price" required>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <select class="select2" multiple="multiple" name="donors"
                                    data-placeholder="Select a State" style="width: 100%;">
                                    <option value="1">On-Site</option>
                                    <option value="1">Online</option>
                                    <option value="1">Blended</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Instructor</label>
                                <select class="select2" multiple="multiple" name="donors"
                                    data-placeholder="Select a State" style="width: 100%;">
                                    <option value="1">Mr X</option>
                                    <option value="1">Mr Y</option>
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Days of Course</label>
                                <select class="select2" multiple="multiple" name="donors"
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
                            <div class="col-md-6">

                                <div class="row-md-6 row">
    
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                        <label>Slot One:</label>
                                        <label>Start Time</label>
                                        <div class="input-group date" id="timepicker" data-target-input="nearest" bis_skin_checked="1">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker" bis_skin_checked="1">
                                        <div class="input-group-text" bis_skin_checked="1"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                        
                                        </div>
                                        
                                        </div>
                                    <div class="bootstrap-timepicker" bis_skin_checked="1">
                                        <div class="form-group" bis_skin_checked="1">
                                        <label>Slot One:</label>
                                        <label>End Time</label>
                                        <div class="input-group date" id="timepicker" data-target-input="nearest" bis_skin_checked="1">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker" bis_skin_checked="1">
                                        <div class="input-group-text" bis_skin_checked="1"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                        
                                        </div>
                                        
                                        </div>
                                </div>
                            </div>
                          
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

    @if (Session::has('short_course'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('short_course') }}", {
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
