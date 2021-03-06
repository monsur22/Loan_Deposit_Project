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
                    
<h6><b> <u>Share Collection Report</u> </b></h6>




<h6><b> 
        @foreach ($regimember as $it)
           
        @if(session('accounts')==$it->ac_number)
    Account Number Number:    {{$it->ac_number}}
        @endif

       

         @endforeach
</b></h6>

<h6><b> From: {{session('fromdate')}} To: {{session('todate')}}</b></h6>



    </div>
    



    <div class="ibox"style="margin-top: 3px;">
            
            <div class="ibox-head">
                   

                    <div class="card-body">
                       
                        
                    <form action="{{url('/share-collection-report')}}" method="get">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-3 ah">
                                        <div class="row">
                                               
                                                    
                                               
                                           
                                                <select name="accounts" id="accounts" name="accounts" class="form-control depositors">
                                                    <option disabled selected value >Select Share  Number</option>
                                                    @foreach ($regimember as $item)
                                                    <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                                    {{-- <option value="{{$item->id}}">{{$item->id}}</option> --}}
                                                    @endforeach
                                                </select>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="float: right;">From:</label>
                                            </div>
                                            <div class="col-md-6" style="float: right;">
                                                <input type="date" name="fromDate" value="" class="form-control fromDate"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="row">
                                            <div class="col-md-1"><label>To:</label></div>
                                            <div class="col-md-5 "><input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control toDate" name="toDate"
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
                    <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                       
                                        <th>Date</th>
                                        <th>Share collection</th>
                                        
                                        <th>Amount</th>
                                      
                                </tr>
                        </thead>
                      
                        <tbody>
     
                           
                            @foreach ($sharecollection as $item)
                            <tr>
                  
                            <td>{{$item->s_c_date}}</td>
                            <td>{{$item->s_collectin_number}}</td>
                            <td>{{$item->s_collection_amount}}</td>
                        

                      
 
                            </tr>

                            @endforeach 
                      
                            <tr style="text-align: center;">
                                <td style="text-align: right;" colspan="2">Total: </td>
                                <td style="text-align: right;"><strong>{{$share_sum}}</strong></td>
                                
                            </tr>
  
                           
                               
                           
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                        <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                                    class="fa fa-print" ></i> Print
                        </a>
                </div>
                <div>Printing Date and Time:<?php date_default_timezone_set("Asia/Dhaka"); echo date('d-m-Y h:i:s A');?>
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
