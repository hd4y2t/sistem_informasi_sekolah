<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php foreach ($profil->result() as $row) { ?>

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Profile</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Profile</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- team section -->
    <section class="w3l-homeblock1 py-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-xl-5">
                    <h3 class="title-style mb-3">SMK SwaKarya <span>Palembang</span></h3>
                    <p class=""><?= $row->sejarah ?> </p>
                    <p class="mt-3"><?= $row->visi_misi ?> </p>
                    <div class="mt-4">
                        <ul class="service-list">
                            <?php foreach ($jurusan as $j) { ?>
                                <li class="service-link"><a><i class="fas fa-check-circle"></i><?= $j->nama_jurusan ?>
                                    </a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 homeaboutblock mt-lg-0 mt-5">
                    <img src="<?= base_url('assets/template/images/FOTO_BARENG_1.jpg') ?>" class="img-fluid radius-image" alt="image">
                </div>
            </div>
        </div>
    </section>

    <!-- features section -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center text-white mb-sm-5 mb-4">Data <span>Kami</span></h3>
            <div class="row text-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countSiswa ?></a>
                        </div>
                        <div class="icon-info">
                            <h5>
                                <a>Jumlah Siswa
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countGuru ?></a>
                        </div>
                        <div class="icon-info">
                            <h5><a>Jumlah Guru</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countKelas ?></a>
                        </div>
                        <div class="icon-info">
                            <h5><a>Jumlah Kelas</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-5 mt-4">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countJurusan ?></a>
                        </div>
                        <div class="icon-info">
                            <h5><a>Jumlah Jurusan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-5 mt-4">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countAlumni ?></a>
                        </div>
                        <div class="icon-info">
                            <h5><a>Jumlah Alumni</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-5 mt-4">
                    <div class="feature-gd feature-gd-2">
                        <div class="icon">
                            <a><?= $countBerita ?></a>
                        </div>
                        <div class="icon-info">
                            <h5><a>Jumlah Berita</a></h5>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w3l-team py-5">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5"><span>Tenaga Pendidik</span> Kami</h3>
            <div class="row text-center">
                <?php foreach ($guru as $g) { ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <div class="team-block-single">
                            <div class="thumbnail">
                                <a href="#team-single">
                                    <img src="<?= base_url('upload/guru/') . $g->foto ?>" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="team-bottom-block p-4">
                                <h5 class="member mb-1"><a><?= $g->nama_guru ?></a></h5>
                                <small><?= $g->nip ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="container pt-lg-5 pb-lg-5 pb-4">
                    <a href="<?= base_url('home/pendidik') ?>" class="btn btn-style">Lihat Lebih banyak</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //features section -->
<?php } ?>
<!-- //team setion -->

<!-- //testimonials section -->