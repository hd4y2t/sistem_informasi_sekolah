<div class="content-wrapper">
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <div class="panel-heading"><i class="fa fa-graduation-cap"></i> DATA GURU</div>
          <div class="panel-body">
            <div class="form-group">
              <a class="btn btn-primary btn-flat" href="<?php echo base_url().'admin/tambah_data_guru' ?>"><i class="fa fa-user-plus"></i> TAMBAH DATA GURU</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>NUPTK</th>
                  <th>Nama Guru</th>
                  <th>Mata Pelajaran</th>
                  <th>Kontak</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
                
              <tbody>
                <?php foreach ($guru->result() as $g) { ?>
                <tr>
                  <td><?php echo ++$mulai ?></td>
                  <td><?php echo $g->nip ?></td>
                  <td><?php echo $g->nuptk ?></td>
                  <td><?php echo $g->nama_guru ?></td>
                  <td><?php echo $g->nama_pelajaran ?></td>
                  <td><?php echo $g->kontak ?></td>
                  <td class="text-center">
                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/edit_guru/'.$g->id_guru; ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/edit_guru/'.$g->id_guru; ?>"><i class="fa fa-edit"></i> Detail</a>
                    <a class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url().'admin/hapus_guru/'.$g->id_guru ?>"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
