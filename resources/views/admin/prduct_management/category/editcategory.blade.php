@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Update Category
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('updatecategory')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$updatecategory->id}}" name="categoryid">

                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" value="{{$updatecategory->category_name}}"
                                               class="form-control" id="name" name="category_name"
                                               placeholder="Category Name">
                                        <span class="text-danger">{{$errors->has('category_name')? $errors->first('category_name'):''}}</span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="name">Category Image</label>
                                                <input class="form-control" type="file" name="category_image">
                                            </div>
                                        </div>

                                        <div class="col-md-1"></div>

                                        <div class="col-md-4">
                                            <img src="{{asset($updatecategory->category_image)}}" alt="Category Image"
                                                 style=" height: 70px;">
                                        </div>
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<label for="name">Category Image</label>--}}
                                        {{--<input type="text" value="{{$updatecategory->category_image}}"--}}
                                               {{--class="form-control" id="name" name="category_name"--}}
                                               {{--placeholder="Brand Name">--}}
                                       {{--</div>--}}
                                    {{--</div>--}}
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Status</label>
                                        <div class="radio">
                                            <label><input type="radio" value="1" name="status"
                                                          @if ($updatecategory->status==1)
                                                          checked=""
                                                        @endif
                                                >Active</label>
                                            <label><input type="radio" value="0" name="status"
                                                          @if ($updatecategory->status==0)
                                                          checked=""
                                                        @endif>Inactive</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" style="margin-bottom: 24px;"
                                                class="btn btn-info btn-block">Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>

    </div>
@endsection