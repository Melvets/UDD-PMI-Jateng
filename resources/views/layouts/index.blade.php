<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UDD PMI Jawa Tengah | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../template/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../../../template/plugins/daterangepicker/daterangepicker.css">
</head>

<!-- ===================================================================================================================================== -->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block dropdown user user-menu open">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">
          <img src="../../../template/dist/img/avatar4.png" class="user-image" alt="User Image">
          <span class="hidden-xs">Dhiya</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../../../template/dist/img/avatar4.png" class="img-circle " alt="User Image">
            <p> 
              Dhiya <small>Configurator</small>
            </p>
          </li>
          <!-- Menu Body -->
         
          <!-- Menu Footer-->
          <li class="user-footer">
            <form class="text-center" action="/dashboard/logout" method="POST">
              @csrf
              <button class="btn btn-danger">Logout</button>
          </form>
          </li>
        </ul>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="../../../template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">E-Office UDD PMI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../template/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="/dashboard/alamatudd" class="nav-link {{ Request::is('dashboard/alamatudd*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>Alamat UDD</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/stokdarah" class="nav-link {{ Request::is('dashboard/stokdarah*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>Stok Darah</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/jadwalmu" class="nav-link {{ Request::is('dashboard/jadwalmu*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>Jadwal MU</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
        @yield('container')
      </div>


    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="../../../template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../template/plugins/moment/moment.min.js"></script>
<script src="../../../template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../template/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../template/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../template/dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="../../../tempate/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../tempate/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../tempate/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../tempate/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../tempate/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../tempate/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../tempate/plugins/jszip/jszip.min.js"></script>
<script src="../../../tempate/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../tempate/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../tempate/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../tempate/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../tempate/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Icons -->
<script>feather.replace();</script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
