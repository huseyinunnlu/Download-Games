@extends('adminpanel.master')
@section('content')
<div class="content-wrapper">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title center">Add Category,Language,Platform</h3>
		</div><!-- /.box-header -->
		<!-- form start -->
		<!--ADD-->
		<form role="form" action="{{url('addclp')}}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="tbl" value="{{encrypt('clps')}}">	
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group col-md-4">
						<label for="exampleInputEmail1">Title</label>
						<input type="text" name="title" class="form-control" value="" id="exampleInputEmail1" placeholder="Enter Logo">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group col-md-6">
						<label>Type</label>
						<select name="type" class="form-control">
							<option>Category</option>
							<option>Language</option>
							<option>Platform</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Status</label>
						<select name="status" class="form-control">
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</div>
				</div>
			</div><!-- /.box-body -->

			<div class="box-footer col-md-12">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>
@endsection