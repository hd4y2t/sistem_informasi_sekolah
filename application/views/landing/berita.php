<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Informasi</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Berita</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- team section -->
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

        </div>
    </div>
</div>
<!-- //team setion -->

<!-- //testimonials section -->