@extends('admin.layout.base')

@section('title') {{'User'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Edit User Details</h2>
				<h5><b>Note:</b>	You can update user information including name and email but you cannot change the user's initial password.</h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> Edit User </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
                <form role="form" action="{{ route('users.update', $user->id) }}" method="post">
                  @method('PATCH')
                	<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" value="{{$user->name}}" />
									 </div>

									 <div class="form-group">
										 <label>Email</label>
										 <input type="email" class="form-control" name="email" value="{{$user->email}}" />
										 <input type="hidden" name="hidden_paswd" value="{{$user->password}}">
									 </div>

									 <div class="form-group">
											<strong>Role:</strong>
											{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
									 </div>

										<br /><br />
								 		<button type="submit" class="btn btn-success">Update</button>
										<a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
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
