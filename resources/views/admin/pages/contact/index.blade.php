@extends('admin.layout.base')

@section('title') {{'Messages'}} @endsection
@push('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endpush

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>List Of All Messages</h2>
				<h5>List of all messages sent by site visitor. </h5> </div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Messages </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>Subject</th>
										<th>Email</th>
										<th>Date</th>
										<th width="220px">Actions</th>
									</tr>
								</thead>
								<tbody>
							@if(count($conts) > 0)
             		@foreach($conts as $cont)
									<tr class="odd gradeX">
										<td class="text-succes">{{ucfirst($cont->subject) ?? substr(ucfirst($cont->message),0,30) }}</td>
										<td><a href="{{ route('contact.show', $cont->id)}}">{{$cont->email ?? ucfirst($cont->name)}}</a></td>
										<td>{{$cont->created_at}}</td>
										<td>
                  	<div class="btn-group d-flex">
										@can('contact-list')
                     <a class="btn btn-sm btn-primary text-white" href="{{ route('contact.show', $cont->id)}}">
                       <i class="fa fa-folder">
                       </i>
                       View
                     </a>
										@endcan
                  </div>
									@can('contact-delete')
                   <div class="btn-group d-flex">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $cont->id], 'onsubmit' => 'return confirmDelete()']) !!}
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
						{{ $conts->render("pagination::simple-bootstrap-4") }}
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
