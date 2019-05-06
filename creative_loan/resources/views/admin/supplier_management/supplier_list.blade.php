@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Add New Supplier</h5>
            
        </div>
        <form method="POST" action="{{ url('/supplierlist') }}">
            {{csrf_field()}}
            <div class="modal-body">

                <div class="row">

                    <div class="col-sm-4 form-group">
                        <label>Supplier Category</label>
                        <select class="form-control" name="supplier_cat" id="supplier_cat">
                            <option value="Cash">Cash</option>
                            <option value="One After One">One After One</option>
                            <option value="After Sale">After Sale</option>
                            <option value="Advance">Advance</option>
                
                        </select>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Supplier Name</label>
                        <input class="form-control" type="text" id="supplier_name" name="supplier_name" placeholder="Supplier Name">
                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Supplier Mobile</label>
                        <input class="form-control" type="text" id="supplier_mobile" name="supplier_mobile"
                               placeholder="Supplier Mobile">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Supplier Email</label>
                        <input class="form-control" type="email" id="supplier_email" name="supplier_email" placeholder="Supplier Email">
                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Supplier Address</label>
                        <input class="form-control" type="text" id="supplier_address" name="supplier_address"
                               placeholder="Supplier Address">
                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Opaning Balance</label>
                        <input class="form-control" type="text" id="sopaning_balance" name="sopaning_balance"
                               placeholder="Opaning Balance">
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
            <h5 class="modal-title" id="exampleModalLongTitle"> Add New Supplier</h5>
            
        </div>
        <form method="POST" action="{{ url('/supplierlist/update') }}">
            {{csrf_field()}}
            <div class="modal-body">

                <div class="row">

                    <div class="col-sm-4 form-group">
                        <label>Supplier Category</label>
                        <select class="form-control supplier_cat" name="supplier_cat" id="supplier_cat">
                            <option value="Cash">Cash</option>
                            <option value="One After One">One After One</option>
                            <option value="After Sale">After Sale</option>
                            <option value="Advance">Advance</option>
                
                        </select>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Supplier Name</label>
                        <input class="form-control supplier_name" type="text" id="supplier_name" name="supplier_name" placeholder="Supplier Name">
                        <input type="hidden" name="id" class="cId">

                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Supplier Mobile</label>
                        <input class="form-control supplier_mobile" type="text" id="supplier_mobile" name="supplier_mobile"
                               placeholder="Supplier Mobile">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Supplier Email</label>
                        <input class="form-control supplier_email" type="email" id="supplier_email" name="supplier_email" placeholder="Supplier Email">
                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Supplier Address</label>
                        <input class="form-control supplier_address" type="text" id="supplier_address" name="supplier_address"
                               placeholder="Supplier Address">
                    </div>
                
                    <div class="col-sm-4 form-group">
                        <label>Opaning Balance</label>
                        <input class="form-control sopaning_balance" type="text" id="sopaning_balance" name="sopaning_balance"
                               placeholder="Opaning Balance">
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
                    <div class="ibox-title">Supplier List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Supplier
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
                                @foreach($supplierdetails as $suplier)
                                <tr>
                                    <th>{{$suplier->id}}</th>
                                    <th>{{$suplier->supplier_cat}}</th>
                                    <th>{{$suplier->supplier_name}}</th>
                                    <td>{{$suplier->supplier_mobile}}</td>
                                    <td>{{$suplier->supplier_email}}</td>
                                    
                                    <td>{{$suplier->sopaning_balance}}</td>
                                
                                
            
            
                                    <td>
                                        
            
                                            <button onclick='edit({{$suplier->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>   
                                       
                                        <a href="{{  url('/supplier/delete/'.$suplier->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
                                            <span class="fa fa-trash font-14"></span>
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
        function edit(id) {
                var x =id;
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/supplier-info')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.supplier_cat').val(response.supplier_cat);
                        $('.supplier_name').val(response.supplier_name);
                        $('.cId').val(response.id);
                        $('.supplier_mobile').val(response.supplier_mobile);
                        $('.supplier_email').val(response.supplier_email);
                        $('.supplier_address').val(response.supplier_address);
                        $('.sopaning_balance').val(response.sopaning_balance);
                       
                       
                       
                        
        
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
