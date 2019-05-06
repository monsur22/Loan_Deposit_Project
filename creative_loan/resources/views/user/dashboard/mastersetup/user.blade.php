@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
            
        </div>
        <form method="POST" action="{{url('/user')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">First Name</label>
                                  <input type="text" class="form-control" id="name" name="first_name" placeholder="First Name">
                                  <span class="text-danger">{{$errors->has('first_name')? $errors->first('first_name'):''}}</span>
                                </div>
                              </div>
      
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Last Name</label>
                                  <input type="text" class="form-control" id="name" name="last_name" placeholder="Last Name">
                                  <span class="text-danger">{{$errors->has('last_name')? $errors->first('last_name'):''}}</span>
                                </div>
                              </div>
                            </div>
                          <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Email:<span class="star"></span></label>
                                  <input type="email" class="form-control" id="name" name="user_email" placeholder="Email Address">
                                  <span class="text-danger">{{$errors->has('user_email')? $errors->first('user_email'):''}}</span>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="name">Mobile:<span class="star"></span></label>
                                    <input type="number" class="form-control" id="name" name="user_mobile" placeholder="Mobile">
                                    <span class="text-danger">{{$errors->has('user_mobile')? $errors->first('user_mobile'):''}}</span>
                                  </div>
                              </div>
                          </div>
                              
                          <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Password:<span class="star"></span></label>
                                  <input type="password" class="form-control" id="password" name="user_password" placeholder="New Password" minlength="8">
                                  <span class="text-danger" id="passwordmess"></span>
                                </div>
                              </div>
      
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Conform Password:<span class="star"></span></label>
                                  <input type="password" class="form-control" id="conpassword" name="conform_password" placeholder="Conform Password" minlength="8">
                                  <span class="text-danger" id="conform"></span>
                                </div>
      
                              </div>
      
                          </div>
      
                          <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">User Role:<span class="star"></span></label>
                                  <select name="user_role" id="" class="form-control">
                                      <option value="">---Select Role---</option>
                                      <option value="1">Admin</option>
                                      <option value="2">User</option>
                                     
                                  </select>
                                </div>
                              </div>
      
                              <div class="col-sm-6">
                                 <div class="form-group">
                                  <label for="name">Branch:<span class="star"></span></label>
                                  <select name="branch_id" id="" class="form-control">
                                      <option value="">---Select Branch---</option>
                                      @foreach($branchdetails as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                        @endforeach
                                      
                                  </select>
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

<div class="modal fade" id="edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">User Edit Information</h5>
                   
                </div>
                <form method="POST" action="{{url('/user-update')}}">
                    {{csrf_field()}}
                    <div class="modal-body">
                            <div class="row">
                                    <div class="col-sm-6">
                                         <div class="form-group">
                                          <label for="name">First Name</label>
                                          <input type="text" class="form-control first_name" id="name" name="first_name" placeholder="First Name">
                                  <input type="hidden" name="id" class="cId">
                                          
                                          <span class="text-danger">{{$errors->has('first_name')? $errors->first('first_name'):''}}</span>
                                        </div>
                                      </div>
              
                                      <div class="col-sm-6">
                                         <div class="form-group">
                                          <label for="name">Last Name</label>
                                          <input type="text" class="form-control last_name" id="name" name="last_name" placeholder="Last Name">
                                          <span class="text-danger">{{$errors->has('last_name')? $errors->first('last_name'):''}}</span>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="row">
                                      <div class="col-sm-6">
                                         <div class="form-group">
                                          <label for="name">Email:<span class="star"></span></label>
                                          <input type="email" class="form-control user_email" id="name" name="user_email" placeholder="Email Address">
                                          <span class="text-danger">{{$errors->has('user_email')? $errors->first('user_email'):''}}</span>
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                            <label for="name">Mobile:<span class="star"></span></label>
                                            <input type="number" class="form-control user_mobile" id="name" name="user_mobile" placeholder="Mobile">
                                            <span class="text-danger">{{$errors->has('user_mobile')? $errors->first('user_mobile'):''}}</span>
                                          </div>
                                      </div>
                                  </div>
                                      
                                  
              
                                  <div class="row">
                                      <div class="col-sm-6">
                                         <div class="form-group ">
                                          <label for="name">User Role:<span class="star"></span></label>
                                          <select name="user_role" id="" class="form-control user_role">
                                              <option value="">---Select Role---</option>
                                              <option value="1">Admin</option>
                                              <option value="2">User</option>
                                             
                                          </select>
                                        </div>
                                      </div>
              
                                      <div class="col-sm-6">
                                         <div class="form-group">
                                          <label for="name">Branch:<span class="star"></span></label>
                                          <select name="branch_id" id="" class="form-control branch_id">
                                              <option value="">---Select Branch---</option>
                                              @foreach($branchdetails as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                                @endforeach
                                              
                                          </select>
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
                    <div class="ibox-title">user List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New user
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>User Name</th>
                                        
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Rule</th>
                                        <th>Branch</th>
                                        
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                              @foreach($userdetails as $user)
                                <tr>
                                <th>{{$i++}}</th>
                                    <th>{{$user->first_name}}&nbsp{{$user->last_name}}</th>
                                    <td>{{$user->user_email}}</td>
                                    <td>{{$user->user_mobile}}</td>
                                    
                                    <td>{{$user->user_role}}</td>
                                <td>{{$user->branch_id}}</td>
            
            
                                    <td>
                                       
                                        @if($user->user_status==1)
                                        <a href="{{route('user_status',['id'=>$user->id])}}" class="btn btn-success" title="Active">
                                            <span class="fa fa-arrow-up"></span>
                                        </a>
                                        @elseif($user->user_status==0)
                                        <a href="{{route('user_status',['id'=>$user->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif
                                            <button onclick='edit({{$user->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>   
                                    <a href="{{url('user-delete',$user->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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
                    url:"{{url('/user-info')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.first_name').val(response.first_name);
                        $('.last_name').val(response.last_name);
                        $('.cId').val(response.id);
                        $('.user_email').val(response.user_email);
                        $('.user_mobile').val(response.user_mobile);
                        $('.user_role').val(response.user_role);
                        $('.branch_id').val(response.branch_id);
                       
                       
                       
                        
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
        
        
        $(document).ready(function(){
           
        
        });   
             
        </script>
    
    <script>
      $('#conpassword').keyup(function(){
              var x=$('#password').val(); 
              var y=$('#conpassword').val();
            if (x==y)
                   $('#conform').text('');
             else
             $('#conform').text('Password does not match');
      })
  </script>
  
  
  <script>
  
        $('#password').keyup(function(){
              var x=$(this).val().length;
              if(x<8){
                    $('#passwordmess').text('You mast have give 8 charecter');
              }else{
                  $('#passwordmess').text('');  
              }
        });
  </script>


@endsection
