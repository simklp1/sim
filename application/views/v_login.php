<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMRS KELOMPOK 1 | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('template/bootstrap/css/bootstrap.min.css')?> ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('template/dist/css/AdminLTE.min.css') ?> ">
  <link rel="stylesheet" href="<?php echo base_url('template/plugins/iCheck/square/blue.css') ?> ">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SIMRS |</b>Kelompok 1</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk untuk melanjutkan</p>

    <form action="<?php echo base_url('index.php/Login/aksi_login') ?> " method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="Username" required="required" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('template/plugins/jQuery/jquery-2.2.3.min.js') ?> "></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('template/bootstrap/js/bootstrap.min.js') ?> "></script>
<!-- iCheck -->
<script src="<?php echo base_url('template/plugins/iCheck/icheck.min.js') ?> "></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
