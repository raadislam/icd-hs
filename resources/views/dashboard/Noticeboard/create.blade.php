@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Therapy</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('noticeboard.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="price">Title
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="fee" placeholder="Notice Title"
                                    name="title" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="description">Description
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea placeholder="Write Course about" id="mytinymceeditor" name="description" required>
                                    Write about notice
                                </textarea>
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

    @if (Session::has('notice_created'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('notice_created') }}", {
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
