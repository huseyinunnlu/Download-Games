@extends('adminpanel/master')
@section('content')
<div class="content-wrapper">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title center">Quick Example</h3>
		</div><!-- /.box-header -->
		<!-- form start -->
		<!--ADD-->
		@if(!empty($data))
		<form role="form" action="{{url('updatesettings')}}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
			<input type="hidden" name="id" value="{{$data->id}}">			
			<div class="box-body">
				<div class="form-group col-md-12">
					<label for="exampleInputEmail1">Logo</label>
					<input type="text" name="logo" class="form-control" value="{{$data->logo}}" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-6">
					
					@foreach($data->social as $soc)
					<label for="exampleInputPassword1">Social Media 1</label>
					<input type="text" value="{{$soc}}" name="social[]" class="form-control" id="exampleInputEmail1" placeholder="Social Media Url">
					@endforeach
				</div>
				<div class="form-group col-md-3">
					
					@foreach($data->icon as $ic)
					<label for="exampleInputPassword1">Icon 1</label>
					<input type="text" value="{{$ic}}" name="icon[]" class="form-control" id="exampleInputEmail1" placeholder="Icon">
					@endforeach
				</div>
				<div class="form-group col-md-12">
					<textarea name="about" style="width: 80%; height: 300px;">{{$data->about}}</textarea>
				</div>
			</div><!-- /.box-body -->

			<div class="box-footer col-md-12">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		<!--Update-->
		@else
		<form role="form" action="{{url('addsettings')}}" method="post">
			<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
			{{ csrf_field() }}			
			<div class="box-body">
				<div class="form-group col-md-12">
					<label for="exampleInputEmail1">Logo</label>
					<input type="text" name="logo" class="form-control" id="exampleInputEmail1" placeholder="Enter Logo">
				</div>
				<div class="form-group col-md-6">
					<label for="exampleInputPassword1">Social Media 1</label>
					<input type="text" name="social[]" class="form-control" id="exampleInputEmail1" placeholder="Social Media Url">
					<label for="exampleInputPassword1">Social Media 2</label>
					<input type="text" name="social[]" class="form-control" id="exampleInputEmail1" placeholder="Social Media Url">
					<label for="exampleInputPassword1">Social Media 3</label>
					<input type="text" name="social[]" class="form-control" id="exampleInputEmail1" placeholder="Social Media Url">
					<label for="exampleInputPassword1">Social Media 4</label>
					<input type="text" name="social[]" class="form-control" id="exampleInputEmail1" placeholder="Social Media Url">
				</div>
				<div class="form-group col-md-3">
					<label for="exampleInputPassword1">Icon 1</label>
					<input type="text" name="icon[]" class="form-control" id="exampleInputEmail1" placeholder="Icon">
					<label for="exampleInputPassword1">Icon 2</label>
					<input type="text" name="icon[]" class="form-control" id="exampleInputEmail1" placeholder="Icon">
					<label for="exampleInputPassword1">Icon 3</label>
					<input type="text" name="icon[]" class="form-control" id="exampleInputEmail1" placeholder="Icon">
					<label for="exampleInputPassword1">Icon 4</label>
					<input type="text" name="icon[]" class="form-control" id="exampleInputEmail1" placeholder="Icon">
				</div>
				<div class="form-group col-md-12">
					<textarea name="about" style="width: 80%; height: 300px;"></textarea>
				</div>
			</div><!-- /.box-body -->

			<div class="box-footer col-md-12">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		@endif
	</div><!-- /.box -->
</div>
@endsection