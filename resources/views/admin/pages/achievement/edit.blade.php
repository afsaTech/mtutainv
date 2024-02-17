@extends('admin.layout.base')

@section('title') {{'Achievement'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Edit Achievement</h2>
				<h5>Please edit the achievement and save changes. </h5>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		@include('admin.layout.includes.successWalert')
 		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-heading"> Edit Achievement </div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form role="form" action="{{ route('achievement.update', $ach->id) }}" method="post" enctype="multipart/form-data">
                  @method('PATCH')
                	<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control" name="title" value="{{$ach->title}}"/>
									 </div>
										<div class="form-group">
											<label>Abstract</label>
											<textarea type="textarea" class="form-control @error('abstract') is-invalid @enderror" rows="3" name="abstract" value="{{$ach->abstract}}">{{$ach->abstract}}</textarea>
										</div>

										<div class="form-group">
											<label>Category</label>
											<select name="category_id" class="form-control custom-select">
											 <option value="{{$ach->category->id}}">{{$ach->category->name}}</option>
											 @if(count($cats) > 0)
											 @foreach($cats as $cat)
											 <option value="{{$cat->id}}">{{$cat->name}}</option>
											 @endforeach
											 @endif
										 </select>
										</div>

										<div class="form-group">
											<label>Date</label>
											<input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{$ach->date}}" />
										 </div>

										 <div class="form-group">
											 <label for="exampleInputFile">Image Uploaded</label>
											 <br>
											 <a href="{{ route('achievement.show', $ach->id)}}">
												 <img id="preview" src="{{ asset('storage/'.$ach->image)}}" alt="" width="80px" height="70px" class="mb-2">
											 </a>
											 <div class="input-group">
												 <div class="custom-file">
													 <input type="hidden" name="hidden_image" value="{{$ach->image}}" class="custom-file-input" id="exampleInputFile">
													 <input type="file" name="image" class="custom-file-input" id="imgInp" accept="image/*">
													 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
												 </div>
											 </div>
										 </div>

                      <div class="form-group">
                        <label>Status</label>
                         <select class="form-control" name="status">
                             <option value="{{ $ach->status }}">{{ (($ach->status == true) ? 'Active' : 'Inactive') }}</option>
                             <option value="1">Active</option>
                             <option value="0">Inactive</option>
                        </select>
                      </div>

											<br /><br />
									 		<button type="submit" class="btn btn-success">Update</button>&nbsp;&nbsp;
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
@section('inlineJs')
<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#preview').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
</script>
@endsection
@endsection
