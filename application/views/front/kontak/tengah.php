<div class="col-lg-6 col-md-6">
    <?php foreach ($profil->result() as $row) { ?>
        <div class="col-padded">
            <div class="row gutter">
                <div class="col-lg-12 col-md-12">
                    <hr>
                    <div class="news-body">
                        <div class="row" style="margin-top:-40px;">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h6 class="remove-margin-bottom">Alamat Sekolah</h6>
                                <p class="small"><?php echo $row->alamat ?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h6 class="remove-margin-bottom">Hubungi Kami</h6>
                                <p class="small"><i class="fa fa-phone"></i> <?php echo $row->telepon ?></p>
                                <p class="small"><i class="fa fa-envelope"></i> <?php echo $row->email ?></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <h6>Silahkan Kirim Pesan</h6>
                    <form id="contactform" method="post" action="<?php echo base_url('kontak/post_pesan'); ?>">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="contactName"><span class="required">*</span> Nama</label>
                                <input type="text" aria-required="true" size="30" value="" name="nama" id="contactName" class="form-control requiredField" />
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="email"><span class="required">*</span> Kontak</label>
                                <input type="text" aria-required="true" size="30" value="" name="kontak" id="email" class="form-control requiredField" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="contactSubject">Alamat</label>
                                <input type="text" aria-required="true" size="30" value="" name="alamat" id="contactSubject" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="contactSubject">Subjek Pesan</label>
                                <input type="text" aria-required="true" size="30" value="" name="subjek" id="contactSubject" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group clearfix col-lg-12">
                                <label for="comments"><span class="required">*</span> Pesan</label>
                                <textarea aria-required="true" rows="5" cols="45" name="pesan" id="comments" class="form-control requiredField mezage"></textarea>
                            </div>
                            <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                <input type="submit" value="Kirim Pesan" id="submit" name="submit" class="btn btn-default" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php } ?>
</div>