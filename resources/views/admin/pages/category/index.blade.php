@extends('admin.layout.base')

@section('title') {{'Categories'}} @endsection
@push('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endpush

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>List Of All Categories</h2>
				<h5>List of all achievements categories.
					<a href="{{ route('category.index') }}" class="btn btn-default" style="float: right; margin:0 4px 0 4px">Cancel</a>
					@can('category-create')
					<a href="{{ route('category.create') }}" class="btn btn-primary" style="float: right; margin:0 4px 0 4px">New</a>
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
					<div class="panel-heading"> Categories </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th width="220px">Actions</th>
									</tr>
								</thead>
								<tbody>
							@if(count($cats) > 0)
             		@foreach($cats as $cat)
									<tr class="odd gradeX">
										<td>{{ucfirst($cat->name)}}</td>
										<td>{{mb_strimwidth(ucfirst($cat->desc),0,100,'...')}}</td>
										<td>
                  	<div class="btn-group d-flex">
										@can('category-list')
                     <a class="btn btn-sm btn-primary text-white" href="{{ route('category.show', $cat->id)}}">
                       <i class="fa fa-folder">
                       </i>
                       View
                     </a>
										@endcan
										 @can('category-edit')
                     <a class="btn btn-info btn-sm justify" href="{{ route('category.edit', $cat->id) }}">
                       <i class="fa fa-edit">
                       </i>
                       Edit
                     </a>
										@endcan
                  </div>
									@can('category-delete')
                   <div class="btn-group d-flex">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $cat->id], 'onsubmit' => 'return confirmDelete()']) !!}
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
						{{ $cats->render("pagination::simple-bootstrap-4") }}
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
