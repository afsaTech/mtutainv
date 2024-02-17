@extends('admin.layout.base')

@section('title') {{'Achievements'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Create New Achievement</h2>
				<h5>Create the achievement conducted in different area.
					<a href="{{ route('achievement.index') }}" class="btn btn-primary" style="float: right; margin:0 4px 0 4px">View All</a>
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
					<div class="panel-heading"> New Achievement </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form role="form" action="{{ route('achievement.store') }}" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Please Enter Title" />
										@error('title')
									 <span class="invalid-feedback text-danger" role="alert">
										 * {{ $message }}
									 </span>
									 @enderror
									 </div>

										<div class="form-group">
											<label>Abstract</label>
											<textarea type="textarea" class="form-control @error('abstract') is-invalid @enderror" rows="3" name="abstract" placeholder="Please Enter Some Description" ></textarea>
											@error('abstract')
										 	<span class="invalid-feedback text-danger" role="alert">
											* {{ $message }}
										 </span>
										 @enderror
										</div>

										<div class="form-group">
											<label>Category</label>
											 <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
												 <option selected disabled>Select Category</option>
													 @if(count($cats) > 0)
													 @foreach($cats as $cat)
													 <option value="{{$cat->id}}">{{$cat->name}}</option>
													 @endforeach
													 @endif
											</select>
											@error('category_id')
									 	 	<span class="invalid-feedback text-danger" role="alert">
												* {{ $message }}
										 	</span>
										 @enderror
										</div>

										<div class="form-group">
											<label>Date</label>
											<input type="date" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="Select the Date" />
											@error('date')
										 <span class="invalid-feedback text-danger" role="alert">
											 * {{ $message }}
										 </span>
										 @enderror
										 </div>

								 <div class="form-group">
									 <label>Upload Image</label>
									 <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*">
									 @error('image')
									 <span class="invalid-feedback text-danger" role="alert">
										 * {{ $message }}
									 </span>
									 @enderror
									</div>

									<br /><br />
							 		<button type="submit" class="btn btn-primary">Submit</button>
									<a href="{{ route('achievement.index') }}" class="btn btn-default">Cancel</a>
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
