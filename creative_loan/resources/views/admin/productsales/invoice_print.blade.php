<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .text {
            text-align: center;
            font-family: monospace;
        }

        .left-align {
            float: left;
        }

        .tbl {
            padding-right: 10px;
            width: 10px;
            float: left;
            text-align: right;
            font-family: monospace;
        }

        .tbl1 {
            padding-left: 10px;
            padding-right: 10px;
            width: 100px;
            float: left;
            text-align: left;
            font-family: monospace;
        }

        .tbl2 {
            width: 60px;
            float: left;
            text-align: right;
            font-family: monospace;
        }

        .tbl3 {
            width: 40px;
            float: left;
            text-align: center;
            font-family: monospace;
        }

        @media print {
            @page {
                size: auto;
            }
        }
    </style>
</head>
<body onload="window.print();window.history.back()" style="width: 300px; min-height: 300px;">
<div class="text">
    <div class="center-align">
        @foreach($commanyinfos as $commanyinfo)
            <h3>{{$commanyinfo->company_name}}</h3>
            {{$commanyinfo->company_address}}
            <br>
            {{$commanyinfo->company_mobile}}
        @endforeach
    </div>
</div>
<div class="text" style="border-top: 1px solid;">
    <div class="text">
        <div class="center-align">
            @foreach($invoices as $invoice)
                Date: {{ $invoice->saleInvoice_date }}
                <br>
                Invoice: <b>{{ $invoice->saleInvoice_no }}</b>
            @endforeach
        </div>
    </div>
    <div class="text">
        <div class="text" style=" border-top: 1px solid; height:20px; ">

            <div class="right-align" style="float: right; width: 150px; text-align: right;">
                Sold By: 
            </div>

            <div class="left-align" style="float: left; width: 150px; text-align: left;">
                @foreach($invoices as $invoice)
                    Name: {{ $invoice->saleInvoice_customerName }}
                    <br>
                    Mobile: {{ $invoice->saleInvoice_customerMobile }}
                @endforeach
            </div>

        </div>
        <br><br>
        <div class="text" style=" border-top: 1px solid;">
            <div class="tbl">Sl.</div>
            <div class="tbl1">Description</div>
            <div class="tbl3">Qty.</div>
            <div class="tbl2">Price</div>
            <div class="tbl2">Total</div>
            <hr>


            <?php $i = 1; ?>
            @foreach($items as $item)
                <div class="tbl">{{ $i++ }}</div>
                <div class="tbl1" style="font-size: 12px;">{{ $item->saleItem_description }}  ({{$item->report_stock_id}})</div>
                <div class="tbl3">{{ $item->saleItem_quantity }}</div>
                <div class="tbl2">{{ $item->saleItem_unite_price }}</div>
                <div class="tbl2">{{ $item->saleItem_total }}</div>
                <br><br>
            @endforeach
            <br>
            <div class="text" style=" border-top: 1px solid;">
                <div>
                    <div class="text" style="float: right;">Total
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_subTotal }}@endforeach</div>
                    <br>
                    <div class="text" style="float: right;">Discount
                        @foreach ($invoices as $invoice)
                            @if($invoice->saleInvoice_discountType == 't')
                                (Tk)
                            @else
                                (%)
                            @endif
                        @endforeach
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_discountAmount }}@endforeach</div>
                    <br>
                    <div class="text" style="float: right;">Payable
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_totalPayable }}@endforeach</div>
                    <br>
                    <div class="text" style="float: right;">Paid Amount
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_paidAmount }}@endforeach</div>
                    <br>
                    <div class="text" style="float: right;">Return Amount
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_returnAmount }}@endforeach</div>
                    <br>
                    <div class="text" style="float: right;">Due Amount
                        :@foreach($invoices as $invoice){{ $invoice->saleInvoice_dueAmount }}@endforeach</div>
                </div>
                <br>
                <h3 style="text-align: center;">Thanks For Shopping</h3>
                <h4 style="text-align: center;"><u>Develop By www.creativepos.com.bd</u></h4>
            </div>
        </div>
    </div>
</div>
</body>
</html>