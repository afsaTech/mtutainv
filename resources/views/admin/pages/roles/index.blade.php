@extends('admin.layout.base')

@section('title') {{'Roles'}} @endsection
@push('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endpush

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Role Management</h2>
				<h5>List of all roles to be associated with the permissions.
					<a href="{{ route('roles.index') }}" class="btn btn-default" style="float: right; margin:0 4px 0 4px">Cancel</a>
          @can('role-create')
        	<a href="{{ route('roles.create') }}" class="btn btn-primary" style="float: right; margin:0 4px 0 4px">Create New Role</a>
          @endcan
      	</h5>
      </div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Roles </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th width="220px">Actions</th>
									</tr>
								</thead>
								<tbody>
							@if(count($roles) > 0)
             		@foreach($roles as $key => $role)
									<tr class="odd gradeX">
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
										<td>
                  	<div class="btn-group d-flex btn-w">
										@can('user-list')
                     <a class="btn btn-sm btn-primary text-white" href="{{ route('roles.show', $role->id)}}">
                       <i class="fa fa-folder">
                       </i>
                       View
                     </a>
										 @endcan
                     @can('role-edit')
                     <a class="btn btn-info btn-sm justify" href="{{ route('roles.edit', $role->id) }}">
                       <i class="fa fa-edit">
                       </i>
                       Edit
                     </a>
                     @endcan
                  </div>
                  @can('role-delete')
                   <div class="btn-group d-flex btn-w">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'onsubmit' => 'return confirmDelete()']) !!}
                      <button class="btn btn-danger btn-sm" type="submit">
                        <i class="fa fa-trash-o"></i> Delete
                      </button>
                      @csrf
                    {!! Form::close() !!}
                   </div>
                  @endcan
                  </td>
									</tr>
								@endforeach
								@else
								<td colspan="100%" class="text-center">No record uploaded</td>
							@endif
								</tbody>
							</table>
						</div>
						{{ $roles->render("pagination::simple-bootstrap-4") }}
					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>

	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
@push('inlineJs')
<!-- DATA TABLE SCRIPTS -->
<script src="{!! asset('admin/assets/js/dataTables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.js') !!}"></script>
   <script>
       $(document).ready(function () {
           $('#dataTables-example').dataTable();
       });
</script>
@endpush
