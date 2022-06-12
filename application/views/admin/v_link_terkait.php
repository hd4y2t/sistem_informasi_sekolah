<div class="content-wrapper">
    <div class="row">
    <div class="col-md-12" style="margin-top: 1%;">
        </div>
    </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Link</div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('admin/update_link') ?>
                            <div class="form-group">
                                <label>Judul Link</label>
                                <input type="judul" name="judul" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <textarea name="link" class="form-control" rows="3" placeholder="Link Instansi" required=""></textarea>
                            </div>
                              <button name="upload" type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                                <div class="panel panel-default">
                <div class="panel-heading">LINK TERKAIT</div>
                    <div class="panel-body">
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                          <th>NO</th>
                                          <th>Judul</th>
                                          <th>Link</th>
                                          <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($link->result() as $row) { ?>
                                    <tr>
                                      <td><?php echo "1" ?></td>
                                      <td><?php echo $row->judul ?></td>
                                      <td><?php echo $row->link ?></td>
                                      <td class="text-center">
                                        <a class="btn btn-danger" href="<?php echo base_url().'admin/hapus_link/'.$row->id_link ?>"><i class="fa fa-trash"></i></a>
                                      </td>  
                                    </tr>
                                    <?php } ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>