@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-warning" bis_skin_checked="1">
            <div class="card-header " bis_skin_checked="1">
                <h3 class="card-title">Borrowers Table</h3>
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
                                            aria-label="User ID: activate to sort column descending" aria-sort="ascending">
                                            User ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending">
                                            Name - Session - Class
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">
                                            Book Title
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Role: activate to sort column ascending"
                                            style="">
                                            Issue Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Role: activate to sort column ascending"
                                            style="">
                                            Return Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Actions: activate to sort column ascending"
                                            style="">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($borrowers as $borrower)
                                        <tr class="">
                                            <form action="{{ route('borrowers.update', $borrower->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $borrower->studentInformation->user_id }}
                                                </td>
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $borrower->studentInformation->first_name }}
                                                    {{ $borrower->studentInformation->last_name }} -
                                                    {{ $borrower->studentInformation->session_name }} -
                                                    {{ $borrower->studentInformation->class_name }}
                                                </td>
                                                <td>{{ $borrower->bookInformation->title }}</td>
                                                <td>{{ $borrower->created_at }}</td>
                                                <td>{{ $borrower->return_date }}</td>
                                                <td style="">
                                                    <button type="submit" class="btn btn-success">
                                                        Recieved
                                                    </button>
                                                </td>
                                            </form>
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
    </script>

    @if (Session::has('book_returned'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('book_returned') }}", {
                timeout: 3000
            });
        </script>
    @endif

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
@endsection
