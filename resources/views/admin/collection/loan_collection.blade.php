@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
        <div class="col-md-12 " 
      >
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Loan Collection</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/loan-collection') }}">
                                {{csrf_field()}}
                                <div class="row">
                        
                                        <div class="col-sm-4 form-group">
                                          <label>Date</label>
                                          <input class="form-control" type="date" id="l_collection_date" name="l_collection_date" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                          <div class="col-sm-4 form-group">
                                                  <?php
                                                    
                                                  $date=date('dmY');
                        
                                                  ?>
                                              <label>Cullection Number</label>
                                              <input class="form-control" type="text" id="l_collectin_number" name="l_collectin_number" value="LC{{$date.$last_id++}}" readonly>
                                              <input class="form-control cId" type="hidden" id="l_collectin_number" name="id" >
                                              
                                          </div>
                                      
                                          
                  
                  
                                          <div class="col-sm-4 form-group">
                                              <label class="form-control-label">Loan Number</label>
                                              <select class="form-control  select2_demo_1" name="laon_number_collection" id="laon_number_collection">
                                                      @foreach ($loan_number as $item)
                                                      <option  value="{{$item->id}}">{{$item->l_number}}</option>
                                                      @endforeach  
                                                      
                                              </select>
                                             
                                          </div>
                                         
                                         <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                              <label>Account ID</label>
                                              {{-- <select class="form-control  select2_demo_1 account_number_collection" name="account_number_collection" id="account_number_collection">
                                                      @foreach ($loan_number as $item)
                                                      <option value="{{$item->id}}">{{$item->l_acc}}</option>
                                                      @endforeach  
                                                      
                                              </select> --}}
                                              <input class="form-control account_number_collection" type="text" id="account_number_collection" name="account_number_collection" readonly>
                                          </div>
                                             
                                          <div class="col-sm-4 form-group">
                                              <label>Name</label>
                                              <input class="form-control l_collection_name" type="text" id="l_collection_name" name="l_collection_name" readonly>
                                          </div>
                                          <div class="col-sm-4 form-group">
                                            <label>Collection Type</label>
                                            <select class="form-control select2_demo_1 l_collection_type" name="l_collection_type" id="l_collection_type">
                                          
                                              <option value="Cash">Cash</option>
                                              <option value="Bank">Bank</option>
                                         
                                                 
                                            </select>
                                           
                                          </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Collection Amount</label>
                                                <input class="form-control l_collection_amount" type="number" id="l_collection_amount" name="l_collection_amount" placeholder="">
                                            </div>
                                        
                                          
                                            <div style="text-align:right; width:100%; padding:0;" class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-danger" >Clear</button>
                                            </div>
                                      
                                        </div>
                        </form>
                    </div>
                </div>
            </div>  



{{-- Edit Company Modal
<div class="modal fade bd-example-modal-lg"  id="edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Loan Collection</h5>
              
          </div>
          <form method="POST" action="{{ url('/loan-collection/update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Date</label>
                        <input class="form-control l_collection_date" type="date" id="l_collection_date" name="l_collection_date" placeholder="">
                        <input class="form-control cId" type="hidden" id="id" name="id" >
                      </div>
                        <div class="col-sm-4 form-group">
                            <label>Cullection Number</label>
                            <input class="form-control l_collectin_number" type="text" id="l_collectin_number" name="l_collectin_number" radonlhy>
                            
                        </div>
                    
                        <div class="col-sm-4 form-group">
                            <label>Currency</label>
                            <select class="form-control l_collectin_currency" name="l_collectin_currency" id="l_collectin_currency">
                                <option value="BDT">BDT</option>
                                <option value="USD">USD</option>
                               
                                
                            </select>
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Loan Number</label>
                            <select class="form-control  laon_number_collection " name="laon_number_collection" id="laon_number_collection">
                                    @foreach ($loan_number as $item)
                                    <option value="{{$item->l_number}}">{{$item->l_number}}</option>
                                    @endforeach  
                                    
                            </select>
                            
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Account Number</label>
                            <select class="form-control  account_number_collection" name="account_number_collection" id="account_number_collection">
                                    @foreach ($loan_number as $item)
                                    <option value="{{$item->l_acc}}">{{$item->l_acc}}</option>
                                    @endforeach  
                                    
                            </select>
                           
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Name</label>
                            <input class="form-control l_collection_name" type="text" id="l_collection_name" name="l_collection_name" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Collection Type</label>
                          <select class="form-control l_collection_type" name="l_collection_type" id="l_collection_type">
                            <option value="">Select One</option>
                            <option value="Cash">Cash</option>
                            <option value="Bank">Bank</option>
                       
                               
                          </select>
                         
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Collection Amount</label>
                              <input class="form-control l_collection_amount" type="text" id="l_collection_amount" name="l_collection_amount" placeholder="">
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Note</label>
                              <input class="form-control l_collection_note" type="text" id="l_collection_note" name="l_collection_note" placeholder="">
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
                    <div class="ibox-title">Loan Collection List</div>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Add New Loan Collection
                    </button> --}}
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
                            @foreach($loan_details as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->l_collection_name}}</td>
                                <td>{{$item->l_collectin_number}}</td>
                                <td>
                                @foreach ($acc_number as $it)
                                        @if ($item->account_number_collection==$it->id)
                                        {{$it->ac_number}}
                                        @endif    
                                @endforeach
                                    </td>
                                <td>{{$item->l_collection_date}}</td>
                     
                            
                                <td>
                                  
                                   
                                    @if($item->l_collection_status==1)
                                    <a href="{{route('loan_collection_statas',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->l_collection_status==0)
                                    <a href="{{route('loan_collection_statas',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                    {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                        <span class="fa fa-pencil font-14"></span>
                                    </button>    --}}
                                    <a href="{{  url('/loan-collection/edit/'.$item->id) }}" class="btn btn-success" title="Edit">
                                        <span class="fa fa-pencil font-14"></span>
                                        
                                    </a>
                                    <a href="{{url('/loan-collection/report',$item->id)}}" class="btn btn-info" title="Report">
                                        <span class="fa fa-file font-14"></span>
                      
                                    </a>
        
                                    <a href="{{  url('/loan-collection/delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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

<script>
    $(document).ready(function(){  
         $('#laon_number_collection').change(function(){  
              var laon_number_id = $(this).val();  
             console.log(laon_number_id);
              $.ajax({  
                   url:"{{url('/loan-details')}}/"+laon_number_id,  
                   method:"GET",  
                   success:function(data){  
                        $('#account_number_collection').val(data.l_acc);  
                        $('#l_collection_name').val(data.l_name);  
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
                    url:"{{url('/loan-collection/edit')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.l_collection_date').val(response.l_collection_date);
                        $('.l_collectin_number').val(response.l_collectin_number);
                        $('.cId').val(response.id);
                        $('.l_collectin_currency').val(response.l_collectin_currency);
                        $('.laon_number_collection').val(response.laon_number_collection);
                        $('.account_number_collection').val(response.account_number_collection);
                        $('.l_collection_name').val(response.l_collection_name);
                        $('.l_collection_type').val(response.l_collection_type);
                        $('.l_collection_amount').val(response.l_collection_amount);
                        $('.l_collection_note').val(response.l_collection_note);
            
        
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
