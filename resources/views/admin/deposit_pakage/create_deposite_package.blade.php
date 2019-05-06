@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{-- Add Company Modal --}}



<div class="modal fade bd-example-modal-lg"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Deposite Pakage</h5>
            
        </div>
        <form method="POST" action="{{ url('/deposit-package') }}">
            {{csrf_field()}}
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-4 form-group">
                        <label>Deposit Pakage Name</label>
                        <input class="form-control" type="text" id="d_pakage_name" name="d_pakage_name" placeholder="">
                      </div>
                           
                    
                        <div class="col-sm-4 form-group">
                            <label>Deposit Amount</label>
                            <input class="form-control" type="text" id="d_amount" name="d_amount" placeholder="">
                        </div>


                        <div class="col-sm-4 form-group">
                            <label>Deposit Interest</label>
                            <input class="form-control" type="text" id="d_Interest" name="d_Interest" placeholder="">
                        </div>
                       
                       <div class="col-sm-4 form-group">
                            <label>Total Amount</label>
                            <input class="form-control" type="text" id="d_total_amount" name="d_total_amount" placeholder="">
                        </div>
                           
                        <div class="col-sm-4 form-group">
                            <label>Number Of Installment</label>
                            <input class="form-control" type="text" id="d_number_install" name="d_number_install" placeholder="">
                        </div>
                        <div class="col-sm-4 form-group">
                          <label>Per Installment Amount</label>
                          <input class="form-control" type="text" id="d_per_ins_amount" name="d_per_ins_amount" placeholder="">
                        </div>
                              <div class="col-sm-4 form-group">
                              <label>Installment Type</label>
                              <select class="form-control" name="d_ins_type" id="d_ins_type">
                                <option value="">Select One</option>
                                <option value="Day - 1 Day">Day - 1 Day</option>
                                <option value="Weekly - 7 Day">Weekly - 7 Day</option>
                                <option value="Bi-monthly - 15 Day">Bi-monthly - 15 Day</option>
                                <option value="Monthly - 30 Day">Monthly - 30 Day</option>
                                <option value="Test - 4 Day">Test - 4 Day</option>
                                <option value="NIlanjona - 30 Day">NIlanjona - 30 Day</option>
                             
                                 
                                  
                              </select>
                          </div>
                      
                          <div class="col-sm-4 form-group">
                              <label>Fine Per Installmetn</label>
                              <input class="form-control" type="text" id="d_fine_p_ins" name="d_fine_p_ins" placeholder="">
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
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Deposit Pakage</h5>
              
          </div>
          <form method="POST" action="{{ url('/update-deposit-package') }}">
              {{csrf_field()}}
              <div class="modal-body">
  
                      <div class="row">
                        <div class="col-sm-4 form-group">
                          <label>Deposit Pakage Name</label>
                          <input class="form-control d_pakage_name" type="text" id=" edit_d_pakage_name" name="d_pakage_name" placeholder="">
                        </div>
                            
                      
                          <div class="col-sm-4 form-group">
                              <label>Deposit Amount</label>
                              <input class="form-control d_amount" type="text" id=" edit_d_amount" name=" d_amount" placeholder="">
                              <input type="hidden" name="id" class="cId">

                            </div>
  
  
                          <div class="col-sm-4 form-group">
                              <label>Deposit Interest</label>
                              <input class="form-control d_Interest" type="text" id=" edit_d_Interest" name=" d_Interest" placeholder="">
                          </div>
                         
                         <div class="col-sm-4 form-group">
                              <label>Total Amount</label>
                              <input class="form-control d_total_amount" type="text" id=" edit_d_total_amount" name=" d_total_amount" placeholder="">
                          </div>
                             
                          <div class="col-sm-4 form-group">
                              <label>Number Of Installment</label>
                              <input class="form-control d_number_install" type="text" id=" edit_d_number_install" name=" d_number_install" placeholder="">
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Per Installment Amount</label>
                            <input class="form-control d_per_ins_amount" type="text" id=" edit_d_per_ins_amount" name=" d_per_ins_amount" placeholder="">
                          </div>
                                <div class="col-sm-4 form-group">
                                <label>Installment Type</label>
                                <select class="form-control d_ins_type" name=" d_ins_type" id=" edit_d_ins_type">
                                  <option value="">Select One</option>
                                  <option value="Day - 1 Day">Day - 1 Day</option>
                                  <option value="Weekly - 7 Day">Weekly - 7 Day</option>
                                  <option value="Bi-monthly - 15 Day">Bi-monthly - 15 Day</option>
                                  <option value="Monthly - 30 Day">Monthly - 30 Day</option>
                                  <option value="Test - 4 Day">Test - 4 Day</option>
                                 
                                   
                                    
                                </select>
                            </div>
                        
                            <div class="col-sm-4 form-group">
                                <label>Fine Per Installmetn</label>
                                <input class="form-control d_fine_p_ins" type="text" id=" d_fine_p_ins" name=" d_fine_p_ins" placeholder="">
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
                    <div class="ibox-title"> Deposit Pakage List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                       Add  Deposit Pakage 
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Pakage Name </th>
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
                                <th>{{$i++}}</th>
                                <th>{{$item->d_pakage_name}}</th>
                                <td>{{$item->d_currency}}</td>
                                <td>{{$item->d_ins_type}}</td>
                                <td>{{$item->d_date}}</td>
                                
                                
                       
                            
        
        
                                <td>
                                    @if($item->active_status==1)
                                    <a href="{{route('deposit_status',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                                        <span class="fa fa-arrow-up"></span>
                                    </a>
                                    @elseif($item->active_status==0)
                                    <a href="{{route('deposit_status',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                            <span class="fa fa-arrow-down"></span>
                                        </a>
                                    @endif
                                        {{-- <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>    --}}
                                        <button href="" data-target="#edit"
                                        class="btn btn-success  edit" value="{{$item->id}}"
                                        data-toggle="modal">
                                    <span class="fa fa-pencil font-14"></span>
                                        </button>
                               
                                    <a href="{{  url('delete-deposit-package/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
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
{{-- ======== Deposit Calculation  =========== --}}
 {{-- Tihs for Add --}}
<script>
    function d_total_amount() {
        
        var d_amount = $("#d_amount").val();
        var d_Interest = $("#d_Interest").val();
        var total = (d_amount * d_Interest);
        var dtotal = (total / 100);
        var tatala = +dtotal + +d_amount;
        $('#d_total_amount').val(tatala);
        
    }

    $("#d_amount").on('keyup', d_total_amount);
    $("#d_Interest").on('keyup', d_total_amount);

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

 {{-- Tihs for Edit --}}
 {{-- <script>
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
</script> --}}
{{-- ========Deposit Calculation============ --}}
{{-- 
<script>
        function edit(id) {
                var x =id;
 
                
                $.ajax({
                    type:'GET',
                    url:"{{url('/edit-deposit-package')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.d_pakage_name').val(response.d_pakage_name);
                        $('.d_currency').val(response.d_currency);
                        $('.cId').val(response.id);
                        $('.d_amount').val(response.d_amount);
                        $('.d_Interest').val(response.d_Interest);
                        $('.d_total_amount').val(response.d_total_amount);
                        $('.d_number_install').val(response.d_number_install);
                        $('.d_per_ins_amount').val(response.d_per_ins_amount);
                        $('.d_ins_type').val(response.d_ins_type);
                        $('.d_fine_p_ins').val(response.d_fine_p_ins);
                       
                       
        
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
              });
            }
    //     function edit_total_amount() {
        
    //     var edit_d_amount = $("#edit_d_amount").val();
    //     var edit_d_Interest = $("#edit_d_Interest").val();
    //     var edit_total = (edit_d_amount * edit_d_Interest);
    //     var edit_dtotal = (edit_total / 100);
    //     var edit_tatala = +edit_dtotal + +edit_d_amount;
    //     $('#edit_d_total_amount').val(edit_tatala);
    //     console.log(edit_d_amount);
    // }

    // $("#edit_d_amount").on('keyup', edit_total_amount);
    // $("#edit_d_Interest").on('keyup', edit_total_amount);
        
        $(document).ready(function(){
           
        
        });    
        </script> --}}

{{--  ========================================================= --}}
<script>

$('.edit').click(function () {
                var id = $(this).val();

                function d_total_amount() {
                    var a = $(".d_amount").val();
                    var b = $(".d_Interest").val();
                    var c = (a * b);
                    var d = (c / 100);
                    var total = +d + +a;
                    $('.d_total_amount').val(total);
                    console.log('Diposit Amount '+a);
                    console.log('Diposit Interest '+b);
                    console.log('Total Amount '+total);
                    // console.log(error);

                }

                $(".d_amount").on('keyup', d_total_amount);
                $(".d_Interest").on('keyup', d_total_amount);

                function per_install_amount() {
        
                    var d_number_install = $(".d_number_install").val();
                    var d_total_amount = $(".d_total_amount").val();
                    var average = (d_total_amount / d_number_install);
                    $('.d_per_ins_amount').val(average);

                    console.log('Number of Installment '+d_number_install);
                    console.log('Total amount '+d_total_amount);
                    console.log('Average Install Amount '+average);
              //  console.log(error);
         
    }
                    
    $(".d_number_install").on('keyup', per_install_amount);
    $(".d_per_ins_amount").on('keyup', per_install_amount);
   


                $.ajax({
                    url: '{{route('edit_deposit')}}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        $('.d_pakage_name').val(data[0]['d_pakage_name']);
                        $('.d_currency').val(data[0]['d_currency']);
                        $('.cId').val(data[0]['id']);
                        $('.d_amount').val(data[0]['d_amount']);
                        $('.d_Interest').val(data[0]['d_Interest']);
                        $('.d_total_amount').val(data[0]['d_total_amount']);
                        $('.d_number_install').val(data[0]['d_number_install']);
                        $('.d_per_ins_amount').val(data[0]['d_per_ins_amount']);
                        $('.d_ins_type').val(data[0]['d_ins_type']);
                        $('.d_fine_p_ins').val(data[0]['d_fine_p_ins']);
                     
                    },
                    error:function(xhr,status,error){
                        console.log(error);
                        
                    }
        
                });

            });
</script>


     
@endsection
