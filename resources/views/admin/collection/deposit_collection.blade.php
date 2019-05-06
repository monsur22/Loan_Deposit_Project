@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
        
        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Deposit Collection</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/deposit-collection') }}">
                                {{csrf_field()}}
                                <div class="row">
                       
                                        <div class="col-sm-4 form-group">
                                          <label>Date</label>
                                          <input class="form-control" type="date" id="d_collection_date" name="d_collection_date" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                          <div class="col-sm-4 form-group">
                                                  <?php
                                                    
                                                  $date=date('dmY');
                        
                                                  ?>
                                              <label>Cullection Number</label>
                                              <input class="form-control" type="text" id="d_collectin_number" name="d_collectin_number" value="DC{{$date.$last_id++}}" readonly>
                                              
                                          </div>
                                      
                  
                                          <div class="col-sm-4 form-group">
                                              <label>Deposit Number</label>
                                              <select class="form-control select2_demo_1 " name="deposit_number_collection" id="deposit_number_collection">
                                                  @foreach ($deposit_number as $item)
                                                  <option value="{{$item->id}}">{{$item->d_number}}</option>
                                                  @endforeach
                                                     
                                                     
                                              </select>
                                            
                                          </div>
                                         
                                         <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                              <label>Account Number</label>
                                              {{-- <select class="form-control select2_demo_1 " name="account_number_collection" id="account_number_collection">
                                                  @foreach ($deposit_number as $item)
                                                  <option value="{{$item->d_acc}}">{{$item->d_acc}}</option>
                                                  @endforeach  
                                                  
                                              </select> --}}
                                              <input class="form-control account_number_collection" type="text" id="account_number_collection" name="account_number_collection" readonly>
                                              
                                          </div>
                                             
                                          <div class="col-sm-4 form-group">
                                              <label>Name</label>
                                              <input class="form-control" type="text" id="d_collection_name" name="d_collection_name" readonly>
                                          </div>
                                          <div class="col-sm-4 form-group">
                                            <label>Collection Type</label>
                                            <select class="form-control" name="d_collection_type" id="d_collection_type">
                                    
                                              <option value="Cash">Cash</option>
                                              <option value="Bank">Bank</option>
                                         
                                                 
                                            </select>
                                           
                                          </div>
                                                <div class="col-sm-4 form-group">
                                                <label>Collection Amount</label>
                                                <input class="form-control" type="number" id="d_collection_amount" name="d_collection_amount" placeholder="">
                                            </div>
                                        
                                           
                                            <div style="text-align:right; width:100%; padding:0;"class="form-group">
                                                    <button type="reset" class="btn btn-danger" >Clear</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                      
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add Deposit Collection</h5>
            
        </div>
        <form method="POST" action="{{ url('/deposit-collection') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                       
                      <div class="col-sm-4 form-group">
                        <label>Date</label>
                        <input class="form-control" type="date" id="d_collection_date" name="d_collection_date" value="">
                      </div>
                        <div class="col-sm-4 form-group">
                           
                            <label>Cullection Number</label>
                            <input class="form-control" type="text" id="d_collectin_number" name="d_collectin_number" value="DC{{$date.$last_id++}}" readonly>
                            
                        </div>
                    
                        <div class="col-sm-4 form-group">
                            <label>Currency</label>
                            <select class="form-control select2_demo_1 " name="d_collectin_currency" id="d_collectin_currency">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                               
                                
                            </select>
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Deposit Number</label>
                            <select class="form-control select2_demo_1 " name="deposit_number_collection" id="deposit_number_collection">
                                @foreach ($deposit_number as $item)
                                <option value="{{$item->d_number}}">{{$item->d_number}}</option>
                                @endforeach
                                   
                                   
                            </select>
                          
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Account Number</label>
                            <select class="form-control select2_demo_1 " name="account_number_collection" id="account_number_collection">
                                @foreach ($deposit_number as $item)
                                <option value="{{$item->d_acc}}">{{$item->d_acc}}</option>
                                @endforeach  
                                
                            </select>
                            
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" id="d_collection_name" name="d_collection_name" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Collection Type</label>
                          <select class="form-control" name="d_collection_type" id="d_collection_type">
                            <option value="">Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank">Bank</option>
                       
                               
                          </select>
                         
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Collection Amount</label>
                              <input class="form-control" type="text" id="d_collection_amount" name="d_collection_amount" placeholder="">
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Note</label>
                              <input class="form-control" type="text" id="d_collection_note" name="d_collection_note" placeholder="">
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


{{-- 

<div class="modal fade bd-example-modal-lg"  id="edit"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add Deposit Collection</h5>
                  
              </div>
              <form method="POST" action="{{ url('/deposit-collection') }}">
                  {{csrf_field()}}
                  <div class="modal-body">
      
                          <div class="row">
                             
                            <div class="col-sm-4 form-group">
                              <label>Date</label>
                              <input class="form-control" type="date" id="d_collection_date" name="d_collection_date" value="">
                            </div>
                              <div class="col-sm-4 form-group">
                                     
                                  <label>Cullection Number</label>
                                  <input class="form-control" type="text" id="d_collectin_number" name="d_collectin_number" value="DC{{$date.$last_id++}}" readonly>
                                  
                              </div>
                          
                              <div class="col-sm-4 form-group">
                                  <label>Currency</label><br>
                                  <select class="form-control select2_demo_1 " name="d_collectin_currency" id="d_collectin_currency">
                                      <option value="BDT">BDT</option>
                                      <option value="USD">USD</option>
                                     
                                      
                                  </select>
                              </div>
      
      
                              <div class="col-sm-4 form-group">
                                  <label>Deposit Number</label>
                                  <select class="form-control select2_demo_1 " name="deposit_number_collection" id="deposit_number_collection">
                                      @foreach ($deposit_number as $item)
                                      <option value="{{$item->d_number}}">{{$item->d_number}}</option>
                                      @endforeach
                                         
                                         
                                  </select>
                                
                              </div>
                             
                             <div class="col-sm-4 form-group">
                                  <label>Account Number</label>
                                  <select class="form-control select2_demo_1 " name="account_number_collection" id="account_number_collection">
                                      @foreach ($deposit_number as $item)
                                      <option value="{{$item->d_acc}}">{{$item->d_acc}}</option>
                                      @endforeach  
                                      
                                  </select>
                                  
                              </div>
                                 
                              <div class="col-sm-4 form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" id="d_collection_name" name="d_collection_name" placeholder="">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Collection Type</label>
                                <select class="form-control" name="d_collection_type" id="d_collection_type">
                                  <option value="">Select One</option>
                                  <option value="Cash">Cash</option>
                                  <option value="Bank">Bank</option>
                             
                                     
                                </select>
                               
                              </div>
                                    <div class="col-sm-4 form-group">
                                    <label>Collection Amount</label>
                                    <input class="form-control" type="text" id="d_collection_amount" name="d_collection_amount" placeholder="">
                                </div>
                            
                                <div class="col-sm-4 form-group">
                                    <label>Note</label>
                                    <input class="form-control" type="text" id="d_collection_note" name="d_collection_note" placeholder="">
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
{{-- 

<div class="modal fade bd-example-modal-lg"  id="edit"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Deposite Collection</h5>
              
          </div>
          <form method="POST" action="{{ url('/deposit-collection/update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Date</label>
                        <input class="form-control d_collection_date" type="date" id="d_collection_date" name="d_collection_date" placeholder="">
                        <input class="form-control cId" type="hidden" id="id" name="id" readonly>
                      </div>
                        <div class="col-sm-4 form-group">
                            <label>Cullection Number</label>
                            <input class="form-control d_collectin_number" type="text" id="d_collectin_number" name="d_collectin_number" placeholder="">
                            
                        </div>
                    
                        <div class="col-sm-4 form-group">
                            <label>Currency</label>
                            <select class="form-control d_collectin_currency" name="d_collectin_currency" id="d_collectin_currency">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                               
                                
                            </select>
                        </div>

                        <div class="col-sm-4 form-group">
                            <label>Deposit Number</label>
                            <select class="form-control select2_demo_1 deposit_number_collection" name="deposit_number_collection" id="deposit_number_collection">
                                    @foreach ($deposit_number as $item)
                                    <option value="{{$item->d_number}}">{{$item->d_number}}</option>
                                    @endforeach
                                       
                                       
                            </select>
                            
                        </div>
                  
                       
                       <div class="col-sm-4 form-group">
                            <label>Account Number</label>
                            <select class="form-control select2_demo_1 account_number_collection" name="account_number_collection" id="account_number_collection">
                                    @foreach ($deposit_number as $item)
                                    <option value="{{$item->d_acc}}">{{$item->d_acc}}</option>
                                    @endforeach  
                                    
                                </select>
                           
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input class="form-control d_collection_name" type="text" id="d_collection_name" name="d_collection_name" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Collection Type</label>
                          <select class="form-control d_collection_type" name="d_collection_type" id="d_collection_type">
                            <option value="">Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank">Bank</option>
                       
                               
                          </select>
                         
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Collection Amount</label>
                              <input class="form-control d_collection_amount" type="text" id="d_collection_amount" name="d_collection_amount" placeholder="">
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Note</label>
                              <input class="form-control d_collection_note" type="text" id="d_collection_note" name="d_collection_note" placeholder="">
                          </div>
                    
                      </div>
           
           
           
           
                </div>

            <div class="modal-footer">
           

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div> --}}
  
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Deposit Collection List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Add New Deposit Collection
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Collection No.</th>
                                        <th>Account No.</th>
                                        <th>Date</th>
                                    
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                               <?php $i=1;?>
                            @foreach($deposit_details as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->d_collection_name}}</td>
                                <td>{{$item->d_collectin_number}}</td>
                                <td>
                                        @foreach ($acc_number as $it)
                                        @if ($item->account_number_collection==$it->id)
                                        {{$it->ac_number}}
                                        @endif    
                                @endforeach
                                    </td>
                                <td>{{$item->d_collection_date}}</td>
                     
                            
                                <td>
                                   
                                    @if($item->d_collection_status==1)
                                    <a href="{{route('deposit_collection_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->d_collection_status==0)
                                    <a href="{{route('deposit_collection_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
{{--   
                                    <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                            <span class="fa fa-pencil font-14"></span>
                                    </button>   --}}
        
                                    <a href="{{  url('/deposit-collection/edit/'.$item->id) }}" class="btn btn-success" title="Edit">
                                        <span class="fa fa-pencil font-14  "></span>
                                    </a>
                                    <a href="{{url('/deposit-collection/report',$item->id)}}" class="btn btn-info" title="Report">
                                        <span class="fa fa-file font-14"></span>
                      
                                    </a>
                                    <a href="{{  url('deposit-collection/delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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



{{-- ======== Loan Calculation  =========== --}}
<script>
    $(document).ready(function(){  
         $('#deposit_number_collection').change(function(){  
              var deposit_number_id = $(this).val();  
             console.log(deposit_number_id);
              $.ajax({  
                   url:"{{url('/deposit-details')}}/"+deposit_number_id,  
                   method:"GET",  
                   success:function(data){  
                        $('#account_number_collection').val(data.d_acc);  
                        $('#d_collection_name').val(data.d_name);  
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
                    url:"{{url('/deposit-collection/edit')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.d_collection_date').val(response.d_collection_date);
                        $('.d_collectin_number').val(response.d_collectin_number);
                        $('.cId').val(response.id);
                        $('.deposit_number_collection').val(response.deposit_number_collection);
                        $('.account_number_collection').val(response.account_number_collection);
                        $('.d_collection_name').val(response.d_collection_name);
                        $('.d_collection_amount').val(response.d_collection_amount);
                        $('.d_collection_note').val(response.d_collection_note);
                        $('.l_ins_type').val(response.l_ins_type);
                        $('.l_fine_p_ins').val(response.l_fine_p_ins);
            
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
        
        
        $(document).ready(function(){
           
        
        });   
             
        </script>  --}}


@endsection
