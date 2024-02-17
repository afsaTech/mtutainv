<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<a class="navbar-brand" href="{{ route('admin.index') }}">Mtuta Inv.</a>
  </div>
	{!! Form::open(['method' => 'POST', 'route' => 'logout', 'id' => 'logout-form']) !!}
	<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
		<span>{{ucwords(Auth::user()->name ?? 'Guest')}}&nbsp;&nbsp;</span>
		<a href="#" class="btn btn-danger square-btn-adjust" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	</div>
	@csrf
 {!! Form::close() !!}
</nav>
