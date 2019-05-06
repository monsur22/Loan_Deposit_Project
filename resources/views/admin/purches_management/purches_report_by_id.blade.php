@extends('admin.master')
@section('content')
<style>
        @media print{
            .header{
                display: none;
            }
            .page-footer{
                display: none;
            }
            .page-sidebar{
                display: none;
            }
            .page-content{
                margin: 0px;
                padding: 0px;
            }
            .content-wrapper{
                margin: 0px;
                padding: 0px;
            }
        }
    </style>

<div class="page-content fade-in-up">
                <div class="container text-center">
                    @foreach ($companydetails as $item)
                <h4>{{$item->company_name}}</h4>
                <h6>Adress: {{$item->company_address}}</h6>
                <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
                    @endforeach
                                <br>
                                <br>
                                <h5><u> Purches  Report </u> </h5>
                                
                                
                </div>
                <div class="col-6">
                    <h6>
                        @foreach($invoice_report as $invoice_report)
                        <toppadding><strong>Purches  Date:</strong>  {{ $invoice_report->purchase_date }}&nbsp;
                        </toppadding>
                        <br><strong>Purches  No:</strong>  {{ $invoice_report->purchase_no }}&nbsp;</h6>
                @endforeach
            </div>
            <table class="table table-striped no-margin table-invoice">
                <thead>

                <tr>
                    <th>SL.</th>
                    <th>Item Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th class="text-right">Total</th>
                </tr>

                </thead>
                <tbody>
                <?php $i=1 ?>
                @foreach($purches_report as $invoiceItem)
                    <tr style="text-align: center;">
                        <td>{{ $i++ }}</td>
                        <td>
                            <div><strong>{{ $invoiceItem->description }}  ({{$invoiceItem->stock_id}})</strong></div>
                            <small></small>
                        </td>
                        <td>{{ $invoiceItem->quantity }}</td>
                        <td>{{ $invoiceItem->cost }}</td>
                        <td>{{ $invoiceItem->total_cost }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <td class="font-bold font-15"></td>
                        <td class="font-bold font-15">TOTAL:</td>
                        <td class="font-bold font-15">{{$subtotalSum}}</td>
                        <td class="font-bold font-15"></td>
                        <td class="font-bold font-15">{{$totalSum}}</td>

                    </tr>
                    </tfoot>
            </table>
                            <br>
                            <div class="text-right">
                                <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                                            class="fa fa-print" ></i> Print
                                </a>
                            </div>
                    <div>Printing Date and Time:<?php date_default_timezone_set("Asia/Dhaka"); echo date('d-m-Y h:i:s A');?>
                    </div>              

</div>
<script>
        $(document).ready(function () {
            $('.printPage').on('click',function () {
                $(this).hide();
                window.print();
                window.history.back();
            });
        });
</script>
    
@endsection
