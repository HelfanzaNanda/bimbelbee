<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 01/07/2019
 * Time: 23:18
 */
?>

        <!DOCTYPE html>
<html>

@include('templates.partials.bimbel._head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
@include('templates.partials.bimbel._navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('templates.partials.bimbel._sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')

        <!-- Main content -->
        <section class="content">

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0-alpha
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('templates.partials.bimbel._script')
</body>
</html>
