@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Share Collection</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                       
                            
                        </div>
                    </div>
                    <div class="ibox-body">
                            <form method="POST" action="{{ url('/share-collection') }}">
                                {{csrf_field()}}
                                <div class="row">
                                        <div class="col-sm-4 form-group">
                                          <label>Date</label>
                                          <input class="form-control" type="date" id="s_collection_date" name="s_collection_date" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                          <div class="col-sm-4 form-group">
                                                  <?php
                                                    
                                                  $date=date('dmY');
                        
                                                  ?>
                                              <label>Cullection Number</label>
                                              <input class="form-control" type="text" id="s_collectin_number" name="s_collectin_number" value="SC{{$date.$last_id++}}" readonly>
                                              
                                          </div>
                                      
                                    
                  
                  
                                          <div class="col-sm-4 form-group">
                                              <label>Registration Number</label>
                                              <select class="form-control select2_demo_1  " name="reg_number_collection" id="reg_number_collection">
                                                      @foreach ($acc_number as $item)
                                                      <option value="{{$item->id}}">{{$item->reg_number}}</option>
                                                      @endforeach  
                                                      
                                              </select>
                                            
                                          </div>
                                         
                                         <div class="col-sm-4 form-group"style="visibility: hidden; display:none;">
                                              <label>Account Number</label>
                                              {{-- <select class="form-control select2_demo_1  " name="account_number_collection" id="account_number_collection">
                                                      @foreach ($acc_number as $item)
                                                      <option value="{{$item->ac_number}}">{{$item->ac_number}}</option>
                                                      @endforeach  
                                                      
                                              </select> --}}
                                              <input class="form-control account_number_collection" type="text" id="account_number_collection" name="account_number_collection" readonly>
                                          </div>
                                             
                                          <div class="col-sm-4 form-group">
                                              <label>Name</label>
                                              <input class="form-control" type="text" id="s_collection_name" name="s_collection_name" readonly>
                                          </div>
                                          <div class="col-sm-4 form-group">
                                            <label>Collection Type</label>
                                            <select class="form-control" name="s_collection_type" id="s_collection_type">
                                             
                                              <option value="Cash">Cash</option>
                                              <option value="Bank">Bank</option>
                                         
                                                 
                                            </select>
                                           
                                          </div>
                                                <div class="col-sm-4 form-group">
                                                <label>Collection Amount</label>
                                                <input class="form-control" type="number" id="s_collection_amount" name="s_collection_amount" placeholder="">
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

    


  
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Share Collection List</div>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Add New Share Collection
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
                          <?php $i=1; ?>
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
                                    {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                            <span class="fa fa-pencil font-14"></span>
                                    </button>    --}}
                                    <a href="{{  url('/share-collection/edit/'.$item->id) }}" class="btn btn-success" title="Edit">
                                        <span class="fa fa-pencil font-14  "></span>
                                    </a>
                                    <a href="{{url('/share-collection/report',$item->id)}}" class="btn btn-info" title="Report">
                                        <span class="fa fa-file font-14"></span>
                      
                                    </a>
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
        
</div>

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


@endsection
