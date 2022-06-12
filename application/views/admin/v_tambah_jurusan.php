<div class="content-wrapper">
    <section class="content center">
        <div class="row">
            <div class="col-md-8" style="margin-left: 15%;">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">TAMBAH JURUSAN</h3>
                    </div>
                        <div class="panel-body">
                            <div class="form-group">
                            <?php echo form_open_multipart('admin/update_jurusan'); ?>
                                <label>Nama Jurusan</label>
                                <input style="width: 100%;" name="nama" type="text" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <?php $this->load->view('admin/v_editor'); ?>
                                <textarea name="deskripsi" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input style="width: 100%;" name="foto" type="file" class="form-control" required="">
                            </div>
                            <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>