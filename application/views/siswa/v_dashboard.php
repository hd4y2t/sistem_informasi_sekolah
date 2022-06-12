<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Siswa SMK Swakarya Palembang| Dashboard</title>
  <link rel="shortcut icon" type="image/icon" href="<?php echo base_url() . 'assets/template/images/logo.png' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/green.css">
</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>S</b>MK</span>
        <span class="logo-lg"><b>SISWA</b> | SMK SWAKARYA PALEMBANG</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img class="img-circle" src="<?php echo base_url() . 'upload/siswa/' . $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('nama'); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('id_kelas'); ?></a>
          </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </section>
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li>
            <a href="<?php echo base_url() . 'siswa/dashboard' ?>"><i class="fa fa-home"></i> <span>DASHBOARD</span></a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'siswa/logout' ?>"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a>
          </li></a>
          </li>
      </section>
    </aside>
</body>
<script src="<?php echo base_url() . 'assets/' ?>user/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>user/js/dashboard.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>user/js/demo.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>sample/dist/js/app.min.js"></script>
<script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>