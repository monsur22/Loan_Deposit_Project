@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="collection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add New Collection </h5>
        </div>
        <form method="POST" action="{{url('/user/collection-add')}}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                            <?php
                            // $data = DB::table('collectionvouchers')->count();
                            // $i = $data + 1;
                            $date=date('dmY');

                            ?>
                                    <div class="form-group">
                                    <label for="code">Voucher Number</label>
                                    <input type="text" class="form-control " id="" name="c_voucher" value="CV{{$date.$lastid++}}" readonly>
                                    
                                    </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                            <label for="code">Date</label>
                            <input type="date" class="form-control " id=""value="<?php echo date('Y-m-d'); ?>" name="c_date"  >
                            
                        </div>
                    </div>
                       
                    <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Customer Name<sup>*</sup></label>
                                                 <select name="c_name" id="c_name" class="form-control select2_demo_2">
                                                        <option value="">---Select Customer Name---</option>

                                                        @foreach ($customerdetails as $item)
                                                 <option  value="{{$item->id}}">{{$item->customer_name}}</option>
                                                 @endforeach
                                                     
                                                 </select>
                                </div>
                    </div> 

                    <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Previous Dues</label>
                             <input type="text" class="form-control " id="c_pre_due" name="c_pre_due" readonly>
                             
                           </div>
                    </div>   
                             
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Purcehes Number:</span></label>
                                             <select name="c_purnum" id="" class="form-control">
                                                 <option value="Previous Dues">Previous Dues</option>
                                                
                                             </select>
                            </div>
                    </div>
                   
                
                    <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Description</label>
                                 <input type="text" class="form-control " id="" name="c_des" placeholder="Descrioption">
                                 
                               </div>
                    </div>
                        
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Payment Type <sup>*</sup> </span></label>
                                             <select name="c_ptype" id="" class="form-control">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Bkash">Bkash</option>
                                                    <option value="Bank">Bank</option>


                                                 
                                             </select>
                            </div>
                    </div> 
                                      
                        
                          
                    <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Amount <sup>*</sup> </label>
                                     <input type="text" class="form-control " id="" name="c_amount" placeholder="Amount">
                                     
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
<div class="modal fade" id="editcollection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add  Collection </h5>
            
        </div>
        <form method="POST" action="{{url('/user/collection-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">

                                    <div class="form-group">
                                    <label for="code">Voucher Number</label>
                                    <input type="text" class="form-control c_voucher" id="" name="c_voucher" value="" readonly>
                                    <input type="hidden" class="cId"  name="id">

                                    
                                    </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                            <label for="code">Date</label>
                            <input type="date" class="form-control c_date" id="" name="c_date" >
                            
                        </div>
                    </div>
                       
                    <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Customer Name <sup>*</sup></span></label>
                                                 <select name="c_name" id="c_edit_name" class="form-control c_name select2_demo_2 ">
                                                        <option value="">---Select Customer Name---</option>

                                                        @foreach ($customerdetails as $item)
                                                 <option  value="{{$item->id}}">{{$item->customer_name}}</option>
                                                 @endforeach
                                                     
                                                 </select>
                                </div>
                    </div> 
                    
                    <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Previous Dues</label>
                             <input type="text" class="form-control c_pre_due" id="c_edit_due" name="c_pre_due" readonly>
                             
                           </div>
                    </div>   
                             
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Purcehes Number</span></label>
                                             <select name="c_purnum" id="" class="form-control c_purnum">
                                                 <option value="">Previous Dues</option>
                                                
                                             </select>
                            </div>
                    </div>
                   
                
                    <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Description</label>
                                 <input type="text" class="form-control c_des" id="" name="c_des" placeholder="Descrioption">
                                 
                               </div>
                    </div>
                        
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Payment Type  <sup>*</sup> </span></label>
                                             <select name="c_ptype" id="" class="form-control c_ptype">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Bkash">Bkash</option>
                                                    <option value="Bank">Bank</option>


                                                 
                                             </select>
                            </div>
                    </div> 
                                      
                        
                          
                    <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Amount <sup>*</sup></label>
                                     <input type="text" class="form-control c_amount" id="" name="c_amount" placeholder="Amount">
                                     
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
                    <div class="ibox-title">Collection List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#collection"
                            style="margin-right: 60px;">
                        Add New Collection
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Customer Name</th>
                                        <th>Payment Type</th>
                                        <th>Account</th>
                                        <th>Collection Status</th>
                                        <th>Action</th>
                                </tr> 
                        </thead>
                      
                        <tbody>
                       

                                <?php $i=1 ?>
                      
                           @foreach ($collectiondetails as $item)
                               
                        
                      
                            <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->c_date}}</td>
                            <td>{{$item->c_voucher}}</td>
                            @foreach ($customerdetails as $it)
                                @if ($item->c_name==$it->id)
                                <td>{{$it->customer_name}}</td>
                                @endif
                            @endforeach
                            {{-- <td>{{$item->c_name}}</td> --}}
                            <td>{{$item->c_ptype}}</td>
                            <td>{{$item->c_amount}}</td>
                            @if ($item->c_confirm_status==1)
                            <td >  <b class="text-center text-success">Confirm</b> </td>
                            @else
                            <td >  <b class="text-center text-danger ">Panding</b> </td>
                            @endif
                            <td>
                                    @if (session('user_role')==1)
                                    @if($item->c_confirm_status==1)
                                    <a href="{{route('user_c_confirm_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->c_confirm_status==0)
                                    <a href="{{route('user_c_confirm_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                       @endif   
                                       
                                       @if ($item->c_confirm_status==0)
                                        <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#editcollection" class="btn btn-success" >
                                            <span class="fa fa-pencil font-14"></span>
                                        </button>
                                       @endif
                                          

                                        <a href="{{url('user/collection-report/'.$item->id)}}" class="btn btn-info" title="Report">
                                                    <span class="fa fa-file font-14"></span>
                                  
                                                </a>
                                            {{-- <a href="{{url('user/collection-delete/'.$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
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
             $('#c_name').change(function(){  
                  var c_name_id = $(this).val();  
                 console.log(c_name_id);
                  $.ajax({  
                       url:"{{url('/user/show-col')}}/"+c_name_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#c_pre_due').val(data.copaning_balance	);  
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
             $('#c_edit_name').change(function(){  
                  var c_edit_name_id = $(this).val();  
                 console.log(c_edit_name_id);
                  $.ajax({  
                       url:"{{url('/user/show-col')}}/"+c_edit_name_id,  
                       method:"GET",  
                       success:function(data){  
                            $('#c_edit_due').val(data.copaning_balance	);  
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
                       url:"{{url('/user/coll-edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.c_voucher').val(response.c_voucher);
                           $('.c_date').val(response.c_date);
                           $('.c_name').val(response.c_name);
                           $('.c_pre_due').val(response.c_pre_due);
                           $('.c_purnum').val(response.c_purnum);
                           $('.cId').val(response.id);
                           $('.c_des').val(response.c_des);
                           $('.c_ptype').val(response.c_ptype);
                           $('.c_amount').val(response.c_amount);
                          
                           
           
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
