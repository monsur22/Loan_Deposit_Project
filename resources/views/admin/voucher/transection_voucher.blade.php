@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="transection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add New  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/transection-add')}}">
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
                                   
                                  
                                     <input type="text"value="TV{{$date.$lastid++}}" class="form-control " id="t_voucher" name="t_voucher" readonly >
                                     
                                    
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control " id="t_date" name="t_date"  >
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Debit Head <sup>*</sup> </span></label>
                                                    
                                                     <select name="t_debit_head" id="t_debit_head" class="form-control">
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
                                 <input type="text" class="form-control " id="t_debit_belence" name="t_debit_belence" readonly >
                                 
                                </div>
                            </div>   
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head <sup>*</sup> </span></label>
                                                
                                                 <select name="t_credit_head" id="t_credit_head" class="form-control">
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
                             <input type="text" class="form-control " id="t_credit_belence" name="t_credit_belence" readonly>
                             
                           </div>
                    </div> 
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control " id="t_des" name="t_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                             
                                          
                            
                              
                                <div class="col-sm-6">
                                        <div class="form-group"></div>
                                         <label for="code">Amount <sup>*</sup> </label>
                                         <input type="text" class="form-control " id="t_amount" name="t_amount" >
                                         
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
            <h5 class="modal-title" id="exampleModalLongTitle">  Edit Transection  Voucher </h5>
            
        </div>
    <form method="POST" action="{{url('/transection-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                   
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                   <input type="text"value="" id="t_voucher" name="t_voucher"class="form-control  t_voucher" readonly >
                                   <input type="hidden" class=" cId"  name="id" >
                                    
                                     
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Date</label>
                                     <input type="date" class="form-control t_date" id="t_date" name="t_date"  >
                                     
                                    </div>
                            </div>

                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Debit Head<sup>*</sup></span></label>
                                                    
                                                     <select name="t_debit_head" id="t_debit_head" class="form-control t_debit_head">
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
                                 <input type="text" class="form-control t_debit_belence" id="t_debit_belence" name="t_debit_belence" readonly>
                                 
                                </div>
                            </div>   
                        <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Credit Head<sup>*</sup></span></label>
                                                
                                                 <select name="t_credit_head" id="t_credit_head" class="form-control t_credit_head">
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
                             <input type="text" class="form-control t_credit_belence" id="t_credit_belence" name="t_credit_belence" readonly>
                             
                           </div>
                    </div> 
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Description</label>
                                     <input type="text" class="form-control t_des" id="t_des" name="t_des" rows="4">
                                     
                                   </div>
                            </div>
                            
                             
                                          
                            
                              
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Amount<sup>*</sup></label>
                                         <input type="text" class="form-control t_amount" id="t_amount" name="t_amount" >
                                       
                                         
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
                    <div class="ibox-title">Transection Voucher List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transection"
                            style="margin-right: 60px;">
                      Add  New Transection
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
                                        <th>Action</th>
                                    </tr>
                        </thead>
                      
                        <tbody>

                                <?php $i=1 ?>
                               
                           
                                @foreach($tradetails as $item)
                      
                            <tr>
                            <td>{{$i++}}</td>
                            
                            <td>{{$item->t_date}}</td>
                            <td>{{$item->t_voucher}}</td>
                                  
                            @foreach ($acheaddetail as $it)

                                  @if($item->t_debit_head==$it->id)
                                  <td>{{$it->ac_head_name}}</td>
                                  @endif
                                  @if($item->t_credit_head==$it->id)
                                  <td>{{$it->ac_head_name}}</td>
                                  @endif
                            

                             @endforeach
                            <td>{{$item->t_des}}</td>
                            <td>{{$item->t_amount}}</td>
                           
                              
                             
                                <td>
                                   
        
                                                @if($item->confirm_id==1)
                                                <a href="{{route('confirm_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                                    <span class="fa fa-arrow-up"></span>
                                                </a>
                                                @elseif($item->confirm_id==0)
                                                <a href="{{route('confirm_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                                        <span class="fa fa-arrow-down"></span>
                                                    </a>
                                                @endif
                                        <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit-transection" class="btn btn-success" >
                                                <span class="fa fa-pencil font-14"></span>
                                         </button>   
                                        <a href="{{url('transection-report/'.$item->id)}}" class="btn btn-info" title="Report">
                                                    <span class="fa fa-file font-14"></span>
                                        </a>
                                            <a href="{{url('transection-delete/'.$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
                                                        <span class="fa fa-trash font-14"></span>
                                           </a>
        
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
             $('#t_debit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/showdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#t_debit_belence').val(data.ah_balance);  
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
             $('#t_credit_head').change(function(){  
                  var debit_head_id = $(this).val();  
                 console.log(debit_head_id);
                  $.ajax({  
                       url:"{{url('/showdebit_b')}}/"+debit_head_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#t_credit_belence').val(data.ah_balance);  
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
                       url:"{{url('/tra_edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.t_voucher').val(response.t_voucher);
                           $('.t_date').val(response.t_date);
                           $('.t_debit_head').val(response.t_debit_head);
                           $('.t_debit_belence').val(response.t_debit_belence);
                           $('.t_credit_head').val(response.t_credit_head);
                           $('.t_credit_belence').val(response.t_credit_belence);
                           $('.cId').val(response.id);
                           $('.t_des').val(response.t_des);
                           $('.t_amount').val(response.t_amount);
                          
                           
           
                       },
                       error:function(xhr,status,error){
                           console.log(error);
                           
                       }
           
                 });
                 console.log(id);

               }
           
           
             
           
           </script>
@endsection
