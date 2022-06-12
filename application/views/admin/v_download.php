  <div class="content-wrapper">
    <div class="row">
      <section class="content">
                    <div class="col-sm-12">
                                          <div class="box box-primary">
            <div class="box-header with-border">
            <div class="panel-heading">
                                <P>UPLOAD FILE</P>
                            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama File</th>
                  <th>File</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($download->result() as $row) { ?>
                <tr>
                  <td><?php echo $row->nama; ?></td>
                  <td style="width: 25%;"><?php echo $row->file; ?></td>
                  <td class="text-center">
                    <a class="btn btn-danger btn-flat btn-xs" href="<?php echo base_url().'admin/hapus_upload/'.$row->id; ?>"><i class="fa fa-trash"></i> Hapus</a>
                  </td>  
                </tr>
                <?php } ?> 
                </tfoot>
              </table>
              <a class="btn btn-success btn-flat" href="<?php echo base_url().'index.php/admin/upload' ?>"><i class="glyphicon glyphicon-upload"></i> Upload </a>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
