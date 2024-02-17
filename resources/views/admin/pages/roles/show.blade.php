@extends('admin.layout.base')

@section('title') {{'Roles'}} @endsection
@section('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endsection

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>View Roles</h2>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Role Details</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Roles</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ ucfirst($role->name) }}</td>
											<td>
                        @if(!empty($rolePermissions))
                           @foreach($rolePermissions as $v)
                               <label class="label label-success">{{ $v->name }},</label>
                           @endforeach
                       @endif
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@can('role-edit')
						<a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a>
						@endcan
						<a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
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
