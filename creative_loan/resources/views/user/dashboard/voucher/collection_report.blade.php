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
                                        <h5><u>Collection Voucher</u> </h5>
                          
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        
                                        <td>
                                          
                                            <div><p><strong>Collection Voucher Number:</strong>  &nbsp {{$colldetails->c_voucher}}</p></div>
                                            
                                        </td>
                                        <td>
                                        <div><p><strong>Date:</strong>  &nbsp {{$colldetails->c_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                                <td>
                                                    @foreach ($customerdetails as $it)
                                                    @if ($colldetails->c_name==$it->id)
                                                    <div><p><strong>Company Name:</strong>  &nbsp {{$it->customer_name}}</p></div>
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                        <div><p><strong>Previous Due:</strong>  &nbsp {{$colldetails->c_pre_due}}</p></div>
                                                    </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Type:</strong>  &nbsp {{$colldetails->c_ptype}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong>Collection Description:</strong>  &nbsp {{$colldetails->c_des}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Collection Amount:</strong>  &nbsp {{$colldetails->c_amount}}</p></div>
                                                </td>

                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User:</strong>  &nbsp {{session('first_name')}}</p></div>
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
