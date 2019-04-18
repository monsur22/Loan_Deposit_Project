@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Branch</h5>
           
        </div>
        <form method="POST" action="{{ url('/branch') }}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">


                    <div class="col-sm-4 form-group">
                          <label>Branch Name</label>
                          <input class="form-control" type="text" name="branch_name" >                   </div>
                      <div class="col-sm-4 form-group">
                          <label>Branch Mobile</label>
                          <input class="form-control" type="text" name="branch_mobile" >                     </div>
                      <div class="col-sm-4 form-group">
                          <label>Branch Email</label>
                          <input class="form-control" type="email" name="branch_email" >                    </div>
                     
                     <div class="col-sm-4 form-group">
                          <label>Branch Address</label>
                          <input class="form-control" type="text" name="branch_address" >                      </div>
                       <div class="col-sm-4 form-group">
                          <label>Opening Date</label>
                          <input class="form-control" type="date" name="opening_date" >                    </div>
                    <div class="col-sm-4 form-group">
                          <label>Opening Balance</label>
                          <input class="form-control" type="text" name="opening_balance" >
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
            <h5 class="modal-title" id="exampleModalLongTitle">Update Branch</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ url('/branchlist-update') }}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">


                    <div class="col-sm-4 form-group">
                          <label>Branch Name</label>
                          <input class="form-control name" type="text" name="branch_name" >
                          <input type="hidden" name="id" class="cId">

                      </div>
                      <div class="col-sm-4 form-group">
                          <label>Branch Mobile</label>
                          <input class="form-control mobile" type="text" name="branch_mobile" >
                      </div>
                      <div class="col-sm-4 form-group">
                          <label>Branch Email</label>
                          <input class="form-control email" type="email" name="branch_email" >
                      </div>
                     
                     <div class="col-sm-4 form-group">
                          <label>Branch Address</label>
                          <input class="form-control adress" type="text" name="branch_address" >
                      </div>
                       <div class="col-sm-4 form-group">
                          <label>Opening Date</label>
                          <input class="form-control date" type="date" name="opening_date" >
                      </div>
                    <div class="col-sm-4 form-group">
                          <label>Opening Balance</label>
                          <input class="form-control balance" type="text" name="opening_balance" >
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
                    <div class="ibox-title">Branch List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                      Add  New Branch
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
                                        <th>Date</th>
                                        <th>Balance</th>
                                        
                                        <th>Action</th>
                                    </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($branchdetails as $branch)
                            <tr>
                                <th>{{$i++}}</th>
                                <th>{{$branch->branch_name}}</th>
                                <td>{{$branch->branch_mobile}}</td>
                                <td>{{$branch->branch_email}}</td>
                                
                                <td>{{$branch->opening_date}}</td>
                            <td>{{$branch->opening_balance}}</td>
        
        
                                <td>
                                        @if($branch->branch_status==1)
                                        <a href="{{route('branch_status',['id'=>$branch->id])}}" class="btn btn-success" title="Active">
                                            <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($branch->branch_status==0)
                                        <a href="{{route('branch_status',['id'=>$branch->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                   
        
                                        <button onclick='edit({{$branch->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>   
                                    <a href="{{  url('/branch/delete/'.$branch->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14 "></span>
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
                url:"{{url('/branchlist-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.name').val(response.branch_name);
                    $('.mobile').val(response.branch_mobile);
                    $('.cId').val(response.id);
                    $('.email').val(response.branch_email);
                    $('.adress').val(response.branch_address);
                    $('.date').val(response.opening_date);
                    $('.balance').val(response.opening_balance);
                   
                   
                    
    
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
