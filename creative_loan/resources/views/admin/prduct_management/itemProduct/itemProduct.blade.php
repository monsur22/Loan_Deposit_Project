@extends('admin.master')

@section('content')

<div class="container">
            <div class="card">
                <br/>
                <h4 class="text-center"><b>Product Item Entry</b></h4>
                <div class="card-body">
                    <div class="allbutton" style="text-align: right;">
                        <button type="button" class="btn btn-info"
                                data-toggle="modal" data-target="#importItemModal"> Import Item
                        </button>
                        <button type="button" class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#addItemModal">Add New Item
                        </button>
                    </div>
                    <hr/>


                    <div class="modal fade" id="importItemModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container">
                                        <h2>
                                            Product Excel/CSV Import
                                        </h2>
                                        <hr/>
                                        @if ( Session::has('success') )
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>{{ Session::get('success') }}</strong>
                                            </div>
                                        @endif

                                        @if ( Session::has('error') )
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>{{ Session::get('error') }}</strong>
                                            </div>
                                        @endif

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                <div>
                                                    @foreach ($errors->all() as $error)
                                                        <p>{{ $error }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        <form action="{{route('importExcelData')}}" method="POST"
                                              enctype="multipart/form-data" class="col-sm-6">
                                            {{ csrf_field() }}
                                            Choose your csv File : <input type="file" name="file" class="form-control">


                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                        <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel Format</button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-------------------Add Modal-----------------------}}

                    <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Item Entry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="addItem" class="form-group-lg" method="POST"
                                          action="{{ route('additems') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php
                                                    $ci = DB::table('itemproducts')->count();
                                                    $i = $ci + 1;
                                                    ?>
                                                    <div class="form-group">
                                                        <label class="" for="name">Item Code</label>
                                                        <div><input type="text" class="form-control" name="item_code"
                                                                    value="<?php echo '000' . $i; ?>" readonly/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Category</label>
                                                        <select type="text" class="form-control" id="category"
                                                                name="category_name">
                                                            <option>Select Category</option>
                                                            @foreach($categorys as $category)
                                                                <option value="{{$category->category_name}}">{{$category->category_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Color</label>
                                                        <select type="text" class="form-control" id="color"
                                                                name="color">
                                                            <option>Select Color</option>
                                                            @foreach($allgroups as $allgroup)
                                                                <option value="{{$allgroup->group_name}}">{{$allgroup->group_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Floor</label>
                                                        <select type="text" class="form-control" name="floor">
                                                            <option>Select Floor</option>
                                                            <option>1st Floor</option>
                                                            <option>2nd Floor</option>
                                                            <option>3rd Floor</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Cost Price</label>
                                                        <input type="text" id="costPrice" class="form-control"
                                                               name="cost_price">
                                                    </div>

                                                        <div class="form-group">
                                                            <label for="name">Product Image</label>
                                                            <input class="form-control" type="file" name="product_image" required>
                                                        </div>
                                                    {{--<div class="form-group">
                                                        <label class="" for="name">Vat</label>
                                                        <input type="text" class="form-control" name="vat">

                                                    </div>--}}
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="" for="name">Short Code</label>
                                                        <div><input type="text" class="form-control" name="barcode_code"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Brand</label>
                                                        <select type="text" class="form-control" id="brand"
                                                                name="brand_name">
                                                            <option>Select Brand</option>
                                                            @foreach($allbrands as $allbrand)
                                                                <option value="{{$allbrand->brand_name}}">{{$allbrand->brand_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Product Name</label>
                                                        <input type="text" class="form-control" id="productName"
                                                               name="product_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Rack</label>
                                                        <select type="text" class="form-control" name="rack">
                                                            <option>Select Rack</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Profit %</label>
                                                        <input type="text" id="profit" class="form-control"
                                                               name="profit">
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="" for="name">Unit Type</label>
                                                        <select type="text" class="form-control" name="unit_type">
                                                            {{--<option>Select Unit Type</option>--}}
                                                            <option>PCS</option>
                                                            <option>KG</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Size</label>
                                                        <select type="text" class="form-control" id="size" name="size">
                                                            <option>Select Size</option>
                                                            @foreach($allsizes as $allsize)
                                                                <option value="{{$allsize->size}}">{{$allsize->size}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Supplier Name</label>
                                                        <select type="text" class="form-control" name="supplier_name">
                                                            <option> Select Supplier</option>
                                                            @foreach($suppliers as $supplier)
                                                                <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Minimum Stock</label>
                                                        <input type="text" class="form-control" name="stock">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Sales Price</label>
                                                        <input type="text" id="salesPrice" class="form-control"
                                                               name="sales_price">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-primary ">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{--------------------------End Add Modal--------------------------------}}


                    {{-----------------Edit Item--}}

                    <div class="modal fade" id="editItemModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Item Entry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editItem" class="form-group-lg" method="" action=""
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="hidden" name="id" class="Iid">
                                                    <div class="form-group">
                                                        <label class="" for="name">Item Code</label>
                                                        <div><input type="text" class="form-control icode" name="item_code"
                                                                     readonly/></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Category</label>
                                                        <select type="text" class="form-control categy" id="categy"
                                                                name="category_name">
                                                            @foreach($categorys as $category)
                                                                <option value="{{$category->category_name}}">{{$category->category_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Color</label>
                                                        <select type="text" class="form-control Cname" id="colorName"
                                                                name="color">
                                                            <option>Select Color</option>
                                                            @foreach($allgroups as $allgroup)
                                                                <option value="{{$allgroup->group_name}}">{{$allgroup->group_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Floor</label>
                                                        <select type="text" class="form-control Flor" name="floor">
                                                            <option>Select Floor</option>
                                                            <option>1st Floor</option>
                                                            <option>2nd Floor</option>
                                                            <option>3rd Floor</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Cost Price</label>
                                                        <input type="text" id="costP" class="form-control Cprice"
                                                               name="cost_price">
                                                    </div>


                                                    {{--<div class="form-group">
                                                        <label class="" for="name">Vat</label>
                                                        <input type="text" class="form-control Vt" name="vat">

                                                    </div>--}}
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="" for="name">Short Code</label>
                                                        <div><input type="text" class="form-control Scode"
                                                                    name="barcode_code"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Brand</label>
                                                        <select type="text" class="form-control Bname" id="bName"
                                                                name="brand_name">
                                                            <option>Select Brand</option>
                                                            @foreach($allbrands as $allbrand)
                                                                <option value="{{$allbrand->brand_name}}">{{$allbrand->brand_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Product Name</label>
                                                        <input type="text" class="form-control Pname" id="pName"
                                                               name="product_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="" for="name">Rack</label>
                                                        <select type="text" class="form-control Rck" name="rack">
                                                            <option>Select Rack</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="" for="name">Profit %</label>
                                                        <input type="text" id="pfit" class="form-control Proft"
                                                               name="profit">
                                                    </div>
                                                    {{--<div class="form-group">
                                                        <label>Product Image</label>
                                                        <input type="file" name="product_image"
                                                               class="form-control productImage">
                                                    </div>--}}
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="" for="name">Unit Type</label>
                                                        <select type="text" class="form-control Utyp" name="unit_type">
                                                            {{--<option>Select Unit Type</option>--}}
                                                            <option>PCS</option>
                                                            <option>KG</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Size</label>
                                                        <select type="text" class="form-control Szgrpnm" id="sizes"
                                                                name="size">
                                                            @foreach($allsizes as $allsize)
                                                                <option value="{{$allsize->size}}">{{$allsize->size}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Supplier Name</label>
                                                        <select type="text" class="form-control Sname"
                                                                name="supplier_name">
                                                            <option> Select Supplier</option>
                                                            @foreach($suppliers as $supplier)
                                                                <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="" for="name">Minimum Stock</label>
                                                        <input type="text" class="form-control Mstock" name="stock">
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="" for="name">Sales Price</label>
                                                        <input type="text" id="salesP" class="form-control sPrice"
                                                               name="sales_price">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name">Product Image</label>
                                                        <input class="form-control" type="file" name="product_image">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-primary upload-image">Update</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{------------------------------------------------End Edit Modal--------------------------------}}

                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>

                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Supplier Name</th>
                                <th>Brand</th>
                                <th>Rack</th>
                                <th>Floor</th>
                                <th>Cost Price</th>
                                <th>Sales Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @php($i=1)
                            @foreach($items as $item )

                                <tr>
                                    <td style="text-align: center"> <?php echo $i++; ?> </td>
                                    <td>{{$item->product_name}}</td>
                                    <td>{{$item->supplier_name}}</td>
                                    <td>{{$item->brand_name}}</td>
                                    <td>{{$item->rack}}</td>
                                    <td>{{$item->floor}}</td>
                                    <td>{{$item->cost_price}}</td>
                                    <td>{{$item->sales_price}}</td>
                                    <td style="text-align: center;"><img src="{{asset($item->product_image)}}" alt="Item Image"
                                                                         style=" width: 80px;"></td>
                                    {{--<td><img src="{{asset($item->product_image)}}" width="80px" alt="Item Image"></td>--}}
                                    <td>
                                        {{--<button href="" data-target="#editItemModal"--}}
                                                {{--class="btn btn-success btn-xs itemEdit" value="{{$item->id}}"--}}
                                                {{--data-toggle="modal">--}}
                                            {{--<span class="fa fa-pencil-square-o"></span>--}}
                                        {{--</button>--}}
                                        <a href="{{route('edit_item',['id'=>$item->id])}}" class="btn btn-success btn-xs"
                                           title="Edit">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </a>
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <form action="{{ url('/item/delete') }}" method="POST" style="display: inline">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $item->id }}" name="item_id">
                                            <button type="submit" class="btn btn-danger btn-xs" name="btn" onclick="return confirm('Are you sure to delete this ?');">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script type="text/javascript">
        function conCat() {
            var x = $("#brand").val();
            var y = $("#size").val();
            var z = $("#color").val();
            $('#productName').val(x + ' ' + y + ' ' + z);
        }

        $("#brand").on('change', conCat);
        $("#size").on('change', conCat);
        $("#color").on('change', conCat);
    </script>

    <script type="text/javascript">
        function conCat() {
            var x = $("#bName").val();
            var y = $("#sizes").val();
            var z = $("#colorName").val();
            $('#pName').val(x + ' ' + y + ' ' + z);
        }

        $("#bName").on('change', conCat);
        $("#sizes").on('change', conCat);
        $("#colorName").on('change', conCat);
    </script>

    <script>
        function salPrice() {
            var cPrice = $("#costPrice").val();
            var profit = $("#profit").val();
            var stotal = (profit * cPrice);
            var ptotal = (stotal / 100);
            var total = +ptotal + +cPrice;
            $('#salesPrice').val(total);
        }

        $("#costPrice").on('keyup', salPrice);
        $("#profit").on('keyup', salPrice);
    </script>

    <script>
        $(document).ready(function () {
            $("body").on("click", ".upload-image", function (e) {
                $(this).parents("form").ajaxForm(options);
            });


            var options = {
                complete: function (response) {
                    if ($.isEmptyObject(response.responseJSON.error)) {
                        $("input[name='title']").val('');
                        alert('Image Upload Successfully.');
                    } else {
                        printErrorMsg(response.responseJSON.error);
                    }
                }
            };

            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $.each(msg, function (key, value) {
                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                });
            }


            /*------------------------EDIT ITEM FROM---------------------*/


            $('.itemEdit').click(function () {
                var id = $(this).val();

                function salPrice() {
                    var cPrice = $("#costP").val();
                    var profit = $("#pfit").val();
                    var stotal = (profit * cPrice);
                    var ptotal = (stotal / 100);
                    var total = +ptotal + +cPrice;
                    $('#salesP').val(total);
                }

                $("#costP").on('keyup', salPrice);
                $("#pfit").on('keyup', salPrice);
                $.ajax({
                    url: '{{route('edititems')}}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        $('.Iid').val(data[0]['id']);
                        $('.icode').val(data[0]['item_code']);
                        $('.Scode').val(data[0]['barcode_code']);
                        $('.Pname').val(data[0]['product_name']);
                        $('.categy').val([0]['category_name']);
                        $('.Bname').val(data[0]['brand_name']);
                        $('.Flor').val(data[0]['floor']);
                        $('.Cprice').val(data[0]['cost_price']);
                        $('.Szgrpnm').val(data[0]['size']);
                        $('.Sname').val(data[0]['supplier_name']);
                        $('.Mstock').val(data[0]['stock']);
                        $('.Vt').val(data[0]['vat']);
                        $('.Proft').val(data[0]['profit']);
                        $('.Utyp').val(data[0]['unit_type']);
                        $('.Cname').val(data[0]['color']);
                        $('.Rck').val(data[0]['rack']);
                        $('.sPrice').val(data[0]['sales_price']);
                    }
                });

            });
            {{--------------------Edit Item end-----------------}}


            {{--------------------update Item start-----------------}}

            $('#editItem').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{route('updateitems')}}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(".Iid").val(),
                        'icode': $('.icode').val(),
                        'Scode': $('.Scode').val(),
                        'categy':$('.categy').val(),
                        'Pname': $('.Pname').val(),
                        'Bname': $('.Bname').val(),
                        'Cname': $('.Cname').val(),
                        'Szgrpnm': $('.Szgrpnm').val(),
                        'Utyp': $('.Utyp').val(),
                        'sPrice': $('.sPrice').val(),
                        'Cprice': $('.Cprice').val(),
                        'Vt': $('.Vt').val(),
                        'Proft': $('.Proft').val(),
                        'Sname': $('.Sname').val(),
                        'Mstock': $('.Mstock').val(),
                        'Rck': $('.Rck').val(),
                        'Flor': $('.Flor').val()
                    },
                    success: function () {
                        $('#exampleModalCenter').modal('hide');
                        location.reload();
                    },
                    error: function (error) {
                        console.log(error);
                        alert('Data Not Saved');
                    }
                });
            });
            {{--------------------update Item end-----------------}}

        });
    </script>

@endsection

