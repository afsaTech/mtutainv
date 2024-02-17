@extends('admin.layout.base')

@section('title') {{'Category'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Edit Category</h2>
				<h5>Please edit the category and save changes. </h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> Edit Category </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form role="form" action="{{ route('category.update', $cat->id) }}" method="post">
                  @method('PATCH')
                	<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$cat->name}}"/>
									 </div>

										<div class="form-group">
											<label>Description</label>
											<textarea type="textarea" class="form-control @error('desc') is-invalid @enderror" rows="3" name="desc" value="{{$cat->desc}}">{{$cat->desc}}</textarea>
										</div>

										<br /><br />
								 		<button type="submit" class="btn btn-success">Update</button>&nbsp;&nbsp;
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
