@extends('admin.layout.base')

@section('title') {{'Roles'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Edit Role</h2>
				<h5>Edit role and save changes. </h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> Role </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
                <form role="form" action="{{ route('roles.update', $role->id) }}" method="post">
                  @method('PATCH')
                  <div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" value="{{$role->name}}" />
									 </div>

                   <div class="form-group">
                     <strong>Permission:</strong>
                     <br/>
                     @foreach($permission as $value)
                         <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                         {{ $value->name }}</label>
                     <br/>
                     @endforeach
                   </div>
								  	</div>
											<br /><br />
									 		<button type="submit" class="btn btn-primary">Update</button>
											<a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
									 @csrf
								</form>

							</div>

						</div>
					</div>
				</div>
				<!-- End Form Elements -->
			</div>
		</div>

	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
