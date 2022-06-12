<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Kepegawaian</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Tenaga Pendidik</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- team section -->
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
        </div>
    </div>
</section>
<!-- //team setion -->

<!-- //testimonials section -->