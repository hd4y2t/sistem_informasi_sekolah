<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Kesiswaan</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Pelajaran</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- team section -->
<div class="w3l-homeblock2 py-5">
    <div class="container py-md-5 py-4">
        <h3 class="title-style text-center mb-5"><span>J</span>urusan</h3>
        <div class="row">
            <?php foreach ($pelajaran as $b) { ?>
                <div class="col-lg-4 mb-3">
                    <div class="bg-clr-white hover-box">
                        <div class="row align-items-center">
                            <div class="col-sm">
                                <div class="card-body blog-details align-self pl-sm-0">
                                    <a href="#" class="blog-desc">
                                        <?= $b->nama_pelajaran ?>
                                    </a>


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