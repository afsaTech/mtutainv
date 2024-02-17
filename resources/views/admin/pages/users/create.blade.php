@extends('admin.layout.base')

@section('title') {{'User'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Create New User</h2>
				<h5>Create new user and assign role to the user. </h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> New User </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form role="form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Please Enter Name" />
										@error('name')
									 <span class="invalid-feedback text-danger" role="alert">
										 * {{ $message }}
									 </span>
									 @enderror
									 </div>
									 <div class="form-group">
										 <label>Email</label>
										 <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Please Enter Email" />
										 @error('email')
										 <span class="invalid-feedback text-danger" role="alert">
											 * {{ $message }}
								   	</span>
								  	@enderror
										</div>
										<div class="form-group">
											<strong>Role:</strong>
								 			{!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
										</div>
								  	</div>
											<br /><br />
									 		<button type="submit" class="btn btn-primary">Submit</button>
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
