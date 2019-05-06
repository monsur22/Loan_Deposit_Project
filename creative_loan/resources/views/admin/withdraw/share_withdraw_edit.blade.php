@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Share Withdraw</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/share-withdraw/update') }}">
                                {{csrf_field()}}
                                <div class="row">
                                        <div class="col-sm-4 form-group">
                                          <label>Date</label>
                                        <input class="form-control s_withdraw_date" type="date" id="s_withdraw_date" name="s_withdraw_date" value="{{$data_edit->s_withdraw_date}}">
                                          <input class="form-control cId" type="hidden" id="id" name="id" value="{{$data_edit->id}}">
                                        </div>
                                          <div class="col-sm-4 form-group">
                                              <label>Withdraw Number</label>
                                              <input class="form-control s_withdraw_number" type="text" id="s_withdraw_number" name="s_withdraw_number"value="{{$data_edit->s_withdraw_number}}" readonly>
                                              
                                          </div>
                                      
                                          
                  
                  
                                          <div class="col-sm-4 form-group">
                                              <label>Registraion  Number</label>
                                              <select class="form-control select2_demo_1 reg_number_withdraw  " name="reg_number_withdraw" id="reg_number_withdraw">
                                                @foreach ($acc_number as $item)
                                                <option value="{{$item->id}}"@if($item->reg_number == $data_edit->reg_number_withdraw) selected @endif>{{$item->reg_number}}</option>
                                                @endforeach   
                                                      
                                              </select>
                                            
                                          </div>
                                         
                                         <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                              <label>Account Number</label>
                                              {{-- <select class="form-control select2_demo_1  account_number_withdraw" name="account_number_withdraw" id="account_number_withdraw">
                                                      @foreach ($acc_number as $item)
                                                      <option value="{{$item->ac_number}}"@if($item->ac_number == $data_edit->account_number_withdraw) selected @endif>{{$item->ac_number}}</option>
                                                      @endforeach  
                                                      
                                              </select> --}}
                                              <input class="form-control account_number_withdraw" type="text" id="account_number_withdraw" name="account_number_withdraw" value="{{$data_edit->account_number_withdraw}}" readonly>
                                          </div>
                                             
                                          <div class="col-sm-4 form-group">
                                              <label>Name</label>
                                              <input class="form-control s_withdraw_name" type="text" id="s_withdraw_name" name="s_withdraw_name" value="{{$data_edit->s_withdraw_name}}" readonly>
                                          </div>
                                          <div class="col-sm-4 form-group">
                                            <label>Withdraw Type</label>
                                            <select class="form-control s_withdraw_type" name="s_withdraw_type" id="s_withdraw_type">

                                              <option value="Cash">Cash</option>
                                              <option value="Bank">Bank</option>
                                         
                                                 
                                            </select>
                                           
                                          </div>
                                                <div class="col-sm-4 form-group">
                                                <label>Withdraw Amount</label>
                                                <input class="form-control s_withdraw_amount" type="number" id="s_withdraw_amount" name="s_withdraw_amount" value="{{$data_edit->s_withdraw_amount}}">
                                            </div>
                                        
                                           
                                            <div class="form-group"style="text-align:right; width:100%; padding:0;">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>

    

{{-- Add Company Modal --}}

{{-- 

<div class="modal fade bd-example-modal-lg"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Share Collection</h5>
            
        </div>
        <form method="POST" action="{{ url('/share-collection') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Date</label>
                        <input class="form-control" type="date" id="s_collection_date" name="s_collection_date" value="">
                      </div>
                        <div class="col-sm-4 form-group">
                               
                            <label>Cullection Number</label>
                            <input class="form-control" type="text" id="s_collectin_number" name="s_collectin_number" value="SC{{$date.$last_id++}}" readonly>
                            
                        </div>
                    
                        <div class="col-sm-4 form-group">
                            <label>Currency</label>
                            <select class="form-control" name="s_collectin_currency" id="s_collectin_currency">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                               
                                
                            </select>
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Reg Number</label>
                            <select class="form-control select2_demo_1  " name="reg_number_collection" id="reg_number_collection">
                                    @foreach ($acc_number as $item)
                                    <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                                    @endforeach  
                                    
                            </select>
                          
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Account Number</label>
                            <select class="form-control select2_demo_1  " name="account_number_collection" id="account_number_collection">
                                    @foreach ($acc_number as $item)
                                    <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                    @endforeach  
                                    
                            </select>
                           
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" id="s_collection_name" name="s_collection_name" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Collection Type</label>
                          <select class="form-control" name="s_collection_type" id="s_collection_type">
                            <option value="">Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank">Bank</option>
                       
                               
                          </select>
                         
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Collection Amount</label>
                              <input class="form-control" type="text" id="s_collection_amount" name="s_collection_amount" placeholder="">
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Note</label>
                              <input class="form-control" type="text" id="s_collection_note" name="s_collection_note" placeholder="">
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
<div class="modal fade bd-example-modal-lg"  id="edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Loan Collection</h5>
              
          </div>
          <form method="POST" action="{{ url('/share-collection/update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Date</label>
                        <input class="form-control s_collection_date" type="date" id="s_collection_date" name="s_collection_date" placeholder="">
                        <input class="form-control cId" type="hidden" id="id" name="id">
                      </div>
                        <div class="col-sm-4 form-group">
                            <label>Cullection Number</label>
                            <input class="form-control s_collectin_number" type="text" id="s_collectin_number" name="s_collectin_number" readonly>
                            
                        </div>
                    
                        <div class="col-sm-4 form-group">
                            <label>Currency</label>
                            <select class="form-control s_collectin_currency" name="s_collectin_currency" id="s_collectin_currency">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                               
                                
                            </select>
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Reg Number</label>
                            <select class="form-control select2_demo_1 reg_number_collection  " name="reg_number_collection" id="reg_number_collection">
                                    @foreach ($acc_number as $item)
                                    <option value="{{$item->reg_number}}">{{$item->reg_number}}</option>
                                    @endforeach  
                                    
                            </select>
                          
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Account Number</label>
                            <select class="form-control select2_demo_1  account_number_collection" name="account_number_collection" id="account_number_collection">
                                    @foreach ($acc_number as $item)
                                    <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                    @endforeach  
                                    
                            </select>
                            
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input class="form-control s_collection_name" type="text" id="s_collection_name" name="s_collection_name" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Collection Type</label>
                          <select class="form-control s_collection_type" name="s_collection_type" id="s_collection_type">
                            <option value="">Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank">Bank</option>
                       
                               
                          </select>
                         
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Collection Amount</label>
                              <input class="form-control s_collection_amount" type="text" id="s_collection_amount" name="s_collection_amount" placeholder="">
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Note</label>
                              <input class="form-control s_collection_note" type="text" id="s_collection_note" name="s_collection_note" placeholder="">
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
    {{-- <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Share Collection List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Add New Share Collection
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
                         
                            @foreach($share_details as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->s_collection_name}}</td>
                                <td>{{$item->s_collectin_number}}</td>
                                <td>{{$item->account_number_collection}}</td>
                                <td>{{$item->s_collection_date}}</td>
                     
                            
                                <td>
                                  
                                    
                                    @if($item->s_collection_status==1)
                                    <a href="{{route('share_collection_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->s_collection_status==0)
                                    <a href="{{route('share_collection_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                    <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                            <span class="fa fa-pencil font-14"></span>
                                    </button>   
        
                                    <a href="{{  url('share-collection/delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
                                    </a>
        
                                </td>
                            </tr>
        
                            @endforeach 
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div> --}}

{{-- ======== Loan Calculation  =========== --}}
<script>
    $(document).ready(function(){  
         $('#reg_number_withdraw').change(function(){  
              var reg_number_withdraw = $(this).val();  
             console.log(reg_number_withdraw);
              $.ajax({  
                   url:"{{url('/share-details')}}/"+reg_number_withdraw,  
                   method:"GET",  
                   success:function(data){  
                        $('#account_number_withdraw').val(data.ac_number);  
                        $('#s_withdraw_name').val(data.reg_name);  
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
                    url:"{{url('/share-collection/edit/')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.s_collection_date').val(response.s_collection_date);
                        $('.s_collectin_number').val(response.s_collectin_number);
                        $('.cId').val(response.id);
                        $('.reg_number_collection').val(response.reg_number_collection);
                        $('.account_number_collection').val(response.account_number_collection);
                        $('.s_collection_name').val(response.s_collection_name);
                        $('.s_collection_type').val(response.s_collection_type);
                        $('.s_collection_amount').val(response.s_collection_amount);
                        $('.s_collection_note').val(response.s_collection_note);

            
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
        
        
        $(document).ready(function(){
           
        
        });   
             
        </script> --}}

@endsection
