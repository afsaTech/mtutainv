@extends('admin.layout.base')

@section('title') {{'Category'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Create New Category</h2>
				<h5>Create the category conducted in different area.
					<a href="{{ route('category.index') }}" class="btn btn-primary" style="float: right; margin:0 4px 0 4px">View All</a>
				</h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> New Category </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form role="form" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
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
											<label>Description</label>
											<textarea type="textarea" class="form-control @error('desc') is-invalid @enderror" rows="3" name="desc" placeholder="Please Enter Description" ></textarea>
											@error('desc')
											 <span class="invalid-feedback text-danger" role="alert">
												* {{ $message }}
											 </span>
											 @enderror
										</div>

											<br /><br />
									 		<button type="submit" class="btn btn-primary">Submit</button>
											<a href="{{ route('category.index') }}" class="btn btn-default">Cancel</a>
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
