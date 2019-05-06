@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
      
      <div class="panel">
        <div class="panel-body">
          <h3 class="text-center"> <b>Edit Member Details </b> </h3><br>
        </div>
      </div>


          <div class="panel-body">
          <form class="form-horizontal" action="{{url('/update-member-details')}}" method="post"enctype="multipart/form-data" name="memberregi">
                   @csrf
                   <h4 style="margin-left: 80px;" class="text-center "> <u><b>Personal Information</b></u>  <br><br>
                               <div class="row">
                                   
                               
                                     <div class="col-sm-3">

                                        <div class="form-group">
                                          <label for="usr">Registration Number</label>
                                        <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_number"value="{{$edit_member->reg_number}}" readonly>
                                        <input type="hidden"value="{{$edit_member->id}}"  name="id">   
                                    </div>
                                   </div>
                                   <div class="col-sm-3">

                                        <div class="form-group">
                                          <label for="usr">Account Number</label>
                                          <input type="text" class="form-control input-lg m-bot15" id="usr"value="{{$edit_member->ac_number}}" name="ac_number" readonly>
                                       </div>
                                   </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                          <label for="usr">Name</label>
                                          <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_name" value="{{$edit_member->reg_name}}" required>
                                       </div>
                                   </div>
                                  
                              <div class="col-sm-3">
                                 <div class="form-group">
                                 <label for="usr">Father Name</label>
                                 <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_father_name" value="{{$edit_member->reg_father_name}}" required>
                                 </div>
                              </div>

                                    

                                    <div class="col-sm-3">
                                    <div class="form-group">
                                <label for="usr">Mother Name</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_mother_name" value="{{$edit_member->reg_mother_name}}" required>
                              </div>
                                 </div>
                                    <div class="col-sm-3">
                                        <div class="form-group  date">
                                         <label for="usr">Date Of Birth</label>
                                        
                                          <input class="form-control input-lg m-bot15" type="date" name="reg_birth_date" value="{{$edit_member->reg_birth_date}}" required>
                                       </div>
                                    </div>
                                     <div class="col-sm-3">
                                    <div class="form-group">
                                <label for="usr">Profession</label>
                               <select name="reg_profession" class="form-control input-lg m-bot15" required>
                                 <option value="Business">Business</option>
                                 <option value="Farmer">Farmer</option>
                                 <option value="Job Holder">Job Holder</option>
                                 <option value="Student">Student</option>

                               </select>
                              </div>
                              </div>
                                 
                              <div class="col-sm-3">
                                    <div class="form-group">
                                       <label for="usr">Phone Number</label>
                                       <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_phone" value="{{$edit_member->reg_phone}}" required>
                                    </div>
                              </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Present Address</label>
                                 <textarea name="reg_pre_adress"  class="form-control input-lg m-bot15" rows="5" required>{{$edit_member->reg_pre_adress}}</textarea>
                              </div>
                                 </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Permanent Address</label>
                                 <textarea name="reg_per_adress"  class="form-control input-lg m-bot15" rows="5" required>{{$edit_member->reg_per_adress}}</textarea>
                              </div>
                                 </div> 
                               </div>
                          
                               <h4 style="margin-left: 80px;" class="text-center "> <u><b>Emergency Contact 
                              </b></u>  <br><br>
                                 <div class="row">
                                     
                                 
                                       <div class="col-sm-3">
                                            
                                    
                                          <div class="form-group">
                                            <label for="usr">Name</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_name"value="{{$edit_member->em_name}}">
                                         </div>
                                     </div>
                                     <div class="col-sm-3">
                                     
                                          <div class="form-group">
                                            <label for="usr">Relation</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_relation"value="{{$edit_member->em_relation}}" >
                                         </div>
                                     </div>
                                      <div class="col-sm-3">
                                          <div class="form-group">
                                            <label for="usr">Phone Number</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_phone" value="{{$edit_member->em_phone}}" >
                                         </div>
                                     </div>
                                    
                                <div class="col-sm-3">
                                   <div class="form-group">
                                   <label for="usr">Adress</label>
                                   <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_adress" value="{{$edit_member->em_adress}}">
                                   </div>
                                </div>
  
                                   
                               
                                   </div>
  
                                   <h4 style="margin-left: 80px;" class="text-center "> <u><b>Nominee Information 
                                 </b></u>  <br><br>
                                    <div class="row">
                                        
                                    
                                          <div class="col-sm-3">
                                               
                                       
                                             <div class="form-group">
                                               <label for="usr">Nominee Name</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_name"value="{{$edit_member->no_name}}" >
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                        
                                             <div class="form-group">
                                               <label for="usr">Relation</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr"value="{{$edit_member->no_relation}}" name="no_relation" >
                                            </div>
                                        </div>
                                         <div class="col-sm-3">
                                             <div class="form-group">
                                               <label for="usr">Phone Number</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_phone" value="{{$edit_member->no_phone}}" >
                                            </div>
                                        </div>
                                       
                                   <div class="col-sm-3">
                                      <div class="form-group">
                                      <label for="usr">Adress</label>
                                      <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_adress" value="{{$edit_member->no_adress}}" >
                                      </div>
                                   </div>
     
                                      
                                  
                                      </div>
{{-- 
                                      <h4 style="margin-left: 80px;" class="text-center "> <u><b>Requirement File
                                    </b></u>  <br><br>
                                       <div class="row">
                                           
                                       
                                             <div class="col-sm-6">
                                                  
                                          
                                                <div class="form-group">
                                                  <label for="usr">Member Photo</label>
                                                  <input type="file" class="form-control input-lg m-bot15" id="usr" name="user_photo" >
                                                  <img src="{{ asset($edit_member->user_photo) }}" alt="" height="150" width="150">
                                               
                                                </div>
                                           </div>
                                           <div class="col-sm-6">
                                           
                                                <div class="form-group">
                                                  <label for="usr">Member NID</label>
                                                  <input type="file" class="form-control input-lg m-bot15" id="usr" name="user_nid" >
                                                  <img src="{{ asset($edit_member->user_nid) }}" alt="" height="150" width="150">
                                               </div>
                                           </div>
                                            
                                         
                                     
                                         </div> --}}

                                         <div class="form-group">
                                          <div class="col-sm-12">
                                              <button type="submit" class="btn btn-primary btn btn-block text-center">Update</button>
                                          </div>
                                      </div>
                                       </form>
                                 </div>

                               
          <!-- .row end -->
      
                  
                             
                          </div>
</div>
<script>
      document.forms['memberregi'].elements['reg_profession'].value={{ $edit_member->reg_profession }}
    
</script>           
@endsection