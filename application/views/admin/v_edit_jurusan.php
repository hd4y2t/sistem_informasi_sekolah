<div class="content-wrapper">
  <section class="content center">
    <div class="row">
      <div class="col-md-8" style="margin-left: 15%;">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">EDIT JURUSAN</h3>
          </div>
            <?php echo form_open('admin/simpan_edit_jurusan') ?>
            <div class="form-horizontal">
              <div class="box-body">
              <?php foreach ($jurusan->result() as $row) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Jurusan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $row->nama_jurusan ?>">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_jurusan ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea name="deskripsi" class="form-control" rows="5"><?php echo $row->deskripsi ?></textarea>
                  </div>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Input</button>
              </div>
              <?php } ?>
            </div>
    </div>
  </div>
</section>