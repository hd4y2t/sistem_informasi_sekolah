    <div class="content-wrapper">
      <section class="content">

        <div class="row">

          <div class="panel panel-primary" style="margin-left: 1%; margin-right: 1%;">
            <div class="panel-heading">
              <p>HALAMAN ADMINISTRATOR SMK SWAKARYA PALEMBANG</p>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-lg-3 col-xs-12">
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3><i class="fa fa-users"></i> <?php echo $jumlah_siswa ?><sup style="font-size: 20px"></sup></h3>
                        <p>Jumlah Siswa</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer"> Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-xs-12">
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3><i class="fa fa-bank"></i> <?php echo $jumlah_kelas ?><sup style="font-size: 20px"></sup></h3>
                        <p>Jumlah Kelas</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer">Selengkapnya<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-xs-12">
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3><i class="fa fa-graduation-cap"></i> <?php echo $jumlah_guru ?></h3>
                        <p>Jumlah Guru</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-xs-12">
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><i class="fa fa-user"></i> <?php echo $jumlah_admin ?></h3>
                        <p>Jumlah Admin</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder bg-color-gray">
                    <div class="panel-body">
                      <i class="fa fa-list fa-5x"></i>
                      <h3>3 Pengumuman </h3>
                    </div>
                    <div class="panel-footer back-footer-white putih">
                      <a href="http://localhost/nirasoft/admin/pengumuman">Management Pengumuman</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder bg-color-gray">
                    <div class="panel-body">
                      <i class="fa fa-pencil fa-5x"></i>
                      <h3>8 Berita dan Informasi </h3>
                    </div>
                    <div class="panel-footer back-footer-white putih">
                      <a href="<?php echo base_url() . 'admin/artikel' ?>">Manajemen Berita</a>
                    </div>
                  </div>
                </div>



      </section>
    </div>
    <footer class="main-footer">

    </footer>