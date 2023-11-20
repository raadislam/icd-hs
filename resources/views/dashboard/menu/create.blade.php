@extends('dashboard.main')
@section('content')
    <div class="container-md p-3 ">
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="form-group">
                <label for="formFileMultiple" class="form-label">Icon</label>
                <input class="form-control" type="file" id="formFileMultiple" name="icon" />
            </div>

            <select class="form-select" aria-label="Default select example" name="menuType">
                <option selected value="">Select a Type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                @endforeach

            </select>

            <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
@endsection
