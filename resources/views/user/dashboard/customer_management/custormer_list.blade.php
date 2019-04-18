@extends('user.dashboard.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Customer</h5>
            
        </div>
        <form method="POST" action="{{ url('/user/customerlist') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">

                            <div class="col-sm-4 form-group">
                            <label>Customer Category</label>
                            <select class="form-control" name="customer_cat" id="customer_cat">
                                <option value="Normal">Normal</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Platinum">Platinum</option>
                                
                            </select>
                        </div>
                    
                         <div class="col-sm-4 form-group">
                            <label>Customer Name</label>
                            <input class="form-control" type="text" id="customer_name" name="customer_name" placeholder="">
                        </div>
                        
                        <div class="col-sm-4 form-group">
                            <label>Customer Mobile</label>
                            <input class="form-control" type="text" id="customer_mobile" name="customer_mobile" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Customer Email</label>
                            <input class="form-control" type="email" id="customer_email" name="customer_email" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Customer Address</label>
                            <input class="form-control" type="text" id="customer_address" name="customer_address" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Opaning Balance</label>
                            <input class="form-control" type="text" id="copaning_balance" name="copaning_balance" placeholder="">
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
</div>
{{-- Edit Company Modal --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Customer Info</h5>
                    
                </div>
                <form method="POST" action="{{ url('/user/customerlist/update') }}">
                    {{csrf_field()}}
                    <div class="modal-body">
      
                            <div class="row">

                                    <div class="col-sm-4 form-group">
                                    <label>Customer Category</label>
                                    <select class="form-control customer_cat" name="customer_cat" id="customer_cat">
                                        <option value="Normal">Normal</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                        
                                    </select>
                                </div>
                            
                                 <div class="col-sm-4 form-group">
                                    <label>Customer Name</label>
                                    <input class="form-control customer_name" type="text" id="customer_name" name="customer_name" placeholder="">
                                  <input type="hidden" name="id" class="cId">

                                </div>
                                
                                <div class="col-sm-4 form-group">
                                    <label>Customer Mobile</label>
                                    <input class="form-control customer_mobile" type="text" id="customer_mobile" name="customer_mobile" placeholder="">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Customer Email</label>
                                    <input class="form-control customer_email" type="email" id="customer_email" name="customer_email" placeholder="">
                                </div>
                               
                               <div class="col-sm-4 form-group">
                                    <label>Customer Address</label>
                                    <input class="form-control customer_address" type="text" id="customer_address" name="customer_address" placeholder="">
                                </div>
                                   
                                <div class="col-sm-4 form-group">
                                    <label>Opaning Balance</label>
                                    <input class="form-control copaning_balance" type="text" id="copaning_balance" name="copaning_balance" placeholder="">
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
    </div>

{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Customer List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Customer
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($customerdetails as $customer)
                            <tr>
                                <th>{{$i++}}</th>
                                <th>{{$customer->customer_cat}}</th>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->customer_mobile}}</td>
                                
                                <td>{{$customer->customer_email}}</td>
                            <td>{{$customer->copaning_balance}}</td>
                            
        
        
                                <td>
                                  
                                        <button onclick='edit({{$customer->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>   
        
                                    {{-- <a href="{{  url('/user/customer/delete/'.$customer->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
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
        function edit(id) {
                var x =id;
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/user/customer-info')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.customer_cat').val(response.customer_cat);
                        $('.customer_name').val(response.customer_name);
                        $('.cId').val(response.id);
                        $('.customer_mobile').val(response.customer_mobile);
                        $('.customer_email').val(response.customer_email);
                        $('.customer_address').val(response.customer_address);
                        $('.copaning_balance').val(response.copaning_balance);
                       
                       
        
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
