@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="container text-center">
        @foreach ($companydetails as $item)
    <h4>{{$item->company_name}}</h4>
    <h6>Adress: {{$item->company_address}}</h6>
    <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
        @endforeach
<br>
<h3> <u>Expense Statement</u> </h3>
                    
                    
</div>
    



    <div class="ibox"style="margin-top: 5px;">
            
            <div class="ibox-head">
                   

                    <div class="card-body">
                       
                        
                    <form action="{{url('/user/expence-statement')}}" method="get">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="float: right;">From:</label>
                                            </div>
                                            <div class="col-md-6" style="float: right;">
                                                <input type="date" name="fromDate" value="" class="form-control fromDate"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-1"><label>To:</label></div>
                                            <div class="col-md-5 "><input type="date" value="<?php echo date('Y-m-d'); ?>"class="form-control toDate" name="toDate"
                                                /></div>
                                            <div class="col-md-2 "><input type="submit" class="btn btn-success" value="Load"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

            </div>
            {{--Table Start--}}
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Descsription</th>
                                        <th>Balance </th>
                                        <th>Action </th>
                                     
                                      
                                    </tr>
                        </thead>
                      
                        <tbody>

                                <?php $i=1 ?>
                               
                           
                             @foreach ($expstatement as $item)
                                 
                            
                      
                            <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->e_date}}</td>
                            <td>{{$item->e_voucher}}</td>
                            
                            <td>{{$item->e_des}}</td>
                            <td>{{$item->e_amount}}</td>
                            
                            <td>
                                <a href="{{url('user/expence-statement-report/'.$item->id)}}" class="btn btn-info" title="Report">
                                    <span class="fa fa-file font-14"></span>
                                </a>
                            </td>
                           
                            
                            </tr>
                     
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>


@endsection
