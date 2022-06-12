<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN | SISWA</title>
  <link href="<?php echo base_url() . 'assets/template/images/logo.png' ?>" rel="shortcut icon" type="image/ico" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/blue.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/morris.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/bootstrap3-wysihtml5.min.css">
</head>

<div class="box-header">
  <div class="box-body">
    <div class="alert alert-light" style="background-color: #a7d7e6; color: #000;">
      <div class="login-logo">
        <img src="<?php echo base_url() ?>assets/template/images/logo.png" alt=""> SMK SWAKARYA PALEMBANG
      </div>
    </div>
  </div>
</div>

<div class="login-box" style="margin-top: 4%;">
  <?php $info = $this->session->flashdata('info');
  if (!empty($info)) {
    echo "$info";
  } ?>
  <form action="<?php echo base_url() . 'siswa/login' ?>" method="post">
    <div class="form-group has-feedback">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="text-center" style="color: #af0600;"> </div>
    <button type="submit" class="btn btn-danger btn-flat pull-right"><i class="fa fa-key"></i> Login</button>

</div>
</form>
</div>
</div>

<div class="box-header with-border">
  <div class="box-body">
    <div class="alert alert-light" style="background-color: #a7d7e6; color: #000;">
    </div>
  </div>

  </body>

  <script src="user/js/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/jquery.knob.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/daterangepicker.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>user/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>dist/js/app.min.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>dist/js/dashboard.js"></script>
  <script src="<?php echo base_url() . 'assets/' ?>dist/js/demo.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  </body>

</html>