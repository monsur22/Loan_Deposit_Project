@extends('admin.master')
@section('content')

        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Depositor</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ url('/depositor-update') }}">
                            {{csrf_field()}}
                           
                
                                    <div class="row">
                                      
                                      <div class="col-sm-4 form-group">
                                        <label>Account Number</label>
                                        <select class="form-control select2_demo_1 d_acc " name="d_acc" id="d_acc">
                                            @foreach ($acc_number as $item)
                                            <option value="{{$item->id}}"@if($item->ac_number == $depositor_edit->d_acc) selected @endif>{{$item->ac_number}}</option>
                                            @endforeach  
                                            
                                       </select>
                                       
                                      </div>
                                         
                                      <div class="col-sm-4 form-group">
                                        <label>Deposit Number</label>
                                      <input class="form-control d_number" type="text" id="d_number" name="d_number" value="{{$depositor_edit->d_number}}" readonly >
                                      <input class="form-control " type="hidden" id="id" name="id"value="{{$depositor_edit->id}}">
                                    </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Deposit Date</label>
                                            <input class="form-control d_date" type="date" id="d_date" name="d_date" value="{{$depositor_edit->d_date}}">
                                        </div>
                
                
                                        <div class="col-sm-4 form-group">
                                            <label>Depositor Name</label>
                                            <input class="form-control d_name" type="text" id="d_name" name="d_name" value="{{$depositor_edit->d_name}}" readonly>
                                        </div>
                                       
                                       <div class="col-sm-4 form-group">
                                            <label>Depositor Father's Name</label>
                                            <input class="form-control d_father_name" type="text" id="d_father_name" name="d_father_name" value="{{$depositor_edit->d_father_name}}" readonly>
                                        </div>
                                           
                                        <div class="col-sm-4 form-group">
                                            <label>Phone Numbrer</label>
                                            <input class="form-control d_phone_number" type="text" id="d_phone_number" name="d_phone_number" value="{{$depositor_edit->d_phone_number}}" readonly>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                          <label>Closing Date</label>
                                          <input class="form-control d_closing_date" type="date" id="d_closing_date" name="d_closing_date" value="{{$depositor_edit->d_closing_date}}">
                                        </div>
                                              <div class="col-sm-4 form-group">
                                              <label>Diposit Pakage</label>
                                              <select class="form-control d_pakage" name="d_pakage" id="d_pakage">
                                                <option value="">Select One</option>
                                                @foreach ($deposit_pakage as $item)
                                                   <option value="{{$item->d_pakage_name}}"@if($item->d_pakage_name == $depositor_edit->d_pakage) selected @endif>{{$item->d_pakage_name}}({{$item->d_amount}})</option>
                                             
                                                 
                                                  @endforeach
                                              </select>
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

@endsection
