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

@extends('templates.default')

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
                            @foreach($notif as $notif)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$notif->name}}</td>
                                    <td>{{$notif->email}}</td>
                                    <td><img src="{{asset('uploads/user bimbel/'.$notif->avatar)}}" width="50"
                                             height="50"></td>
                                    @if($notif->status == '0')
                                        <td><span class="badge badge-danger">ditolak</span></td>
                                    @elseif($notif->status == '1')
                                        <td><span class="badge badge-warning">menunggu</span></td>
                                    @endif


                                    <td>
                                        @if($notif->status != '0')
                                            <form action="{{route('notifikasi.dev.diterima', $notif->id)}}"
                                                  method="put">
                                                <button type="submit" class="btn btn-sm btn-success">Diterima</button>
                                            </form>
                                        @else
                                            <a class='btn btn-danger btn-sm' href="{{route('notifikasi.dev.dihapus', $notif->id)}}"
                                               onclick="return confirm('Apakah Anda Yakin Akan Menghapus Da ta Ini?')" class=""><i
                                                        class="fa fa-trash"></i> </a>
                                        @endif

                                        @if($notif->status != '0')
                                            <form action="{{route('notifikasi.dev.ditolak', $notif->id)}}"
                                                  method="put">
                                                <button type="submit" class="btn btn-sm btn-danger">Ditolak</button>
                                            </form>
                                        @endif
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
    function functionDelete(url){
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

