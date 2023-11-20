@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">

        <div class="row" bis_skin_checked="1">
            <div class="col-md-6" bis_skin_checked="1">
                <div class="card card-success collapsed-card" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">Create Category</h3>
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
                                <form action="{{ route('category.store') }}" method="POST">
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

            <div class="col-md-6" bis_skin_checked="1">
                <div class="card card-secondary collapsed-card" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">Add Donor</h3>
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
                                <form action="{{ route('donor.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group" bis_skin_checked="1">
                                        <label for="donor">Name/Organization</label>
                                        <input type="text" class="form-control" id="donor"
                                            placeholder="Donor Name or Organization" name="name" required>
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
                <h3 class="card-title">Add Book To Library</h3>
                <div class="card-tools" bis_skin_checked="1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('addToLibrary') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="shelfNo">Shelf No.</label>
                                <input type="text" class="form-control" id="shelfNo" placeholder="Shelf No."
                                    name="shelf_no">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="publicationDate">Publication Date</label>
                                <input type="date" class="form-control" id="publicationDate"
                                    placeholder="Publication Date" name="publication_date">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="coverImage" class="form-label">Cover Image</label>
                                <input class="custom-file" type="file" id="coverImage" name="cover_image" />
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="title">Book's Title
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="title" placeholder="Book's Title"
                                    name="books_title" required>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="authorsName">Author's Name
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="authorsName" placeholder="Author's Name"
                                    name="authors_name" required>
                            </div>

                            <div class="form-group">
                                <label>Donated By
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="donated_by" required>
                                    @foreach ($donors as $donor)
                                        <option value="{{ $donor->id }}">{{ $donor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="isbn">ISBN No.</label>
                                <input type="text" class="form-control" id="isbn" placeholder="ISBN No"
                                    name="isbn">
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="quantity">Quantity
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="quantity" placeholder="Quantity"
                                    name="quantity" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="preface">Preface
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea class="form-control" id="preface" rows="5" placeholder="Write Book Preface" name="preface"
                                    required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Category
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Reader's Level
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="readerlevels_id" required>

                                    @foreach ($readerlvls as $readerlvl)
                                        <option value="{{ $readerlvl->id }}">
                                            {{ $readerlvl->name }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="col-sm-6" bis_skin_checked="1">
                                <label>Is this book issuable ?
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <div class="form-group clearfix" bis_skin_checked="1">
                                    <div class="icheck-success d-inline" bis_skin_checked="1">
                                        <input type="radio" name="issuable" checked="" id="radioSuccess1"
                                            value="1">
                                        <label for="radioSuccess1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline" bis_skin_checked="1">
                                        <input type="radio" name="issuable" id="radioSuccess2" value="0">
                                        <label for="radioSuccess2"> No
                                        </label>
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

    @if (Session::has('category'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('category') }}", {
                timeout: 3000
            });
        </script>
    @endif

    @if (Session::has('book_added'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('book_added') }}", {
                timeout: 3000
            });
        </script>
    @endif
    @if (Session::has('donor_created'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('donor_created') }}", {
                timeout: 3000
            });
        </script>
    @endif
@endsection

{{-- @push('js')
    <script>
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>
@endpush --}}
