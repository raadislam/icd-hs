@extends('dashboard.main')
@section('content')
    <div class="container-md p-3 ">
        <form action="{{ route('menu.update', $menu) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                    value="{{ $menu->title }}">
            </div>
            <div class="form-group">
                <label for="formFileMultiple" class="form-label">Icon</label>
                <input class="form-control" type="file" id="formFileMultiple" name="icon" />
                {{ $menu->icon }}
            </div>

            <select class="form-select" name="menuType" aria-label="Default select example">
                <option selected value="">Select a Type</option>
                @foreach ($types as $type)
                    <option {{ $menu->parent_id == $type->id ? 'selected' : '' }} value='{{ $type->id }}'>
                        {{ $type->title }}</option>
                @endforeach
            </select>

            <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $menu->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
@endsection
