<div class="content-wrapper">
  <section class="content">
            <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading">MANAJEMEN JURUSAN</div>
                    <div class="panel-body">
                <div class="form-group">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Jurusan</th>
                  <th>Deskripsi</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($jurusan->result() as $row) { ?>
                <tr>
                  <td><?php echo $row->id_jurusan ?></td>
                  <td><?php echo $row->nama_jurusan ?></td>
                  <td style="text-align: justify;"><?php echo $row->deskripsi ?></td>
                  <td style="width: 20%; text-align: center;">
                    <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_jurusan/'.$row->id_jurusan; ?>"><i class="fa fa-edit"></i> edit</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_jurusan/'.$row->id_jurusan ?>"><i class="fa fa-trash"></i> hapus</a>
                  </td>  
                </tr>
                <?php } ?>
                </tfoot>
              </table>
              </tbody>
              </table>
              <a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/tambah_jurusan' ?>">Tambah Data Jurusan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>