<div class="content-wrapper">
    <section class="content center">
      <div class="row">
          <div class="col-md-8" style="margin-left: 15%;">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-edit"></i> EDIT DATA GURU</h3>
                </div>
                <?php echo form_open('admin/update_data_guru');?>
            <div class="form-horizontal">
                      <div class="box-body">
                      <?php foreach ($guru->result() as $row) { ?>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NIP</label>
                          <div class="col-sm-8" style="width:30%;">
                            <input type="hidden" class="form-control" name="id_guru" value="<?php echo $row->id_guru ?>" />
                            <input type="text" class="form-control" name="nip" value="<?php echo $row->nip ?>" />
                          </div>
                      </div>
                       <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NUPTK</label>
                          <div class="col-sm-8" style="width:30%;">
                            <input type="hidden" class="form-control" name="id_guru" value="<?php echo $row->id_guru ?>" />
                            <input type="text" class="form-control" name="nip" value="<?php echo $row->nuptk ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA GURU</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" value="<?php echo $row->nama_guru ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">ALAMAT</label>
                          <div class="col-sm-8">
                          <textarea name="alamat" class="form-control" rows="3"><?php echo $row->alamat ?></textarea>
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
                          <label for="inputEmail3" class="col-sm-4 control-label">WALI KELAS</label>
                          <div class="col-sm-8">
                             <select name="kelas" class="form-control" style="width:40%;">
                                        <?php foreach ($kelas->result() as $k) { ?>
                                        <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                        <?php } ?>                                                 
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">MENGAJAR</label>
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
                            <input type="text" class="form-control" name="username" value="<?php echo $row->password ?>">
                          </div>
                      </div>
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">PASSWORD</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="text" class="form-control" name="password" value="<?php echo $row->username ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">FOTO</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="file" class="form-control" name="userfile">
                          </div>
                      </div>
              <?php } ?>
              <button class="btn btn-primary pull-right" type="submit" value="upload"> <i class="glyphicon glyphicon-ok"></i> Update</button>