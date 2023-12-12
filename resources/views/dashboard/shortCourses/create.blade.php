@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Short Course</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                {{-- action="{{ route('addToLibrary') }}" method="POST" enctype="multipart/form-data" --}}
                <form action="{{ route('dashboard-short-course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Course Title"
                                    name="title">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="price"> Price
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="price" placeholder="Course Price"
                                    name="price" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" placeholder="Course Duration"
                                    name="duration">
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
@endsection
