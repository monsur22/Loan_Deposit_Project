@extends('admin.master')
@section('content')

        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Loan Collection</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/loan-collection/update') }}" name="myForm">
                                {{csrf_field()}}
                                <div class="row">
                                        <div class="col-sm-4 form-group">
                                                <label>Date</label>
                                        <input class="form-control l_collection_date" type="date" id="l_collection_date" name="l_collection_date" value="{{$data_edit->l_collection_date}}">
                                                <input class="form-control cId" type="hidden" id="id" name="id" value="{{$data_edit->id}}" >
                                              </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Cullection Number</label>
                                                    <input class="form-control l_collectin_number" type="text" id="l_collectin_number" name="l_collectin_number"value="{{$data_edit->l_collectin_number}}" readonly>
                                                    
                                                </div>
                                            
                                               
                        
                        
                                                <div class="col-sm-4 form-group">
                                                    <label>Loan Number</label>
                                                    <select class="form-control laon_number_collection  select2_demo_1" name="laon_number_collection"id="laon_number_collection" >
                                                            @foreach ($loan_number as $item)
                                                            <option value="{{$item->id}}"@if($item->l_number == $data_edit->laon_number_collection) selected @endif>
                                                    
                                                                {{$item->l_number}}</option>
                                                            @endforeach  
                                                            
                                                    </select>
                                                    
                                                </div>
                                               
                                               <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                                    <label>Account Number</label>
                                                    {{-- <select class="form-control   select2_demo_1 account_number_collection" name="account_number_collection" >
                                                            @foreach ($loan_number as $item)
                                                            <option value="{{$item->l_acc}}" @if($item->l_acc == $data_edit->laon_number_collection) selected @endif>{{$item->l_acc}}</option>
                                                            @endforeach  
                                                            
                                                    </select> --}}
                                                    <input class="form-control account_number_collection" type="text" id="account_number_collection" name="account_number_collection"value="{{$data_edit->account_number_collection}}" readonly>

                                                   
                                                </div>
                                                   
                                                <div class="col-sm-4 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control l_collection_name" type="text" id="l_collection_name" name="l_collection_name"value="{{$data_edit->l_collection_name}}">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                  <label>Collection Type</label>
                                                  <select class="form-control l_collection_type" name="l_collection_type" >
                                                    
                                             
                                                    <option value="Cash">Cash</option>
                                                    <option value="Bank">Bank</option>
                                               
                                                       
                                                  </select>
                                                 
                                                </div>
                                                      <div class="col-sm-4 form-group">
                                                      <label>Collection Amount</label>
                                                      <input class="form-control l_collection_amount" type="number" id="l_collection_amount" name="l_collection_amount" value="{{$data_edit->l_collection_amount}}">
                                                  </div>
                                              
                                                 
                                                  <div style="text-align:right; width:100%; padding:0;"class="form-group ">
                                                        
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                </div>
                                
                        </form>
                    </div>
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

@endsection
