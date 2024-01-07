@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-warning" bis_skin_checked="1">
            <div class="card-header " bis_skin_checked="1">
                <h3 class="card-title">All Courses</h3>
            </div>

            <div class="card-body" bis_skin_checked="1">

                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-sm-12" bis_skin_checked="1">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="SL No: activate to sort column descending" aria-sort="ascending">
                                            SL No
                                        </th>

                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="Title: activate to sort column ascending" aria-sort="ascending">
                                            Title
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Fee: activate to sort column ascending">
                                            Fee
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Type: activate to sort column ascending">
                                            Type
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Type: activate to sort column ascending">
                                            Description
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Actions: activate to sort column ascending"
                                            style="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($therapists as $key => $therapist)
                                        <tr class="
                                        ">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $key + 1 }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $therapist->name }}</td>
                                            <td>{{ $therapist->designation }}</td>
                                            <td>{{ $therapist->phone }}</td>
                                            <td>{{ $therapist->email }}</td>
                                            <td style="">
                                                <div class="btn-group align-self-center" bis_skin_checked="1">


                                                    <a href="{{ route('dashboard-therapist.edit', $therapist->id) }}">
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
