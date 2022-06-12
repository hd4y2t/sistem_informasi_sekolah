<div class="content-wrapper">
  <section class="content center">
    <div class="row">
      <div class="col-md-8" style="margin-left: 15%;">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">INPUT MATA PELAJARAN</h3>
          </div>
            <?php echo form_open('admin/update_data_pelajaran') ?>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">NAMA MATA PELAJARAN</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pelajaran" placeholder="Nama Pelajaran">
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