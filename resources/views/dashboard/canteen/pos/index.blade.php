@extends('dashboard.main')
@section('content')
    <div class="content-wrapper p-4 container-fluid" style="min-height: 1113.69px; margin: 0 !important" bis_skin_checked="1">
        <section class="content">
            <div class="container-fluid" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-md-9" bis_skin_checked="1">
                        <div class="card card-warning" bis_skin_checked="1">
                            <div class="card-header " bis_skin_checked="1">
                                <h3 class="card-title">Items List</h3>
                            </div>

                            <div class="card-body" bis_skin_checked="1">
                                <div style="display: flex; flex-direction: row; gap: 1em">
                                    <div class="form-group">
                                        <label>Student Name
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <select class="form-control select2-us" id="std_id" name="student_id" required>
                                            @foreach ($students as $student)
                                                <option value={{ $student->user_id }}>
                                                    {{ $student->user_id }}.{{ $student->first_name }}.{{ $student->last_name }}.{{ $student->class_name }}.{{ $student->session_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Payment Type
                                            <span style="font-weight: 800; color: red; font-size: 1.2em">*</span>
                                        </label>
                                        <select class="form-control select2" id="payment_type" name="payment_type" required>
                                            <option value="1">Cash</option>
                                            <option value="0">Due</option>
                                            <option value="2">Pre-order</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row" bis_skin_checked="1">
                                    @foreach ($canteenItems as $canteenItem)
                                        <div onclick="addToInventory({{ $canteenItem }}, {{ $canteenItem->productDetails }})"
                                            class="col-md-3 col-sm-6 col-12" bis_skin_checked="1">
                                            <div class="info-box" bis_skin_checked="1">
                                                <span class="info-box-icon bg-info">
                                                    <img src=@if ($canteenItem->productDetails->image) {{ asset('images/canteen/food') . '/' . $canteenItem->productDetails->image }}
                                                    @else {{ asset('images/default_food.jpeg') }} @endif
                                                        alt="{{ $canteenItem->productDetails->name }}" />
                                                </span>
                                                <div class="info-box-content" bis_skin_checked="1">
                                                    <span
                                                        class="info-box-text">{{ $canteenItem->productDetails->name }}</span>
                                                    <div>
                                                        <h6 style="margin: 0 !important; color: red"
                                                            class="info-box-number">Price :
                                                            {{ $canteenItem->productDetails->selling_price }}
                                                        </h6>

                                                        <h6 style="margin: 0 !important;" class="info-box-number">Available
                                                            : {{ $canteenItem->qty }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" bis_skin_checked="1">
                        <div class="card card-danger" bis_skin_checked="1">
                            <div class="card-header " bis_skin_checked="1">
                                <h3 class="card-title">Cart</h3>
                                <div class="card-tools" bis_skin_checked="1">

                                    <button onclick="removeLocalStorage()" class="btn btn-tool">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" bis_skin_checked="1">
                                <div id='items'>
                                    <table style="width: 100%">
                                        <tr>
                                            <th class="font-bold" style="width: 50%"></th>
                                            <th class="font-bold" style="width: 20%"></th>
                                            <th class="font-bold" style="width: 30%"></th>
                                        </tr>

                                        <div class="jsgrid-grid-body" bis_skin_checked="1">
                                            <table class="jsgrid-table">
                                                <tbody id="item"></tbody>
                                            </table>

                                            <table style="width: 100%; margin-top: 3em">
                                                <tr>
                                                    <th class="font-bold" style="width: 50%"></th>
                                                    <th class="font-bold" style="width: 50%"></th>
                                                </tr>
                                                <div class="jsgrid-grid-body" bis_skin_checked="1">
                                                    <table class="jsgrid-table">
                                                        <tbody>
                                                            <tr class="jsgrid-row" style="">
                                                                <td class="jsgrid-cell"
                                                                    style="width: 50%; font-weight: bold">Subtotal:</td>
                                                                <td class="jsgrid-cell" id="subtotal"
                                                                    style="width: 30%; text-align: right">0
                                                                    TK</td>
                                                            </tr>
                                                            <tr class="jsgrid-row" style="">
                                                                <td class="jsgrid-cell"
                                                                    style="width: 50%; font-weight: bold">Vat: </td>
                                                                <td class="jsgrid-cell"
                                                                    style="width: 30%; text-align: right">0 TK</td>
                                                            </tr>
                                                            <tr class="jsgrid-row" style="">
                                                                <td class="jsgrid-cell"
                                                                    style="width: 50%; font-weight: bold">Discount:</td>
                                                                <td class="jsgrid-cell"
                                                                    style="width: 30%; text-align: right">0 TK</td>
                                                            </tr>
                                                            <tr class="jsgrid-row" style="">
                                                                <td class="jsgrid-cell"
                                                                    style="width: 50%; font-weight: bold">Grand Total:</td>
                                                                <td class="jsgrid-cell" id="grandtotal"
                                                                    style="width: 30%; text-align: right; font-size: 1.2em; color: red">
                                                                    0 TK </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </table>
                                            <div style="display: flex; justify-content: space-between">
                                                <button onclick="saveProduct(event)"
                                                    class="btn btn-success mt-3">Save</button>
                                                <button onclick="saveAndPrintProduct(event)"
                                                    class="btn btn-primary mt-3">Save & Print</button>
                                            </div>
                                        </div>
                                    </table>
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
        var disabledResults = $(".select2");
        disabledResults.select2();

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var splitedText = state.text.split('.')

            var $state = $(
                `<div>
                    <h6 style="font-weight: bold; margin: 0em">${splitedText[1]} ${splitedText[2]}</h6>
                    <span>ID: ${splitedText[0]}</span> &nbsp;
                    <span>Class: ${splitedText[3]} (${splitedText[4]})</span>
                </div>`
            );
            return $state;
        };

        $(".select2-us").select2({
            templateResult: formatState
        });

        async function removeLocalStorage() {
            localStorage.removeItem("CART_ITEM");

            const {
                cartProducts,
                subtotal,
                grandtotal
            } = await organizeLocalStorage()

            var itemtable = ''
            await cartProducts && cartProducts.map((cartproduct) => {
                itemtable += `<tr class="jsgrid-row" >
                            <td class="jsgrid-cell" style="width: 50%">${cartproduct.name}</td>
                            <td class="jsgrid-cell" style="width: 20%">X ${cartproduct.sellQty}</td>
                            <td class="jsgrid-cell" style="width: 30%; text-align: right">${cartproduct.sellQty * cartproduct.selling_price} TK</td>
                        </tr>`
            })

            document.getElementById('item').innerHTML = itemtable
            document.getElementById('subtotal').innerText = `${subtotal} TK`
            document.getElementById('grandtotal').innerText = `${grandtotal} TK`
        }

        async function saveItemInLocalStorage(item, detail) {
            const clickedProduct = {
                ...item,
                ...detail,
                sellQty: 1
            };
            try {
                if (localStorage.length > 0) {

                    const storedCartItem = await JSON.parse(localStorage.getItem('CART_ITEM'));
                    const modifiedArray = [clickedProduct, ...storedCartItem]
                    await localStorage.setItem('CART_ITEM', JSON.stringify(modifiedArray));

                } else {
                    await localStorage.setItem('CART_ITEM', JSON.stringify([clickedProduct]));
                }


                return await JSON.parse(localStorage.getItem('CART_ITEM'));

            } catch (err) {
                console.log(err);
            }
        }

        async function organizeLocalStorage() {
            const cart = JSON.parse(localStorage.getItem('CART_ITEM')) || [];

            const cartarray = await cart.reduce((accumulator, currentItem) => {

                const existingItem = accumulator.cartProducts.find(item => item.canteen_product_id ===
                    currentItem
                    .canteen_product_id);

                if (existingItem) {
                    existingItem.sellQty += 1;
                } else {
                    accumulator.cartProducts.push({
                        ...currentItem
                    });
                }

                const singleItemTotal = parseFloat((currentItem.selling_price * currentItem.sellQty).toFixed(
                    2));

                accumulator.subtotal = parseFloat((accumulator.subtotal + singleItemTotal).toFixed(2));
                accumulator.grandtotal = parseFloat((accumulator.grandtotal + accumulator.vat + accumulator
                    .discount + accumulator.deliveryCharge +
                    singleItemTotal).toFixed(2));

                return accumulator;
            }, {
                subtotal: 0,
                vat: 0,
                discount: 0,
                deliveryCharge: 0,
                grandtotal: 0,
                cartProducts: []
            });

            return cartarray;
        }

        async function addToInventory(item, detail) {
            await saveItemInLocalStorage(item, detail);

            const {
                cartProducts,
                subtotal,
                grandtotal
            } = await organizeLocalStorage()

            var itemtable = ''
            await cartProducts && cartProducts.map((cartproduct) => {
                itemtable += `<tr class="jsgrid-row" >
                                <td class="jsgrid-cell" style="width: 50%">${cartproduct.name}</td>
                                <td class="jsgrid-cell" style="width: 20%">X ${cartproduct.sellQty}</td>
                                <td class="jsgrid-cell" style="width: 30%; text-align: right">${cartproduct.sellQty * cartproduct.selling_price} TK</td>
                            </tr>`
            })

            document.getElementById('item').innerHTML = itemtable
            document.getElementById('subtotal').innerText = `${subtotal} TK`
            document.getElementById('grandtotal').innerText = `${grandtotal} TK`
        }

        window.onload = async function() {
            const {
                cartProducts,
                subtotal,
                grandtotal
            } = await organizeLocalStorage()

            var itemtable = ''
            await cartProducts && cartProducts.map((cartproduct) => {
                itemtable += `<tr class="jsgrid-row" >
                                <td class="jsgrid-cell" style="width: 50%">${cartproduct.name}</td>
                                <td class="jsgrid-cell" style="width: 20%">X ${cartproduct.sellQty}</td>
                                <td class="jsgrid-cell" style="width: 30%; text-align: right">${cartproduct.sellQty * cartproduct.selling_price} TK</td>
                            </tr>`
            })

            document.getElementById('item').innerHTML = itemtable
            document.getElementById('subtotal').innerText = `${subtotal} TK`
            document.getElementById('grandtotal').innerText = `${grandtotal} TK`
        };


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        async function saveProduct(event) {
            event.preventDefault();

            const std_id = document.getElementById('std_id').value;
            const payment_type = document.getElementById('payment_type').value;

            const {
                cartProducts
            } = await organizeLocalStorage()

            const cart = JSON.stringify(cartProducts);

            $.ajax({
                url: "{{ route('sellItems') }}",
                method: 'POST',
                data: {
                    cart: cart,
                    std_id: std_id,
                    payment_type: payment_type
                },
                success: async function(data) {
                    await sessionStorage.setItem("addedto_invoice", "Product Purchased Successfully");
                    const message = sessionStorage.getItem("addedto_invoice");
                    await removeLocalStorage();
                    toastr.options = {
                        "progressBar": true,
                    }
                    toastr.success(message, {
                        timeout: 3000
                    });


                    //if response success do somethings
                },
                error: function(e) {
                    console.log(e)
                    //if response error1`
            }
        });


    }
    async function saveAndPrintProduct(event) {
        event.preventDefault();
        const std_id = document.getElementById('std_id').value;
        const payment_type = document.getElementById('payment_type').value;

        const {
            cartProducts
        } = await organizeLocalStorage()

        const cart = JSON.stringify(cartProducts);

        $.ajax({
            url: "{{ route('sellItems') }}",
            method: 'POST',
            data: {
                cart: cart,
                std_id: std_id,
                payment_type: payment_type,
            },
            success: async function(data) {

                await sessionStorage.setItem("addedto_invoice",
                    "Product Purchased Successfully. Please Wait for Printing to Complete");
                const message = sessionStorage.getItem("addedto_invoice");
                await removeLocalStorage();
                toastr.options = {
                    "progressBar": true,
                }
                toastr.success(message, {
                    timeout: 3000
                });
                const redirect_url = window.location.origin +
                    '/report?jrxml=invoice&format=pdf&invoice_id=' + data

                window.open(redirect_url);

                //if response success do somethings
            },
            error: function(e) {
                console.log(e)
                //if response error1`
                }
            });


        }
    </script>
@endsection
