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
                       <h5><u>Product Sales Report</u></h5>
<hr>
                    </div>
                    <div class="col-6">
                            <h6>
                                @foreach($invoiceInfos as $invoiceInfo)
                                <toppadding><strong>Invoice Date:</strong>  {{ $invoiceInfo->saleInvoice_date }}&nbsp;
                                </toppadding>
                                <br><strong>Invoice No:</strong>  {{ $invoiceInfo->saleInvoice_no }}&nbsp;</h6>
                        @endforeach
                    </div>
                    {{-- <div class="col-6 text-right">
                        <div>
                            <div class="m-b-5 font-bold">Invoice To</div>
                            @foreach($customers as $customer)
                                <div>{{ $customer->customer_name }}</div>
                                <ul class="list-unstyled m-t-10">
                                    <li class="m-b-5">{{ $customer->customer_mobile }}</li>
                                    <li class="m-b-5">{{ $customer->customer_email }}</li>
                                    <li>{{ $customer->customer_address }}</li>
                                </ul>
                                @break
                            @endforeach
                        </div>
                    </div> --}}
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
                @foreach($sales_report as $invoiceItem)
                    <tr style="text-align: center;">
                        <td>{{ $i++ }}</td>
                        <td>
                            <div><strong>{{ $invoiceItem->saleItem_description }}  ({{$invoiceItem->report_stock_id}})</strong></div>
                            <small></small>
                        </td>
                        <td>{{ $invoiceItem->saleItem_quantity }}</td>
                        <td>{{ $invoiceItem->saleItem_unite_price }}</td>
                        <td>{{ $invoiceItem->saleItem_total }}</td>
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
            {{-- <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <table class="table no-border">
                        <thead>
                        <tr>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoiceInfos as $invoiceInfo)
                        <tr class="text-right">
                            <th style="text-align: right;">Sub Total :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_subTotal }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Discount() :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_discountAmount }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Total Payable :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_totalPayable }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Paid Amount :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_paidAmount }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Return Amount :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_returnAmount }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Due Amount :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_dueAmount }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">Status :</th>
                            <th style="text-align: right;">{{ $invoiceInfo->saleInvoice_transactionStatus }}</th>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
            <br>
            <div class="text-right">
                <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                            class="fa fa-print" ></i> Print
                </a>
            </div>
    <div>Printing Date and Time:<?php date_default_timezone_set("Asia/Dhaka"); echo date('d-m-Y h:i:s A');?>
    </div>              
            {{-- <div class="text-right">
                <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                            class="fa fa-print" ></i> Print
                </a>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">

                <div class=" col-md-12"><b>Printing Date &
                        Time:</b>&nbsp;&nbsp;php date_default_timezone_set("Asia/Dhaka"); echo date('d-m-Y h:i:s A');?>
                    {{-- &nbsp; <span style="margin-left: 45%;">Develop by &nbsp;<b><a
                                    href="https://www.creativesoftware.com.bd" target="_blank">Creative Software</a></b></span>
                </div>

            </footer> --}}
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