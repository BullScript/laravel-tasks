<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<!-- Navbar -->
	@include('layouts.nav')

	<!-- Main Sidebar Container -->
	@include('layouts.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	@include('layouts.breadcrumb')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		@yield('content')
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

	@include('layouts.footer')
</div>
<!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
	@include('layouts.scripts')
</body>
</html>