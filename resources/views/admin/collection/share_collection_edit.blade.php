@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Share Collection</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/share-collection/update') }}">
                                {{csrf_field()}}
                                <div class="row">
                                        <div class="col-sm-4 form-group">
                                          <label>Date</label>
                                        <input class="form-control s_collection_date" type="date" id="s_collection_date" name="s_collection_date" value="{{$data_edit->s_collection_date}}">
                                          <input class="form-control cId" type="hidden" id="id" name="id" value="{{$data_edit->id}}">
                                        </div>
                                          <div class="col-sm-4 form-group">
                                              <label>Cullection Number</label>
                                              <input class="form-control s_collectin_number" type="text" id="s_collectin_number" name="s_collectin_number"value="{{$data_edit->s_collectin_number}}" readonly>
                                              
                                          </div>
                                      
                                         
                  
                  
                                          <div class="col-sm-4 form-group">
                                              <label>Share Number</label>
                                              <select class="form-control select2_demo_1 reg_number_collection  " name="reg_number_collection" id="reg_number_collection">
                                                      @foreach ($acc_number as $item)
                                                      <option value="{{$item->id}}"@if($item->reg_number == $data_edit->reg_number_collection) selected @endif>{{$item->reg_number}}</option>
                                                      @endforeach  
                                                      
                                              </select>
                                            
                                          </div>
                                         
                                         <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                              <label>Account Number</label>
                                              {{-- <select class="form-control select2_demo_1  account_number_collection" name="account_number_collection" id="account_number_collection">
                                                      @foreach ($acc_number as $item)
                                                      <option value="{{$item->ac_number}}"@if($item->ac_number == $data_edit->account_number_collection) selected @endif>{{$item->ac_number}}</option>
                                                      @endforeach  
                                                      
                                              </select> --}}
                                              <input class="form-control account_number_collection" type="text" id="account_number_collection" name="account_number_collection" value="{{$data_edit->account_number_collection}}" readonly>
                                              
                                          </div>
                                             
                                          <div class="col-sm-4 form-group">
                                              <label>Name</label>
                                              <input class="form-control s_collection_name" type="text" id="s_collection_name" name="s_collection_name" value="{{$data_edit->s_collection_name}}" readonly>
                                          </div>
                                          <div class="col-sm-4 form-group">
                                            <label>Collection Type</label>
                                            <select class="form-control s_collection_type" name="s_collection_type" id="s_collection_type">
                                            
                                              <option value="Cash">Cash</option>
                                              <option value="Bank">Bank</option>
                                         
                                                 
                                            </select>
                                           
                                          </div>
                                                <div class="col-sm-4 form-group">
                                                <label>Collection Amount</label>
                                                <input class="form-control s_collection_amount" type="number" id="s_collection_amount" name="s_collection_amount" value="{{$data_edit->s_collection_amount}}">
                                            </div>
                                        
                                          
                                            <div style="text-align:right; width:100%; padding:0;"class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>

    

{{-- Add Company Modal --}}



{{-- ======== Loan Calculation  =========== --}}
<script>
    $(document).ready(function(){  
         $('#reg_number_collection').change(function(){  
              var reg_number_collection = $(this).val();  
             console.log(reg_number_collection);
              $.ajax({  
                   url:"{{url('/share-details')}}/"+reg_number_collection,  
                   method:"GET",  
                   success:function(data){  
                        $('#account_number_collection').val(data.ac_number);  
                        $('#s_collection_name').val(data.reg_name);  
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
