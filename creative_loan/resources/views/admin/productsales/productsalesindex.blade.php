@extends('admin.master')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form action="{{route('addSaleInvoice')}}" method="post">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Customer Name:</label>
                                    <div class="input-group">
                                        <select class="form-control" name="saleInvoice_customerName" id="customerName"
                                                required>
                                            <option value="Cash">Cash</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{$customer->customer_name}}">{{$customer->customer_name}}</option>
                                            @endforeach
                                        </select>
                                        {{csrf_field()}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Mobile No:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="customerMobile"
                                               name="saleInvoice_customerMobile" required readonly/>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Previous Due</label>
                                    <div class="input-group">
                                        <input class="form-control" name="saleInvoice_previousDue" id="previousdue"
                                               readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label> Date</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="sles_date" name="saleInvoice_date"
                                               value="<?php echo date('Y-m-d');?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Invoice Number</label>
                                    <div class="input-group">
                                        <?php
                                        $i = 1;
                                        $count = DB::table('sale_invoices')->count();
                                        ?>
                                        <input type="text" class="form-control invoice" name="saleInvoice_no"
                                               value="INV<?php echo date('Ymd') . ($i + $count);?>" id=""
                                               readonly/>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center;" class="col-sm-2">
                                <label style=" color: red; font-weight: bolder;">Your Bill</label>
                                <div class="form-group">
                                    <input style="height:45px;text-align: center;  margin: 0px; font-size: 25px; font-weight: bolder;  color: green;"
                                           type="text" class="form-control bill" value="{{$totalPrice}}" readonly/>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div style="padding-top: 5px;" class="col-md-8">
                                <div style="margin-top: 0px; padding-top: 0px;" class="row">
                                    <div style="padding-top: 0px;" class="col-md-12">
                                        <div class="form-group">
                                            {{--<form method="post" action="{{route('searchingdata')}}">--}}
                                            <input type="text" class="form-control addTocart "
                                                   name="saleInvoice_description"
                                                   id="StockId"
                                                   placeholder="Search by StockId"
                                                   style="margin-top: 22px; margin-bottom: 0px;" autofocus/>
                                            <div style="margin-top: 0px;" id="reportList"></div>
                                            {{--{{csrf_field()}}--}}
                                            {{--</form>--}}
                                        </div>
                                    </div>
                                </div>
                                <table style="width: 100%" class="dataTables_scrollBody table table-bordered tbl">
                                    <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th style="width: 150px;" scope="col">Description</th>
                                        <th scope="col">Stock ID</th>
                                        <th scope="col">Stock</th>
                                        <th style="width: 50px;" scope="col">Quantity</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Price</th>
                                        {{--<th style="width: 50px;" scope="col">Discount</th>--}}
                                        <th scope="col">Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::has('carts'))
                                        <?php $i = 0; ?>
                                        @foreach($products as $product)
                                            <tr style="text-align: center;">
                                                <th>{{ ++$i }}</th>
                                                <td style="width: 220px;"
                                                    class="saleItemDescription">{{ $product['item']->report_description }}</td>
                                                <td style="width: 220px;"
                                                    class="saleItemDescription">{{ $product['item']->report_stock_id }}</td>
                                                <td>{{ $product['item']->report_quantity }}</td>
                                                <td style="width: 55px;"
                                                    class="saleItemQuantity">{{$product['qty']}}</td>
                                                <td class="saleItemCost">{{ $product['item']->report_cost }}</td>
                                                <td class="saleItemUnitePrice">{{ $product['item']->report_sales_price }}</td>
                                                <td class="saleItemTotal">{{$product['price']}}</td>
                                                <td>
                                                    <a class="btn btn-danger"
                                                       href="{{route('product.delete',['storid'=>$product['item']->report_stock_id])}}">
                                                        <span class="fa fa-remove"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div style="border-left: 1px solid lightgrey; padding-top: 5px;" class="col-md-4">
                                <div class="form-group  row">
                                    <label for="SubTotal" class="col-sm-6  text col-form-label">SubTotal</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_subTotal" readonly
                                               class="form-control SubTotal"
                                               value="{{$totalPrice}}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="saleInvoice_totalCost" readonly
                                               class="form-control"
                                               value="{{$totalCost}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="DiscountType" class="col-sm-6 text col-form-label">Discount Type</label>
                                    <div class="col-sm-6">
                                        <select name="saleInvoice_discountType" class="form-control discType">
                                            <option id="t" value="tk">TK</option>
                                            <option id="p" value="%">%</option>
                                        </select>
                                        <input style="margin-left: 0px;" type="text" name="saleInvoice_discountAmount"
                                               value=""
                                               class="form-control disc">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="hidden" class="vat"
                                           value="@foreach($vats as $vat){{$vat->company_vat}} @endforeach" readonly/>
                                    <label for="TotalPayable"
                                           class="col-sm-6 text control-label col-form-label vat">VAT(@foreach($vats as $vat){{$vat->company_vat}} @endforeach
                                        %)</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_vatAmount" readonly
                                               class="form-control vats"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="TotalPayable" class="col-sm-6 text control-label col-form-label">Total
                                        Payable</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_totalPayable" readonly
                                               class="form-control TotalPayable">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="PaidAmount" class="col-sm-6 text control-label col-form-label">Paid
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_paidAmount" class="form-control pAmount"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ReturnAmount" class="col-sm-6 text col-form-label pull-right">Return
                                        Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_returnAmount" readonly
                                               class="form-control ramount">
                                    </div>
                                </div>
                                <div class="form-group  row">
                                    <label for="DueAmount" class="col-sm-6 text  col-form-label">Due Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="saleInvoice_dueAmount" readonly
                                               class="form-control damount">
                                        <input type="hidden" name="saleInvoice_transactionStatus" readonly
                                               class="form-control status">
                                    </div>
                                </div>


                                <div class="form-group  row">
                                    <label for="DueAmount" class="col-sm-6 text  col-form-label">Collection
                                        type:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="saleInvoice_collectionType" id="">
                                            <option value="Cash">Cash</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="NexusPay">NexusPay</option>
                                            <option value="Card">Card</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group  row">
                                    <label for="DueAmount" class="col-sm-6 text  col-form-label">Sales Man :</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="saleInvoice_salesMan" id="">
                                            <option value="Cash">Cash</option>
                                            @foreach($sealsmans as $sealsman)
                                                <option value="{{$sealsman->salesMan_name}}">{{$sealsman->salesMan_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="float: left" class="col-md-7">
                            <div style="float: right;" class="form-group">
                                {{-- <a href="{{route('Bardode')}}" class="btn btn-info">Generate Barcode</a> --}}
                                <button type="submit" class="btn btn-primary confirm" style="padding: 9px;">Confirm
                                </button>
                            </div>
                        </div>
                    </form>
                    <div style="float: right" class="col-md-5">
                        <div style="float: left;" class="form-group">
                            <input type="button" class="btn btn-success clean" value="Clean" style="padding: 9px;"/>
                            <button class="btn btn-danger" style="padding: 9px;">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('message'))
        <script>
            alert({{ Session::get('message') }});
        </script>
    @endif

    <script>
        $(document).ready(function () {
            $('.clean').on('click', function () {
                $.ajax({
                    url: '{{route('sessions')}}',
                    type: 'GET',
                    data: {},
                    success: function (response) {
                        console.log(response);
                        $('input').val('');
                        $('.tbl tbody').val('');
                        location.reload();
                    }
                });
            });
        });
    </script>
    <script>
        function doIt() {
            var ro = 0;
            var pa = $('.pAmount').val();
            var tp = $('.TotalPayable').val();
            var cal = (tp - pa);
            if (cal > 0) {
                $('.damount').val(cal);
                $('.ramount').val(ro);
                $('.status').val('Due');
            } else {
                $('.ramount').val(cal);
                $('.damount').val(ro);
                $('.status').val('Paid');
            }
        }
        $(".pAmount").on('keyup', doIt);
    </script>
    <script>

        function doStuff() {
            var d = $('.disc').val();
            var s = $('.SubTotal').val();
            var vat = $('.vat').val();
            if ($(".discType").children(":selected").attr("id") == 't') {
                var total = s - d;
                var v = (total * vat) / 100;
                var totalP = (total + v);

            } else {
                var totald = (s * d) / 100;
                var totalT = s - totald;
                var v = (totalT * vat) / 100;
                var totalP = (totalT + v);
            }
            $('.vats').val(v);
            $(".TotalPayable").val(Math.round(totalP));
            $('.bill').val(Math.round(totalP));


        }
        $(".disc").on('keyup', doStuff);
        $(".discType").on('change', doStuff);
        $('.bill').on('keyup', doStuff());

    </script>
    {{--<script>--}}
    {{--$(document).ready(function () {--}}
    {{--$('#report_description').keypress(function(e) {--}}
    {{--var description = $(this).val();--}}
    {{--if(e.which == 13) {--}}

    {{--}--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
    <script>
        $(document).ready(function () {
            $('#StockId').keyup(function () {
                var query = $(this).val();
                if (query != ' ') {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('autocomplete.fetch') }}",
                        method: "POST",
                        data: {query: query, _token: _token},
                        success: function (data) {
                            $('#reportList').fadeIn();
                            $('#reportList').html(data);

                        }
                 
                    })
                }
            });

            $(document).on('click', 'li', function () {
                var id = $(this).text();
                var invoiceNo = $('.invoice').val();
                $.ajax({
                    url:'{{route('searchingdata')}}',
                    type: 'POST',
                    data: {id: id, invoiceNo: invoiceNo},
                    success: function () {
                        location.reload();
                    }
                });
                $('#reportList').fadeOut();
            });


            $("#customerName").change(function () {
                var name = $(this).val();
                $.ajax({
                    url: '{{route('findCustomer')}}',
                    type: 'get',
                    data: {name: name},
                    success: function (data) {
                        $('#customerMobile').val(data[0]['customer_mobile']);
                        $('#previousdue').val(data[0]['copaning_balance']);
                    }
                });
            });


        });
    </script>

    <script>

        window.onunload = function () {
        };

        if (window.history.state != null && window.history.state.hasOwnProperty('historic')) {
            if (window.history.state.historic == true) {
                document.body.style.display = 'none';
                window.history.replaceState({historic: false}, '');
                window.location.reload();
            } else {
                window.history.replaceState({historic: true}, '');
            }
        } else {
            window.history.replaceState({historic: true}, '');
        }

    </script>
@endsection
