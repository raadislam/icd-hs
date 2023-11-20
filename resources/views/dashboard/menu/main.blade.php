@extends('dashboard.main')
@section('content')
    <div class="container-md p-3 ">
        <a href={{ route('menu.create') }} alt=''>
            <button type="button" class="btn btn-primary mb-2">Add New</button>
        </a>
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $menu)
                    <tr>
                        <th scope="row">{{ $menu->id }}</th>
                        <td>{{ $menu->title }}</td>
                        <td><img style="width:60px"
                                src="{{ $menu->icon == null ? null : asset('images/menu/' . $menu->icon) }}" /></td>
                        <td>{{ $menu->parent ? $menu->parent->title : 'root' }}</td>
                        <td>{{ $menu->description }}</td>
                        <td class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href={{ route('menu.edit', $menu) }} class="dropdown-item">Edit</a>
                                <form class="dropdown-item" id="delete_form" class="dlt"
                                    action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-none">
                                    <input type="submit" style="all:unset;cursor:pointer" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
