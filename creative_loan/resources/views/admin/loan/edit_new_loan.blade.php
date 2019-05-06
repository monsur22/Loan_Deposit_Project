@extends('admin.master')
@section('content')

        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Loner</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="{{ url('/loan-update') }}">
                            {{csrf_field()}}
                         
                
                                    <div class="row">
                                     
                                      <div class="col-sm-4 form-group">
                                        <label>Account Number</label>
                                        <select class="form-control select2_demo_1  l_acc" name="l_acc" id="l_acc">
                                                @foreach ($acc_number as $item)
                                                <option  value="{{$item->id}}"@if($item->ac_number == $loan_edit->l_acc) selected @endif>{{$item->ac_number}}</option>
                                                @endforeach  
                                                
                                        </select>
                                        <input class="form-control cId" type="hidden" id="id" name="id"value="{{$loan_edit->id}}"  >
                                      </div>
                                         
                                      <div class="col-sm-4 form-group">
                                        <label>Loan Number</label>
                                        <input class="form-control l_number" type="text" id="l_number" name="l_number" value="{{$loan_edit->l_number}}" readonly>
                                    </div>
                                        <div class="col-sm-4 form-group">
                                            <label>Loan Date</label>
                                            <input class="form-control l_date" type="date" id="l_date" name="l_date"  value="{{$loan_edit->l_date}}">
                                        </div>
                
                
                                        <div class="col-sm-4 form-group">
                                            <label>Loner Name</label>
                                            <input class="form-control l_name" type="text" id="l_name" name="l_name"  value="{{$loan_edit->l_name}}" readonly>
                                        </div>
                                       
                                        <div class="col-sm-4 form-group">
                                            <label>Loner Father's Name</label>
                                            <input class="form-control l_father_name" type="text" id="l_father_name" name="l_father_name"  value="{{$loan_edit->l_father_name}}" readonly>
                                        </div>
                                           
                                        <div class="col-sm-4 form-group">
                                            <label>Phone Numbrer</label>
                                            <input class="form-control l_phone_number" type="text" id="l_phone_number" name="l_phone_number"  value="{{$loan_edit->l_phone_number}}" readonly>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                          <label>Closing Date</label>
                                          <input class="form-control l_closing_date" type="date" id="l_closing_date" name="l_closing_date"  value="{{$loan_edit->l_closing_date}}">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                              <label>Loan Pakage</label>
                                              <select class="form-control  l_pakage select2_demo_1" name="l_pakage" id="l_pakage" >
                                                @foreach ($loan_pakage as $item)
                                                <option value="{{$item->l_pakage_name}}"@if($item->l_pakage_name == $loan_edit->l_pakage) selected @endif>{{$item->l_pakage_name}}({{$item->l_amount}})</option>
                                                    
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
         $('#l_acc').change(function(){  
              var loan_id = $(this).val();  
             console.log(loan_id);
              $.ajax({  
                   url:"{{url('/loan')}}/"+loan_id,  
                   method:"GET",  
                   success:function(data){  
                        $('#l_name').val(data.reg_name);  
                        $('#l_father_name').val(data.reg_father_name);  
                        $('#l_phone_number').val(data.reg_phone);  
                        console.log(data);
   
                   }, error:function(xhr,status,error){
                 console.log(error);
                       
                 }  
              });  
         });  
    });  
</script>

@endsection
