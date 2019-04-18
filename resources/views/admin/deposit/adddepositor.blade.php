@extends('sumiti.base')
@section('content')

            <section class="panel">
                          <div class="panel-body">
                           <h3> Create New Depositor</h3>
                           <br>
                              <form class="form-horizontal " method="get">
                                    @csrf
                                     <div class="row">
                                    <h4 style="margin-left: 80px;" class="text-center"><b>Personal Information</b><br>
                                    <br>
                              <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Reg Number</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="frist_name" placeholder="Frist Name"
                                required>
                              </div>
                                 </div>

                                  <div class="col-sm-6">
                                    <div class="form-group">
                                <label for="usr">Account Number</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="frist_name" placeholder="Frist Name"
                                required>
                              </div>
                                 </div>

                                   <div class="col-sm-4">
                                    <div class="form-group">
                                <label for="usr">Deposit Number</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="frist_name" placeholder="Frist Name"
                                required>
                              </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                <label for="usr">Date</label>
                                <input type="date" class="form-control input-lg m-bot15" id="usr" name="phone_number" placeholder=" Date" required>
                              </div>
                                 </div>
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                      <label for="usr"> Name</label>
                                      
                                          <input class="form-control input-lg m-bot15" type="text" name="last_name" placeholder=" Name" required>
                                     

                                             </div>
                                      </div>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                <label for="usr">Father Name</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="father_name" placeholder="Father Name" required>
                              </div>
                                 </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                <label for="usr">Phone Number</label>
                                <input type="text" class="form-control input-lg m-bot15" id="usr" name="phone_number" placeholder="Phone Number" required>
                              </div>
                                 </div>

                                 <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="usr">Closing Date</label>
                                      <input type="date" class="form-control input-lg m-bot15" id="usr" name="phone_number" placeholder=" Date" required>
                                    </div>
                                 </div>

              
                                 <br> <br>

                                
                                
                                    <h4 style="margin-left: 80px;"><b>Select Deposit Package</b><br>
                                   <b>........................................</b><br><br><br>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                           <label for="inputSuccess">Select Loan Package</label>
                                           
                                          <select class="form-control input-lg m-bot15" name="loanpackage_type" required>
                                              <option value="">Select One</option>
                                              <option value="1">Loan1 - 50000 USD - 10000 USD - 10 Installment</option>
                                              <option value="2">Loan2 - 75000 USD - 10000 USD - 12 Installment</option>
                                              <option value="3">Loan3 - 80000 USD - 12000 USD - 15 Installment</option>
                                              <option value="7">Loan4 - 10000 BDT - 13000 BDT - 15 Installment</option>
                                              <option value="4">Easy Pack - 250000 BDT - 800 BDT - 34 Installment</option>
                                              <option value="5">Leton - 20000 BDT - 200 BDT - 114 Installment</option>
                                              <option value="6">OT - 100 BDT - -5 BDT - -5 Installment</option>

                                          </select>
                                          </div>
                                       
                                      </div>
                                          <div class="col-sm-4">
                                            <div class="form-group">
                                            <label for="inputSuccess">Select Staff Under Loan</label>
                                           
                                          <select class="form-control input-lg m-bot15" name="staid" required>
                                              <option value="">Select One</option>
                                               <?php
                                                foreach ($staffname as $key) {
                                             
                                               ?>
                                              <option value="{{$key->staid}}">{{$key->name." - ". $key->username}}</option>
                                              <?php } ?>

                                             
                                          </select>
                                          </div>
                                     </div>
                                  <div class="form-group">
                                     <div class="col-sm-4">
                                             <label  for="inputSuccess">Status</label>
                                                <select class="form-control input-lg m-bot15" name="loanpackage_type" required>
                                              <option value="">Select One</option>
                                              <option value="1">Active</option>
                                              <option value="2">Inactive</option>

                                          </select>
                                      </div>
                                  </div>
                                   

                           
                                   

                                   <div class="form-group">
                                  <div class="col-sm-12">
                                      <button type="submit" class="btn btn-primary btn btn-block">Confirm & Next Step</button>
                                     
                                  </div>
                              </div>

                                      
                                    </div> <!-- .row end -->



                                
                                          
                                     
                               
                              </form>
                          </div>
                      </section>
@endsection