@extends('admin.layout.base')

@section('title') {{'Achievement'}} @endsection
@section('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endsection

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>View Achievement</h2>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Achievement </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordereds table-hover">
									<thead>
										<tr>
											<th>Image</th>
											<th>Title</th>
											<th>Abstract</th>
											<th>Category</th>
											<th>Date</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
											 <img alt="img-sm" src="{{ asset('storage/'.$ach->image)}}" width="90px" height="80px">
											</td>
											<td>{{ ucfirst($ach->title) }}</td>
											<td>{{ ucfirst($ach->abstract) }}</td>
											<td>{{ $ach->category->name }}</td>
											<td>{{ $ach->date }}</td>
											<td>
											@if($ach->status == 1)
	                     <button class="btn btn-success btn-sm bg-olive">
												 Active
	                     </button>
	                      @else
	                      <button class="btn btn-warning btn-sm">
	                       Inactive
	                      </button>
											@endif
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@can('achievement-edit')
						<a href="{{ route('achievement.edit', $ach->id) }}" class="btn btn-primary">Edit</a>
						@endcan
						<a href="{{ route('achievement.index') }}" class="btn btn-default">Cancel</a>
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
