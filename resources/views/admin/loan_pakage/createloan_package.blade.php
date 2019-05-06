@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{-- Add Company Modal --}}



<div class="modal fade bd-example-modal-lg"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Loan Pakage</h5>
            
        </div>
        <form method="POST" action="{{ url('/loan-pakage') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Loan Pakage Name</label>
                        <input class="form-control" type="text" id="l_pakage_name" name="l_pakage_name" placeholder="">
                      </div>
                        
                    
                        <div class="col-sm-4 form-group">
                            <label>Loan Amount</label>
                            <input class="form-control" type="text" id="l_amount" name="l_amount" placeholder="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Loan Interest</label>
                            <input class="form-control" type="text" id="l_Interest" name="l_Interest" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Total Amount</label>
                            <input class="form-control" type="text" id="l_total_amount" name="l_total_amount" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Number Of Installment</label>
                            <input class="form-control" type="text" id="l_number_install" name="l_number_install" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Per Installment Amount</label>
                          <input class="form-control" type="text" id="l_per_ins_amount" name="l_per_ins_amount" placeholder="">
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Installment Type</label>
                              <select class="form-control" name="l_ins_type" id="l_ins_type">
                                <option value="">Select One</option>
                                <option value="Day - 1 Day">Day - 1 Day</option>
                                <option value="Weekly - 7 Day">Weekly - 7 Day</option>
                                <option value="Bi-monthly - 15 Day">Bi-monthly - 15 Day</option>
                                <option value="Monthly - 30 Day">Monthly - 30 Day</option>
                                <option value="Test - 4 Day">Test - 4 Day</option>
                                <option value="NIlanjona - 30 Day">NIlanjona - 30 Day</option>
                                <option value="Nafiza - 30 Day">Nafiza - 30 Day</option>
                                <option value="Zarin - 90 Day">Zarin - 90 Day</option>
                                <option value="Abid Rahman - 30 Day">Abid Rahman - 30 Day</option>
                                <option value="Farhan - 30 Day">Farhan - 30 Day</option>
                                <option value="Horipod  - 40 Day">Horipod  - 40 Day</option>
                                <option value="tarek - 30 Day">tarek - 30 Day</option>
                                 
                                  
                              </select>
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Fine Per Installmetn</label>
                              <input class="form-control" type="text" id="l_fine_p_ins" name="l_fine_p_ins" placeholder="">
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
<div class="modal fade bd-example-modal-lg"  id="edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Loan Pakage</h5>
              
          </div>
          <form method="POST" action="{{ url('/update-loan-pakage') }}">
              {{csrf_field()}}
              <div class="modal-body">
  
                      <div class="row">
                        <div class="col-sm-4 form-group">
                          <label>Loan Pakage Name</label>
                          <input class="form-control l_pakage_name" type="text" id=" l_pakage_name" name=" l_pakage_name" placeholder="">
                         
                        </div>
                              
                      
                          <div class="col-sm-4 form-group">
                              <label>Loan Amount</label>
                              <input class="form-control l_amount" type="text" id=" l_amount" name=" l_amount" placeholder="">
                              <input type="hidden" name="id" class="cId">
                          </div>
  
  
                          <div class="col-sm-4 form-group">
                              <label>Loan Interest</label>
                              <input class="form-control l_Interest" type="text" id=" l_Interest" name=" l_Interest" placeholder="">
                          </div>
                         
                         <div class="col-sm-4 form-group">
                              <label>Total Amount</label>
                              <input class="form-control l_total_amount" type="text" id=" l_total_amount" name=" l_total_amount" placeholder="">
                          </div>
                             
                          <div class="col-sm-4 form-group">
                              <label>Number Of Installment</label>
                              <input class="form-control l_number_install" type="text" id=" l_number_install" name=" l_number_install" placeholder="">
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Per Installment Amount</label>
                            <input class="form-control l_per_ins_amount" type="text" id=" l_per_ins_amount" name=" l_per_ins_amount" placeholder="">
                          </div>
                                <div class="col-sm-4 form-group">
                                <label>Installment Type</label>
                                <select class="form-control l_ins_type" name=" l_ins_type" id=" l_ins_type">
                                  <option value="">Select One</option>
                                  <option value="Day - 1 Day">Day - 1 Day</option>
                                  <option value="Weekly - 7 Day">Weekly - 7 Day</option>
                                  <option value="Bi-monthly - 15 Day">Bi-monthly - 15 Day</option>
                                  <option value="Monthly - 30 Day">Monthly - 30 Day</option>
                                  <option value="Test - 4 Day">Test - 4 Day</option>
                                  <option value="NIlanjona - 30 Day">NIlanjona - 30 Day</option>
                                  <option value="Nafiza - 30 Day">Nafiza - 30 Day</option>
                                  <option value="Zarin - 90 Day">Zarin - 90 Day</option>
                                  <option value="Abid Rahman - 30 Day">Abid Rahman - 30 Day</option>
                                  <option value="Farhan - 30 Day">Farhan - 30 Day</option>
                                  <option value="Horipod  - 40 Day">Horipod  - 40 Day</option>
                                  <option value="tarek - 30 Day">tarek - 30 Day</option>
                                   
                                    
                                </select>
                            </div>
                        
                            <div class="col-sm-4 form-group">
                                <label>Fine Per Installmetn</label>
                                <input class="form-control l_fine_p_ins" type="text" id=" l_fine_p_ins" name=" l_fine_p_ins" placeholder="">
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
  
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Loan Pakage List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        Add New Loan Pakage
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Pakage Name</th>
                                        <th>Currency</th>
                                        <th>Install Type</th>
                                        <th>Date</th>
                                    
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                                <?php $i=1 ?>
                            @foreach($datashow as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->l_pakage_name}}</td>
                                <td>{{$item->l_currency}}</td>
                                <td>{{$item->l_ins_type}}</td>
                                <td>{{$item->l_date}}</td>
                     
                            
                                <td>
                                  
                                    {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" >
                                        <span class="fa fa-pencil font-14"></span>
                                    </button>    --}}
                                    @if($item->active_status==1)
                                    <a href="{{route('loan_status',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->active_status==0)
                                    <a href="{{route('loan_status',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                    <button href="" data-target="#edit"
                                        class="btn btn-success  edit" value="{{$item->id}}"
                                        data-toggle="modal">
                                    <span class="fa fa-pencil font-14"></span>
                                        </button>
        
                                    <a href="{{  url('delete-loan-pakage/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
                                    </a>
        
                                </td>
                            </tr>
        
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>

{{-- ======== Loan Calculation  =========== --}}
 {{-- Tihs for Add --}}
 <script>
    function l_total_amount() {
        
        var l_amount = $("#l_amount").val();
        var l_Interest = $("#l_Interest").val();
        var total = (l_amount * l_Interest);
        var ltotal = (total / 100);
        var tatala = +ltotal + +l_amount;
        $('#l_total_amount').val(tatala);
        
    }

    $("#l_amount").on('keyup', l_total_amount);
    $("#l_Interest").on('keyup', l_total_amount);

</script>

<script>
    function per_install_amount() {
        
        var l_number_install = $("#l_number_install").val();
        var l_total_amount = $("#l_total_amount").val();
        var average = (l_total_amount / l_number_install);
        $('#l_per_ins_amount').val(average);
         
    }

    $("#l_number_install").on('keyup', per_install_amount);
    $("#l_per_ins_amount").on('keyup', per_install_amount);
</script>

 {{-- Tihs for Edit --}}
 <script>
    function edit_total_amount() {
        
        var edit_d_amount = $("#edit_d_amount").val();
        var edit_d_Interest = $("#edit_d_Interest").val();
        var edit_total = (edit_d_amount * edit_d_Interest);
        var edit_dtotal = (edit_total / 100);
        var edit_tatala = +edit_dtotal + +edit_d_amount;
        $('#edit_d_total_amount').val(edit_tatala);
        
    }

    $("#edit_d_amount").on('keyup', edit_total_amount);
    $("#edit_d_Interest").on('keyup', edit_total_amount);

</script>

<script>
    function per_install_amount() {
        
        var d_number_install = $("#d_number_install").val();
        var d_total_amount = $("#d_total_amount").val();
        var average = (d_total_amount / d_number_install);
        $('#d_per_ins_amount').val(average);
         
    }

    $("#d_number_install").on('keyup', per_install_amount);
    $("#d_per_ins_amount").on('keyup', per_install_amount);
</script>
{{-- ========Deposit Calculation============ --}}

{{-- 
<script>
        function edit(id) {
                var x =id;
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/edit-loan-pakage')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.l_pakage_name').val(response.l_pakage_name);
                        $('.l_currency').val(response.l_currency);
                        $('.cId').val(response.id);
                        $('.l_amount').val(response.l_amount);
                        $('.l_Interest').val(response.l_Interest);
                        $('.l_total_amount').val(response.l_total_amount);
                        $('.l_number_install').val(response.l_number_install);
                        $('.l_per_ins_amount').val(response.l_per_ins_amount);
                        $('.l_ins_type').val(response.l_ins_type);
                        $('.l_fine_p_ins').val(response.l_fine_p_ins);
            
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
        
        
        $(document).ready(function(){
           
        
        });   
             
        </script> --}}
        <script>
        
$('.edit').click(function () {
                var id = $(this).val();

                function l_total_amount() {
                    var a = $(".l_amount").val();
                    var b = $(".l_Interest").val();
                    var c = (a * b);
                    var d = (c / 100);
                    var total = +d + +a;
                    $('.l_total_amount').val(total);
                    console.log('Loan Amount '+a);
                    console.log('Loan Interest '+b);
                    console.log('Total Amount '+total);
                    // console.log(error);

                }

                $(".l_amount").on('keyup', l_total_amount);
                $(".l_Interest").on('keyup', l_total_amount);

                function per_install_amount() {
        
                    var l_number_install = $(".l_number_install").val();
                    var l_total_amount = $(".l_total_amount").val();
                    var average = (l_total_amount / l_number_install);
                    $('.l_per_ins_amount').val(average);

                    console.log('Number of Installment '+l_number_install);
                    console.log('Total amount '+l_total_amount);
                    console.log('Average Install Amount '+average);
              //  console.log(error);
         
    }
                    
    $(".l_number_install").on('keyup', per_install_amount);
    $(".l_per_ins_amount").on('keyup', per_install_amount);
   


                $.ajax({
                    url: '{{route('edit_loan')}}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        $('.l_pakage_name').val(data[0]['l_pakage_name']);
                        $('.l_currency').val(data[0]['l_currency']);
                        $('.cId').val(data[0]['id']);
                        $('.l_amount').val(data[0]['l_amount']);
                        $('.l_Interest').val(data[0]['l_Interest']);
                        $('.l_total_amount').val(data[0]['l_total_amount']);
                        $('.l_number_install').val(data[0]['l_number_install']);
                        $('.l_per_ins_amount').val(data[0]['l_per_ins_amount']);
                        $('.l_ins_type').val(data[0]['l_ins_type']);
                        $('.l_fine_p_ins').val(data[0]['l_fine_p_ins']);
                     
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
                });

            });
        </script>



@endsection
