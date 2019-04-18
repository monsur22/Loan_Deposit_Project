@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Company </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ url('/company') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-4 form-group">
                        <label>Company Name</label>
                        <input class="form-control" type="text" name="company_name">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Mobile</label>
                        <input class="form-control" type="text" name="company_mobile">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Email</label>
                        <input class="form-control" type="email" name="company_email">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Website</label>
                        <input class="form-control" type="text" name="company_website">
                    </div>


                    <div class="col-sm-4 form-group">
                        <label>Company Address</label>
                        <input class="form-control" type="text" name="company_address">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>

                        </select>


                    </div>


                    <div class="col-sm-4 form-group">
                        <label>Currency</label>
                        <select name="currency_code" class="form-control">
                            <option value="">Select Currency</option>
                            <option value="AUD">Australian Dollar</option>
                            <option value="BDT" SELECTED="YES">Bangladeshi Taka</option>
                            <option value="BRL">Brazilian Real</option>
                            <option value="CAD">Canadian Dollar</option>

                        </select>
                    </div>

                    <div class="col-sm-4 form-group">
                        <label>Company Vat(15%)</label>
                        <input class="form-control" type="text" name="company_vat">
                    </div>

                     <div class="col-sm-4 form-group">
                  <label>Company Logo</label>
                  <input class="form-control" type="file" name="company_image">
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
<div class="modal fade" class="editbtn"id="editbtn" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Company Info </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ url('/company/update') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-4 form-group">
                        <label>Company Name</label>

                        <input class="form-control name"  type="text" name="company_name">
                            <input type="hidden" name="id" class="cId">

                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Mobile</label>
                        <input class="form-control mobile" type="text" name="company_mobile">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Email</label>
                        <input class="form-control emailAddress" type="email" name="company_email">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Company Website</label>
                        <input class="form-control website" type="text" name="company_website">
                    </div>


                    <div class="col-sm-4 form-group">
                        <label>Company Address</label>
                        <input class="form-control address" type="text" name="company_address">
                    </div>

               
                    <div class="col-sm-4 form-group">
                        <label>Company Vat(15%)</label>
                        <input class="form-control vat" type="text" name="company_vat">
                    </div>

                     <div class="col-sm-4 form-group">
                  <label>Company Logo</label>
                  <input class="form-control logo" type="file" name="company_image">
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
                    <div class="ibox-title">Company List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Company
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Country</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            <?php $i=1 ?>
                            @foreach($companydetails as $company)
                            <tr>
                            <th>{{$i++}}</th>
                                <th>{{$company->company_name}}</th>
                                <td>{{$company->company_mobile}}</td>
                                <td>{{$company->company_email}}</td>
                                <td>{{$company->company_website}}</td>
                                <td>{{$company->country}}</td>
                            <td><img src="{{ asset($company->company_image) }}" alt="{{ $company->company_name }}" height="50" width="50" >
                            </td>
        
        
                                <td>
                                    
                                 <button onclick='edit({{$company->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button>       
                                 <button onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Delete"><a href="{{ url('/company/delete/'.$company->id) }}"></a> <i class="fa fa-trash font-14"></i></button>       
                                   
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
                url:"{{url('/company-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.name').val(response.company_name);
                    $('.cId').val(response.id);
                    $('.mobile').val(response.company_mobile);
                    $('.emailAddress').val(response.company_email);
                    $('.website').val(response.company_website);
                    $('.address').val(response.company_address);
                    $('.vat').val(response.company_vat);
                    $('.vat').val(response.company_vat);
    
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
