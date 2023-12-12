@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-warning" bis_skin_checked="1">
            <div class="card-header " bis_skin_checked="1">
                <h3 class="card-title">All Books</h3>

            </div>
            <div class="card-body" bis_skin_checked="1">


                <div id="showBookModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" bis_skin_checked="1">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body" bis_skin_checked="1">
                                <div class="card" bis_skin_checked="1">
                                    <div class="card-header" bis_skin_checked="1">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Book Details
                                        </h3>
                                    </div>
                                    <div class="card-body" bis_skin_checked="1">
                                        <dl class="row">
                                            <dt class="col-sm-4">BID</dt>
                                            <dd class="col-sm-8" id="book-id"></dd>
                                            <dt class="col-sm-4">Book Title</dt>
                                            <dd class="col-sm-8" id="book-title"></dd>
                                            <dt class="col-sm-4">Author Name</dt>
                                            <dd class="col-sm-8" id="author-name"></dd>
                                            <dt class="col-sm-4">Category</dt>
                                            <dd class="col-sm-8" id="category"></dd>
                                            <dt class="col-sm-4">Donated By</dt>
                                            <dd class="col-sm-8" id="donated-by"></dd>
                                            <dt class="col-sm-4">ISBN no</dt>
                                            <dd class="col-sm-8" id="isbn-no"></dd>
                                            <dt class="col-sm-4">
                                                <div style="display: flex; flex-direction: column; gap: 2em">
                                                    <span>Preface</span>
                                                    <div style="height: 11em; width: 8em; align-self: center">
                                                        <img id="cover_image" src=""
                                                            style="height: 100%; width: 100%;" alt="">
                                                    </div>
                                                </div>
                                            </dt>
                                            <dd class="col-sm-8" id="preface"></dd>

                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between" bis_skin_checked="1">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-sm-12" bis_skin_checked="1">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="User ID: activate to sort column descending" aria-sort="ascending">
                                            BID
                                        </th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="Name: activate to sort column ascending" aria-sort="ascending">
                                            Title
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending">
                                            Author's Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">
                                            Category</th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Actions: activate to sort column ascending"
                                            style="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr
                                            class="
                                        {{-- @if ($loop->index % 2 == 0) odd @else even @endif  --}}
                                        ">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $book->id }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $book->title }}</td>
                                            <td>{{ $book->author_name }}</td>
                                            <td>{{ $book->category->name }}</td>
                                            <td style="">
                                                <div class="btn-group align-self-center" bis_skin_checked="1">
                                                    <a href="javascript:void(0)" id="show-book"
                                                        onclick="showBookInformation(this);"
                                                        data-url="{{ route('showBookDetails', $book->id) }}">
                                                        <button type="button" class="mx-1 btn btn-info " id="show-book"
                                                            data-toggle="modal" data-target=".bd-example-modal-lg">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a
                                                        href="@if ($book->issuable === 0) # @else {{ route('placeOrder', $book->id) }} @endif ">
                                                        <button type="submit"
                                                            class="mx-1 btn btn-success @if ($book->issuable === 0) disabled @endif">
                                                            <i class="fas fa-cart-plus"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('editBook', $book->id) }}">
                                                        <button type="submit" class="mx-1 btn btn-warning">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('.select2').select2()
        });

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

    <script>
        $(function() {

            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        async function showBookInformation(element) {
            try {
                const dataUrl = element.getAttribute('data-url');
                const response = await fetch(dataUrl);
                const data = await response.json();

                console.log(data.data);

                document.getElementById("book-id").innerText = data.data.id;
                document.getElementById("book-title").innerText = data.data.title;
                document.getElementById("author-name").innerText = data.data.authorName;
                document.getElementById("category").innerText = data.data.categories.category;
                document.getElementById("donated-by").innerText = data.data.donatedBy;
                document.getElementById("preface").innerText = data.data.preface;
                document.getElementById("isbn-no").innerText = data.data.isbn ? data.data.isbn : "No data";
                document.getElementById("cover_image").src = data.data.image ?
                    `{{ asset('images/library/book/${data.data.image}') }}` : `{{ asset('images/no_image.png') }}`;

                console.log(data);
            } catch (error) {
                console.error(`Download error: ${error.message}`);
            }
        }
    </script>
@endsection
