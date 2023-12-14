@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Therapist</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('dashboard-therapist.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="name">Name
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    required>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="email">Email
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email"
                                    required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="address">Address
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="address" placeholder="Address"
                                    name="address" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="phone_number">Phone Number
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="phone_number" placeholder="Phone Number"
                                    name="phone_number" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" placeholder="Date of Birth"
                                    name="dob">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="price">NID
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="nid" placeholder="NID" name="nid"
                                    required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="profilePicture" class="form-label">
                                    Profile Picture
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input class="custom-file" type="file" id="profilePicture" name="img" />
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="about">About
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea class="form-control" id="about" rows="5"
                                    placeholder="Say Something About You and Your Qualifications" name="about" required></textarea>
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

    @if (Session::has('therapist_added'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('therapist_added') }}", {
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
