<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 05/07/2019
 * Time: 21:30
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 01/07/2019
 * Time: 23:42
 */
?>
@extends('templates.bimbel')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">karyawan</a></li>
                        <li class="breadcrumb-item active">Add karyawan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add karyawan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form id="form1" action="{{route('paket.store')}}" method="POST">
                            {{ csrf_field() }}

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="paket">Paket</label>
                                    <textarea name="paket" cols="30" rows="5"
                                              class="form-control {{$errors->has('paket')?'is-invalid':''}}"
                                              placeholder="Masukkan Paket"></textarea>
                                    @if ($errors->has('paket'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('paket') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" required="required" name="harga"
                                           class="form-control {{$errors->has('harga')?'is-invalid':''}}" id="harga"
                                           placeholder="Masukkan Nama Siswa">
                                    @if ($errors->has('harga'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('harga') }}</b></p>
                                        </span>
                                    @endif
                                </div>


                                <div class="box-footer form-group">
                                    <button type="submit" value="submit" class="btn btn-primary"><i
                                                class="fa fa-hdd-o"></i> Simpan
                                    </button>&nbsp;
                                    <a href="akun" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

<script>
    var loadfile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

