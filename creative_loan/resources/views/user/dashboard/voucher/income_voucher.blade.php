@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="transection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add Income  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/user/income-add')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <?php
                                  
                                    //$data = DB::table('transvouchers')->count();
                                   // $data = "SELECT id  FROM transvouchers" ;
                                  // $data="SELECT id FROM transvouchers WHERE id = (SELECT MAX(id) FROM transvouchers)";
                                    
                                    $date=date('dmY');

                                    ?>
                                    {{-- {{ $lastid++ }} --}}
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                   
                                  
                                     <input type="text"value="IV{{$date.$lastid++}}" class="form-control " id="i_voucher" name="i_voucher" readonly >
                                     
                                    
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control " id="i_date" name="i_date"  >
                                     
                                    </div>
                            </div>
                           
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head <sup>*</sup> </span></label>
                                                
                                                 <select name="i_credit_head" id="i_credit_head" class="form-control">
                                                     <option value="">---Select Credit Head---</option>
                                                     @foreach ($acheaddetail as $item)
                                                     <option value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                    
                                                 </select>
                                </div>
                        </div>
                                 
                         
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Credit Head Balance</label>
                             <input type="text" class="form-control " id="i_credit_belence" name="i_credit_belence" readonly>
                             
                           </div>
                        </div> 
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Debit Head <sup>*</sup> </span></label>
                                                
                                                 <select name="i_debit_head" id="i_debit_head" class="form-control">
                                                    <option value="">---Select Debit Head---</option>
                                                    @foreach ($acheadebit as $item)
                                                 <option  value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                 @endforeach
                                             
                                                </select>
                                                  
                                </div>
                        </div>   
                                     
                         
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Debit Head Balance</label>
                             <input type="text" class="form-control " id="i_debit_belence" name="i_debit_belence" readonly >
                             
                            </div>
                        </div>   
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control " id="i_des" name="i_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                             
                                          
                            
                              
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Amount <sup>*</sup> </label>
                                         <input type="text" class="form-control " id="i_amount" name="i_amount" >
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

<div class="modal fade" id="edit-income" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Edit Income  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/user/income-voucher-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                   
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                   <input type="text"value="" id="i_voucher" name="i_voucher"class="form-control  i_voucher" readonly >
                                   <input type="hidden" class=" cId"  name="id" >
                                    
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" class="form-control i_date" id="i_date" name="i_date"  >
                                     
                                    </div>
                            </div>

                          
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head<sup>*</sup></span></label>
                                                
                                                 <select name="i_credit_head" id="i_credit_head" class="form-control i_credit_head">
                                                     <option value="">---Select Credit Head---</option>
                                                     @foreach ($acheaddetail as $item)
                                                     <option value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                                     @endforeach
                                                    
                                                 </select>
                                </div>
                        </div>
                                 
                         
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Credit Head Balance</label>
                             <input type="text" class="form-control i_credit_belence" id="i_credit_belence" name="i_credit_belence" readonly>
                             
                           </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="form-group">
                                         <label for="name">Debit Head<sup>*</sup></span></label>
                                        
                                         <select name="i_debit_head" id="i_debit_head" class="form-control i_debit_head">
                                            <option value="">---Select Debit Head---</option>
                                            @foreach ($acheadebit as $item)
                                         <option  value="{{$item->id}}">{{$item->ac_head_name}}</option>
                                         @endforeach
                                     
                                        </select>
                                          
                        </div>
                </div>   
                             
                 
                <div class="col-sm-6">
                    <div class="form-group">
                     <label for="code">Debit Head Balance</label>
                     <input type="text" class="form-control i_debit_belence" id="i_debit_belence" name="i_debit_belence" readonly>
                     
                    </div>
                </div>   
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control i_des" id="i_des" name="i_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                             
                                          
                            
                              
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Amount<sup>*</sup></label>
                                         <input type="text" class="form-control i_amount" id="i_amount" name="i_amount" >
                                       
                                         
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
                    <div class="ibox-title">Income Voucher List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transection"
                            style="margin-right: 60px;">
                      Add  New Incmome
                    </button>
            </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        
                                        <th>Credit Head </th>
                                        <th>Debit Head</th>
                                        <th>Description</th>
                                        <th>Account</th>
                                        <th>Income Status</th>
                                        <th>Action</th>
                                    </tr>
                        </thead>
                      
                        <tbody>

                                <?php $i=1 ?>
                               
                           
                                @foreach($incvoucher as $item)
                      
                            <tr>
                            <td>{{$i++}}</td>
                            
                            <td>{{$item->i_date}}</td>
                            <td>{{$item->i_voucher}}</td>

                            @foreach ($iacheadshow as $it)
                           
                            @if($item->i_debit_head==$it->id)
                            <td>{{$it->ac_head_name}}</td>
                            @endif
                            @if($item->i_credit_head==$it->id)
                            <td>{{$it->ac_head_name}}</td>
                            @endif
                            

                             @endforeach
                             
                          
                            {{-- <td>{{$item->i_debit_head}}</td>
                            <td>{{$item->i_credit_head}}</td> --}}
                            <td>{{$item->i_des}}</td>
                            <td>{{$item->i_amount}}</td>
                            
                   
                            @if ($item->user_i_confirm_statas==1)
                            <td><b class="text-center text-success">Confirm</b> </td>
                            @else
                            <td><b class="text-center text-danger">Panding </b></td>
                            @endif
                              
                             
                                <td>   
                                    @if (session('user_role')==1)
                                        @if($item->user_i_confirm_statas==1)
                                        <a href="{{route('confirm_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                            <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($item->user_i_confirm_statas==0)
                                        <a href="{{route('confirm_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                            @endif




                                         @if ($item->confirm_id==0)
                                         <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit-income" class="btn btn-success" >
                                                <span class="fa fa-pencil font-14"></span>
                                        </button>  
                                         @endif   
                                          
                                      
                                            {{-- <a href="{{url('/user/income-voucher-delete/'.$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
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
             $('#i_debit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/user/ishowdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#i_debit_belence').val(data.ah_balance);  
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
             $('#i_credit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/user/ishowdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#i_credit_belence').val(data.ah_balance);  
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
                       url:"{{url('/user/ixp_edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.i_voucher').val(response.i_voucher);
                           $('.i_date').val(response.i_date);
                           $('.i_debit_head').val(response.i_debit_head);
                           $('.i_debit_belence').val(response.i_debit_belence);
                           $('.i_credit_head').val(response.i_credit_head);
                           $('.i_credit_belence').val(response.i_credit_belence);
                           $('.cId').val(response.id);
                           $('.i_des').val(response.i_des);
                           $('.i_amount').val(response.i_amount);
                          
                           
           
                       },
                       error:function(xhr,status,error){
                           console.log(error);
                           
                       }
           
                 });
                 console.log(id);

               }
           
           
             
           
           </script>
@endsection
