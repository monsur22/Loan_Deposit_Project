@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Account Category</h5>
            
        </div>
        <form method="POST" action="{{url('/category')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="name">Group:<span class="star"></span></label>
                                     <select name="cat_group_name" id="" class="form-control">
                                         <option value="">---Select Group---</option>
                                         @foreach($groupdetails as $group)
                                     <option value="{{ $group->group_name }}">{{ $group->group_name }}({{$group->group_code}})</option>
                                           @endforeach
                                         
                                     </select>
                                   </div>
                   </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Category code</label>
                                     <input type="text" class="form-control code" id="code" name="cat_code" placeholder="Category Code">
                                     <input type="hidden" name="id" class="cId">
                                     <span class="text-danger">{{$errors->has('cat_code')? $errors->first('cat_code'):''}}</span>
                                   </div>
                                 </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Category Name</label>
                                  <input type="text" class="form-control name" id="name" name="cat_name" placeholder="Catgory Name">
                                  <span class="text-danger">{{$errors->has('cat_name')? $errors->first('cat_name'):''}}</span>
                                </div>
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
<div class="modal fade" id="editcategory" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"> Update Account Category</h5>
                        
                    </div>
                    <form method="POST" action="{{url('/category-update')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="name">Group:<span class="star"></span></label>
                                                 <select name="cat_group_name" id="catgroup" class="form-control catgroup">
                                                     <option value="">---Select Group---</option>
                                                     @foreach($groupdetails as $group)
                                                 <option value="{{ $group->group_name }}">{{ $group->group_name }}({{$group->group_code}})</option>
                                                       @endforeach
                                                     
                                                 </select>
                                               </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Category code</label>
                                                 <input type="text" class="form-control code" id="code" name="cat_code" placeholder="Category Code">
                                                 <input type="hidden" name="id" class="cId">
                                                 <span class="text-danger">{{$errors->has('cat_code')? $errors->first('cat_code'):''}}</span>
                                               </div>
                                             </div>
                                        <div class="col-sm-6">
                                             <div class="form-group">
                                              <label for="name">Category Name</label>
                                              <input type="text" class="form-control name" id="name" name="cat_name" placeholder="Catgory Name">
                                              <span class="text-danger">{{$errors->has('cat_name')? $errors->first('cat_name'):''}}</span>
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
                    <div class="ibox-title">Category List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcategory"
                            style="margin-right: 60px;">
                        New Category
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Category Code</th>
                                        <th>Category Name</th>
                                        <th>Group Name</th>
                                        <th>Action</th>
                                    </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                          @foreach($catdetails as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->cat_code}}</td>
                                <td>{{$category->cat_name}}</td>
                                <td>{{$category->cat_group_name}}</td>
                              
        
        
                                <td>
                                       @if($category->cat_status==1)
                                        <a href="{{route('catstatus',['id'=>$category->id])}}" class="btn btn-success" title="Active">
                                                <span class="fa fa-arrow-up"></span>
                                           
                                        </a>
                                        @elseif($category->cat_status==0)
                                        <a href="{{route('catstatus',['id'=>$category->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                              
                                            </a>
                                        @endif
                                   
                                          
                                            <button onclick='edit({{$category->id}})' data-toggle="modal" id="editcategory" data-target="#editcategory" class="btn btn-info" >  <span class="fa fa-pencil font-14"></span></button>   
                                <a href="{{url('/category-delete/'.$category->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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
                url:"{{url('/category-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.code').val(response.cat_code);
                    $('.name').val(response.cat_name);
                    $('.cId').val(response.id);
                    $('.catgroup').val(response.cat_group_name);
                   
                    
    
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
