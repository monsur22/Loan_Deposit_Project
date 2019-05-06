@extends('user.dashboard.master')
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
            .card-body{
                display: none;
            }
        }
    </style>
<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="container text-center">
        @foreach ($companydetails as $item)
    <h4>{{$item->company_name}}</h4>
    <h6>Adress: {{$item->company_address}}</h6>
    <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
        @endforeach
<br>
<h3> <u>Expense & Income Statement</u> </h3>
                    
                    
</div>
    



    <div class="ibox"style="margin-top: 5px;">
            
            <div class="ibox-head">
                   

                    <div class="card-body">
                       
                        
                    <form action="{{url('user/expense-income-report')}}" method="get">
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
                <div class="row col-md-12 ">
                <div class="col-md-6">
                        <h4 class="text-center">Expense Statement</h4>

                        <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                                <thead>
                                        <tr>
                                           
                                                <th>Date</th>
                                                <th>Account Head</th>
                                                <th>Balance </th>
                                              

                                          
                                        </tr>
                                </thead>
                              
                                <tbody>
        
                                    
                                @foreach ($expense_details as $item)
                                         
                                    
                                    <tr>
                               
                                    <td>{{$item->e_date}}</td>
                                    {{-- <td>{{$item->e_voucher}}</td> --}}


                                    @foreach ($acheaddetail as $it)

                                    @if($item->e_debit_head==$it->id)
                                    <td>{{$it->ac_head_name}}({{$it->ac_head_code}})</td>
                                    @endif
                                  
                                    @endforeach


                                    <td style="text-align: right;">{{$item->e_amount}}</td>
                                    
                                  
                                    </tr>
                              
                             
                                @endforeach
                                    <tr style="text-align: center;">
                                            <td style="text-align: right;" colspan="2">Total: </td>
                                            <td style="text-align: right;"><strong>{{$totalSumExpense}}</strong></td>
                                           
                                    </tr>
                                </tbody>
                            </table>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Income Statement</h4>
                        <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                                <thead>
                                        <tr>
                                           
                                                <th>Date</th>
                                                <th>Account Head</th>
                                                <th>Balance </th>
                                          
                                        </tr>
                                </thead>
                              
                                <tbody>
        
                                    
                                     @foreach ($income_details as $item)
                                         
                                    
                                    <tr>
                               
                                    <td>{{$item->i_date}}</td>

                                    {{-- <td>{{$item->e_debit_head}}</td> --}}

                                    @foreach ($acheaddetail as $it)
                           
                                    @if($item->i_credit_head==$it->id)
                                    <td>{{$it->ac_head_name}}({{$it->ac_head_code}})</td>
                                    @endif
                                    
        
                                     @endforeach



                                    <td style="text-align: right;">{{$item->i_amount}}</td>
                                    
                                  
                                    </tr>
                             
                                    @endforeach

                                    <tr style="text-align: center;">
                                            <td style="text-align: right;" colspan="2">Total: </td>
                                            <td style="text-align: right;"><strong>{{$totalSumIncome}}</strong></td>
                                           
                                    </tr>
                                </tbody>
                            </table>  
                </div>
            
            </div>
            <h5>Total Income:&nbsp;{{$totalSumIncome}}</h5><h5>Total Expense:&nbsp;{{$totalSumExpense}}</h5><h5>Total Profit:&nbsp;{{$profit}}</h5>
                </div>
                <div class="text-right">
                        <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                                    class="fa fa-print" ></i> Print
                        </a>
                    </div>
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
