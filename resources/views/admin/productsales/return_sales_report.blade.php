@extends('admin.master')

@section('content')

        <div class="container">
            
            <div style="margin-top: 5px;" class="card">
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
                <div class="card-body">
                    <form action="" method="get">
                        <input type="hidden" name="fDate" value="{{ $fromdate }}" class="form-control fDate"/>
                        <input type="hidden" class="form-control tDate" value="{{ $todate }}" name="tDate"/>
                        {{-- <button type="submit" style="float: right;" class="btn btn-primary "><i class="fa fa-print"></i></button> --}}
                    </form>
                    <form action="{{ url('/sales-return/report') }}" method="get">
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
                     
                            <th>Sales Return  No</th>
                            <th>Qty</th>
                            <th> Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1 ?>
                        @foreach($salesReturnInvoices as $salesReturnInvoice)
                            <tr style="text-align: center;">
                                <td>{{ $i++ }}</td>
                                <td>{{ $salesReturnInvoice->salesReturnInvoice_date}}</td>
                             
                                <td>{{ $salesReturnInvoice->salesReturnInvoice_no }}</td>
                                <td>{{ $salesReturnInvoice->salesReturnInvoice_qty }}</td>
                                <td>{{ $salesReturnInvoice->salesReturnInvoice_total }}</td>
                                <td>
                                    <a href="{{ url('/sales-return-report-by-id/'.$salesReturnInvoice->salesReturnInvoice_no)}}"><button class="btn btn-info" title="Report"><i class="fa fa-file"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
   
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
