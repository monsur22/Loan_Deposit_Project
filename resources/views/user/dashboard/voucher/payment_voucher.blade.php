@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  Add New  Payment </h5>
                        
                    </div>
                    <form method="POST" action="{{url('/user/payment-add')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <?php
                                            // $data = DB::table('paymentvouchers')->count();
                                            // $i = $data + 1;
                                            $date=date('dmY');
        
                                            ?>
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                     <input type="text" class="form-control " id="" name="pv_number"value="PV{{$date.$lastid++}}" readonly>
                                     
                                   </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Date</label>
                                 <input type="date" class="form-control " id=""value="<?php echo date('Y-m-d'); ?>" name="p_date" >
                                 
                               </div>
                        </div>
                                       
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                                 <label for="name">Supplier Name <sup>*</sup></label>
                                                                 <select name="s_name" id="s_name" class="form-control s_name">
                                                                        <option value="">---Select Supplier Name---</option>

                                                                        @foreach ($supplierdetails as $item)
                                                                 <option  value="{{$item->id}}">{{$item->supplier_name}}</option>
                                                                 @endforeach
                                                                     
                                                                 </select>
                                                </div>
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label for="code">Previous Dues</label>
                                             <input type="text" class="form-control " id="pre_due" name="pre_due" placeholder="Amount" readonly>
                                             
                                           </div>
                                    </div>   
                                             
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Purcehes Number</span></label>
                                                             <select name="parches_n" id="" class="form-control">
                                                                 <option value="Previous Dues">Previous Dues</option>

                                                                 
                                                             </select>
                                            </div>
                                        </div>
                                   
                                
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Description</label>
                                                 <input type="text" class="form-control " id="" name="p_des" placeholder="Descrioption">
                                                 
                                               </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Payment Type <sup>*</sup></label>
                                                             <select name="p_type" id="" class="form-control">
                                                                    <option value="Cash">Cash</option>
                                                                    <option value="Bkash">Bkash</option>
                                                                    <option value="Bank">Bank</option>


                                                                 
                                                             </select>
                                            </div>
                                    </div> 
                                                      
                                        
                                          
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label for="code">Amount <sup>*</sup></label>
                                                     <input type="text" class="form-control " id="" name="p_amount" placeholder="Amount">
                                                     
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

                        
                    </form>
                </div>
            </div>
{{-- Edit Company Modal --}}
<div class="modal fade" id="editpayment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  Edit  Payment </h5>
                        
                    </div>
                    <form method="POST" action="{{url('/user/payment_update')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                         
                                <div class="form-group">
                                <label for="code">Voucher Number</label>
                                <input type="text" class="form-control pv_number" id="" name="pv_number"value="" readonly>
                                
                                </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Date</label>
                             <input type="date" class="form-control p_date" id="" name="p_date" >
                             
                           </div>
                    </div>
                                   
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Supplier Name <sup>*</sup></span></label>
                                                             <select name="s_name"id="s_edit_name"  class="form-control s_name">
                                                                    <option value="">---Select Supplier Name---</option>

                                                                    @foreach ($supplierdetails as $item)
                                                             <option  value="{{$item->id}}">{{$item->supplier_name}}</option>
                                                             @endforeach
                                                                 
                                                             </select>
                                            </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Previous Dues</label>
                                         <input type="text" class="form-control pre_due"id="pre_edit_due"  name="pre_due" placeholder="">
                                         <input type="hidden" class="cId" id="" name="id" >
                                       </div>
                                    </div>   
                                         
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                         <label for="name">Purcehes Number:</span></label>
                                                         <select name="parches_n" id="" class="form-control parches_n">
                                                             <option value="Previous Dues">Previous Dues</option>

                                                             
                                                         </select>
                                        </div>
                                    </div>
                               
                            
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                             <label for="code">Description</label>
                                             <input type="text" class="form-control p_des" id="" name="p_des" placeholder="Descrioption">
                                             
                                           </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                         <label for="name">Payment Type<sup >*</sup></span></label>
                                                         <select name="p_type" id="" class="form-control p_type">
                                                                <option value="Cash">Cash</option>
                                                                <option value="Bkash">Bkash</option>
                                                                <option value="Bank">Bank</option>


                                                             
                                                         </select>
                                        </div>
                                </div> 
                                        
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Amount <sup>*</sup></label>
                                                 <input type="text" class="form-control p_amount" id="" name="p_amount" placeholder="Amount">
                                                 
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
                    <div class="ibox-title">Payment List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpayment"
                            style="margin-right: 60px;">
                        Add New Payment 
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Supplier Name</th>
                                        <th>Payment Type</th>
                                        <th>Description</th>
                                        <th>Account</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                </tr>
                        </thead>
                      
                        <tbody>
                       

                                <?php $i=1 ?>
                      
                           
                      @foreach ($paydetails as $item)
                          
                     
                            <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->p_date}}</td>
                            <td>{{$item->pv_number}}</td>

                            @foreach ($supplierdetails as $it)
                                @if ($item->s_name==$it->id)
                                <td>{{$it->supplier_name}}</td>
                                @endif
                            @endforeach
                            {{-- <td>{{$item->s_name}}</td> --}}
                            
                            <td>{{$item->p_type}}</td>
                            <td>{{$item->p_des}}</td>
                            <td>{{$item->p_amount}}</td>
                          
                            {{-- <td>hjh</td> --}}
                         
                            @if ($item->pconfirm_status==1)
                            <td><b class="text-center text-success">Confirm   </b> </td>
                            @else
                            <td><b class="text-center text-danger ">Panding   </b> </td>
                            @endif
                             
                                <td>
                                    @if (session('user_role')==1)
                                        @if($item->pconfirm_status==1)
                                        <a href="{{route('user_p_confirm_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                            <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($item->pconfirm_status==0)
                                        <a href="{{route('user_p_confirm_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                    @endif
                              
                                    @if ($item->pconfirm_status==0)
                                    <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#editpayment" class="btn btn-success" > 
                                            <span class="fa fa-pencil font-14"></span>
                                    </button>
                                    
                                    @endif
                                                 

                                                <a href="{{url('/user/payment-report',$item->id)}}" class="btn btn-info" title="Report">
                                                        <span class="fa fa-file font-14"></span>
                                      
                                                </a>
                                                {{-- <a href="{{url('/user/payment-delete',$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
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
             $('#s_name').change(function(){  
                  var s_name_id = $(this).val();  
                 console.log(s_name_id);
                  $.ajax({  
                       url:"{{url('/user/showpay')}}/"+s_name_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#pre_due').val(data.sopaning_balance);  
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
             $('#s_edit_name').change(function(){  
                  var s_name_id = $(this).val();  
                 console.log(s_name_id);
                  $.ajax({  
                       url:"{{url('/user/showpay')}}/"+s_name_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#pre_edit_due').val(data.sopaning_balance);  
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
                   var x =id;
                   
                   $.ajax({
                       type:'GET',
                       url:"{{url('/user/pay-edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.pv_number').val(response.pv_number);
                           $('.p_date').val(response.p_date);
                           $('.s_name').val(response.s_name);
                           $('.pre_due').val(response.pre_due);
                           $('.parches_n').val(response.parches_n);
                           $('.p_des').val(response.p_des);
                           $('.p_type').val(response.p_type);
                           $('.cId').val(response.id);
                           $('.p_amount').val(response.p_amount);
  
                          
                           
           
                       },
                       error:function(xhr,status,error){
                           console.log(error);
                           
                       }
           
                 });
               }
           
           
           $(document).ready(function(){
              
           
           });   
           
           </script>
@endsection
