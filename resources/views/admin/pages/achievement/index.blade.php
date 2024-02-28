@extends('admin.layout.base')

@section('title') {{'Achievements'}} @endsection
@push('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endpush

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>List Of All Achievements</h2>
				<h5><b>Note:</b> For achievements with 'active' status they have been published on <a href="https://mtutainvestment.co.tz" target="_blank">mtutainvestment.co.tz</a>
				<a href="{{ route('achievement.index') }}" class="btn btn-default" style="float: right; margin:0 4px 0 4px">Cancel</a>
				@can('achievement-create')
					<a href="{{ route('achievement.create') }}" class="btn btn-primary" style="float: right; margin:0 4px 0 4px">New</a>
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
					<div class="panel-heading"> Achievements </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Title</th>
										<th>Category</th>
										<th>Status</th>
										<th width="220px">Actions</th>
									</tr>
								</thead>
								<tbody>
							@if(count($achs) > 0)
             		@foreach($achs as $ach)
									<tr class="odd gradeX">
										<td>{{substr(ucfirst($ach->title),0,30)}}</td>
										<td>{{$ach->category->name}}</td>
										<td>
											@if($ach->status == 1)
											<span class="text-success">Active</span>
											@else
											<span class="text-warning">Inactive</span>
											@endif
										</td>
										<td>
                  	<div class="btn-group d-flex">
										@can('achievement-list')
                     <a class="btn btn-sm btn-primary text-white" href="{{ route('achievement.show', $ach->id)}}">
                       <i class="fa fa-folder">
                       </i>
                       View
                     </a>
										@endcan
										 @can('achievement-edit')
	                     <a class="btn btn-info btn-sm justify" href="{{ route('achievement.edit', $ach->id) }}">
	                       <i class="fa fa-edit">
	                       </i>
	                       Edit
	                     </a>
									 	@endcan
                  </div>
									@can('achievement-delete')
	                   <div class="btn-group d-flex">
	                    {!! Form::open(['method' => 'DELETE', 'route' => ['achievement.destroy', $ach->id], 'onsubmit' => 'return confirmDelete()']) !!}
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
						{{ $achs->render("pagination::simple-bootstrap-4") }}
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
