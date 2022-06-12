<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php foreach ($profil->result() as $row) { ?>

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Pengumuman</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Pengumuman</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <section class="w3l-team py-5">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5"><span>Pengumuman</span></h3>
            <div class="row text-center">
                <?php foreach ($pengumuman as $g) { ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <div class="team-block-single">
                            <div class="team-bottom-block p-4">
                                <h5 class="member mb-1"><a><?= $g->judul ?></a></h5>
                                <p><?= $g->waktu ?></p>
                                <small class="mt-3"><?= $g->isi ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- //features section -->
<?php } ?>
<!-- //team setion -->

<!-- //testimonials section -->