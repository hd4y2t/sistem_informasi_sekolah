<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin SMK Ma'arif | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/blue.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/morris.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>user/css/bootstrap3-wysihtml5.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><h1>Login</h1></b>SISWA</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Masukan username dan password admin dengan benar</p>

    <form action="<?php echo base_url().'index.php/akademik/home_siswa'; ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
</body>
<!-- ./wrapper -->
<script src="user/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/morris.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/jquery.knob.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/daterangepicker.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>user/fastclick/fastclick.js"></script>
<script src="<?php echo base_url().'assets/' ?>dist/js/app.min.js"></script>
<script src="<?php echo base_url().'assets/' ?>dist/js/dashboard.js"></script>
<script src="<?php echo base_url().'assets/' ?>dist/js/demo.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
</body>
</html>
