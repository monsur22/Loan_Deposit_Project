@extends('admin.master')
@section('content')

{{-- <div class="content-wrapper"> --}}
    

        <div class="container">
            <br/>
            <h4><b>Local Purchases</b></h4>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('local-purchase-save')}}">
                            {{-- <form method="post" action="{{url('local-purchase')}}"> --}}
                        @csrf
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <label>Date</label>
                                <input class="form-control purchaseDate" type="date" id="purchase_date"
                                       name="purchase_date"
                                       value="<?php echo date('Y-m-d');?>">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Supplier Name</label>
                                <select class="form-control sid" id="sid" name="sid">
                                  
                                    @foreach($suppliers as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Purchase No</label>

                                <?php
                                $count = DB::table('localpurches')->count();
                                $maincount = date('dmY') . $count + 1;
                                ?>
                                <input class="form-control purchaseNo" value="PO<?php echo $maincount ?>" type="text"
                                       id="purchase_no" name="purchase_no" readonly="">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Supplier Invoice No</label>

                                <input class="form-control invoiceNo" value="" type="text" id="supplier_invoiceno"
                                       name="supplier_invoiceno" placeholder="Supplier Invoice No">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Unite Type</label>
                                <select name="unit_type" id="unit_type" class="form-control unitType">
                                    <option value="PCS">PCS</option>
                                    <option value="Meter">Meter</option>
                                </select>
                            </div>

                            <div class="col-sm-2 form-group">
                                <label>Supplier Code</label>
                                <input class="form-control supplyCode" type="text" id="supplier_code"
                                       name="supplier_code"
                                       placeholder="Supplier Code">
                            </div>

                            <div class="col-sm-2 form-group">
                                <label>Model</label>
                                <?php
                                $count = DB::table('stock_reports')->count();
                                ?>
                                <input class="form-control model" value="<?php echo date('dmY') ?>{{$counts+$count+1}}" readonly=""
                                       type="text"
                                       id="stock_id" name="stock_id">
                            </div>

                            <div class="col-sm-2 form-group">
                                <label>Color</label>
                                <select class="form-control color_name" id="color_name" name="color_name">
                                    <option value="">Select Color</option>
                                    @foreach($colors as $color)
                                    <option value="{{$color->group_name}}" style="background-color: white;">{{$color->group_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Brand</label>
                                <select class="form-control pbrand" id="pbrand" name="pbrand">
                                    <option value="">Select Brand</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-2 form-group">
                                <label>Size</label>
                                <select class="form-control size" name="size" id="size">
                                    <option value="">Select Size</option>
                                    @foreach($sizes as $size)
                                    <option value="{{$size->category_name}}">{{$size->category_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Product Description <span style="color: red;">*</span></label>
                                <input class="form-control description" type="text" id="description" name="description"
                                       placeholder="Product Description">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Quantity</label>
                                <input class="form-control quantity" type="text" id="quantity" name="quantity"
                                       placeholder="Quantity">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Cost</label>
                                <input class="form-control cost" type="text" id="cost" name="cost" placeholder="Cost">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Margin%</label>
                                <input class="form-control margin" type="text" id="margin" name="margin"
                                       placeholder="Margin%">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Sales Price</label>
                                <input class="form-control salesPrice" type="text" id="sale_price" name="sale_price"
                                       placeholder="Sales Price">
                            </div>
  

                            <button type="button" class="btn btn-info btn-block addToCart">Add Product</button>
                            {{-- <button type="submit" class="btn btn-success">Submit</button> --}}

                        </div>


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10%; text-align: left;">SL.</th>
                                <th style="width: 15%; text-align: left;">Stock Id</th>
                                <th style="width: 10%;text-align: left;">Purchase No.</th>
                                {{-- <th style="width: 10%;text-align: left;">SID</th> --}}
                                <th style="width: 30%;text-align: left;">Description</th>     
                               
                                <th style="width: 10%;text-align: left;">Cost</th>
                                <th style="width: 10%;text-align: left;">Qty</th>
                                <th style="width: 10%;text-align: left;">Total Cost</th>
                            </tr>
                            </thead>
                            <tbody>
                          <?php $i=1 ?>
                            @foreach($carts as $cart)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cart->options->stock_id}}</td>
                                    <td>{{$cart->id}}</td>
                                    {{-- <td>{{$cart->options->sid}}</td> --}}
                                    <td>{{$cart->name}}</td>
                                    
                                    <td>{{$cart->price}}</td>
                                    <td>{{$cart->qty}}</td>
                                    <td>{{$cart->subtotal}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="text-align: right;" colspan="5">Total</th>
                                <th><input type="text" class="form-control bg-white" name="countqty"
                                           value="{{ $cartcount }}" readonly/></th>
                                       
                                <th><input type="text" class="form-control bg-white" name="totalPrice"
                                           value="{{ $cartTotal }}" readonly/></th>
                            </tr>
                            </tfoot>
                        </table> 

 
                        <div class="all-button text-center">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <input type="button" value="Clean"
                            class="btn btn-dark clean"/>
                            {{-- <button type="button"  class="btn btn-info cleanData">Clean</button> --}}
                            <a href="" class="btn btn-info">Generate Barcode</a>

                        </div> 
                    </form>
                </div>
            </div>

        </div>

            <script>
                function totalCost() {

                    var cost = $("#cost").val();
                    var mrg = $("#margin").val();
                    var stotal = (cost * mrg);
                    var mrgVal = (stotal / 100);
                    var total = +cost + +mrgVal;
                    $('#sale_price').val(total);
                }

                $("#quantity").on('keyup', totalCost);
                $("#cost").on('keyup', totalCost);
                $("#margin").on('keyup', totalCost);
            </script>


            <script type="text/javascript">
                function conCat() {
                    var x = $("#color_name").val();
                    var y = $("#pbrand").val();
                    var z = $("#size").val();
                    $('#description').val(x + ' ' + y + ' ' + z);
                }

                $("#color_name").on('change', conCat);
                $("#pbrand").on('change', conCat);
                $("#size").on('change', conCat);
            </script>

            <script>
                $(document).ready(function () {
                    $('.addToCart').on('click', function () {
                        var purchaseNo = $('.purchaseNo').val();
                        var model = $('.model').val();
                        var description = $('.description').val();
                        var sid = $('.sid').val();
                        var quantity = $('.quantity').val();
                        var cost = $('.cost').val();
                        var salesPrice = $('.salesPrice').val();
                        var size = $('.size').val();
                        var supplyCode = $('.supplyCode').val();
                        var pbrand = $('.pbrand').val();
                        var margin = $('.margin').val();
                        var color_name = $('.color_name').val();
                        var unitType = $('.unitType').val();

                        var invoiceNo = $('.invoiceNo').val();
                        var supplyCode = $('.supplyCode').val();

                        $.ajax({
                            type: "GET",
                            // url: "{{route('savePurchaseInvoice')}}",
                             url: "{{route('savePurchaseInvoice')}}",
                            data: {
                                purchaseNo: purchaseNo,
                                model: model,
                                description: description,
                                sid: sid,
                                quantity: quantity,
                                cost: cost,
                                salesPrice: salesPrice,
                                size: size,
                                supplyCode: supplyCode,
                                pbrand: pbrand,
                                margin: margin,
                                color_name: color_name,
                                unitType: unitType,

                                invoiceNo: invoiceNo,
                                supplyCode: supplyCode,
                            },
                            success: function () {
                                location.reload();
                            }
                        });
                    });
                });
            </script>

    {{-- <script>
        $(document).ready(function () {
           $('.cleanData').on('click',function () {

              $.ajax({
                type: "GET",
                url: "{{route('clearCartData')}}",
                  data: {},
                  success: function (response) {
                      console.log(response);
                      location.reload();
                      $('#tbodyid').destroy();
                  }
              });
           });
        });
    </script> --}}
    <script>
    //         $('.cleanData').on('click', function () {
    //     var id = $(this).val();
    //     $.ajax({
    //         url:'{{ route('removePurchaseReturnCartItem') }}',
    //         type:'POST',
    //         data:{id:id},
    //         success:function (data) {
    //             console.log(data);
    //             location.reload();
    //         }
    //     });
    // });

    $(document).ready(function () {

$('.clean').on('click',function () {
    $.ajax({
        url:'{{ route('destroyPurchaseReturnCart') }}',
        type:'POST',
        data:{ _token: '{{csrf_token()}}'},
        success:function (data) {
            console.log(data);
            location.reload();
        }
    });
});
});
    </script>
  
@endsection

