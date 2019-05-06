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
<div class="container">
    <div class="page-content fade-in-up">
        <div class="ibox invoice">
            <div class="invoice-header" >
                <div class="row">
                    <div class="col-12 text-center" style="font-size: 17px;">
                        @foreach($companydetails as $company)
                        <div class="m-b-5 font-bold">{{ $company->company_name }}</div>
                        <h6>Address: {{ $company->company_address }}</h6>
                        <h6>Mobile: {{ $company->company_mobile }}</h6>
                        <h6>Email:{{ $company->company_email }}</h6>
                    

                       @endforeach
                       <h5><u>Purches Return Report</u></h5>
                        <hr>
                    </div>
                    <div class="col-6">
                            <h6>
                                @foreach($invoice_report as $invoice_report)
                                <toppadding><strong>Purches Return Date:</strong>  {{ $invoice_report->PurchaseReturnDate }}&nbsp;
                                </toppadding>
                                <br><strong>Purches Return No:</strong>  {{ $invoice_report->PurchaseReturnNo }}&nbsp;</h6>
                        @endforeach
                    </div>
                   
                </div>
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
                            <div><strong>{{ $invoiceItem->purchaseReturnItem_description }}  ({{$invoiceItem->StockId}})</strong></div>
                            <small></small>
                        </td>
                        <td>{{ $invoiceItem->purchaseReturn_qty }}</td>
                        <td>{{ $invoiceItem->purchaseReturnItem_unitPrice }}</td>
                        <td>{{ $invoiceItem->purchaseReturn_total }}</td>
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
    </div>
    <style>
        .invoice {
            padding: 20px
        }
        .table-invoice tr td:last-child {
            text-align: right;
        }
    </style>
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