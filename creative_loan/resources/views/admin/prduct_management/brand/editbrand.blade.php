@extends('admin.master')

@section('content')
<div class="container">
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="card">
		  <div class="card-header">
		    Update Brand
		  </div>
		  <div class="card-body">
		      <form method="post" action="{{route('updatebrand')}}" enctype="multipart/form-data">
  		                @csrf
  		          <input type="hidden" value="{{$brand->id}}" name="brandid">

  		         <div class="modal-body">
  					<div class="col-md-12">
  					     <div class="form-group">
  					      <label for="name">Group Name</label>
  					      <input type="text" value="{{$brand->brand_name}}" class="form-control" id="name" name="brand_name" placeholder="Brand Name">
                  <span class="text-danger">{{$errors->has('brand_name')? $errors->first('brand_name'):''}}</span>
  					    </div>
  					  </div>

  					  <div class="col-md-12">
  					     <div class="form-group">
  					      <label for="name">Status</label>
  					      <div class="radio">
  					      	<label><input type="radio" value="1" name="status" @if ($brand->status==1)
  					      		checked=""
  					      	@endif
							>Active</label>
  					      	<label><input type="radio" value="0" name="status" @if ($brand->status==0)
  					      		checked=""
  					      	@endif >Inactive</label>
  		    			</div>
  					    </div>
  					  </div>
	      		          <div class="col-md-12">
	      		             <div class="form-group">
	      							<button type="submit" style="margin-bottom: 24px;" class="btn btn-info btn-block">Update</button>
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