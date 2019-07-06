<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/square/blue.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a>Register<b>Dev</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('dev.register.submit')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group has-feedback">
                    <input id="name" type="text" placeholder="Masukkan Nama"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input id="email" type="email" placeholder="Masukkkan Email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input id="password" type="password" placeholder="Masukkan Password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Masukkan Confirm Passowrd"
                           name="password_confirmation" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="file" required="required" name="avatar" onchange="loadfile(event)"
                           class="form-control {{$errors->has('avatar')?'is-invalid':''}}"
                           id="avatar">
                    <br>
                    <img id="output" class="img-fluid" height="100" width="100">
                    @if ($errors->has('avatar'))
                        <span class="invalid-feedback" role="alert">
                            <p><b>{{ $errors->first('avatar') }}</b></p>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass   : 'iradio_square-blue',
            increaseArea : '20%' // optional
        })
    })
</script>

<script>
    var loadfile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>



</body>
</html>
