@extends('dashboard.main')
@section('content')
    <div class="p-4 container-fluid" bis_skin_checked="1">

        <div class="row" bis_skin_checked="1">
            <div class="col-md-6" bis_skin_checked="1">
                <div class="card card-success collapsed-card" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h3 class="card-title">Create Category</h3>
                        <div class="card-tools" bis_skin_checked="1">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body" bis_skin_checked="1" style="display: none;">
                        <div bis_skin_checked="1">
                            <div bis_skin_checked="1">
                                <form action="{{ route('createFoodCategory') }}" method="POST">
                                    @csrf
                                    <div class="form-group" bis_skin_checked="1">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category"
                                            placeholder="Category Name" name="category" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" bis_skin_checked="1" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-primary" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Add Food To Canteen</h3>
                <div class="card-tools" bis_skin_checked="1">
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                </div>
            </div>

            <div class="card-body" bis_skin_checked="1" style="display: block;">
                <form action="{{ route('storeNewItem') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div bis_skin_checked="1">
                        <div bis_skin_checked="1">
                            <h6 style=" color: red;">* marks are required field</h6>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="image" class="form-label">Cover Image</label>
                                <input class="custom-file" type="file" id="image" name="image" />
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="name">Food Name
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="text" class="form-control" id="name" placeholder="Food Name"
                                    name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Category
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <select class="form-control select2-us" name="food_category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group" bis_skin_checked="1">
                                <label for="cost_price">Cost Price
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>
                                <input type="number" class="form-control" id="cost_price" placeholder="Cost price" required
                                    name="cost_price">
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="selling_price">Sell Price
                                    <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                </label>

                                <input type="number" class="form-control" id="selling_price" placeholder="Sell price"
                                    required name="selling_price">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
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

    @if (Session::has('category'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('category') }}", {
                timeout: 3000
            });
        </script>
    @endif
    @if (Session::has('food_added'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('food_added') }}", {
                timeout: 3000
            });
        </script>
    @endif
@endsection
