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

                        <form id="form1" action="{{route('bimbel.store')}}" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Bimbel</label>
                                    <input type="text" required="required" name="name"
                                           class="form-control" disabled id="name"
                                           placeholder="Masukkan Nama Bimbel" value="{{Auth::user()->name}}">
                                </div>


                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" required="required" name="foto" onchange="loadfile(event)"
                                           class="form-control {{$errors->has('foto')?'is-invalid':''}}"
                                           id="foto">
                                    <img id="output" class="img-fluid" height="100" width="100">
                                    @if ($errors->has('foto'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('foto') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" required
                                           class="form-control {{$errors->has('judul')?'is-invalid':''}}"
                                           placeholder="Masukkan Judul Bimbel" value="{{Auth::user()->judul}}">
                                    @if ($errors->has('judul'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('judul') }}</b></p>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="judul">Deskripsi</label>
                                    <textarea name="deskripsi" cols="30" rows="5"
                                              class="form-control {{$errors->has('deskripsi')?'is-invalid':''}}"
                                              placeholder="Masukkan Deskripsi Bimbel">{{Auth::user()->deskripsi}}</textarea>
                                    @if ($errors->has('deskripsi'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('deskripsi') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" cols="30" rows="5"
                                              class="form-control {{$errors->has('alamat')?'is-invalid':''}}"
                                              placeholder="Masukkan Alamat Bimbel">{{Auth::user()->alamat}}</textarea>
                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('alamat') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nohp">No Hp</label>
                                    <input type="number" name="nohp" required
                                           class="form-control {{$errors->has('nohp')?'is-invalid':''}}"
                                           placeholder="Masukkan No Hp Bimbel" value="{{Auth::user()->nohp}}">
                                    @if ($errors->has('nohp'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('nohp') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="jenjang">Jenjang</label>
                                    <select name="jenjang" class="form-control">
                                        <option value="SD"@if(Auth::user()->jenjang =='SD'){{"selected"}}@endif>SD</option>
                                        <option value="SMP"@if(Auth::user()->jenjang =='SMP'){{"selected"}}@endif>SMP</option>
                                        <option value="SMA"@if(Auth::user()->jenjang =='SMA'){{"selected"}}@endif>SMA</option>
                                        <option value="SD, SMP"@if(Auth::user()->jenjang =='SD, SMP'){{"selected"}}@endif>SD,SMP</option>
                                        <option value="SMP, SMA"@if(Auth::user()->jenjang =='SMP, SMA'){{"selected"}}@endif>SMP,SMA</option>
                                        <option value="SD, SMP, SMA"@if(Auth::user()->jenjang =='SD, SMP, SMA'){{"selected"}}@endif>SEMUA</option>
                                    </select>
                                </div>

                                <div class="box-footer form-group">
                                    <button type="submit" value="submit" class="btn btn-primary">
                                        <i class="fa fa-hdd-o"></i> Simpan
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

