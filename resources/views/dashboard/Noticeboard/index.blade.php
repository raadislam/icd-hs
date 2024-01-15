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
                                            colspan="1" aria-label="Type: activate to sort column ascending">
                                            Description
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notices as $key => $notice)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $key + 1 }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $notice->title }}</td>
                                            <td>{!! $notice->description !!}</td>

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
@endsection
