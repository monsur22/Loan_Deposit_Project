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
                                   <h5><u>Purchase Return Report</u></h5>
            <hr>
                                </div> 
                        <div class="col-6">
                            <h6>
                                @foreach($invoiceInfos as $invoiceInfo)
                                    <toppadding><strong>Invoice Date:</strong>  {{ $invoiceInfo->salesReturnInvoice_date }}&nbsp;
                                    </toppadding>
                                    <br><strong>Invoice No:</strong>  {{ $invoiceInfo->salesReturnInvoice_no }}&nbsp;</h6>
                            @break
                                @endforeach
                        </div>
                        {{-- <div class="col-6 text-right">
                            <div>
                                <div class="m-b-5 font-bold">Invoice To</div>
                                @foreach($suppliers as $supplier)
                                    <div>{{ $supplier->supplier_name }}</div>
                                    <ul class="list-unstyled m-t-10">
                                        <li class="m-b-5">{{ $supplier->supplier_mobile }}</li>
                                        <li class="m-b-5">{{ $supplier->supplier_email }}</li>
                                        <li>{{ $supplier->supplier_address}}</li>
                                    </ul>
                                    @break
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                </div>
                <table class="table table-striped no-margin table-invoice" >
                    <thead>

                    <tr>
                        <th>SL.</th>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Unit Cost</th>
                        <th class="text-right">Total Cost</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach($salesInvoiceItems as $salesInvoiceItem)
                        <tr style="text-align: center;">
                            <td>{{ $i++ }}</td>
                            <td>
                                <div><strong>{{ $salesInvoiceItem->salesReturnItem_description }}</strong></div>
                                <small></small>
                            </td>
                            <td>{{ $salesInvoiceItem->salesReturnItem_qty }}</td>
                            <td>{{ $salesInvoiceItem->salesReturnItem_unitPrice }}</td>
                            <td>{{ $salesInvoiceItem->salesReturnItem_itemTotal }}</td>
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