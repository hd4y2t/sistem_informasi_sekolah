    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12 col-sm-4 col-xs-12">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>SELAMAT DATANG <?php echo $this->session->userdata('nama'); ?></h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="content">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-list-alt"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-number">JADWAL PELAJARAN</span>
                    <span class="info-box-text">Lihat informasi nilai</span>
                    <a class="btn btn-primary btn-flat" href="<?php echo base_url() . 'siswa/jadwal' ?>"> Lihat Jadwal <i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-download"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-number">IURAN SPP</span>
                    <span class="info-box-text">Lihat informasi</span>
                    <a class="btn btn-primary btn-flat" href="<?php echo base_url() . 'siswa/iuran' ?>"> Lihat Data <i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange"><i class="fa fa-user"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-number">BIODATA</span>
                    <span class="info-box-text">Lihat informasi data siswa</span>
                    <a class="btn btn-primary btn-flat" href="<?php echo base_url() . 'siswa/biodata' ?>"> Lihat Data <i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
                </div>
              </div>