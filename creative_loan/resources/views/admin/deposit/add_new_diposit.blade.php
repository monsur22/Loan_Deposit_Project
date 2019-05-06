@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Add  Depositor</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
               
                    
                </div>
            </div>
            <div class="ibox-body">
                <form method="POST" action="{{ url('/depositor-add') }}">
                    {{csrf_field()}}
                    <div class="modal-body">
        
                            <div class="row">
                              
                              <div class="col-sm-4 form-group">
                                <label>Account Number</label>
                                <select class="form-control select2_demo_1  " name="d_acc" id="d_acc">
                                    @foreach ($acc_number as $item)
                                    <option value="{{$item->id}}">{{$item->ac_number}}</option>
                                    @endforeach  
                                    
                               </select>
                              
                              </div>
                                 
                              <div class="col-sm-4 form-group">
                                  <?php
                                          
                                  $date=date('dmY');
        
                                  ?>
                                <label>Deposit Number</label>
                                
                                <input class="form-control" type="text" id="d_number" name="d_number" value="DEP{{$date.$last_id++}}" readonly>
                            </div>
                                <div class="col-sm-4 form-group">
                                    <label>Deposit Date</label>
                                    <input class="form-control" type="date" id="d_date" name="d_date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
        
        
                                <div class="col-sm-4 form-group">
                                    <label>Depositor Name</label>
                                    <input class="form-control" type="text" id="d_name" name="d_name" placeholder=""readonly>
                                </div>
                               
                               <div class="col-sm-4 form-group">
                                    <label>Depositor Father's Name</label>
                                    <input class="form-control" type="text" id="d_father_name" name="d_father_name" placeholder=""readonly>
                                </div>
                                   
                                <div class="col-sm-4 form-group">
                                    <label>Phone Numbrer</label>
                                    <input class="form-control" type="text" id="d_phone_number" name="d_phone_number" placeholder=""readonly>
                                </div>
                                <div class="col-sm-4 form-group">
                                  <label>Closing Date</label>
                                  <input class="form-control" type="date" id="d_closing_date" name="d_closing_date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                      <div class="col-sm-4 form-group">
                                      <label>Diposit Pakage</label>
                                      <select class="form-control" name="d_pakage" id="d_pakage">
                                        <option value="">Select One</option>
                                     @foreach ($deposit_pakage as $item)
                                        <option value="{{$item->d_pakage_name}}">{{$item->d_pakage_name}}({{$item->d_amount}})</option>
                                         
                                     @endforeach
                                         
                                          
                                      </select>
                                  </div>
                              
                                  
                            
                              </div>
                   
                   
                   
                   
                        </div>
        
                    <div class="modal-footer">
                            <button type="reset" class="btn btn-default" >Clear</button>
        
    
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Deposite</h5>
            
        </div>
        <form method="POST" action="{{ url('/depositor-add') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                      
                        <label>Registration Number</label>
                        <select class="form-control select2_demo_1  " name="d_reg" id="d_reg">
                            @foreach ($acc_number as $item)
                            <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                            @endforeach  
                            
                       </select>
                       
                      </div>
                      <div class="col-sm-4 form-group">
                        <label>Account Number</label>
                        <select class="form-control select2_demo_1  " name="d_acc" id="d_acc">
                            @foreach ($acc_number as $item)
                            <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                            @endforeach  
                            
                       </select>
                      
                      </div>
                         
                      <div class="col-sm-4 form-group">
                        
                        <label>Deposit Number</label>
                        
                        <input class="form-control" type="text" id="d_number" name="d_number" value="DEP{{$date.$last_id++}}" readonly>
                    </div>
                        <div class="col-sm-4 form-group">
                            <label>Deposit Date</label>
                            <input class="form-control" type="date" id="d_date" name="d_date" value="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Depositor Name</label>
                            <input class="form-control" type="text" id="d_name" name="d_name" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Depositor Father's Name</label>
                            <input class="form-control" type="text" id="d_father_name" name="d_father_name" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Phone Numbrer</label>
                            <input class="form-control" type="text" id="d_phone_number" name="d_phone_number" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Closing Date</label>
                          <input class="form-control" type="date" id="d_closing_date" name="d_closing_date" value="">
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Diposit Pakage</label>
                              <select class="form-control" name="d_pakage" id="d_pakage">
                                <option value="">Select One</option>
                             @foreach ($deposit_pakage as $item)
                                <option value="{{$item->d_pakage_name}}">{{$item->d_pakage_name}}({{$item->d_amount}})</option>
                                 
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
</div> --}}








{{-- Edit Company Modal --}}

{{-- <div class="modal fade bd-example-modal-lg"  id="edit"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Deposit Pakage</h5>
              
          </div>
          <form method="POST" action="{{ url('/depositor-update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Registration Number</label>
                        <select class="form-control select2_demo_1 d_reg " name="d_reg" id="d_reg">
                            @foreach ($acc_number as $item)
                            <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                            @endforeach  
                            
                       </select>
                      
                        <input class="form-control cId" type="hidden" id="id" name="id" placeholder="">
                      </div>
                      <div class="col-sm-4 form-group">
                        <label>Account Number</label>
                        <select class="form-control select2_demo_1 d_acc " name="d_acc" id="d_acc">
                            @foreach ($acc_number as $item)
                            <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                            @endforeach  
                            
                       </select>
                       
                      </div>
                         
                      <div class="col-sm-4 form-group">
                        <label>Deposit Number</label>
                        <input class="form-control d_number" type="text" id="d_number" name="d_number" readonly>
                    </div>
                        <div class="col-sm-4 form-group">
                            <label>Deposit Date</label>
                            <input class="form-control d_date" type="date" id="d_date" name="d_date" placeholder="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Depositor Name</label>
                            <input class="form-control d_name" type="text" id="d_name" name="d_name" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Depositor Father's Name</label>
                            <input class="form-control d_father_name" type="text" id="d_father_name" name="d_father_name" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Phone Numbrer</label>
                            <input class="form-control d_phone_number" type="text" id="d_phone_number" name="d_phone_number" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Closing Date</label>
                          <input class="form-control d_closing_date" type="date" id="d_closing_date" name="d_closing_date" placeholder="">
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Diposit Pakage</label>
                              <select class="form-control d_pakage" name="d_pakage" id="d_pakage">
                                <option value="">Select One</option>
                                @foreach ($deposit_pakage as $item)
                                   <option value="{{$item->d_pakage_name}}">{{$item->d_pakage_name}}({{$item->d_amount}})</option>
                             
                                 
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
                    <div class="ibox-title"> Depositor  List</div>
                 
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Deposit Number </th>
                                        <th>Name</th>
                                       
                                        <th>Acount Number</th>
                                        <th>Opening Date</th>
                                        <th>Deposit Pakage</th>
                                     
                                     
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                            <?php $i=1;
                            ?>
                   @foreach ($depositor_details as $item)
                       
              
                  <tr>
                                <th>{{$i++}}</th>
                                <th>{{$item->d_number}}</th>
                                <td>{{$item->d_name}}</td>
                               @foreach ($acc_number as $it)
                                    @if ($item->d_acc==$it->id)
                                    <td>{{$it->ac_number}}</td>
                                    @endif    
                               @endforeach
                                
                  
                                <td>{{$item->d_date}}</td>
                                <td>{{$item->d_pakage}}</td>
                                
                                
                                
                       
                            
        
        
                                <td>
                                    @if($item->d_active_status==1)
                                    <a href="{{route('deposit_active_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->d_active_status==0)
                                    <a href="{{route('deposit_active_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                      {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>  --}}
                               
                                    <a href="{{  url('depositor-edit/'.$item->id) }}" class="btn btn-success" title="Edit">
                                        <span class="fa fa-pencil font-14  "></span>
                                    </a>
                                    <a href="{{  url('depositor-delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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

{{-- ========Deposit Calculation============ --}}
<script>
    $(document).ready(function(){  
         $('#d_acc').change(function(){  
              var deposit_id = $(this).val();  
             console.log(deposit_id);
              $.ajax({  
                   url:"{{url('/depositor')}}/"+deposit_id,  
                   method:"GET",  
                   success:function(data){  
                        $('#d_name').val(data.reg_name);  
                        $('#d_father_name').val(data.reg_father_name);  
                        $('#d_phone_number').val(data.reg_phone);  
                        console.log(data);
   
                   }, error:function(xhr,status,error){
                 console.log(error);
                       
                 }  
              });  
         });  
    });  
</script>
{{-- 
<script>
        function edit(id) {
                var x =id;
 
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/depositor-edit')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.d_reg').val(response.d_reg);
                        $('.d_acc').val(response.d_acc);
                        $('.cId').val(response.id);
                        $('.d_number').val(response.d_number);
                        $('.d_date').val(response.d_date);
                        $('.d_name').val(response.d_name);
                        $('.d_father_name').val(response.d_father_name);
                        $('.d_phone_number').val(response.d_phone_number);
                        $('.d_closing_date').val(response.d_closing_date);
                        $('.d_pakage').val(response.d_pakage);
                       
                       
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
       
        </script>  --}}




     
@endsection
