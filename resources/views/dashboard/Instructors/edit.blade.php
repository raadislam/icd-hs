@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
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
                <form action="{{ route('updateBook', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="shelfNo">Shelf No.</label>
                                <input type="text" class="form-control" id="shelfNo" placeholder="Shelf No."
                                    name="shelf_no" value="{{ $book->shelf_no }}">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="publicationDate">Publication Date</label>
                                <input type="date" class="form-control" id="publicationDate"
                                    placeholder="Publication Date" name="publication_date"
                                    value="{{ $book->publication_date }}">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="coverImage" class="form-label">Cover Image</label>
                                <input class="custom-file" type="file" id="cover_image" name="cover_image" />
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="title">Book's Title
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="title" placeholder="Book's Title"
                                    name="books_title" value="{{ $book->title }}" required disabled>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="authorsName">Author's Name
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="authorsName" placeholder="Author's Name"
                                    name="authors_name" value="{{ $book->author_name }}" required disabled>
                            </div>

                            <div class="form-group">
                                <label>Donated By
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="donated_by" required disabled>
                                    @foreach ($donors as $donor)
                                        <!-- <option selected value="1">Hello</option> -->
                                        <option value="{{ $donor->id }}"
                                            @if ($donor->id === $book->donors_id) selected @endif>{{ $donor->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="isbn">ISBN No.</label>
                                <input type="text" class="form-control" id="isbn" placeholder="ISBN No"
                                    name="isbn" value="{{ $book->isbn }}">
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="quantity">Quantity
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="qty" placeholder="Quantity"
                                    name="qty" value="{{ $book->qty }}" required>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="preface">Preface
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <textarea class="form-control" id="preface" rows="5" placeholder="Write Book Preface" name="preface"
                                    required>{{ $book->preface }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Category
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($category->id === $book->category_id) selected @endif>{{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Reader's Level
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="readerlevels_id" required>

                                    @foreach ($readerlvls as $readerlvl)
                                        <option value="{{ $readerlvl->id }}"
                                            @if ($readerlvl->id === $book->readerlevels_id) selected @endif>
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
                                        <input type="radio" name="issuable" id="radioSuccess1" value="1"
                                            @if ($book->issuable === 1) checked @endif>
                                        <label for="radioSuccess1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline" bis_skin_checked="1">
                                        <input type="radio" name="issuable" id="radioSuccess2" value="0"
                                            @if ($book->issuable === 0) checked @endif>
                                        <label for="radioSuccess2"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
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

    @if (Session::has('book_update'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('book_update') }}", {
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
