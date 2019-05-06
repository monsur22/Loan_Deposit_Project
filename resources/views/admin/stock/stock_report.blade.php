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
{{-- Add Company Modal --}}
<div class="container text-center">
        @foreach ($companydetails as $item)
    <h4>{{$item->company_name}}</h4>
    <h6>Adress: {{$item->company_address}}</h6>
    <h6>Phone:{{$item->company_mobile}} &nbsp Email:{{$item->company_email}}</h6>
        @endforeach
<br>
<h3> <u>Stock Report</u> </h3>
<h6> <u>Date:<?php echo date('Y-m-d'); ?></u> </h6>
                    
                    
</div>
    



    <div class="ibox"style="margin-top: 5px;">
            
          
            {{--Table Start--}}
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Purches Number</th>
                            
                                        <th>Stock Id</th>
                                        <th>Quantity </th>
                                        <th>Cost </th>
                                    
                                     
                                      
                                    </tr>
                        </thead>
                      
                        <tbody>

                                <?php $i=1 ?>
                               
                           
                             @foreach ($stock_report as $item)
                                 
                            
                      
                            <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->stockreport_date}}</td>
                            <td>{{$item->report_purchaseno}}</td>
                            
                   
                            <td>{{$item->report_stock_id}}</td>
                            <td>{{$item->report_quantity}}</td>
                            <td>{{$item->report_cost}}</td>
                            
                        
                           
                            
                            </tr>
                     
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                {{-- <td class="font-bold font-15"></td> --}}
                                <td class="font-bold font-15"colspan="4">TOTAL:</td>
                                <td class="font-bold font-15">{{$subtotalSum}}</td>
                         
                                <td class="font-bold font-15">{{$totalSum}}</td>
        
                            </tr>
                            </tfoot>
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
