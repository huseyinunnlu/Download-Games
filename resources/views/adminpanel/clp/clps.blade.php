@extends('adminpanel.master')
@section('content')
<div class="content-wrapper">
	<div class="box box-primary">
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h2 class="box-title" style="font-size:20px;">Categories Languages Types</h2>
							<a href="/adminpanel/cat-lang-plat/addclp"><button class="btn btn-primary" style="margin-left: 15px;">Add New</button></a>
						</div><!-- /.box-header -->
						<form action="{{url('multipledelete')}}" method="post">
							{{@csrf_field()}}
							<input type="hidden" name="tbl" value="{{encrypt('clps')}}">
							<input type="hidden" name="tblid" value="{{encrypt('id')}}">
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<div style="margin-left: -15px;">
											<div class="col-sm-2">
												<select name="bulk-action" class="form-control">
													<option value="0">Bulk Action</option>
													<option value="1">Move to Trash</option>
												</select>
											</div>
											<div class="col-sm-1">
												<div class="row">
													<button class="btn btn-default">Apply</button>
												</div>  
											</div>
											<tr>
												<th>Title</th>
												<th>İd</th>
												<th>Type</th>
												<th>Status</th>
												<th>Creation Date</th>
												<th>Updated Date</th>
											</tr>
										</div>
									</thead>
									<tbody>
										@foreach($data as $cpl)
										<tr>
											<td><input type="checkbox" name="select-data[]" value="{{$cpl->id}}" style="margin: 5px;"><a href="/adminpanel/cat-lang-plat/updateclp/{{$cpl->id}}">{{$cpl->title}}</a></td>
											<td>{{$cpl->id}}</td>
											<td>{{$cpl->type}}</td>
											<td>{{$cpl->status}}</td>
											<td>{{$cpl->created_at}}</td>
											<td>@if(empty($cpl->updated_at))
												Boş
											@else
											{{$cpl->updated_at}}
											@endif</td>
										</tr>
										@endforeach
										{{$data->links()}}
									</tbody>

								</table>
							</div><!-- /.box-body -->
						</form>
					</div><!-- /.box -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</section><!-- /.content -->

	</div>
</div>
<script type="text/javascript">
	$(function () {
		$("#example1").dataTable();
		$('#example2').dataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": true,
			"bInfo": true,
			"bAutoWidth": false
		});
	});
</script>


@endsection