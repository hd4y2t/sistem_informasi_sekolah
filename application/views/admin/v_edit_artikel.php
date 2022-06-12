    <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Edit Artikel</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Halaman
                            </div>
                            <div class="panel-body">
                                <?php $this->load->view('admin/v_editor') ?>
                                <?php echo form_open_multipart('admin/edit_artikel') ?>
                                    <div class="form-group">
                                        <label>Judul Halaman</label>
                                        <input name="id_berita" type="hidden" class="form-control" value="<?php echo $artikel['id_berita'] ?>">
                                        <input style="width: 50%;" name="judul" type="text" class="form-control" value="<?php echo $artikel['judul'] ?>">
                                    </div>
                                    <div class="form-group">
                                         <select name="kategori" class="form-control" style="width:20%;">
                                            <option value="Berita">Berita</option>  
                                            <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                                            <option value="Kegiatan Guru">Kegiatan Guru</option>
                                            <option value="Prestasi Siswa">Prestasi Siswa</option> 
                                            <option value="Informasi">Informasi</option>       
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Halaman</label>
                                        <textarea name="isi" class="form-control" rows="6"><?php echo $artikel['isi'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input name="gambar" type="file">
                                        <p class="help-block">jpg | png | gif</p>
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary">Update Halaman</button> | <a class="btn btn-danger" href="<?php echo base_url().'admin/artikel' ?>"> Batal </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>