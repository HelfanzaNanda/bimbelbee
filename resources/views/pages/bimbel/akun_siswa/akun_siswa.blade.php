<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 01/07/2019
 * Time: 23:30
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 01/07/2019
 * Time: 23:27
 */
?>

@extends('templates.bimbel')

@section('content')

    <section class="content-header">
        @if($message = Session::get('create'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        @if($message = Session::get('update'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        @if($message = Session::get('delete'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">karyawan</a></li>
                        <li class="breadcrumb-item active">Data karyawan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Karyawabn
                            <a href="{{route('usiswa.create')}}" class="btn btn-info btn-sm float-right"><i
                                        class="fa fa-plus"></i> Add</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($usiswa as $usiswa)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$usiswa->name}}</td>
                                    <td>{{$usiswa->email}}</td>
                                    <td><img src="{{asset('uploads/user siswa/'.$usiswa->avatar)}}" width="50" height="50"></td>
                                    @if($usiswa->status == '2')
                                        <td><span class="badge badge-success">diterima</span></td>
                                    @endif
                                    <td>
                                        <a href="{{route('usiswa.edit', $usiswa->id)}}" class="btn btn-warning btn-sm"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a href="{{route('usiswa.destroy', $usiswa->id)}}"
                                           onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')"
                                           class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <?php $no++ ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

