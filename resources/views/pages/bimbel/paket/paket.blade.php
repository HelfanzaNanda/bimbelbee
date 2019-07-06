<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 05/07/2019
 * Time: 20:50
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 01/07/2019
 * Time: 23:10
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
                            <a href="{{route('paket.create')}}" class="btn btn-info btn-sm float-right"><i
                                        class="fa fa-plus"></i> Add</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($paket as $paket)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$paket->paket}}</td>
                                    <td>{{$paket->harga}}</td>
                                    {{--@if($paket->deleted_at == '1')
                                        <td><span class="badge badge-danger">ditolak</span></td>
                                    @elseif($notif->status == '1')
                                        <td><span class="badge badge-warning">menunggu</span></td>
                                    @endif--}}

                                    <td>
                                        <a class='btn btn-warning btn-sm' href="{{route('paket.edit', $paket->id)}}"><i
                                                    class="fa fa-pencil"></i> </a>
                                        <a class='btn btn-danger btn-sm' href="{{route('paket.destroy', $paket->id)}}"
                                           onclick="return confirm('Apakah Anda Yakin Akan Menghapus Da ta Ini?')"><i
                                                    class="fa fa-trash"></i> </a>
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

<script type="text/javascript">
    function functionDelete(url) {
        swal({
            title: 'Apakah anda yakin untuk menghapus akun Bimbel?',
            text: "Jika akan menghapus klik tombol Ya",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Tidak, Kembali!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            swal("Dihapus!", "Akun Bimbel Berhasil Dihapus!", "success");
            window.location = url;

        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal("Batalkan", "Akun Bimbel Tidak Jadi Dihapus", "error")
            }

        })
    }

</script>


