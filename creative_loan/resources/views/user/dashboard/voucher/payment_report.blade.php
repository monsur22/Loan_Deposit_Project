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
                                        <h5><u>Payment Voucher</u> </h5>
                               
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Payment Voucher Number</strong>  &nbsp {{$paydetails->pv_number}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date</strong>  &nbsp {{$paydetails->p_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                         
                                           
                                         
                                      
                                       
                                                <td>
                                                        @foreach ($supplierdetails as $it)
                                                        @if ($paydetails->s_name==$it->id)
                                                    <div><p><strong>Supplier Name</strong>  &nbsp {{$it->supplier_name}}</p></div>
                                                         @endif
                                                        @endforeach
                                                </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Type</strong>  &nbsp {{$paydetails->p_type}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong>Previous Due</strong>  &nbsp {{$paydetails->pre_due}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Description</strong>  &nbsp {{$paydetails->p_des}}</p></div>
                                                </td>
                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User</strong>  &nbsp {{session('first_name')}}</p></div>
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
