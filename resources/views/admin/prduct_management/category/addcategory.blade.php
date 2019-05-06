@extends('admin.master')

@section('content')

<div class="container">
        <button style="margin-left: 85%;margin-bottom: 11px;" type="button" class="btn btn-primary" data-toggle="modal"
                data-target=".bs-example-modal-sm">Add New Category
        </button>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="add_brand" method="post" action="{{route('addcategroy')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" class="form-control" id="name" name="category_name"
                                               placeholder="Enter Category">
                                        <span class="text-danger">{{$errors->has('category_name')? $errors->first('category_name'):''}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Category Image</label>
                                        <input class="form-control" type="file" name="category_image">
                                       </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Status</label>
                                        <div class="radio">
                                            <label><input type="radio" value="1" name="status" checked="">Active</label>
                                            <label><input type="radio" value="0" name="status">Inactive</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>SL/</th>
                    <th>Category Name</th>
                    <th>Category Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                @php($i=1)
                @foreach ($categorys as $category)
                    <tr>
                        <td style="text-align: center;">{{$i++}}</td>
                        <td style="text-align: center;">{{$category->category_name}}</td>
                        <td style="text-align: center;"><img src="{{asset($category->category_image)}}" alt="Category Image"
                                 style=" width: 80px;"></td>
                        <td style="text-align: center;">
                            @if ($category->status==1)
                                Active
                            @elseif($category->status==0)
                                Inactive
                            @endif
                        </td>
                        <td style="text-align: center;">

                            @if ($category->status==1)
                                <a href="{{route('categorystatus',['id'=>$category->id])}}" class="btn btn-info btn-xs"
                                   title="status">
                                    <span class="fa fa-arrow-up"></span>
                                </a>
                            @elseif($category->status==0)
                                <a href="{{route('categorystatus',['id'=>$category->id])}}"
                                   class="btn btn-warning btn-xs" title="status">
                                    <span class="fa fa-arrow-down"></span>
                                </a>
                            @endif

                            <a href="{{route('categoryedit',['id'=>$category->id])}}" class="btn btn-success btn-xs"
                               title="Edit">
                                <span class="fa fa-pencil-square-o"></span>
                            </a>

                            <a id="delete-button" href="{{route('categorydelete',['id'=>$category->id])}}"
                               class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are you sure to delete this ?');">
                                <span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>


    </div>
@endsection