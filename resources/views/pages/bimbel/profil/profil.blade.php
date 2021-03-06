<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 02/07/2019
 * Time: 8:20
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

                        <form id="form1" action="{{route('bimbel.profil.update')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Bimbel</label>
                                    <input type="text" required="required" name="name"
                                           class="form-control {{$errors->has('name')?'is-invalid':''}}" id="name"
                                           placeholder="Masukkan Nama Bimbel" value="{{Auth::user()->name}}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('name') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" required="required" name="email"
                                           class="form-control {{$errors->has('email')?'is-invalid':''}}" disabled id="email"
                                           placeholder="Masukkan Email Bimbel" value="{{Auth::user()->email}}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('email') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required="required" name="password"
                                           class="form-control {{$errors->has('password')?'is-invalid':''}}"
                                           id="password" placeholder="Masukkan Password Bimbel">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('password') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Foto</label>
                                    <input type="file" required="required" name="avatar" onchange="loadfile(event)"
                                           class="form-control {{$errors->has('avatar')?'is-invalid':''}}"
                                           id="avatar">
                                    <img id="output" class="img-fluid" height="100" width="100">
                                    @if ($errors->has('avatar'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('avatar') }}</b></p>
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

