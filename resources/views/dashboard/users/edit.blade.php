@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">
        <div class="card card-success" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Edit User Information</h3>

            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <div bis_skin_checked="1">
                    <div bis_skin_checked="1">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group" bis_skin_checked="1">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $user->name }}"
                                    name="name" disabled>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $user->email }}"
                                    name="email" disabled>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="uuid">User ID</label>
                                <input type="text" class="form-control" id="uuid" value="{{ $user->uuid }}"
                                    name="uuid" @if ($user->uuid === null) required @else disabled @endif>
                            </div>

                            <div class="form-group">
                                <label>Multiple</label>
                                <select class="select2" multiple="multiple" name="roles[]" data-placeholder="Select a State"
                                    style="width: 100%;">

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if (in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-footer" bis_skin_checked="1" style="display: block;">
            </div>
        </div>
    </div>
@endsection
@section('script')
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
@endsection

{{-- @push('js')
    <script>
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>
@endpush --}}
