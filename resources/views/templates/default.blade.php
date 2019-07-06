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

@include('templates.partials.dev._head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
@include('templates.partials.dev._navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('templates.partials.dev._sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')
    <!-- Content Header (Page header) -->
    {{--<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>--}}
    <!-- /.content-header -->

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

@include('templates.partials.dev._script')
</body>
</html>
