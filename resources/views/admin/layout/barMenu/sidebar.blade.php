<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<!-- <li class="text-center"> <img src="{!! asset('admin/assets/img/find_user.png') !!}" class="user-image img-responsive" /> </li> -->
			<li class="text-center">&nbsp;</li>
			<li><a class="{{(request()->routeIs('admin*')) ? 'active-menu' : ''}}" href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a> </li>
			<li> <a class="{{(request()->routeIs('achievement*')) ? 'active-menu' : ''}}" href="#"><i class="fa fa-sitemap fa-2x"></i> Achievements <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li> <a href="{{ route('achievement.index') }}">List Achievement</a> </li>
					@can('achievement-create')
					<li> <a href="{{ route('achievement.create') }}">Create Achievement</a> </li>
					@endcan
				</ul>
			</li>
			<li> <a class="{{(request()->routeIs('category*')) ? 'active-menu' : ''}}" href="#"><i class="fa fa-list fa-2x"></i> Categories <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li> <a href="{{ route('category.index') }}">List Categories</a> </li>
					<li> <a href="{{ route('category.create') }}">Create Category</a> </li>
				</ul>
			</li>
			<li><a class="{{(request()->routeIs('contact*')) ? 'active-menu' : ''}}" href="{{ route('contact.index') }}"><i class="fa fa-phone fa-2x"></i> Contacts </a></li>
			<li class="text-left"><br/><span class="text-muted">&nbsp;&nbsp;&nbsp;AUTHENTICATION	</span></li>
			<li><a class="{{(request()->routeIs('user*')) ? 'active-menu' : ''}}" href="{{ route('users.index') }}"><i class="fa fa-users fa-2x"></i> Users</a></li>
			<li><a class="{{(request()->routeIs('roles*')) ? 'active-menu' : ''}}" href="{{ route('roles.index') }}"><i class="fa fa-shield fa-2x"></i> Roles</a></li>
		</ul>
	</div>
</nav>
