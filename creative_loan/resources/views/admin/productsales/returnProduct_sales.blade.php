@extends('admin.master')

@section('content')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<div class="contianer">
<div style="padding: 10px; height: 100%;" class="card">
  <h4 style="text-align: center;"><u>Sales Return</u></h4>
  <div class="card-body">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-md-6">
                      <div style="padding: 10px; height: 100%;" class="card">
                          <form action="{{ route('productsaleReturn') }}" method="get">
                              <div class="row">
                                  <div class="col-md-5">
                                      <select class="selectpicker form-control cName" data-live-search="true"
                                              data-style="bg-warning"
                                              name="returnCustomerName">
                                          <option value="null">Select Customer Name</option>
                                          <option value="Cash">Cash</option>
                                          @foreach($customers as $customer)
                                              <option value="{{ $customer->customer_name }}">{{ $customer->customer_name }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                                  <div class="col-md-5">
                                      <select class="form-control cInvoice"
                                              name="returnInvoiceNumber"
                                              data-style="btn-success">
                                          <option value="{{$invoice}}">{{$invoice}}</option>
                                      </select>
                                  </div>
                                  <div class="col-md-2">
                                      <input type="submit" class="form-control btn btn-success load"
                                             value="load">
                                  </div>
                              </div>
                          </form>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-4">
                                      <label>Sub Total</label>
                                      <input type="text"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_subTotal}}@endforeach"
                                             class="form-control  text-center sTotal"
                                             name="" readonly/>
                                  </div>
                                  <div class="col-md-4">
                                      <label>Total Payable</label>
                                      <input type="text"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_totalPayable}}@endforeach"
                                             class="form-control  text-center tPayable"
                                             name="" readonly/>
                                  </div>
                                  <div class="col-md-4">
                                      <label>Paid Amount</label>
                                      <input type="text"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_paidAmount}}@endforeach"
                                             class="form-control  text-center pAmount"
                                             name="" readonly/>
                                  </div>
                                  <div class="col-md-4">
                                      <label>ReturnAmount</label>
                                      <input type="text"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_returnAmount}}@endforeach"
                                             class="form-control  text-center rAmount"
                                             name="" readonly/>
                                  </div>
                                  <div class="col-md-4">
                                      <label>Due Amount</label>
                                      <input type="text"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_dueAmount}}@endforeach"
                                             class="form-control text-center dAmount"
                                             name="" readonly/>
                                  </div>
                                  <div class="col-md-4">
                                      <label>Discount</label>
                                      <input type="text"
                                             class="form-control disCount text-center"
                                             value="@foreach($invoiceInfos as $invoiceInfo){{$invoiceInfo->saleInvoice_discountAmount}}@endforeach"
                                             readonly/>
                                  </div>
                              </div>
                              <hr>
                              <div class="row">
                                  <div class="col-md-12">
                                      <table class="table table-bordered getInvoice">
                                          <thead>
                                          <tr>
                                              <th scope="col">SL.</th>
                                              <th scope="col">Stock ID</th>
                                              <th scope="col">Description</th>
                                              <th scope="col">Quantity</th>
                                              <th scope="col">Price</th>
                                              <th scope="col">Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <?php $i = 1 ?>
                                          @foreach($invoiceItems as $invoiceItem)
                                              <tr style="text-align: center;" class="bg-grey-50">
                                                  <td>{{ $i++ }}</td>
                                                  <td>{{$invoiceItem->report_stock_id}}</td>
                                                  <td>{{$invoiceItem->saleItem_description}}</td>
                                                  <td>{{$invoiceItem->saleItem_quantity}}</td>
                                                  <td>{{$invoiceItem->saleItem_unite_price}}</td>
                                                  <td>
                                                      <button data-toggle="modal" data-target="#exampleModal"
                                                              class="btn btn-warning editItem"
                                                              value="{{$invoiceItem->saleItem_id}}"><i
                                                                  class="fa fa-plus-circle"></i></button>
                                                  </td>
                                              </tr>
                                          @endforeach
                                          </tbody>
                                          <tfoot>

                                          </tfoot>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                              <div class="card-body">
                                  <form action="{{ route('confirmSalesReturn') }}" method="post">
                                      {{ csrf_field() }}
                                  <div class="row">
                                      <?php
                                      $count = DB::table('sales_return_invoices')->count();
                                      $maincount = date('dmY') . ($count + 1);
                                      ?>
                                      <div class="col-md-5">
                                          <label>Date</label>
                                          <input type="date" value="<?php echo date('Y-m-d');?>"
                                                 class="form-control text-center"
                                                 name="SalesReturnDate"/>
                                      </div>
                                      <div class="col-md-4">
                                          <label>Sales Return No</label>
                                          <input type="text" value="SR<?php echo $maincount ?>"
                                                 class="form-control" name="SalesReturnNo"
                                                 readonly/>
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <table class="table table-bordered">
                                              <thead>
                                              <tr>
                                                  <th scope="col">SL.</th>
                                                  <th scope="col">Stock ID</th>
                                                  <th scope="col">Description</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">qty</th>
                                                  <th scope="col">Total</th>
                                                  <th scope="col">Action</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <?php $i = 1 ?>
                                              @foreach($cartItems as $cartItem)
                                                  <tr class="bg-grey-50">
                                                      <td>{{ $i++ }}</td>
                                                      <td>{{$cartItem->id}}
                                                          <input type="hidden" class="form-control bg-white" name="StockId" value="{{$cartItem->id}}" readonly/>
                                                      </td>
                                                      <td>{{$cartItem->name}}</td>
                                                      <td>{{$cartItem->price}}</td>
                                                      <td>{{$cartItem->qty}}</td>
                                                      <td>{{$cartItem->subtotal}}</td>
                                                      <td>
                                                          <button type="button" value="{{ $cartItem->rowId }}"
                                                                  class="btn btn-danger removeItem"><i
                                                                      class="fa fa-remove"></i></button>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                              </tbody>
                                              <tfoot>
                                              <tr>
                                                  <th style="text-align: right;" colspan="2">Total:</th>
                                                  <td colspan="2"><input type="text" class="form-control bg-white"
                                                             name="totalQty" value="{{ $cartCount }}"
                                                             readonly/></td>
                                                  <td colspan="2"><input type="text" class="form-control bg-white"
                                                             name="itemTotal" value="{{ $cartItemTotal }}"
                                                             readonly/></td>
                                              </tr>
                                              </tfoot>
                                          </table>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <input type="submit" value="Confirm"
                                                 class="btn btn-primary confirm"/>
                                          <input type="button" value="Clean"
                                                 class="btn btn-dark clean"/>
                                      </div>
                                  </div>
                                  </form>
                              </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sales Return</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form class="updateReturn">
          {{csrf_field()}}
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <div class="col-md-12">
                              <label>Stock ID</label>
                              <input type="text" class="form-control StockId" name="StockId"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <label>Invoice No</label>
                              <input type="text" class="form-control invoice" name="invoice"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <label>Description</label>
                              <input type="hidden" class="form-control id" name="id"/>
                              <input type="text" class="form-control description" name="description"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <label>Quantity</label>
                              <input type="text" class="form-control quantity" name="quantity"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <label>Price</label>
                              <input type="text" class="form-control  price" name="price"/>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary ">Add</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </form>
  </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>

<script>
$(window).bind('beforeunload', function(){
  $.ajax({
      url:'{{ route('destroySalesReturnCart') }}',
      type:'POST',
      data:{},
      success:function () {
      }
  });
});
</script>
<script>
$(document).ready(function () {

  $('.removeItem').on('click', function () {
      var id = $(this).val();
      $.ajax({
         url:'{{ route('removeItem') }}',
          type:'POST',
          data:{id:id},
          success:function (data) {
              console.log(data);
              location.reload();
          }
      });
  });

  //------------------------------Get Customer wise invoice number----------------------------

  $('.cName').on('change', function () {
      var name = $(this).val();
      if (name) {
          $.ajax({
              url: '{{ route('FilterCustomerInvoice') }}',
              type: 'GET',
              dataType: 'json',
              data: {name: name},
              success: function (data) {
                  $('select[name="returnInvoiceNumber"]').empty();
                  $.each(data, function (key, value) {
                      $('select[name="returnInvoiceNumber"]').append('<option value="' + key + '">' + value + '</option>');
                  });
              }
          });
      } else {
          $('select[name="returnInvoiceNumber"]').val("Select Invoice Number");
      }
  });
  //--------------------------------get invoice information -------------------------------------------
  {{--$('.load').on('click', function () {--}}
      {{--$('.getInvoice tbody').empty();--}}
      {{--var invoiceNo = $('.cInvoice').val();--}}
      {{--$.ajax({--}}
          {{--url: '{{ route('getInvoiceInfo') }}',--}}
          {{--type: 'GET',--}}
          {{--data: {invoiceNo: invoiceNo},--}}
          {{--success: function (data) {--}}
              {{--$('.tPayable').val(data['invoice'][0]['saleInvoice_totalPayable']);--}}
              {{--$('.disCount').val(data['invoice'][0]['saleInvoice_discountAmount']);--}}
              {{--$('.paidAmount').val(data['invoice'][0]['saleInvoice_paidAmount']);--}}

              {{--$('.getInvoice tbody').append(data['item']);--}}
          {{--}--}}
      {{--})--}}
  {{--});--}}

  $('.editItem').on('click', function () {
      var id = $(this).val();
      $.ajax({
          url: '{{ route('getEditData') }}',
          type: 'GET',
          data: {id: id},
          success: function (data) {
              $('.invoice').val(data[0]['saleInvoice_no']);
              $('.id').val(data[0]['saleItem_id']);
              $('.StockId').val(data[0]['report_stock_id']);
              $('.description').val(data[0]['saleItem_description']);
              $('.quantity').val(data[0]['saleItem_quantity']);
              $('.price').val(data[0]['saleItem_unite_price']);
              $('.totalItemPrice').val(data[0]['saleItem_total']);
          }
      });
  });

  $('.updateReturn').on('submit', function (e) {
      e.preventDefault();

      $.ajax({
          type: "POST",
          url: "{{route('updateReturn')}}",
          data: $('.updateReturn').serialize(),
          success: function (data) {
              console.log(data);
              $('#exampleModalCenter').modal('hide');
              location.reload();
          },
          error: function (error) {
              console.log(error);
              alert('Data Not Saved');
          }
      });
  });
  // Confirm Sales Return..............................

  {{--$('.confirm').on('click', function () {--}}
      {{--$.ajax({--}}
          {{--url: '{{ route('confirmSalesReturn') }}',--}}
          {{--type: 'POST',--}}
          {{--data: {},--}}
          {{--success: function () {--}}
              {{--alert("Sales Return Complete");--}}
              {{--location.reload();--}}
          {{--}--}}
      {{--});--}}
  {{--});--}}

  $('.clean').on('click',function () {
     $.ajax({
       url:'{{ route('destroySalesReturnCart') }}',
         type:'POST',
         data:{},
         success:function (data) {
             console.log(data);
             location.reload();
         }
     });
  });

});
</script>
@endsection