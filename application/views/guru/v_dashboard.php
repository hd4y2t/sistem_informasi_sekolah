<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Guru SMK Swakarya Palembang| Dashboard</title>
  <link rel="shortcut icon" type="image/icon" href="<?php echo base_url() . 'assets/template/images/logo.png' ?>" />
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
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/dataTables.bootstrap.css">
</head>

<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>S</b>MK</span>
        <span class="logo-lg"><b>HALAMAN GURU</b> | SMK SWAKARYA PALEMBANG</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama_guru'); ?> </span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url() . 'guru/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <ul class="sidebar-menu">
          <li>
            <a href="<?php echo base_url() . 'guru/dashboard/' ?>"><i class="glyphicon glyphicon-dashboard"></i> <span>DASHBOARD</span></a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'guru/jadwal' ?>"><i class="glyphicon glyphicon-edit"></i> <span>JADWAL</span></a>
          </li>
          <!-- <li>
            <a href="<?php echo base_url() . 'guru/nilai' ?>"><i class="glyphicon glyphicon-edit"></i> <span>NILAI SISWA</span></a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'guru/upload_materi' ?>"><i class="glyphicon glyphicon-upload"></i> <span>UPLOAD MATERI PELAJARAN</span></a>
          </li> -->
          <div class="btn-group" style="margin-left: 5%;">
            <button type="button" class="btn btn-danger"><i class="fa fa-graduation-cap"></i> <a href="<?php echo base_url() . 'guru/logout' ?>">Logout</a></button>
            <button type="button" class="btn btn-success"><i class="fa fa-user"></i> <a href="<?php echo base_url() . 'guru/biodata' ?>">Biodata</a></button>
          </div>
        </ul>
      </section>
    </aside>
</body>

<script src="<?php echo base_url() . 'assets/tinymce/' ?>js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>user/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>user/js/dashboard.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>user/js/demo.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/jQuery/jquery-2.2.3.min.js""></script>
<script src=" <?php echo base_url() . 'assets/' ?>js/dist/js/demo.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/app.min.js"></script>
<script type="text/javascript">
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>