@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-warning" bis_skin_checked="1">
            <div class="card-header " bis_skin_checked="1">
                <h3 class="card-title">All Users</h3>
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
                                            colspan="1" aria-label="Name: activate to sort column ascending">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">
                                            Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Role: activate to sort column ascending"
                                            style="">Role</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Actions: activate to sort column ascending"
                                            style="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr
                                            class="
                                        {{-- @if ($loop->index % 2 == 0) odd @else even @endif  --}}
                                        ">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $user->uuid }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="" style="">
                                                @foreach ($user->roles as $role)
                                                    {{ $role->name }} {{ !$loop->last ? ', ' : '' }}
                                                @endforeach
                                            </td>
                                            <td style="">
                                                <div class="btn-group align-self-center" bis_skin_checked="1">
                                                    <a href="{{ route('users.edit', $user->id) }}" class="">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>

                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
    @if (Session::has('user_delete'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('user_delete') }}", {
                timeout: 3000
            });
        </script>
    @endif
    @if (Session::has('user_update'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('user_update') }}", {
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
