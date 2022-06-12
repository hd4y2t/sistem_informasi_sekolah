<div class="content-wrapper">
    <section class="content">
      <div class="row">
                    <div class="col-sm-12">
                        <div class="box box-primary">
            <div class="box-header with-border">
                            <div class="panel-heading">
                                <h4><i class="fa fa-pencil"></i> TULIS BERITA</h4>
                            </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                    <?php echo form_open_multipart('admin/update_artikel') ?>
                                        <label>JUDUL</label>
                                        <input type="text" class="form-control" name="judul" placeholder="JUDUL">
                                    </div>
                                    <div class="form-group">
                                        <label>KATEGORI</label>
                                            <select name="kategori" class="form-control" style="width:20%;">
                                                <option>KATEGORI</option>
                                                <option value="Berita">BERITA</option>  
                                                <option value="Kegiatan Guru">KEGIATAN GURU</option>
                                                <option value="Prestasi Siswa">KEGIATAN SISWA</option>      
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <?php $this->load->view('admin/v_editor') ?>
                                        <textarea name="isi" class="form-control col-sm-8" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>GAMBAR</label>
                                        <input name="gambar" type="file">
                                        <p class="help-block">jpg | png | gif</p>
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-send"></i> POST </button> | <button type="reset" class="btn btn-danger btn-flat">RESET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>