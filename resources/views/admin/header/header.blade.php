
<header class="main-header">
  <!-- Logo -->
  <a href="{{route('admin.dashboard')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>E</b>C</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>E</b>commerce</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('public/cd-admin/creatu/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{asset('public/cd-admin/creatu/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

              <p>
                {{Auth::user()->name}}
                <small>Member since Nov. 2012</small>
              </p>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{route('admin.logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" align="center"><h4>Services</h4></li>
      <li>
        <a href="{{url('/dashboard')}}">
          <i class="fa fa-dashboard"></i><span>Dashboard</span>
        </a>

      </li>
      @if(Auth::user()->role == 'SuperAdmin' || Auth::user()->role == 'Admin')
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Role Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('view-role')}}"><i class="fa fa-eye"></i> View Roles</a></li>
          @if(Auth::user()->role == 'SuperAdmin')
          <li><a href="{{route('add-roleform')}}"><i class="fa fa-edit"></i> Add Roles</a></li>
          <li><a href="{{route('give-role-form')}}"><i class="fa fa-edit"></i> Give Role</a></li>
          @endif
        </ul>
      </li>
      <li>
        <a href="{{route('view-customer')}}">
          <i class="fa fa-question"></i><span>View Customers</span>
        </a>

      </li>
      @endif
    </aside>