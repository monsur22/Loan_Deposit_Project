@extends('admin.master')

@section('content')
<div class="container">
        <div class="row">

            <div class="container">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        <h4><u>Update Item</u></h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('update_item')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$edit_item->id}}" name="itemid">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="hidden" name="id" class="Iid">
                                            <div class="form-group">
                                                <label class="" for="name">Item Code</label>
                                                <div><input type="text" class="form-control" name="item_code"
                                                            value="{{$edit_item->item_code}}" readonly/></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Category</label>
                                                <select type="text" class="form-control" id="category"
                                                        name="category_name">
                                                    <option value="{{$edit_item->category_name}}">{{$edit_item->category_name}} </option>
                                                @foreach($categorys as $category)
                                                        <option value="{{$category->category_name}}">{{$category->category_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Color</label>
                                                <select type="text" class="form-control Cname" id="colorName"
                                                        name="color">
                                                    <option value="{{$edit_item->color}}">{{$edit_item->color}}</option>
                                                    @foreach($allgroups as $allgroup)
                                                        <option value="{{$allgroup->group_name}}">{{$allgroup->group_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Floor</label>
                                                <select type="text" class="form-control Flor" name="floor">
                                                    <option>{{$edit_item->floor}}</option>
                                                    <option>1st Floor</option>
                                                    <option>2nd Floor</option>
                                                    <option>3rd Floor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Cost Price</label>
                                                <input type="text" id="costPrice" value="{{$edit_item->cost_price}}" class="form-control Cprice"
                                                       name="cost_price">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="name">Short Code</label>
                                                <div><input type="text" value="{{$edit_item->barcode_code}}" class="form-control"
                                                            name="barcode_code"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Brand</label>
                                                <select type="text" class="form-control Bname" id="bName"
                                                        name="brand_name">
                                                    <option value="{{$edit_item->brand_name}}">{{$edit_item->brand_name}}</option>
                                                @foreach($allbrands as $allbrand)
                                                        <option value="{{$allbrand->brand_name}}">{{$allbrand->brand_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Product Name</label>
                                                <input type="text" value="{{$edit_item->product_name}}" class="form-control" id="pName"
                                                       name="product_name">
                                            </div>

                                            <div class="form-group">
                                                <label class="" for="name">Rack</label>
                                                <select type="text" class="form-control Rck" name="rack">
                                                    <option>{{$edit_item->rack}}</option>
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
                                                <input type="text" value="{{$edit_item->profit}}" id="profit" class="form-control Proft"
                                                       name="profit">
                                            </div>
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
                                                    <option>{{$edit_item->supplier_name}}</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="name">Minimum Stock</label>
                                                <input type="text" value="{{$edit_item->stock}}" class="form-control Mstock" name="stock">
                                            </div>

                                            <div class="form-group">
                                                <label class="" for="name">Sales Price</label>
                                                <input type="text" value="{{$edit_item->sales_price}}" id="salesPrice" class="form-control sPrice"
                                                       name="sales_price">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Product Image</label>
                                                <input class="form-control image" value="{{$edit_item->product_image}}" type="file" name="product_image">
                                            </div>
                                        </div>
                                    </div>

                                <div class="modal-footer">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-3">
                                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

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
@endsection