<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('../bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('../bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="icon" type="image/jpg" href="{{asset('images/topi.jpg')}}">
  <link rel="stylesheet" href="{{asset('../bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('../dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{asset('../dist/css/skins/skin-red-light.min.css')}}">


  <script src="{{url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
  <script src="{{url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>


  <!-- Google Font -->
  <link rel="stylesheet"
        href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
</head>

<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Welcome</b> Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('../dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:black;">Admin</p>
          <!-- Status -->
          <a href="#" style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
          
        </div> 
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" style="background:white">
        <li class="header">
        </span></li>
        <li class="header"><span class="pull-right">
          <a href="{{ url('/admin/logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out"> Logout</i>
      </a>
      <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li ><a href="{{url('admin/users')}}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li ><a href="{{url('admin/books')}}"><i class="fa fa-book"></i> <span>Books</span></a></li>
        <li ><a href="{{url('admin/categories')}}"><i class="fa fa-copy"></i> <span>Categories</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1> @yield('title')</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">

  </footer>



<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>