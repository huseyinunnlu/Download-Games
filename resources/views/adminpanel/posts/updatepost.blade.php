@extends('adminpanel.master')
@section('content')
<div class="content-wrapper">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title center">Update Post</h3>
		</div><!-- /.box-header -->
		<!-- form start -->
		<!--ADD-->
		<div class="box-body">
			<form role="form" action="{{url('updatepost')}}/{{$data->id}}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('posts')}}">
				<input type="hidden" name="id" value="{{$data->id}}">		
				<div class="form-group col-md-7">
					<label for="exampleInputEmail1">Title</label>
					<input type="text" name="title" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-5">
					<label for="exampleInputEmail1">Cracked By</label>
					<input type="text" name="cracked_by" class="form-control" value="{{$data->cracked_by}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="col-md-12">
				<div class="form-group col-md-6 array" >
					<label for="exampleInputEmail1">İmages</label>
					@foreach($images as $image)
					<input type="text" name="images[]" class="form-control" value="{{$image}}" id="exampleInputEmail1" placeholder="Enter Logo">
					@endforeach
					<input type="text" name="images[]" class="form-control" id="exampleInputEmail1" placeholder="Enter Logo">					
				</div>
				<div class="form-group col-md-6 array">
					<label for="exampleInputEmail1">Videos</label>
					@foreach($videos as $video)
					<input type="text" name="videos[]" class="form-control" value="{{$video}}" id="exampleInputEmail1" placeholder="Enter Logo">
					@endforeach
					<input type="text" name="videos[]" class="form-control" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				</div>
				<div class="form-group col-md-4">
					<label for="exampleInputEmail1">System Requiments</label>
					<textarea rows="15" name="systemreq" class="form-control" value="" placeholder="Enter Logo">{{$data->systemreq}}</textarea>
				</div>
				<div class="form-group col-md-8">
					<label for="exampleInputEmail1">Description</label>
					<textarea rows="15" name="desc" class="form-control" placeholder="Enter Logo">{{$data->desc}}</textarea>
				</div>
				<div class="form-group col-md-3">
					<label for="exampleInputEmail1">Release Date</label>
					<input type="text" name="release_date" class="form-control" value="{{$data->release_date}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-3">
					<label for="exampleInputEmail1">Size</label>
					<input type="text" name="size" class="form-control" value="{{$data->size}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-4">
					<label for="exampleInputEmail1">Download Link</label>
					<input type="text" name="download_link" class="form-control" value="{{$data->download_link}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-2">
					<label>Status</label>
					<select name="status" class="form-control">
						<option>{{$data->status}}</option>
						@if($data->status=='Active')
						<option>Inactive</option>	
						@else	
						<option>Active</option>	
						@endif		
					</select>
				</div>
				<div class="content cat-content col-md-4">
					<h4>Category<span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
					@foreach ($category as $cat)
					<p><label for="{{$cat->id}}"><input type="checkbox" name="category_id[]" @if(in_array($cat->id,$categories)) checked @endif value="{{$cat->id}}"> {{$cat->title}}</label></p>
					@endforeach
				</div>
				<div class="content cat-content col-md-4">
					<h4>Platform  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
					@foreach ($platform as $plat)
					<p><label for="{{$plat->id}}"><input type="checkbox" @if(in_array($plat->id,$platforms)) checked @endif name="platform_id[]"value="{{$plat->id}}"> {{$plat->title}}</label></p>
					@endforeach
				</div>
				<div class="content cat-content col-md-4">
					<h4>Language  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
					@foreach($language as $lang)
					<p><label for="{{$lang->id}}"><input type="checkbox" @if(in_array($lang->id,$languages)) checked @endif name="language_id[]"value="{{$lang->id}}">{{$lang->title}}</label></p>
					@endforeach
				</div>

				<!-- /.box-body -->
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<style type="text/css">
	.array input {
		margin: 20px 0;
	}
</style>
@endsection
