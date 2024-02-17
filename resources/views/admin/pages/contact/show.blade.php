@extends('admin.layout.base')

@section('title') {{'Message'}} @endsection
@section('inlineStyle')
<!-- TABLE STYLES-->
<link href="{!! asset('admin/assets/js/dataTables/dataTables.bootstrap.css') !!}" rel="stylesheet" />
@endsection

@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>View Message</h2>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"> Message </div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Send By</th>
											<th>Email</th>
											<th>Subject</th>
											<th>Message</th>
											<th>Sent On</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ ucfirst($cont->name) }}</td>
											<td>{{ $cont->email }}</td>
											<td>{{ ucfirst($cont->subject) }}</td>
											<td>{{ ucfirst($cont->message) }}</td>
											<td>{{ ucfirst($cont->created_at) }}</td>
										</tr>
									</tbody>
								</table>
						</div>
						<a href="{{ route('contact.index') }}" class="btn btn-primary"><< Back</a>
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
