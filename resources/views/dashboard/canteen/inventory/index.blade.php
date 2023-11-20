@extends('dashboard.main')
@section('content')
    <div class="content-wrapper p-4 container-fluid" style="min-height: 1113.69px; margin: 0 !important" bis_skin_checked="1">
        <section class="content">
            <div class="container-fluid" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-md-7" bis_skin_checked="1">
                        <div class="card card-warning" bis_skin_checked="1">
                            <div class="card-header " bis_skin_checked="1">
                                <h3 class="card-title">Enlist Today's Inventory</h3>
                            </div>

                            <div class="card-body" bis_skin_checked="1">
                                <form action="{{ route('inventory.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="canteen_product_id">Food
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <select class="form-control select2-us" name="canteen_product_id" required>
                                            @foreach ($canteenProducts as $canteenProduct)
                                                <option value="{{ $canteenProduct->id }}">
                                                    {{ $canteenProduct->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" bis_skin_checked="1">
                                        <label for="qty">Quantity
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <input type="number" class="form-control" id="qty" placeholder="Quantity"
                                            required name="qty">
                                    </div>

                                    <div class="col-sm-6" bis_skin_checked="1">
                                        <label>Is this product reusable ?
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <div class="form-group clearfix" bis_skin_checked="1">
                                            <div class="icheck-success d-inline" bis_skin_checked="1">
                                                <input type="radio" name="reusable" id="radioSuccess1" value="1">
                                                <label for="radioSuccess1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline" bis_skin_checked="1">
                                                <input type="radio" name="reusable" checked="" id="radioSuccess2"
                                                    value="0">
                                                <label for="radioSuccess2"> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" bis_skin_checked="1">
                        <div class="card card-danger" bis_skin_checked="1">
                            <div class="card-header " bis_skin_checked="1">
                                <h3 class="card-title">Inventory</h3>
                            </div>
                            <div class="card-body" bis_skin_checked="1" id="inventor-panel">
                                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;"
                                    bis_skin_checked="1">
                                    <div class="" style="padding: 0% !important">
                                        <table style="width: 100%">
                                            <tr>
                                                <th class="font-bold" style="width: 60%">
                                                    Name
                                                </th>
                                                <th class="font-bold" style="width: 20%">
                                                    Quantity
                                                </th>
                                                <th class="font-bold" style="width: 20%">
                                                    Selling Price
                                                </th>
                                            </tr>
                                            <div class="jsgrid-grid-body" bis_skin_checked="1">
                                                <table class="jsgrid-table">
                                                    <tbody>
                                                        @if ($inventoryProducts->isEmpty())
                                                            <span>
                                                                {{ 'Nothing Found In Inventories' }}
                                                            </span>
                                                        @endif
                                                        @foreach ($inventoryProducts as $inventoryProduct)
                                                            <tr class="jsgrid-row">
                                                                <td class="jsgrid-cell" style="width: 60%">
                                                                    {{ $inventoryProduct->productDetails->name }}
                                                                </td>
                                                                <td class="jsgrid-cell" style="width: 20%">
                                                                    {{ $inventoryProduct->qty }}
                                                                </td>
                                                                <td class="jsgrid-cell" style="width: 20%">
                                                                    {{ $inventoryProduct->productDetails->selling_price }}
                                                                    TK
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
@section('script')
    <script>
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>

    @if (Session::has('added_inventory'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('added_inventory') }}", {
                timeout: 3000
            });
        </script>
    @endif
@endsection
