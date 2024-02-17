@extends('admin.layout.base')

@section('title') {{'Dashboard'}} @endsection
@section('content')
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Admin Dashboard</h2>
				<h5>Welcome <b>{{ ucwords(Auth::user()->name)  ?? 'Guest'}}</b> , Love to see you back. </h5> </div>
		</div>
		<!-- /. ROW  -->

		<hr />
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-back noti-box"> <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-trophy"></i>
                </span>
					<div class="text-box">
						<p class="main-text">{{$achievements}}</p>
						<p class="text-muted">
							@if(\Auth::user()->can('achievement-list'))
							<a href="{{ route('achievement.index') }}">{{(($achievements) > 1) ? 'Achievements' : 'Achievement'}}</a>
							@else
							<span>{{(($achievements) > 1) ? 'Achievements' : 'Achievement'}}</span>
							@endif
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-back noti-box">
					<span class="icon-box bg-color-green set-icon"><i class="fa fa-users"></i></span>
					<div class="text-box">
						<p class="main-text">{{$users}}</p>
						<p class="text-muted">
							@if(\Auth::user()->can('user-list'))
							<a href="{{ route('users.index') }}">{{(($users) > 1) ? 'Users' : 'User'}}</a>
							@else
							<span>{{(($users) > 1) ? 'Users' : 'User'}}</span>
							@endif
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-back noti-box"> <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-tasks"></i>
                </span>
					<div class="text-box">
						<p class="main-text">{{$categories}} </p>
						<p class="text-muted">
							@if(\Auth::user()->can('category-list'))
							<a href="{{ route('category.index') }}">{{(($categories) > 1) ? 'Categories' : 'Category'}}</a>
							@else
							<span>{{(($categories) > 1) ? 'Categories' : 'Category'}}</span>
							@endif
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-back noti-box"> <span class="icon-box bg-color-brown set-icon">
          <i class="fa fa-envelope"></i>
                </span>
					<div class="text-box">
						<p class="main-text">{{$messages}}</p>
						<p class="text-muted">
							@if(\Auth::user()->can('contact-list'))
							<a href="{{ route('contact.index') }}">{{(($messages) > 1) ? 'New Messages' : 'New Message'}}</a>
							@else
							<span>New Message</span>
							@endif
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />

		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">Achievements Statistics </div>
					<div class="panel-body">
						<div id="morris-bar-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"> Recents Added Achievements</div>
				</div>

				@if(count($recents) > 0)
					@foreach($recents->take(2) as $ach)
					<div class="panel panel-primary text-center no-boder bg-color-default">
						<div class="panel-body">
							<img src="{{ asset('storage/'.$ach->image) }}" class="img-fluid" alt="achievs-image">
							<h4> {{ strtoUpper(date('M , Y', strtotime($ach->date))) }} </h4>
						</div>
						<div class="panel-footer back-footer-default">{{ mb_strimwidth(ucfirst($ach->title),0,21,'...')}}</div>
					</div>
					@endforeach
				@else
				<div class="panel panel-primary text-center no-boder bg-color-default">
					<div class="panel-body">
						<h5> Padding record ...</h5>
					</div>
				</div>
				@endif

			</div>
		</div>
		<!-- /. ROW  -->
	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
