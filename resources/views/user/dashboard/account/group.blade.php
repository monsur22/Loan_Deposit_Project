@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="addgroup" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Account Group</h5>
            
        </div>
        <form method="POST" action="{{url('/group')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Group code</label>
                                     <input type="text" class="form-control" id="code" name="group_code" placeholder="">
                                     <span class="text-danger">{{$errors->has('group_code')? $errors->first('group_code'):''}}</span>
                                   </div>
                                 </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Group Name</label>
                                  <input type="text" class="form-control" id="name" name="group_name" placeholder="">
                                  <span class="text-danger">{{$errors->has('group_name')? $errors->first('group_name'):''}}</span>
                                </div>
                              </div>
      
                             
                            </div>
                        
                        <!--  <input type="hidden" value="1" name="status">-->
      
                          
                              
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
<div class="modal fade" id="editgroup" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Account Group</h5>
            
        </div>
    <form method="POST" action="{{url('/group-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Group code</label>
                                     <input type="text" class="form-control code" id="code" name="group_code" placeholder="">
                                     <input type="hidden" name="id" class="cId">
                                     <span class="text-danger">{{$errors->has('group_code')? $errors->first('group_code'):''}}</span>
                                   </div>
                                 </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Group Name</label>
                                  <input type="text" class="form-control name" id="name" name="group_name" placeholder="">
                                  <span class="text-danger">{{$errors->has('group_name')? $errors->first('group_name'):''}}</span>
                                </div>
                              </div>
      
                             
                            </div>
                        
                        <!--  <input type="hidden" value="1" name="status">-->
      
                          
                              
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
                    <div class="ibox-title">Group List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addgroup"
                            style="margin-right: 60px;">
                        New Group
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Group Code</th>
                                        <th>Group Name</th>
                                        <th>Action</th>
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                          @foreach($groupdetails as $group)
                            <tr>
                            <td>{{$i++}}</td>
                                <td>{{$group->group_code}}</td>
                                <td>{{$group->group_name}}</td>
                              
        
        
                                <td>
                                        @if($group->group_status==1)
                                        <a href="{{route('groupstatus',['id'=>$group->id])}}" class="btn btn-success" title="Active">
                                                <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($group->group_status==0)
                                        <a href="{{route('groupstatus',['id'=>$group->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
        
                                        <button onclick='edit({{$group->id}})' data-toggle="modal" id="editgroup" data-target="#editgroup" class="btn btn-info" >
                                            <span class="fa fa-pencil font-14"></span>
                                        </button>   
                                <a href="{{url('/group-delete/'.$group->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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
                url:"{{url('/group-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.code').val(response.group_code);
                    $('.name').val(response.group_name);
                    $('.cId').val(response.id);
                   
                    
    
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
