@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
      
      <div class="panel">
        <div class="panel-body">
          <h3 class="text-center"> <b>New Member Registration</b> </h3>
        </div>
      </div>


          <div class="panel-body">
          <form class="form-horizontal" action="{{url('/create-member')}}" method="post"enctype="multipart/form-data">
                   @csrf
                   <h4 style="margin-left: 80px;" class="text-center "> <u><b>Personal Information</b></u>  <br><br>
                               <div class="row">
                                   
                               
                                     <div class="col-sm-3">
                                          <?php
                                  
                                          $date=date('dmY');
      
                                          ?>
                                        <div class="form-group">
                                          <label for="usr">Registration Number</label>
                                          <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_number"value="RN{{$date.$lastid++}}" readonly>
                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <?php
                                  
                                  $date=date('dmY');
                                
   
                                       ?>
                                        <div class="form-group">
                                          <label for="usr">Account Number</label>
                                          <input type="text" class="form-control input-lg m-bot15" id="usr"value="AC{{$date.$lastid++}}" name="ac_number" readonly>
                                       </div>
                                   </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                          <label for="usr">Name</label>
                                          <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_name" placeholder="Frist Name" required>
                                       </div>
                                   </div>
                                  
                              <div class="col-sm-3">
                                 <div class="form-group">
                                 <label for="usr">Father Name</label>
                                 <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_father_name" placeholder="Father Name" required>
                                 </div>
                              </div>

                                    

                                    <div class="col-sm-3">
                                    <div class="form-group">
                                <label for="usr">Mother Name</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_mother_name" placeholder="Mother Name" required>
                              </div>
                                 </div>
                                    <div class="col-sm-3">
                                        <div class="form-group  date">
                                         <label for="usr">Date Of Birth</label>
                                        
                                          <input class="form-control input-lg m-bot15" type="date" name="reg_birth_date" placeholder="Date Of Birth" required>
                                       </div>
                                    </div>
                                     <div class="col-sm-3">
                                    <div class="form-group">
                                <label for="usr">Profession</label>
                               <select name="reg_profession" class="form-control input-lg m-bot15" required>
                                 <option value="1">Business</option>
                                 <option value="2">Farmer</option>
                                 <option value="3">Job Holder</option>
                                 <option value="4">Student</option>

                               </select>
                              </div>
                              </div>
                                 
                              <div class="col-sm-3">
                                    <div class="form-group">
                                       <label for="usr">Phone Number</label>
                                       <input type="text" class="form-control input-lg m-bot15" id="usr" name="reg_phone" placeholder="Phone Number" required>
                                    </div>
                              </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Present Address</label>
                                 <textarea name="reg_pre_adress"  class="form-control input-lg m-bot15" rows="5" required></textarea>
                              </div>
                                 </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Permanent Address</label>
                                 <textarea name="reg_per_adress"  class="form-control input-lg m-bot15" rows="5" required></textarea>
                              </div>
                                 </div> 
                               </div>
                          
                               <h4 style="margin-left: 80px;" class="text-center "> <u><b>Emergency Contact 
                              </b></u>  <br><br>
                                 <div class="row">
                                     
                                 
                                       <div class="col-sm-6">
                                            
                                    
                                          <div class="form-group">
                                            <label for="usr">Name</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_name"value="" placeholder="Name">
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                     
                                          <div class="form-group">
                                            <label for="usr">Relation</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr"value="" name="em_relation"placeholder="Relation" >
                                         </div>
                                     </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                            <label for="usr">Phone Number</label>
                                            <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_phone" placeholder="Phone Number" >
                                         </div>
                                     </div>
                                    
                                <div class="col-sm-6">
                                   <div class="form-group">
                                   <label for="usr">Adress</label>
                                   <input type="text" class="form-control input-lg m-bot15" id="usr" name="em_adress" placeholder="Adress" >
                                   </div>
                                </div>
  
                                   
                               
                                   </div>
  
                                   <h4 style="margin-left: 80px;" class="text-center "> <u><b>Nominee Information 
                                 </b></u>  <br><br>
                                    <div class="row">
                                        
                                    
                                          <div class="col-sm-6">
                                               
                                       
                                             <div class="form-group">
                                               <label for="usr">Nominee Name</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_name"value="" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        
                                             <div class="form-group">
                                               <label for="usr">Relation</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr"value="" name="no_relation"placeholder="Relation" >
                                            </div>
                                        </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                               <label for="usr">Phone Number</label>
                                               <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_phone" placeholder="Phone Number" >
                                            </div>
                                        </div>
                                       
                                   <div class="col-sm-6">
                                      <div class="form-group">
                                      <label for="usr">Adress</label>
                                      <input type="text" class="form-control input-lg m-bot15" id="usr" name="no_adress" placeholder="Adress" >
                                      </div>
                                   </div>
     
                                      
                                  
                                      </div>

                                      <h4 style="margin-left: 80px;" class="text-center "> <u><b>Requirement File
                                    </b></u>  <br><br>
                                       <div class="row">
                                           
                                       
                                             <div class="col-sm-6">
                                                  
                                          
                                                <div class="form-group">
                                                  <label for="usr">Member Photo</label>
                                                  <input type="file" class="form-control input-lg m-bot15" id="usr" name="user_photo"value="" placeholder="Name">
                                               </div>
                                           </div>
                                           <div class="col-sm-6">
                                           
                                                <div class="form-group">
                                                  <label for="usr">Member NID</label>
                                                  <input type="file" class="form-control input-lg m-bot15" id="usr"value="" name="user_nid"placeholder="Relation" >
                                               </div>
                                           </div>
                                            
                                         
                                     
                                         </div>
                                         <div class="form-group">
                                          <div class="col-sm-12">
                                              <button type="submit" class="btn btn-primary btn btn-block text-center">Confirm & Next Step</button>
                                          </div>
                                      </div>
                                       </form>
                                 </div>

                               
          <!-- .row end -->

                  
                             
                          </div>
</div>
                    
@endsection