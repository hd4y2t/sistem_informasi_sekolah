<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-6" style="margin-left: 20%; margin-top: 5%;">
                     <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading">TAMBAH FOTO KEGIATAN</div>
                    <div class="panel-body">
                            <div class="form-group">
                                                <?php echo form_open_multipart('admin/proses_galery') ?>
                            <div class="form-group">
                            <label>Kategori Galeri Kegiatan</label>
                                <select name="kategori" class="form-control" style="width:70%;">
                                    <option value="guru">Kegiatan Guru & Kepala Sekolah</option>  
                                    <option value="siswa">Siswa</option>
                                    <option value="sekolah">Foto Sekolah</option>      
                                </select>
                            </div>                            
                            <div class="form-group">
                                <label>Deskripsi Kegiatan</label>
                                <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Kegiatan"></textarea>
                            </div>                            
                            <div class="form-group">
                                <label>Pilih Gambar</label>
                                <input type="file" name="gambar">
                            </div>
                              <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Upload</button>
                        </form>
                    </div>
                </div>
            </div>