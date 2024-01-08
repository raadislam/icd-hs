@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Edit Therapist</h3>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('dashboard-therapist.update', $therapist->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div x-data bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="name">Name
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" value="{{ $therapist->name }}" class="form-control" id="name"
                                    placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="email">Email
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="email" value="{{ $therapist->email }}" class="form-control" id="email"
                                    placeholder="email" name="email" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="designation">Designation
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" value="{{ $therapist->designation }}" class="form-control"
                                    id="designation" placeholder="Your Designation" name="designation">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="qualification">Qualifications
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" value="{{ $therapist->qualification }}"
                                    id="qualification" placeholder="Your qualification" name="qualification">
                            </div>

                            {{-- <div class="form-group">
                                <label>Category</label>
                                <select @category-change="()=>{ $store.categoryBox.categoryId = $event.detail.category_id}"
                                    class="select2" name="category" id="category" data-placeholder="Select a State"
                                    style="width: 100%;">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($therapist->category_id == $category->id) selected @endif>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div>
                                <template x-if="$store.categoryBox.category_id">
                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select class="select2" name="subCategory" data-placeholder="Select a State"
                                            style="width: 100%;">
                                            <template x-for="subcategory in $store.categoryBox.subCategories">
                                                <option x-text="subcategory.name" x-model="subcategory.id"></option>
                                            </template>
                                        </select>
                                    </div>
                                </template>
                            </div> --}}


                            <div class="form-group" bis_skin_checked="1">
                                <label for="address">Address
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" value="{{ $therapist->address }}" class="form-control" id="address"
                                    placeholder="Address" name="address">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="phone_number">Phone Number
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" value="{{ $therapist->phone }}" class="form-control" id="phone_number"
                                    placeholder="Phone Number" name="phone_number">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="dob">Date of Birth</label>
                                <input type="date" value="{{ date('Y-d-m', strtotime($therapist->dob)) }}"
                                    class="form-control" id="dob" placeholder="Date of Birth" name="dob">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="price">NID
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" value="{{ $therapist->nid }}" class="form-control" id="nid"
                                    placeholder="NID" name="nid">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" bis_skin_checked="1">
                                        <label for="profilePicture" class="form-label">
                                            Profile Picture
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <input class="custom-file" type="file" id="profilePicture" name="img" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center align-items-center w-100">
                                    <img alt="event" class="img-fluid rounded"
                                        src="{{ asset('images') }}/therapist/{{ $therapist->img }}">
                                </div>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="about">About
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea placeholder="Write Course about" id="mytinymceeditor" name="about" required>
                                    {{ $therapist->about }}
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
        $(function() {
            // Initialize Sub Category Elements Change
            $('#category').select2().on('select2:select', function(e) {
                e.target.dispatchEvent(
                    new CustomEvent('category-change', {
                        "detail": {
                            category_id: e.params.data.id
                        }
                    })
                );
            });

        })

        document.addEventListener('alpine:init', () => {

            Alpine.store('categoryBox', {
                subCategories: {},
                category_id: null,

                set categoryId(id) {
                    this.category_id = id;
                    this.update()

                },

                get categoryId() {
                    return this.category_id
                },

                update() {

                    let route = "/admin/sub-category/" + this.category_id;
                    let token = "{{ csrf_token() }}";

                    $.ajax({
                        url: route,
                        type: 'GET',

                        success: (response) => {
                            console.log(response.subCategories);
                            $('.select2').select2()
                            this.subCategories = response.subCategories
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });

                }
            });
        })
    </script>


    <script>
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>

    @if (Session::has('therapist_edited'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('therapist_edited') }}", {
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
    <script>
        $('#timepicker').datetimepicker({
            format: 'LT'
        });
    </script>
@endsection
