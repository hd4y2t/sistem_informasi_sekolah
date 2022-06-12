<div class="content-wrapper">
  <section class="content center">
    <div class="row">
      <div class="col-md-8" style="margin-left: 15%;">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">INPUT DATA KELAS</h3>
          </div>
          <?php echo form_open('admin/simpan_kelas') ?>
          <div class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Kelas</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kelas" placeholder="Nama Kelas">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Jurusan</label>
                <div class="col-sm-8">
                  <select name="jurusan" class="form-control" style="width:40%;">
                    <?php foreach ($jurusan->result() as $j) { ?>
                      <option value="<?php echo $j->id_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                    <?php } ?>


                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Tahun Masuk</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="tahun" placeholder="Tahun">
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Input</button>
            </div>
          </div>
        </div>
      </div>
  </section>