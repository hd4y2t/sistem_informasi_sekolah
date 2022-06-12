<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Admin SMK Swakarya Palembang| Dashboard</title>
  <link rel="shortcut icon" type="image/icon" href="<?php echo base_url() . 'assets/template/images/logo.png' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>bootstrap/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>user/css/skin-black.css">
</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>S</b>MK</span>
        <span class="logo-lg"><b>Admin</b> | SMK MA'ARIF</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="m pull-right" style="margin-top: 7px; margin-right: 1%;">
          <a href="<?php echo base_url() . 'admin/logout' ?>" class="btn btn-warning btn-flat"><i class="fa fa-gear"></i> Akun</a>
          <a href="<?php echo base_url() . 'admin/logout' ?>" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('nama'); ?></p>
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
            <a href="<?php echo base_url() . 'admin' ?>"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a>
          </li>



          <li class="treeview">
            <a href="#"><i class="fa fa-pie-chart"></i><span> AKADEMIK SEKOLAH</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/data_siswa' ?>"><i class="fa fa-circle-o"></i> DATA SISWA</a></li>
              <li><a href="<?php echo base_url() . 'admin/data_guru' ?>"><i class="fa fa-circle-o"></i> DATA GURU</a></li>
              <li><a href="<?php echo base_url() . 'admin/data_kelas' ?>"><i class="fa fa-circle-o"></i> DATA KELAS</a></li>
              <li><a href="<?php echo base_url() . 'admin/pelajaran' ?>"><i class="fa fa-circle-o"></i> DATA PELAJARAN</a></li>
              <li><a href="<?php echo base_url() . 'admin/jurusan' ?>"><i class="fa fa-circle-o"></i> DATA JURUSAN</a></li>
              <li><a href="<?php echo base_url() . 'admin/jadwal' ?>"><i class="fa fa-circle-o"></i> DATA JADWAL PELAJARAN</a></li>
              <li><a href="<?php echo base_url() . 'admin/data_iuran' ?>"><i class="fa fa-circle-o"></i> DATA IURAN SISWA</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-bank"></i><span> PROFIL SEKOLAH </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/profil_sekolah' ?>"><i class="fa fa-circle-o"></i> <span>PROFIL SEKOLAH</span></a></li>
              <li><a href="<?php echo base_url() . 'admin/ekstrakulikuler' ?>"><i class="fa fa-circle-o"></i> EKSTRAKULIKULER</a></li>
              <li><a href="<?php echo base_url() . 'admin/fasilitas_sekolah' ?>"><i class="fa fa-circle-o"></i> FASILITAS SEKOLAH</a></l>
            </ul>
          </li>
          <li>
          <li class="treeview">
            <a href="#"><i class="fa fa-file"></i> <span>KONTEN DAN INFORMASI</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url() . 'admin/artikel' ?>"><i class="fa fa-circle-o"></i>BERITA & INFORMASI</a></li>
              <li><a href="<?php echo base_url() . 'admin/pengumuman' ?>"><i class="fa fa-circle-o"></i> PENGUMUMAN</a></li>
            </ul>
          </li>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-gear"></i><span> PENGATURAN </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/manajemen_admin' ?>"><i class="fa fa-circle-o"></i> MANAJEMEN ADMIN</a></li>
            </ul>
          </li>
      </section>
    </aside>
</body>

<script src="<?php echo base_url() . 'assets/tinymce/' ?>js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>js/app.min.js"></script>
<script>
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