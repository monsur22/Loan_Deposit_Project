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
<div class="page-content fade-in-up"style="border:1px solid;">
                <div class="container text-center">
                        @foreach ($companydetails as $item)
                        <h4>{{$item->company_name}}</h4>
                        <h6>Adress: {{$item->company_address}}</h6>
                        <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
                            @endforeach
                                        <br>
                                        <br>
                                        <h5><u>Share Withdraw Report</u> </h5>
                               
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Share Withdraw Number</strong>  &nbsp {{$share_withdraw_report->s_withdraw_number}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Withdraw Date</strong>  &nbsp {{$share_withdraw_report->s_withdraw_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                         
                                           
                                         
                                      
                                       
                                                <td>
                                                  
                                                    <div><p><strong> Name</strong>  &nbsp {{$share_withdraw_report->s_withdraw_name}}</p></div>
                                                   
                                                </td>
                                                <td>
                                                  
                                                        <div><p><strong> Account Number</strong>  &nbsp {{$share_withdraw_report->account_number_withdraw}}</p></div>
                                                       
                                                    </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Withdraw Type</strong>  &nbsp {{$share_withdraw_report->s_withdraw_type}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong> Withdraw Amount</strong>  &nbsp {{$share_withdraw_report->s_withdraw_amount}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter By User</strong>  &nbsp UserId </p></div>
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