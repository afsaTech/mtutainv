<div class="row">
  <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-dark p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div id="navbar-collapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item {{(request()->routeIs('home.index')) ? 'active' : ''}}"> <a href="{{ route('home.index') }}" class="nav-link">Home</a></li>
          <li class="nav-item dropdown {{(request()->routeIs('company*')) ? 'active' : ''}}"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ route('company.about') }}">About Us</a></li>
              {{-- <li><a href="{{ route('company.management') }}">Management</a></li> --}}
            </ul>
          </li>
          {{-- <li class="nav-item dropdown {{(request()->routeIs('expartise*')) ? 'active' : ''}}"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Exparties <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ route('expartise.research') }}">Research and Evaluation</a></li>
              <li><a href="{{ route('expartise.project_mgt') }}">Project Management</a></li>
              <li><a href="{{ route('expartise.monitoring') }}">Monitoring and Evaluation Systems</a></li>
              <li><a href="{{ route('expartise.dbms') }}">Database Management System</a></li>
              <li><a href="{{ route('expartise.agency') }}">Data collection Agency</a></li>
              <li><a href="{{ route('expartise.capacity_building') }}">M&E Training</a></li>
              <li><a href="{{ route('expartise.future_projects') }}">Grants Application</a></li>
            </ul>
          </li> --}}
          <li class="nav-item {{(request()->routeIs('performance*')) ? 'active' : ''}}"> <a href="{{ route('performance.achievs') }}" class="nav-link" >Current and Past Performance </a>
          <li class="nav-item {{(request()->routeIs('message*')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('message.create')}}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!--/ Col end -->
</div>
<!--/ Row end -->
