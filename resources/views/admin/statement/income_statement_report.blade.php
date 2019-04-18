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
                                <h5><u> Income Statement Report </u> </h5>
                                
                                
                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Income Voucher Number:</strong>  &nbsp {{$income_details->i_voucher}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date:</strong>  &nbsp {{$income_details->i_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>           
                                        
                                                
                                                <td>

                                                    <div><p><strong>Description:</strong>  &nbsp {{$income_details->i_des}}</p></div>
                                                    
                                                </td>
                                                <td>
                                        
                                                    
                                                    <div><p><strong>Balance:</strong>  &nbsp {{$income_details->i_amount}}</p></div>

                                                </td>
                                               
                                                
                                                
                                   </tr>


                                   <tr>
                                                <td>
                                                    <div><p><strong>Credit Head</strong>  &nbsp 
                                                        @foreach ($acheaddetail as $it)

                                                        @if($income_details->i_credit_head==$it->id)
                                                        {{$it->ac_head_name}}
                                                        @endif
                                                        @endforeach
                                                     </p></div>
                                                </td>
                                                <td>
                                                    <div><p><strong>Entry By User</strong>  &nbsp {{$income_details->user_id}}</p></div>
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
