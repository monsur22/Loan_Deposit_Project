@extends('admin.master')
@section('content')



<div class="page-content fade-in-up">

    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Add Loaner</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
               
                    
                </div>
            </div>
            <div class="ibox-body">
                <form method="POST" action="{{ url('/loan-add') }}">
                    {{csrf_field()}}
                    <div class="modal-body">
        
                            <div class="row">
                              
                              <div class="col-sm-4 form-group">
                                <label>Account Number</label>
                                <select class="form-control select2_demo_1  " name="l_acc" id="l_acc"  >
                                        @foreach ($acc_number as $item)
                                        <option value="{{$item->id}}">{{$item->ac_number}}</option>
                                        @endforeach  
                                        
                                </select>
                          
                              </div>
                                 
                              <div class="col-sm-4 form-group">
                                    <?php
                                          
                                    $date=date('dmY');
          
                                    ?>
                                <label>Loan Number</label>
                                <input class="form-control" type="text" id="l_number" name="l_number"value="LON{{$date.$last_id++}}" readonly>
                            </div>
                                <div class="col-sm-4 form-group">
                                    <label>Loan Date</label>
                                    <input class="form-control" type="date" id="l_date" name="l_date"value="<?php echo date('Y-m-d'); ?>">
                                </div>
        
        
                                <div class="col-sm-4 form-group">
                                    <label>Loner Name</label>
                                    <input class="form-control" type="text" id="l_name" name="l_name" readonly>
                                </div>
                               
                               <div class="col-sm-4 form-group">
                                    <label>Loner Father's Name</label>
                                    <input class="form-control" type="text" id="l_father_name" name="l_father_name" readonly>
                                </div>
                                   
                                <div class="col-sm-4 form-group">
                                    <label>Phone Numbrer</label>
                                    <input class="form-control" type="text" id="l_phone_number" name="l_phone_number" readonly>
                                </div>
                                <div class="col-sm-4 form-group">
                                  <label>Closing Date</label>
                                  <input class="form-control" type="date" id="l_closing_date" name="l_closing_date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                      <div class="col-sm-4 form-group">
                                      <label>Loan Pakage</label>
                                      <select class="form-control select2_demo_1" name="l_pakage" id="l_pakage"   >
                                 
                                        @foreach ($loan_pakage as $item)
                                        <option value="{{$item->l_pakage_name}}">{{$item->l_pakage_name}}({{$item->l_amount}})</option>
                                            
                                        @endforeach
                                     
                                         
                                          
                                      </select>
                                  </div>
                              
                                  
                            
                              </div>
                   
                   
                   
                   
                        </div>
        
                    <div class="modal-footer">
                            <button type="reset" class="btn btn-default" >Clear</button>
        
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{-- Add Company Modal --}}


{{-- 
<div class="modal fade bd-example-modal-lg"  id="exampleModalCenter"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Loan</h5>
            
        </div>
        <form method="POST" action="{{ url('/loan-add') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Registration Number</label>
                        <select class="form-control select2_demo_1  " name="l_reg" id="l_reg"  >
                                @foreach ($acc_number as $item)
                                <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                                @endforeach  
                                
                        </select>
                      
                      </div>
                      <div class="col-sm-4 form-group">
                        <label>Account Number</label>
                        <select class="form-control select2_demo_1  " name="l_acc" id="l_acc"  >
                                @foreach ($acc_number as $item)
                                <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                @endforeach  
                                
                        </select>
                  
                      </div>
                         
                      <div class="col-sm-4 form-group">
               
                        <label>Loan Number</label>
                        <input class="form-control" type="text" id="l_number" name="l_number"value="LON{{$date.$last_id++}}" readonly>
                    </div>
                        <div class="col-sm-4 form-group">
                            <label>Loan Date</label>
                            <input class="form-control" type="date" id="l_date" name="l_date"value="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Loner Name</label>
                            <input class="form-control" type="text" id="l_name" name="l_name" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Loner Father's Name</label>
                            <input class="form-control" type="text" id="l_father_name" name="l_father_name" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Phone Numbrer</label>
                            <input class="form-control" type="text" id="l_phone_number" name="l_phone_number" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Closing Date</label>
                          <input class="form-control" type="date" id="l_closing_date" name="l_closing_date" value="">
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Loan Pakage</label>
                              <select class="form-control select2_demo_1" name="l_pakage" id="l_pakage"   >
                         
                                @foreach ($loan_pakage as $item)
                                <option value="{{$item->l_pakage_name}}">{{$item->l_pakage_name}}({{$item->l_amount}})</option>
                                    
                                @endforeach
                             
                                 
                                  
                              </select>
                          </div>
                      
                          
                    
                      </div>
           
           
           
           
                </div>

            <div class="modal-footer">
                    <button type="reset" class="btn btn-default" >Clear</button>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>
 --}}







{{-- Edit Company Modal --}}
{{-- <div class="modal fade bd-example-modal-lg"  id="edit"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Deposit Pakage</h5>
              
          </div>
          <form method="POST" action="{{ url('/loan-update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Registration Number</label>
                        <select class="form-control select2_demo_1  l_reg "   name="l_reg" id="l_reg">
                                @foreach ($acc_number as $item)
                                <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                                @endforeach  
                                
                        </select>
                       
                        <input class="form-control cId" type="hidden" id="id" name="id" placeholder="">
                      </div>
                      <div class="col-sm-4 form-group">
                        <label>Account Number</label>
                        <select class="form-control select2_demo_1  l_acc" name="l_acc" id="l_acc">
                                @foreach ($acc_number as $item)
                                <option data-tokens="{{$item->ac_number}}" value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                @endforeach  
                                
                        </select>
                       
                      </div>
                         
                      <div class="col-sm-4 form-group">
                        <label>Loan Number</label>
                        <input class="form-control l_number" type="text" id="l_number" name="l_number" readonly>
                    </div>
                        <div class="col-sm-4 form-group">
                            <label>Loan Date</label>
                            <input class="form-control l_date" type="date" id="l_date" name="l_date" placeholder="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Loner Name</label>
                            <input class="form-control l_name" type="text" id="l_name" name="l_name" placeholder="">
                        </div>
                       
                        <div class="col-sm-4 form-group">
                            <label>Loner Father's Name</label>
                            <input class="form-control l_father_name" type="text" id="l_father_name" name="l_father_name" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Phone Numbrer</label>
                            <input class="form-control l_phone_number" type="text" id="l_phone_number" name="l_phone_number" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Closing Date</label>
                          <input class="form-control l_closing_date" type="date" id="l_closing_date" name="l_closing_date" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                              <label>Loan Pakage</label>
                              <select class="form-control  l_pakage select2_demo_1" name="l_pakage" id="l_pakage" >
                                @foreach ($loan_pakage as $item)
                                <option value="{{$item->l_pakage_name}}">{{$item->l_pakage_name}}({{$item->l_amount}})</option>
                                    
                                @endforeach
                             
                                 
                                  
                              </select>
                        </div>
                      
                          
                    
                      </div>
           
           
           
           
                </div>

            <div class="modal-footer">
      

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div> --}}
  
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title"> Loan  List</div>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                       Add New Loan 
                    </button> --}}
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Loan Number </th>
                                        <th>Name</th>
                                        
                                        <th>Account No.</th>
                                        <th>Opening Date</th>
                                        <th>Loan Pakage</th>
                                     
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                            <?php 
                                $i=1;
                                ?>
                   @foreach ($loan_details as $item)
                       
                  
                         <tr>
                                <th>{{$i++}}</th>
                                <td>{{$item->l_number}}</td>
                                <td>{{$item->l_name}}</td>
                               
                            @foreach ($acc_number as $it)
                                @if ($item->l_acc==$it->id)
                                <td>{{$it->ac_number}}</td>
                                @endif    
                           @endforeach
                                <td>{{$item->l_date}}</td>
                                <td>{{$item->l_pakage}}</td>
                                
                                
                                
                       
                            
        
        
                                <td>
                                    @if($item->l_active_status==1)
                                    <a href="{{route('loan_active_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->l_active_status==0)
                                    <a href="{{route('loan_active_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                        {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>    --}}
                                         {{-- <button href="" data-target="#edit"
                                        class="btn btn-success  edit" value="{{$item->id}}"
                                        data-toggle="modal">
                                    <span class="fa fa-pencil font-14"></span>
                                        </button> --}}
                                        <a href="{{  url('loan-edit/'.$item->id) }}" class="btn btn-success" title="Edit">
                                            <span class="fa fa-pencil font-14  "></span>
                                        </a>
                                    <a href="{{  url('loan-delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
                                    </a>
        
                                </td>
                            </tr> 
                            @endforeach
                         
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>
{{-- ======== Deposit Calculation  =========== --}}
<script>
    $(document).ready(function(){  
         $('#l_acc').change(function(){  
              var loan_id = $(this).val();  
             console.log(loan_id);
              $.ajax({  
                   url:"{{url('/loan')}}/"+loan_id,  
                   method:"GET",  
                   success:function(data){  
                        $('#l_name').val(data.reg_name);  
                        $('#l_father_name').val(data.reg_father_name);  
                        $('#l_phone_number').val(data.reg_phone);  
                        console.log(data);
   
                   }, error:function(xhr,status,error){
                 console.log(error);
                       
                 }  
              });  
         });  
    });  
</script>


{{-- <script>
        function edit(id) {
                var x =id;
 
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/loan-edit')}}/"+x,
                    success:function(response){
                        console.log(response);
                       
                        $('.l_reg').val(response.l_reg);
                        $('.cId').val(response.id);
                        $('.l_acc').val(response.l_acc);
                        $('.l_number').val(response.l_number);
                        $('.l_date').val(response.l_date);
                        $('.l_name').val(response.l_name);
                        $('.l_father_name').val(response.l_father_name);
                        $('.l_phone_number').val(response.l_phone_number);
                        $('.l_closing_date').val(response.l_closing_date);
                       
                       
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            } 
        </script> --}}

{{--  ========================================================= --}}
{{-- <script>

$('.edit').click(function () {
                var id = $(this).val();

                function d_total_amount() {
                    var a = $(".d_amount").val();
                    var b = $(".d_Interest").val();
                    var c = (a * b);
                    var d = (c / 100);
                    var total = +d + +a;
                    $('.d_total_amount').val(total);
                    console.log('Diposit Amount '+a);
                    console.log('Diposit Interest '+b);
                    console.log('Total Amount '+total);
                    // console.log(error);

                }

                $(".d_amount").on('keyup', d_total_amount);
                $(".d_Interest").on('keyup', d_total_amount);

                function per_install_amount() {
        
                    var d_number_install = $(".d_number_install").val();
                    var d_total_amount = $(".d_total_amount").val();
                    var average = (d_total_amount / d_number_install);
                    $('.d_per_ins_amount').val(average);

                    console.log('Number of Installment '+d_number_install);
                    console.log('Total amount '+d_total_amount);
                    console.log('Average Install Amount '+average);
              //  console.log(error);
         
    }
                    
    $(".d_number_install").on('keyup', per_install_amount);
    $(".d_per_ins_amount").on('keyup', per_install_amount);
   


                $.ajax({
                    url: '{{route('edit_deposit')}}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        $('.d_pakage_name').val(data[0]['d_pakage_name']);
                        $('.d_currency').val(data[0]['d_currency']);
                        $('.cId').val(data[0]['id']);
                        $('.d_amount').val(data[0]['d_amount']);
                        $('.d_Interest').val(data[0]['d_Interest']);
                        $('.d_total_amount').val(data[0]['d_total_amount']);
                        $('.d_number_install').val(data[0]['d_number_install']);
                        $('.d_per_ins_amount').val(data[0]['d_per_ins_amount']);
                        $('.d_ins_type').val(data[0]['d_ins_type']);
                        $('.d_fine_p_ins').val(data[0]['d_fine_p_ins']);
                     
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
                });

            });
</script> --}}


     
@endsection
