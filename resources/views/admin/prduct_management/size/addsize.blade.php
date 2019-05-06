@extends('admin.master')

@section('content')

<div class="container">
        <button style="margin-left: 85%;margin-bottom: 11px;" type="button" class="btn btn-primary" data-toggle="modal"
                data-target=".bs-example-modal-sm">Add New Size
        </button>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            Add Size
                        </div>
                        <form id="add_brand" method="post" action="{{route('save-size')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Size</label>
                                        <input type="text" class="form-control" id="name" name="size"
                                               placeholder="Enter Size">
                                        <span class="text-danger">{{$errors->has('size')? $errors->first('size'):''}}</span>
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
                            <button type="submit" style="margin-bottom: 24px;" class="btn btn-info btn-block">Submit
                            </button>
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
                    <th>SL</th>
                    <th>Size Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @php($i=1)
                @foreach ($sizes as $size)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$size->size}}</td>
                        <td>
                            @if ($size->status==1)
                                Active
                            @elseif($size->status==0)
                                Inactive
                            @endif
                        </td>
                        <td>

                            @if ($size->status==1)
                                <a href="{{route('sizestatus',['id'=>$size->id])}}" class="btn btn-info btn-xs"
                                   title="status">
                                    <span class="fa fa-arrow-up"></span>
                                </a>
                            @elseif($size->status==0)
                                <a href="{{route('sizestatus',['id'=>$size->id])}}"
                                   class="btn btn-warning btn-xs" title="status">
                                    <span class="fa fa-arrow-down"></span>
                                </a>
                            @endif

                            <a href="{{route('size-edit',['id'=>$size->id])}}" class="btn btn-success btn-xs"
                               title="Edit">
                                <span class="fa fa-pencil-square-o"></span>
                            </a>

                            <a id="delete-button" href="{{route('sizedelete',['id'=>$size->id])}}"
                               class="btn btn-danger btn-xs" title="Delete">
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