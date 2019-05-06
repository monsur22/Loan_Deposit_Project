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
                                <h5><u> Voucher Report </u> </h5>
                                
                                
                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Transection Voucher Number</strong>  &nbsp {{$tradetails->t_voucher}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date</strong>  &nbsp {{$tradetails->t_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>           
                                        
                                                
                                                <td>
                                                        @foreach ($acheaddetail as $it)
                                                    @if ($tradetails->t_debit_head==$it->id)
                                                    
                                                    <div><p><strong>Debit Head</strong>  &nbsp {{$it->ac_head_name}}</p></div>
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                        @foreach ($acheaddetail as $it)
                                                    @if ($tradetails->t_credit_head==$it->id)
                                                    
                                                    <div><p><strong>Credit Head</strong>  &nbsp {{$it->ac_head_name}}</p></div>
                                                    @endif
                                                    @endforeach
                                                </td>
                                               
                                                {{-- <td>
                                                        <div><p><strong>Debit Head Balance</strong>  &nbsp {{$tradetails->t_debit_belence}}</p></div>
                                                </td> --}}

                                                {{-- @foreach ($acheaddetail as $it)

                                                @if($item->t_debit_head==$it->id)
                                                <td>{{$it->ac_head_name}}</td>
                                                @endif
                                                @if($item->t_credit_head==$it->id)
                                                <td>{{$it->ac_head_name}}</td>
                                                @endif it
                                         
              
                                           @endforeach
                                           --}}
                                                {{-- <td>
                                                        <div><p><strong>Debit Head </strong>  &nbsp {{$tradetails->t_debit_head}}</p></div>
                                                </td> --}}
                                                

                                               
                                                
                                   </tr>
                                    {{-- <tr>
                                        <td>
                                                @foreach ($acheaddetail as $it)
                                            @if ($tradetails->t_credit_head==$it->id)
                                            
                                            <div><p><strong>Credit Head</strong>  &nbsp {{$it->ac_head_name}}</p></div>
                                            @endif
                                            @endforeach
                                        </td>
                                                 <td>
                                                    <div><p><strong>Credit Head</strong>  &nbsp {{$tradetails->t_credit_head}}</p></div>
                                                </td> 
                                                <td>
                                                <div><p><strong>Credit Head Balance</strong>  &nbsp {{$tradetails->t_credit_belence}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>  --}}
                                   <tr>
                                                <td>
                                                    <div><p><strong>Transeciton Description</strong>  &nbsp {{$tradetails->t_des}}</p></div>
                                                </td>
                                                <td>
                                                        <div><p><strong>Transeciton Amount</strong>  &nbsp {{$tradetails->t_amount}}</p></div>
                                                    </td>
                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User</strong>  &nbsp {{$tradetails->user_id}}</p></div>
                                                                </td>
                                              
                                               
                                                
                                   </tr>
                                </tbody>
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
