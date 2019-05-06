@extends('admin.master')

@section('content')
 
        <div class="container">
                <div class="container text-center">
                        @foreach ($companydetails as $item)
                    <h4>{{$item->company_name}}</h4>
                    <h6>Adress: {{$item->company_address}}</h6>
                    <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
                        @endforeach
                <br>
                <h3> <u>Product Sales Report</u> </h3>
                                    
                                    
                </div>
            <div style="margin-top: 5px;" class="card">
                <div class="card-body">
                    <form action="{{ url('/sales/dateWisereport') }}" method="get">
                        <input type="hidden" name="fDate" value="{{ $fromdate }}" class="form-control fDate"/>
                        <input type="hidden" class="form-control tDate" value="{{ $todate }}" name="tDate"/>
                        {{-- <button type="submit" style="float: right;" class="btn btn-primary "><i class="fa fa-print"></i></button> --}}
                    </form>
                    <form action="{{ url('/sales/dateWisereport') }}" method="get">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label style="float: right;">From:</label>
                                    </div>
                                    <div class="col-md-5" style="float: right;">
                                        <input type="date" name="fromDate" value="{{$fromdate}}" class="form-control fromDate"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-1"><label>To:</label></div>
                                    <div class="col-md-5"><input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control toDate" name="toDate"
                                        /></div>
                                    <div class="col-md-2"><input type="submit" class="btn btn-success" value="Load"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Invoice No</th>
                            <th>Sub Total</th>
                            <th>Discount</th>
                            <th>Total Payable</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1 ?>
                        @foreach($invoiceByDates as $invoiceByDate)
                        <tr style="text-align: center;">
                            <td>{{ $i++ }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_date }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_customerName }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_no }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_subTotal }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_discountAmount }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_totalPayable }}</td>
                            <td>{{ $invoiceByDate->saleInvoice_transactionStatus }}</td>
                            <td>
                                {{-- <a href="{{ route('invoiceInfo',['invoice'=>$invoiceByDate->saleInvoice_no]) }}"><button class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                                 --}}
                                 <a href="{{ url('/sales/invoice/info/'.$invoiceByDate->saleInvoice_no) }}"><button class="btn btn-info" title="Report"><i class="fa fa-file"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th style="text-align: right;" colspan="4">Total:</th>
                            <th style="text-align: center;">{{ $subtotalSum }}</th>
                            <th style="text-align: center;">{{ $discountSum }}</th>
                            <th style="text-align: center;">{{ $totalPayableSum }}</th>
                            <th  style="text-align: center;" colspan="2"></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <div style="width: 100%;" class="row">
                <div style="width: 50%; text-align: left" class="col-md-6">
                    <b>Printing Date & Time: </b>&nbsp;&nbsp;<?php date_default_timezone_set("Asia/Dhaka"); echo date('d-m-Y h:i:s A');?>
                </div>
                <div style="width: 50%; text-align: right;" class="col-md-6">
                    Develop by &nbsp;<b><a href="https://www.creativesoftware.com.bd" target="_blank">Creative Software</a></b>
                </div>
            </div>
        </footer>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
