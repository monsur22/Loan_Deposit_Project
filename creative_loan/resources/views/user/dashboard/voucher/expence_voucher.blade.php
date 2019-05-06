@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="transection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add Expence  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/user/expence-add')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <?php
                                  

                                    
                                    $date=date('dmY');

                                    ?>
                                    {{-- {{ $lastid++ }} --}}
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                   
                                     <input type="text"value="EV{{$date.$lastid++}}" class="form-control " id="e_voucher" name="e_voucher" readonly >
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control " id="e_date" name="e_date"  >
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Debit Head <sup>*</sup> </span></label>
                                                    
                                                     <select name="e_debit_head" id="e_debit_head" class="form-control">
                                                        <option value="">---Select Debit Head---</option>
                                                        @foreach ($acheaddetail as $item)
                                                     <option  value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                 
                                                    </select>
                                                      
                                    </div>
                            </div>   
                                         
                             
                            <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Debit Head Balance</label>
                                 <input type="text" class="form-control " id="e_debit_belence" name="e_debit_belence" readonly >
                                 
                                </div>
                            </div>   
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head <sup>*</sup> </span></label>
                                                
                                                 <select name="e_credit_head" id="e_credit_head" class="form-control">
                                                     <option value="">---Select Credit Head---</option>
                                                     @foreach ($acheacredit as $item)
                                                     <option value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                    
                                                 </select>
                                </div>
                        </div>
                                 
                         
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Credit Head Balance</label>
                             <input type="text" class="form-control " id="e_credit_belence" name="e_credit_belence" readonly>
                             
                           </div>
                        </div> 
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control " id="e_des" name="e_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Amount <sup>*</sup> </label>
                                         <input type="text" class="form-control " id="e_amount" name="e_amount" >
                                        </div>
                                       </div>
                                </div> 
                                      
                    </div>
                      <!--  <input type="hidden" value="1" name="status">-->
      
                      <div class="modal-footer">
                                <button type="reset" class="btn btn-default" >Clear</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>      
                           
            </div>
                        
                         
                              
            </div>

            
        </form>
    </div>
</div>
{{-- Edit Company Modal --}}

<div class="modal fade" id="edit-transection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Edit Expence  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/user/expence-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                   
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                   <input type="text"value="" id="e_voucher" name="e_voucher"class="form-control  e_voucher" readonly >
                                   <input type="hidden" class=" cId"  name="id" >
                                    
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" class="form-control e_date" id="e_date" name="e_date"  >
                                     
                                    </div>
                            </div>

                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Debit Head<sup>*</sup></span></label>
                                                    
                                                     <select name="e_debit_head" id="e_debit_head" class="form-control e_debit_head">
                                                        <option value="">---Select Debit Head---</option>
                                                        @foreach ($acheaddetail as $item)
                                                     <option  value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                 
                                                    </select>
                                                      
                                    </div>
                            </div>   
                                         
                             
                            <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Debit Head Balance</label>
                                 <input type="text" class="form-control e_debit_belence" id="e_debit_belence" name="e_debit_belence" readonly>
                                 
                                </div>
                            </div>   
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head<sup>*</sup></span></label>
                                                
                                                 <select name="e_credit_head" id="e_credit_head" class="form-control e_credit_head">
                                                     <option value="">---Select Credit Head---</option>
                                                     @foreach ($acheacredit as $item)
                                                     <option value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                    
                                                 </select>
                                </div>
                        </div>
                                 
                         
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Credit Head Balance</label>
                             <input type="text" class="form-control e_credit_belence" id="e_credit_belence" name="e_credit_belence" readonly>
                             
                           </div>
                    </div> 
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control e_des" id="e_des" name="e_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                             
                                          
                            
                              
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Amount<sup>*</sup></label>
                                         <input type="text" class="form-control e_amount" id="e_amount" name="e_amount" >
                                       
                                         
                                       </div>
                                </div> 
                                      
                    </div>
                           
            </div>
                        
                        <!--  <input type="hidden" value="1" name="status">-->
      
                        <div class="modal-footer">
                          
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>         
                              
            </div>

            
        </form>
    </div>
</div>
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Expence Voucher List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transection"
                            style="margin-right: 60px;">
                      Add  New Expence
                    </button>
            </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Debit Head</th>
                                        <th>Credit Head </th>
                                        <th>Description</th>
                                        <th>Account</th>
                                        <th>Expense Status</th>
                                        <th>Action</th>
                                    </tr>
                        </thead>
                      
                        <tbody>

                                <?php $i=1 ?>
                               
                           
                                @foreach($expvoucher as $item)
                      
                            <tr>
                            <td>{{$i++}}</td>
                            
                            <td>{{$item->e_date}}</td>
                            <td>{{$item->e_voucher}}</td>
                            @foreach ($acheadshow as $it)

                                  @if($item->e_credit_head ==$it->id)
                                  <td>{{$it->ac_head_name}}</td>
                                  @endif
                                  @if($item->e_debit_head==$it->id)
                                  <td>{{$it->ac_head_name}}</td>
                                  @endif
                            

                             @endforeach
                            {{-- <td>{{$item->e_debit_head}}</td>
                            <td>{{$item->e_credit_head}}</td> --}}
                            <td>{{$item->e_des}}</td>
                            <td>{{$item->e_amount}}</td>
                         
                         
                         
                            @if ($item->confirm_id	==1)
                            <td> <b class="text-center text-success">Confirm</b> </td>
                            @else
                            <td> <b class="text-center text-danger ">Panding</b> </td>
                            @endif
                            
                             
                                <td>
                                        @if (session('user_role')==1)
                                    @if($item->confirm_id==1)
                                        <a href="{{route('user_e_confirm_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                            <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($item->confirm_id==0)
                                        <a href="{{route('user_e_confirm_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                        @endif

                                        @if ($item->confirm_id==0)
                                        <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit-transection" class="btn btn-success" >
                                                <span class="fa fa-pencil font-14"></span>
                                        </button> 
                                        @endif
                                          
                                    
                                            {{-- <a href="{{url('/userexpence-delete/'.$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
                                                        <span class="fa fa-trash font-14"></span>
                                           </a> --}}
        
                                </td>
                            </tr>
                     
        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>

<script>
        $(document).ready(function(){  
             $('#e_debit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/user/eshowdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#e_debit_belence').val(data.ah_balance);  
                            console.log(data);
       
                       }, error:function(xhr,status,error){
                     console.log(error);
                           
                     }  
                  });  
             });  
        });  
</script> 
<script>
        $(document).ready(function(){  
             $('#e_credit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/user/eshowdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#e_credit_belence').val(data.ah_balance);  
                            console.log(data);
       
                       }, error:function(xhr,status,error){
                     console.log(error);
                           
                     }  
                  });  
             });  
        });  
</script>  
 
<script>
         
               function edit(id) {
                   var x = id;
                   
                   $.ajax({
                       type:'GET',
                       url:"{{url('/user/exp_edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.e_voucher').val(response.e_voucher);
                           $('.e_date').val(response.e_date);
                           $('.e_debit_head').val(response.e_debit_head);
                           $('.e_debit_belence').val(response.e_debit_belence);
                           $('.e_credit_head').val(response.e_credit_head);
                           $('.e_credit_belence').val(response.e_credit_belence);
                           $('.cId').val(response.id);
                           $('.e_des').val(response.e_des);
                           $('.e_amount').val(response.e_amount);
                          
                           
           
                       },
                       error:function(xhr,status,error){
                           console.log(error);
                           
                       }
           
                 });
                 console.log(id);

               }
           
           
             
           
           </script>
@endsection
