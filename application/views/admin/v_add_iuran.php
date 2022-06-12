<div class="content-wrapper">
    <section class="content center">
        <div class="row">
            <div class="col-md-8" style="margin-left: 10%;">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bayaran SPP</h3>
                    </div>
                    <?php echo form_open_multipart('admin/simpan_data_iuran'); ?>
                    <div class="form-horizontal">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">NISN</label>
                                <div class="col-sm-8" style="width:30%;">
                                    <input type="text" class="form-control" value="<?= $iuran['nisn'] ?>" disabled />
                                    <input type="hidden" class="form-control" name="nisn" value="<?= $iuran['nisn'] ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Nama Siswa</label>
                                <div class="col-sm-8" style="width:30%;">
                                    <input type="text" class="form-control" value="<?= $iuran['nama_siswa'] ?>" disabled />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?= $iuran['nama_kelas'] ?>" disabled />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Januari</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="januari" id="januari" value="<?= $iuran['iuran_januari'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">februari</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="februari" name="februari" value="<?= $iuran['iuran_februari'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">maret</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="maret" name="maret" value="<?= $iuran['iuran_maret'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">april</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="april" name="april" value="<?= $iuran['iuran_april'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">mei</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="mei" name="mei" value="<?= $iuran['iuran_mei'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">juni</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="juni" name="juni" value="<?= $iuran['iuran_juni'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">juli</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="juli" name="juli" value="<?= $iuran['iuran_juli'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">agustus</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="agustus" name="agustus" value="<?= $iuran['iuran_agustus'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">september</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="september" name="september" value="<?= $iuran['iuran_september'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">oktober</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="oktober" name="oktober" value="<?= $iuran['iuran_oktober'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">november</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="november" name="november" value="<?= $iuran['iuran_november'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">desember</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="desember" name="desember" value="<?= $iuran['iuran_desember'] ?>" />
                                </div>
                            </div>

                            <button class="btn btn-default btn-flat pull-right" type="submit"><i class="fa fa-check-square-o"></i> Bayar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>