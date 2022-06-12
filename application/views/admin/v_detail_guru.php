<div class="content-wrapper">
  <section class="content center">
    <div class="row">
      <div class="col-md-8" style="margin-left: 35%;">
       <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
          <div class="panel panel-heading"><center><b>DETAIL DATA GURU</b></center></div>
          <?php foreach ($detail->result() as $row) { ?>
            <div class="box-body">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'upload'?>siswa.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">ANDRY SYAHPUTRA</h3>
              <p class="text-muted text-center">1234561</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>KELAS</b><a class="pull-right"> XI AP 3</a>
                </li>
                <li class="list-group-item">
                  <b>ALAMAT</b><a class="pull-right"> <?php echo $row->nama_kelas ?></a>
                </li>
                <li class="list-group-item">
                  <b>JENIS KELAMIN</b><a class="pull-right"> LAKI-LAKI</a>
                </li>
                <li class="list-group-item">
                  <b>TANGGAL LAHIR</b><a class="pull-right">05-09-1997</a>
                </li>
                <li class="list-group-item">
                  <b style="color: red;">NAMA AYAH</b><a class="pull-right"> DARUS</a>
                </li>
                <li class="list-group-item">
                  <b style="color: red;">NAMA IBU</b><a class="pull-right"> SIMANIATI</a>
                </li>
                <li class="list-group-item">
                  <b style="color: red;">TELEPON</b><a class="pull-right"> 089589985818</a>
                </li>
                <li class="list-group-item">
                 <b style="color: red;">PEKERJAAN ORANG TUA</b><a class="pull-right">PNS</a>
                </li>
              </ul>
              <?php } ?>
              <center><a class="btn btn-primary"><i class="fa fa-arrow-left"></i> KEMBALI</a> | <a class="btn btn-success"><i class="fa fa-edit"></i>EDIT</a> | <a class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</a> </center>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>








