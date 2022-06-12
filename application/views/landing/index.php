<!-- banner section -->

<?php foreach ($profil->result() as $row) { ?>

    <section class="w3l-main-slider" id="home">
        <div class="banner-content">
            <div id="demo-1">
                <div class="demo-inner-content">
                    <div class="container">
                        <div class="banner-info">
                            <h3><?= $row->nama_sekolah ?></h3>
                            <p class="mb-1"><?= $row->alamat ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home block 1 -->
    <section class="w3l-servicesblock py-5">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="<?= base_url('') ?>assets/template/images/index.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title"><?= $row->nama_sekolah ?></h6>
                        <p>Akreditasi <?= $row->akreditasi ?></p>
                        <a href="tel:http://<?= $row->alamat ?>"><i class="fas fa-phone-alt"></i><?= $row->telepon ?></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style mb-md-5 mb-4"><?= $row->nama_sekolah ?>
                    </h3>
                    <p class="sub-para"><?= $row->sejarah ?></p>
                    <!-- <p class="mt-4 pt-sm-2"><?= $row->visi_misi ?></p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- //home block 1 -->

    <!-- home block 3 with slider -->
    <section class="w3l-index5 py-5">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5"><span>Jurusan</span> Kami</h3>
            <div class="inner-sec-w3layouts mt-md-5 mt-4">
                <div class="owl-three owl-carousel owl-theme">
                    <?php foreach ($jurusan as $j) { ?>
                        <div class="item">
                            <div class="content-left-sec">
                                <div class="blog-info">
                                    <a href="#url">
                                        <h4 class="mb-0"><?= $j->nama_jurusan ?></h4>
                                    </a>
                                    <p><?= $j->deskripsi ?></p>
                                    <!-- <a href="services.html" class="btn btn-style-primary">Learn More<i class="fas fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- //home block 3 with slider -->

    <!-- stats section -->
    <section class="w3-bottom-stats py-5">
        <div class="container py-md-5 py-4">
            <div class="row py-4">
                <div class="col-md-7 pe-lg-5">
                    <h5 class="text-new mb-4"><?= $row->nama_sekolah ?>
                    </h5>
                    <p class="mb-3"><?= $row->visi_misi ?></p>
                </div>
                <div class="col-md-5 text-md-center mt-md-0 mt-5">
                    <div class="counter">
                        <div class="timer count-title count-number" data-to="6370" data-speed="1500"><?= $countSiswa ?></div>
                        <p class="count-text mt-sm-2">Jumlah Siswa</p>
                    </div>
                    <div class="counter mt-sm-5 mt-4">
                        <div class="timer count-title count-number" data-to="7600" data-speed="1500"><?= $countKelas ?></div>
                        <p class="count-text mt-sm-2">Jumlah Kelas</p>
                    </div>
                    <div class="counter mt-sm-5 mt-4">
                        <div class="timer count-title count-number" data-to="36" data-speed="1500"><?= $countGuru ?></div>
                        <p class="count-text mt-sm-2">Jumlah Pendidik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->

    <!-- team section -->
    <section class="w3l-team py-5">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5">Tenaga Pendidik<span> Kami</span></h3>
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
                    <a href="<?= base_url('home/pendidik') ?>" class="btn btn-style mt-3">Lihat Lebih banyak</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //team setion -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center text-white mb-sm-5 mb-4"><span>Pengumuman</span></h3>
            <div class="row text-center">
                <?php foreach ($pengumuman as $p) { ?>
                    <div class="col-lg-4 col-sm-6 mb-3">
                        <div class="feature-gd feature-gd-2">
                            <div class="icon">

                                <h5><a><?= $p->judul ?></a></h5>
                            </div>
                            <div class="icon-info">
                                <a><?= $p->isi ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="container pt-lg-5 pb-lg-5 pb-4">
                    <a href="<?= base_url('home/pengumuman') ?>" class="btn btn-style btn-style-2 mt-lg-0 mt-5">Lihat Pengumuman</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section -->
    <div class="w3l-homeblock2 py-5">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5"><span>B</span>erita</h3>
            <div class="row">
                <?php foreach ($berita as $b) { ?>
                    <div class="col-lg-6 mb-3">
                        <div class="bg-clr-white hover-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6 position-relative">
                                    <a href="<?= base_url('home/detail_berita/') . $b->id_berita ?>">
                                        <img class="img-fluid d-block" src="<?= base_url('upload/berita/') . $b->gambar ?>" alt="image">
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card-body blog-details align-self pl-sm-0">
                                        <a href="<?= base_url('home/detail_berita/') . $b->id_berita ?>" class="blog-desc">
                                            <?= $b->judul ?>
                                        </a>
                                        <p>
                                            <?= substr($b->isi, 0, 40);                                        ?>
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between mt-lg-4 mt-5">
                                            <h5 class="text-blog-e"><?= $b->waktu ?></h5>
                                            <a href="<?= base_url('home/detail_berita/') . $b->id_berita ?>" class="blog-icon-e"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="container pt-lg-5 pb-lg-5 pb-4">
                    <a href="<?= base_url('home/berita') ?>" class="btn btn-style mt-3">Lihat Lebih banyak</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog section -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15938.111437173486!2d104.7404977!3d-2.9509091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91120573a9bb4296!2sSekolah%20Menengah%20Kejuruan%20Swakarya!5e0!3m2!1sid!2sid!4v1653831668389!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //skills section -->

<?php } ?>