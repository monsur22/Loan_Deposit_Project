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
<div class="ibox">

<div class="ibox-body">
    <div class="container text-center">
        @foreach ($cdata as $item)
        <h4>{{$item->company_name}}</h4>
        <h6>Adress: {{$item->company_address}}</h6>
        <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
            @endforeach
                        <br>
                  
                        <h5><u>Account Member Detais</u> </h5>
               
                
                
    </div>

            <div  class="text-right"><img src="{{ asset($view_member->user_photo) }}"  height="200" width="200" ></div>
   
    <table class="table table-striped no-margin no-border table-invoice">

            <tbody>
                    
                           
                        
                       
                       
                        
                   
                <tr>
                        <td>
                                <div><p><strong>Name</strong>  &nbsp {{$view_member->reg_name}}</p></div>
                        </td>
                        <td>
                                <div><p><strong>NID</strong>  &nbsp {{$view_member->reg_nid}}</p></div>
                        </td>
                
                   
                   
                    
                </tr>
                
                <tr>
                     
                       <td>
                              
                                <div><p><strong> Register Number</strong>  &nbsp {{$view_member->reg_number}}</p></div>
                               
                            </td>
                            <td>
                              
                                    <div><p><strong> Account Number</strong>  &nbsp {{$view_member->ac_number}}</p></div>
                        </td>

                           
                            
               </tr>
               <tr>
                            <td>
                                <div><p><strong>Father's Name</strong>  &nbsp {{ $view_member->reg_father_name}}</p></div>
                            </td>
                            <td>
                            <div><p><strong>  Mother's Name</strong>  &nbsp {{ $view_member->reg_mother_name }}</p></div>
                            </td>
                           
                            
               </tr>
               <tr>
                    <td>
                        <div><p><strong>Birthday</strong>  &nbsp {{$view_member->reg_birth_date }}</p></div>
                    </td>
                    <td>
                    <div><p><strong>  Profession</strong>  &nbsp {{ $view_member->reg_profession}}</p></div>
                    </td>
                   
                    
       </tr>
       <tr>
            <td>
                <div><p><strong>Phone Number</strong>  &nbsp {{$view_member->reg_phone  }}</p></div>
            </td>
            <td>
            <div><p><strong>  Present Adress</strong>  &nbsp {{ $view_member->reg_pre_adress}}</p></div>
            </td>
           
            
            </tr>
<tr>

<td>
<div><p><strong>  Permanent Adress</strong>  &nbsp {{ $view_member->reg_per_adress}}</p></div>
</td>
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