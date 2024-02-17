@extends('admin.layout.base')

@section('title') {{'Category'}} @endsection
@section('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endsection

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>View Category</h2>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Category </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Achievements</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ ucfirst($cat->name) }}</td>
											<td>{{ ucfirst($cat->desc) }}</td>
											<td>
												@if(count($cat->achievements) > 0)
												<ul class="list-group list-group-flush">
													@foreach($cat->achievements as $ach)
															<li class="list-group-item">{{$ach->title}}</li>
													@endforeach
												</ul>
												@else
												<span>-</span>
												@endif
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@can('category-edit')
						<a href="{{ route('category.edit', $cat->id) }}" class="btn btn-primary">Edit</a>
						@endcan
						<a href="{{ route('category.index') }}" class="btn btn-default">Cancel</a>
					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>

	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
@endsection
@section('inlineJs')
<!-- DATA TABLE SCRIPTS -->
<script src="{!! asset('admin/assets/js/dataTables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.js') !!}"></script>
   <script>
       $(document).ready(function () {
           $('#dataTables-example').dataTable();
       });
</script>
@endsection
