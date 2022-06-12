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
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Detail Berita</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- team section -->
<div class="w3l-homeblock2 py-5">
    <div class="container py-md-5 py-4">
        <h3 class="title-style text-center mb-5"><span><?= $b['judul'] ?></span></h3>
        <div class="row">
            <div class="col-lg">
                <div class="bg-clr-white hover-box">
                    <div class="row align-items-center">
                        <div class="col-sm position-relative">

                        </div>
                        <div class="row-sm">
                            <div class="card-body blog-details align-self pl-sm-0">
                                <div class="col">

                                    <img class="img-fluid d-block mt-3 mb-3" src="<?= base_url('upload/berita/') . $b['gambar'] ?>" height="300px" width="100%" alt="image">

                                    <p>
                                        <?= $b['isi'];                                        ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mt-lg-4 mt-5">
                                    </div>

                                </div>
                                <h5 class="text-blog-e"><?= $b['waktu'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //team setion -->

<!-- //testimonials section -->