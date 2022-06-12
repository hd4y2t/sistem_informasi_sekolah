<div class="col-lg-6 col-md-6">
<?php foreach ($profil->result() as $row) { ?>
    <div class="col-padded">
        <div class="row gutter">
            <div class="col-lg-12 col-md-12">
                <div class="news-body">
                <h6>Silahkan Isi Form Alumni Dibawah ini</h6>              
                    <form id="contactform" method="post" action="<?php echo base_url('kontak/post_pesan');?>">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="contactName"><span class="required">*</span> NISN</label>
                                <input type="text" aria-required="true" size="30" value="" name="nama" id="contactName" class="form-control requiredField" />
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="contactName"><span class="required">*</span> Nama</label>
                                <input type="text" aria-required="true" size="30" value="" name="nama" id="contactName" class="form-control requiredField" />
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="email"><span class="required">*</span> Jurusan</label>
                                <select class="form-control">
                                    <option>Jurusan</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="email"><span class="required">*</span> Tahun Kelulusan</label>
                                <select class="form-control">
                                    <option>Tahun Lulus</option>
                                </select>
                             </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="contactName"><span class="required">*</span> KONTAK</label>
                                <input type="text" aria-required="true" size="30" value="" name="nama" id="contactName" class="form-control requiredField" />
                            </div>
                        </div>          
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label for="email"><span class="required">*</span> Status</label>
                                <select class="form-control">
                                    <option>Status </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="contactSubject"> Instansi / Perguruan Tinggi</label>
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
                                <input type="submit" value="Register" id="submit" name="submit" class="btn btn-default" />
                            </div>
                        </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
