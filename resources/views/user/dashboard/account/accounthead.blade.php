@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Add Account Head </h5>
            
        </div>
        <form method="POST" action="{{url('/accounthead-add')}}">
            {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="name">Group:<span class="star"></span></label>
                                     <select name="ah_group_name" id="category" class="form-control">
                                         <option value="">---Select Group---</option>
                                         @foreach($groupdetails as $group)
                                     <option value="{{ $group->group_name }}">{{ $group->group_name }}</option>
                                           @endforeach
                                         
                                     </select>
                                   </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Category:<span class="star"></span></label>
                                                     <select name="subcategory" id="subcategory" class="form-control">
                                                         <option value="">---Select Category---</option>
                                                    @foreach($catdetails as $category)
                                                    <optgroup label="{{ $category->cat_group_name }}">
                                                     
                                                     <option value="{{ $category->cat_name }}">{{ $category->cat_name }}({{ $category->cat_code }})</option>
                                                    </optgroup>
                                                    @endforeach
                                                         
                                                     </select>
                                    </div>
                            </div>   
                                 
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Accont  Head Code</label>
                                     <input type="text" class="form-control code" id="code" name="ac_head_code" placeholder="Accont  Head Code">
                                     <input type="hidden" name="id" class="cId">
                                     <span class="text-danger">{{$errors->has('ac_head_code')? $errors->first('ac_head_code'):''}}</span>
                                   </div>
                        </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Accont  Head Name</label>
                                     <input type="text" class="form-control code" id="code" name="ac_head_name" placeholder="Accont  Head Name">
                                     <input type="hidden" name="id" class="cId">
                                     <span class="text-danger">{{$errors->has('ac_head_name')? $errors->first('ac_head_name'):''}}</span>
                                   </div>
                                 </div>
                            
                             
                                          
                            
                            <div class="col-sm-6">
                                    <div class="form-group">
                                                     <label for="name">Account Type:<span class="star"></span></label>
                                                     <select name="acc_type_name" id="" class="form-control">
                                                         <option value="">---Select Type---</option>
                                                         <option value="Dabit">Dabit</option>
                                                         <option value="Credit">Credit</option>
                                                         
                                                     </select>
                                    </div>
                                </div> 
                                <div class="col-sm-6">     
                                    <div class="form-group">
                                        <label for="name">Transection Type:<span class="star"></span></label>
                                        <select name="acc_tr_type_name" id="" class="form-control acc_tr_type_name">
                                            <option value="">---Select Type---</option>
                                            <option value="Expense">Expense</option>
                                            <option value="Income">Income</option>
                                            <option value="Cash">Balance</option>

                                            
                                        </select>
                                    </div>
                                </div>    
                                <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Balance</label>
                                         <input type="text" class="form-control ah_balance" id="code" name="ah_balance" placeholder="Balance">
                                         <span class="text-danger">{{$errors->has('ah_balance')? $errors->first('ah_balance'):''}}</span>
                                       </div>
                            </div> 
                         
                    </div>
                           
            </div>
                        
                        <!--  <input type="hidden" value="1" name="status">-->
      
                        <div class="modal-footer">
                <button type="reset" class="btn btn-default" >Clear</button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>         
                              
            </div>

            
        </form>
    </div>
</div>
{{-- Edit Company Modal --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"> Add Account Head </h5>
                        
                    </div>
                    <form method="POST" action="{{url('/accounthead-update')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="name">Group:<span class="star"></span></label>
                                                 <select name="ah_group_name" id="editcategory" class="form-control editcategory">
                                                     <option value="">---Select Group---</option>
                                                     @foreach($groupdetails as $group)
                                                 <option value="{{ $group->group_name }}">{{ $group->group_name }}</option>
                                                       @endforeach
                                                     
                                                 </select>
                                               </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                                 <label for="name">Category:<span class="star"></span></label>
                                                                 <select name="editsubcategory" id="editsubcategory" class="form-control editsubcategory">
                                                                     <option value="">---Select Category---</option>
                                                                @foreach($catdetails as $category)
                                                                <optgroup label="{{ $category->cat_group_name }}">
                                                                 
                                                                 <option value="{{ $category->cat_name }}">{{ $category->cat_name }}({{ $category->cat_code }})</option>
                                                                </optgroup>
                                                                @endforeach
                                                                     
                                                                 </select>
                                                </div>
                                        </div>   
                                             
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Accont  Head Code</label>
                                                 <input type="text" class="form-control ac_head_code" id="code" name="ac_head_code" placeholder="Accont  Head Code">
                                                 <input type="hidden" name="id" class="cId">
                                                 <span class="text-danger">{{$errors->has('ac_head_code')? $errors->first('ac_head_code'):''}}</span>
                                               </div>
                                    </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Accont  Head Name</label>
                                                 <input type="text" class="form-control ac_head_name" id="code" name="ac_head_name" placeholder="Accont  Head Name">
                                                 <input type="hidden" name="id" class="cId">
                                                 <span class="text-danger">{{$errors->has('ac_head_name')? $errors->first('ac_head_name'):''}}</span>
                                               </div>
                                             </div>
                                        
                                         
                                                      
                                        
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                                 <label for="name">Account Type:<span class="star"></span></label>
                                                                 <select name="acc_type_name" id="" class="form-control acc_type_name">
                                                                     <option value="">---Select Type---</option>
                                                                     <option value="Dabit">Dabit</option>
                                                                     <option value="Credit">Credit</option>
                                                                     
                                                                 </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">     
                                            <div class="form-group">
                                                <label for="name">Transection Type:<span class="star"></span></label>
                                                <select name="acc_tr_type_name" id="" class="form-control acc_tr_type_name">
                                                    <option value="">---Select Type---</option>
                                                    <option value="Expense">Expense</option>
                                                    <option value="Income">Income</option>
                                                    <option value="Cash">Cash</option>
                                                    
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label for="code">Balance</label>
                                                     <input type="text" class="form-control ah_balance" id="code" name="ah_balance" placeholder="Balance">
                                                     <span class="text-danger">{{$errors->has('ah_balance')? $errors->first('ah_balance'):''}}</span>
                                                   </div>
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label for="code">Opening Date</label>
                                             <input type="date" class="form-control ah_date" id="code" name="ah_date" placeholder="">
                                             <span class="text-danger">{{$errors->has('ah_date')? $errors->first('ah_date'):''}}</span>
                                           </div>
                                        </div>            
                                </div>
                                       
                        </div>
                                    
                                    <!--  <input type="hidden" value="1" name="status">-->
                  
                                    <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>         
                                          
                        </div>

                        
                    </form>
                </div>
            </div>
      


{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Acount Heads List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcategory"
                            style="margin-right: 60px;">
                        New Account Head
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Group Name</th>
                                        <th>Category Name</th>
                                        <th>Accont Head Name</th>
                                        <th>Account Head Code</th>
                      
                                        <th>Transection Type</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                       

                                <?php $i=1 ?>
                       @foreach ($acheaddetail as $accounthead)
                           
                      
                            <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$accounthead->ah_group_name}}</td>
                            <td>{{$accounthead->ah_cat_name}}</td>
                            <td>{{$accounthead->ac_head_name}}</td>
                            <td>{{$accounthead->ac_head_code}}</td>

                            <td>{{$accounthead->tra_type}}</td>
                            <td>{{$accounthead->ah_balance}}</td>
                              
                             
                            <td>
                                   
        
                                        @if($accounthead->accounthead_status==1)
                                        <a href="{{route('accounthead_status',['id'=>$accounthead->id])}}" class="btn btn-success" title="Active">
                                                <span class="fa fa-arrow-up"></span>
            
                                        </a>
                                        @elseif($accounthead->accounthead_status==0)
                                        <a href="{{route('accounthead_status',['id'=>$accounthead->id])}}" class="btn btn-danger" title="Inactive">
                                                <span class="fa fa-arrow-down"></span>

                                            </a>
                                        @endif
                                        <button onclick='edit({{$accounthead->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                                <span class="fa fa-pencil font-14"></span>
                                            
                                        </button>   
                                <a href="{{url('/accounthead-delete/.',$accounthead->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
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
                url:"{{url('/accounthead-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.editcategory').val(response.ah_group_name);
                    $('.editsubcategory').val(response.ah_cat_name);
                    $('.ac_head_code').val(response.ac_head_code);
                    $('.ac_head_name').val(response.ac_head_name);
                    $('.acc_type_name').val(response.acc_type_name);
                    $('.acc_tr_type_name').val(response.tra_type);
                    $('.cId').val(response.id);
                    $('.ah_balance').val(response.ah_balance);
                    $('.ah_date').val(response.ah_date);
                   
                    
    
                },
                error:function(xhr,status,error){
                    console.log(error);
                    
                }
    
          });
        }
    
    
    $(document).ready(function(){
       
    
    });   
    
    </script>
<!--for add data-->
    <script>
            $(document).ready(function(){
            var $optgroups = $('#subcategory > optgroup');
            
            $("#category").on("change",function(){
                var selectedVal = this.value;
                
                $('#subcategory').html($optgroups.filter('[label="'+selectedVal+'"]'));
            });  
            });
   
   
    </script>

<!--for Edit data-->
     
    <script>
            $(document).ready(function(){
            var $optgroup = $('#editsubcategory > optgroup');
            
            $("#editcategory").on("change",function(){
                var selectVal = this.value;
                
                $('#editsubcategory').html($optgroup.filter('[label="'+selectVal+'"]'));
            });  
            });
   
   
    </script>

@endsection
