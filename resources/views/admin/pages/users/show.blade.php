@extends('admin.layout.base')

@section('title') {{'User'}} @endsection
@section('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endsection

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>View User</h2>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> User Details</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Roles</th>
											<th>Created Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ ucfirst($user->name) }}</td>
											<td>{{ $user->email }}</td>
											<td>
						            @if(!empty($user->getRoleNames()))
						                @foreach($user->getRoleNames() as $v)
						                    <label class="badge badge-success">{{ $v }}</label>
						                @endforeach
						            @endif
											</td>
											<td>{{ $user->created_at }}</td>
										</tr>
									</tbody>
								</table>
						</div>
						@can('user-edit')
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
						@endcan
						<a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
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
