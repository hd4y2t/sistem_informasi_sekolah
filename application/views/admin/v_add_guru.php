<div class="content-wrapper">
  <section class="content center">
    <div class="row">
      <div class="col-md-8" style="margin-left: 15%;">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-edit"></i> INPUT DATA GURU</h3>
          </div>
            <?php echo form_open_multipart('admin/proses_data_guru');?>
            <div class="form-horizontal">
              <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NIP</label>
                          <div class="col-sm-8" style="width:30%;">
                            <input type="text" class="form-control" name="nip" placeholder="NIP" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NUPTK</label>
                          <div class="col-sm-8" style="width:30%;">
                            <input type="text" class="form-control" name="nuptk" placeholder="NUPTK" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA GURU</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">ALAMAT</label>
                          <div class="col-sm-8">
                          <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" id="alamat" required=""></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">TEMPAT, TANGGAL LAHIR</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="kontak" placeholder="Tempat dan Tanggal Lahir" />
                          </div>
                      </div>
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">JENIS KELAMIN</label>
                          <div class="col-sm-8">
                            <div class="radio">
                              <label><input type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" checked>LAKI-LAKI </label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="jk" id="optionsRadios2" value="Perempuan"> PEREMPUAN</label>
                            </div>
                        </div>   
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">AGAMA</label>
                          <div class="col-sm-8">
                             <select name="agama" class="form-control" style="width:40%;">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">MATA PELAJARAN</label>
                          <div class="col-sm-8">
                             <select name="pelajaran" class="form-control" style="width:40%;">
                                        <?php foreach ($pelajaran->result() as $k) { ?>
                                        <option value="<?php echo $k->id_pelajaran; ?>"><?php echo $k->nama_pelajaran; ?></option>
                                        <?php } ?>                                                 
                            </select>
                        </div>
                      </div>
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">USERNAME</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="text" class="form-control" name="username" placeholder="input username siswa">
                          </div>
                      </div>
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">PASSWORD</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="text" class="form-control" name="password" placeholder="input password siswa">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">FOTO</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="file" class="form-control" name="userfile">
                          </div>
                      </div>
                      <button class="btn btn-primary pull-right" type="submit" value="upload"><i class="glyphicon glyphicon-ok"></i> Input</button>