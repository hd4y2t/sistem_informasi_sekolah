  <div class="content-wrapper">
      <section class="content">
                                 <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading">MANAJEMEN PELAJARAN</div>
                    <div class="panel-body">
                <div class="form-group">
      <a class="btn btn-primary btn-flat" href="<?php echo base_url().'admin/tambah_pelajaran' ?>"><i class="glyphicon glyphicon-plus"></i>TAMBAH MATA PELAJARAN</a>
    </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Pelajaran</th>
                  <th>Keterangan</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pelajaran->result() as $row) { ?>
                <tr>
                  <td><?php echo $row->id_pelajaran ?></td>
                  <td><?php echo $row->nama_pelajaran ?></td>
                  <td></td>
                  <td class="text-center">
                    <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_pelajaran/'.$row->id_pelajaran ?>"><i class="fa fa-edit"></i> edit</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_pelajaran/'.$row->id_pelajaran ?>"><i class="fa fa-trash"></i> hapus</a>
                  </td>  
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div></tbody></table></div></div></section></div>
      </section>