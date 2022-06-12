<div class="content-wrapper">
    <section class="content center">
      <div class="row">
          <div class="col-md-8" style="margin-left: 10%;">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title">EDIT DATA SISWA</h3>
                </div>
                <?php echo form_open_multipart('admin/update_edit_siswa');?>
              <div class="form-horizontal">
              <?php foreach($siswa->result() as $sis){ ?>    
                  <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NIS</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="nis" value="<?php echo $sis->nis ?>" />
                            <input type="hidden" class="form-control" name="id_siswa" value="<?php echo $sis->id_siswa ?>" />
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NISN</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="nisn" value="<?php echo $sis->nisn ?>" />
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA LENGKAP</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama" value="<?php echo $sis->nama_siswa ?>" />
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">ALAMAT</label>
                          <div class="col-sm-6">
                          <textarea name="alamat" class="form-control" rows="3"><?php echo $sis->alamat ?></textarea>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">TTL</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="ttl" placeholder="Tempat dan Tanggal Lahir" value="<?php echo $sis->ttl ?>" />
                          </div>
                      </div>

                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">JENIS KELAMIN</label>
                          <div class="col-sm-6">
                            <div class="radio">
                              <label>
                              <input type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" checked>LAKI-LAKI </label></br>
                              <input type="radio" name="jk" id="optionsRadios2" value="Perempuan"> PEREMPUAN
                              </label>
                            </div>
                        </div>   
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">AGAMA</label>
                          <div class="col-sm-6">
                             <select required>
                                        <option>-Pilih Agama-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                            </select>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-md-4 col-xs-12 control-label">KELAS</label>
                          <div class="col-md-6 col-xs-12">
                             <select name="kelas" class="form-control">
                                        <option>-Pilih Kelas-</option>
                                        <?php foreach ($kelas->result() as $k) { ?>
                                        <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                        <?php } ?>                                                 
                            </select>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">JURUSAN</label>
                          <div class="col-sm-6">
                             <select name="jurusan" class="form-control">
                                        <option>-Pilih Jurusan-</option>
                                        <?php foreach ($jurusan->result() as $j) { ?>
                                        <option value="<?php echo $j->id_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                                        <?php } ?>                                                 
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label text-center" style="color: red;">DATA ORANG TUA / WALI MURID</label>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA AYAH</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="ayah" value="<?php echo $sis->nama_ayah ?>"/>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA IBU</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="ibu" value="<?php echo $sis->nama_ibu ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">KONTAK</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="kontak" value="<?php echo $sis->kontak_ortu ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">PEKERJAAN</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="pekerjaan" value="<?php echo $sis->pekerjaan_ortu ?>">
                          </div>
                      </div>
                  <?php } ?>
                          <div class="col-sm-10">
                            <button name="save" class="btn btn-primary pull-right" type="submit"><i class="fa fa-check"></i> SIMPAN</button>
                          </div>
                  