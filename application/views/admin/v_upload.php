<div class="content-wrapper">
    <section class="content center">
      <div class="row">
          <div class="col-md-8" style="margin-left: 15%;">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-upload"></i> UPLOAD FILE</h3>
                </div>
                <?php echo form_open_multipart('admin/aksi_upload');?>
            <div class="form-horizontal">
                      <div class="box-body">
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">NAMA FILE</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="text" class="form-control" name="nama" >
                          </div>
                      </div>
                      <div class="form-group">  
                          <label for="inputEmail3" class="col-sm-4 control-label">DESKRIPSI</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="text" class="form-control" name="deskripsi" >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">FILE</label>
                          <div class="col-sm-8" style="width:40%;">
                            <input type="file" class="form-control" name="file">
                          </div>
                      </div>
              <button class="btn btn-primary pull-right" type="submit" value="upload"><i class="glyphicon glyphicon-ok"></i> Input</button>