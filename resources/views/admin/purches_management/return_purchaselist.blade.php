@extends('admin.master')
@section('content')

<link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <div class="container">
        <div style="padding: 10px; height: 100%;" class="card">
            <h4 style="text-align: center;"><u>Purchase Return</u></h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="padding: 10px; height: 100%;" class="card">
                                    <form action="{{ route('return-purchases') }}" method="get">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <select class="selectpicker form-control cName" data-live-search="true"
                                                        data-style="btn-primary"
                                                        name="returnSupplierName">
                                                    <option value="null">Select Supplier Name</option>
                                                    <option value="Cash">Cash</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <select class="form-control cInvoice" name="returnSupplierInvoice">
                                                    {{-- <option value="{{ $purchase_no }}">{{ $purchase_no }}</option> --}}
                                                    <option value="{{$purchaseNo}}">{{$purchaseNo }}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" class="form-control btn btn-success load"
                                                       value="load">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-body">
                                        <hr>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-responsive">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">SL.</th>
                                                        <th scope="col">StockID</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                            <?php $i=1?>
                                                    @foreach($purchaseItems as $purchaseItem)
                                                        <tr style="text-align: center;" class="bg-grey-50">
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $purchaseItem->stock_id }}</td>
                                                            <td>{{ $purchaseItem->description }}</td>
                                                            <td>{{ $purchaseItem->quantity }}</td>
                                                            <td>{{ $purchaseItem->cost }}</td>
                                                            <td>
                                                                <button data-toggle="modal" data-target="#exampleModal"
                                                                        class="btn btn-warning editPurchaseItem"
                                                                        value="{{$purchaseItem->id}}"><i
                                                                            class="fa fa-plus-circle"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('confirmPurchaseReturn') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-md-5">
                                                    <label>Date</label>
                                                    <input type="date" value="<?php echo date('Y-m-d');?>"
                                                           class="form-control text-center"
                                                           name="PurchaseReturnDate"/>
                                                </div>
                                              <?php 
                                              $count = DB::table('purchase_return_invoices')->count();
                                                $maincount = date('dmY') . ($count + 1);
                                              ?>
                                                
                                                
                                                <div class="col-md-4">
                                                    <label>Sales Return No</label>
                                                    <input type="text" value="PR<?php echo $maincount ?>"
                                                           class="form-control" name="PurchaseReturnNo"
                                                           readonly/>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">SL.</th>
                                                            <th scope="col">StockID</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Total</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                     <?php $j = 1?> 
                                                        @foreach($carts as $cart)
                                                            <tr class="bg-grey-50">
                                                                <td>{{ $j++ }}</td>
                                                                <td>{{$cart->options->StockId}}
                                                                    <input type="hidden"
                                                                           class="form-control bg-white"
                                                                           name="StockId"
                                                                           readonly/>
                                                                </td>
                                                                <td>{{ $cart->name }}</td>
                                                                <td>{{ $cart->price }}</td>
                                                                <td name="cqty">{{ $cart->qty }}</td>
                                                                <td>{{ $cart->subtotal }}</td>
                                                                <td>
                                                                    <button type="button" value="{{ $cart->rowId }}"
                                                                            class="btn btn-danger removeItem"><i
                                                                                class="fa fa-remove"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach 
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th style="text-align: right;" colspan="4">Total:</th>
                                                            <td><input type="text" class="form-control bg-white"
                                                                       name="totalQty" value="{{$cartCount}}"
                                                                       readonly/></td>
                                                            <td><input type="text" class="form-control bg-white"
                                                                       name="itemTotal" value="{{$cartItemTotal}}"
                                                                       readonly/></td>
                                                        </tr>

                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Confirm"
                                                           class="btn btn-primary confirm"/>
                                                    <input type="button" value="Clean"
                                                           class="btn btn-dark clean"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Purchase Item Edit Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Return Sales</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="updatePurchaseReturn">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Stock ID</label>
                                            <input type="text" class="form-control StockId" name="StockId" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Purchase No</label>
                                            <input type="text" class="form-control purchaseNo" name="invoice" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <input type="hidden" class="form-control id" name="id"/>
                                            <input type="text" class="form-control description" name="description"
                                                   readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control quantity" name="quantity"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Price</label>
                                            <input type="text" class="form-control  price" name="price"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary ">Add</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
        <script>
            $(document).ready(function () {

                $('.clean').on('click',function () {
                    $.ajax({
                        url:'{{ route('destroyPurchaseReturnCart') }}',
                        type:'POST',
                        data:{},
                        success:function (data) {
                            console.log(data);
                            location.reload();
                        }
                    });
                });


                $('.removeItem').on('click', function () {
                    var id = $(this).val();
                    $.ajax({
                        url:'{{ route('removePurchaseReturnCartItem') }}',
                        type:'POST',
                        data:{id:id},
                        success:function (data) {
                            console.log(data);
                            location.reload();
                        }
                    });
                });


                $('.cName').on('change', function () {
                    var id = $(this).val();
                    if (id) {
                        $.ajax({
                            url: '{{ route('supplierInvoice') }}',
                            type: 'GET',
                            dataType: 'json',
                            data: {id: id},
                            success: function (data) {
                                console.log(data);
                                $('select[name="returnSupplierInvoice"]').empty();
                                $.each(data, function (key, value) {
                                    $('select[name="returnSupplierInvoice"]').append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        });
                    } else {
                        $('select[name="returnSupplierInvoice"]').val("Select Invoice Number");
                    }
                });

                $('.editPurchaseItem').on('click', function () {
                    var id = $(this).val();
                    $.ajax({
                        url: '{{ route('getEditPurchaseData') }}',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            $('.purchaseNo').val(data[0]['purchase_no']);
                            $('.id').val(data[0]['id']);
                            $('.StockId').val(data[0]['stock_id']);
                            $('.description').val(data[0]['description']);
                            $('.quantity').val(data[0]['quantity']);
                            $('.price').val(data[0]['cost']);
                            $('.totalItemPrice').val(data[0]['total_cost']);
                        }
                    });
                });

                $('.updatePurchaseReturn').on('submit', function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: "{{route('updatePurchaseReturn')}}",
                        data: $('.updatePurchaseReturn').serialize(),
                        success: function (data) {
                            console.log(data);
                            $('#exampleModalCenter').modal('hide');
                            location.reload();
                        },
                        error: function (error) {
                            console.log(error);
                            alert('Data Not Saved');
                        }
                    });
                });

                

            });
        </script>
@endsection