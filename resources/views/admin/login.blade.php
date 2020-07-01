<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gizi Sehat | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" href="{{ asset('guest/images/icon-index.png') }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Gizi</b>Sehat</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Admin</p>
    <form action="/post-login" method="post">
      @csrf
      @error('inpusername')
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-ban"></i> {{ $message }}
        </div>
      @enderror
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="inpusername" autocomplete="off" maxlength="100">
        <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
      </div>
      @error('inppassword')
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-ban"></i> {{ $message }}
        </div>
      @enderror
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="inppassword" maxlength="100">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
      </div>
      <hr style="margin-top: 5px; margin-bottom: 5px;">
      <div class="row">
        <div class="col-xs-12">
          <a href="/" class="btn btn-danger btn-flat"><i class="fa fa-reply-all"></i></a>&ensp; Kembali Ke Halaman Utama
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
