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
<h3> <u>Ledger Report</u> </h3>
      
<h6><b> 
    @foreach ($regimember as $it)
       
    @if(session('accounts')==$it->id)
Account Number:    {{$it->ac_number}}
    @endif

   

     @endforeach
</b></h6>              
                    
</div>
    



    <div class="ibox"style="margin-top: 5px;">
            
            <div class="ibox-head">
                   

                    <div class="card-body">
                       
                        
                    <form action="{{url('/deposit-loan-share/ledger-report')}}" method="get">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-3 ah">
                                        <div class="row">
                                        
                                                <select name="accounts" id="accounts" name="accounts" class="form-control depositors">
                                                    <option disabled selected value >Select Account  Number</option>
                                                    @foreach ($regimember as $item)
                                                    <option value="{{$item->id}}">{{$item->ac_number}}</option>
                                                    @endforeach
                                                </select>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="row">
                                            
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
                        <h4 class="text-center">Loan Statement</h4>

                        <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                                <thead>
                                        <tr>
                                           
                                                <th>Date</th>
                                                <th>Collection</th>
                                                
                                           
                                              

                                          
                                        </tr>
                                </thead>
                              
                                <tbody>
        
                                    
                                @foreach ($loan_collection as $item)
                                         
                                    
                                    <tr>
                               
                                    <td>{{$item->l_c_date}}</td>
                      
                               


                                 


                                    <td style="text-align: right;">{{$item->l_collection_amount}}</td>
                                    
                                  
                                    </tr>
                              
                             
                                @endforeach
                                    <tr style="text-align: center;">
                                            <td style="text-align: right;" colspan="1">Total: </td>
                                            <td style="text-align: right;"><strong>{{$loan_sum}}</strong></td>
                                           
                                    </tr>
                                </tbody>
                            </table>
                </div>




                <div class="col-md-6">
                    <h4 class="text-center">Diposit Statement</h4>
                        <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                                <thead>
                                        <tr>
                                           
                                                {{-- <th>Date</th> --}}
                                                <th>Collection</th>
                                                <th>Withdraw </th>
                                          
                                        </tr>
                                </thead>
                              
                                <tbody>
        
                                    
                                     @foreach ($deposit_withdraw as $item)
                                         
                                    
                                    <tr>
                               
                                    {{-- <td>{{$item->d_w_date}}</td> --}}

{{--                            
                                    @if($item->i_credit_head==$it->id)
                                    <td>{{$it->ac_head_name}}({{$it->ac_head_code}})</td>
                                    @endif --}}
                                    @foreach ($deposit_collection as $it)
                                    <td>{{$it->d_collection_amount}}</td>
                                    @endforeach
                                 
        
                                



                                    <td style="text-align: right;">{{$item->d_withdraw_amount}}</td>
                                    
                                  
                                    </tr>
                             
                                    @endforeach

                                    <tr style="text-align: center;">
                                            
                                            <td style="text-align: right;" colspan="2"><strong>Collection Total:{{$deposit_coll_sum}}</strong></td>
                                            <td style="text-align: right;"><strong>Withdraw Total:{{$deposit_sum}}</strong></td>
                                           
                                    </tr>
                                </tbody>
                            </table>  
                </div>


                {{-- <div class="col-md-6">
                    <h4 class="text-center">Share Statement</h4>
                        <table class="table table-striped table-bordered table-hover" id="" cellspacing="0" width="100%">
                                <thead>
                                        <tr>
                                           
                                                <th>Date</th>
                                                <th>Collection</th>
                                                <th>Withdraw </th>
                                          
                                        </tr>
                                </thead>
                              
                                <tbody>
        
                                    
                                     @foreach ($share_withdraw as $item)
                                         
                                    
                                    <tr>
                               
                                    <td>{{$item->s_w_date}}</td>

                                    <td>Collection</td>
                           



                                    <td style="text-align: right;">{{$item->s_withdraw_amount}}</td>
                                    
                                  
                                    </tr>
                             
                                    @endforeach

                                    <tr style="text-align: center;">
                                            <td style="text-align: right;" colspan="2">Total: </td>
                                            <td style="text-align: right;"><strong>{{$share_sum}}</strong></td>
                                           
                                    </tr>
                                </tbody>
                            </table>  
                </div> --}}
            
            </div>

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
