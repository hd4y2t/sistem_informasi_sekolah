<div class="content-wrapper">
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <div class="panel-heading"><i class="fa fa-group "></i> DATA SISWA</div>
      </div>
      <div class="panel-heading">
        <a class="btn btn-default btn-flat" href="<?php echo base_url() . 'admin/tambah_siswa' ?>"><i class="fa fa-user-plus"></i> INPUT DATA SISWA</a>
      </div>
      <?php echo $this->session->flashdata('info') ?>
      <form action="<?php echo base_url() . 'admin/rekap_siswa' ?>" method="POST">
        <div class="form-group col-md-2">
          <select name="kelas" class="form-control col-md-2 col-sm-2">
            <option>PILIH KELAS</option>
            <?php foreach ($kelas->result() as $row) { ?>
              <option value="<?php echo $row->id_kelas ?>"><?php echo $row->nama_kelas ?></option>
            <?php } ?>
          </select>
        </div>
        <button class="btn btn-default btn-flat" type="submit"><i class="fa fa-check-square-o"></i> LIHAT DATA</button>
      </form>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped table-stored">
            <thead>
              <tr>
                <th style="width: 10px;">NO</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($siswa->result() as $sis) { ?>
                <tr>
                  <td><?php echo ++$mulai ?></td>
                  <td><?php echo $sis->nisn; ?></td>
                  <td style="text-transform: uppercase;"><?php echo $sis->nama_siswa; ?></td>
                  <td><?php echo $sis->jk; ?></td>
                  <td><?php echo $sis->nama_kelas; ?></td>
                  <td><?php echo $sis->nama_jurusan ?></td>
                  <td class="text-center">
                    <a class="btn btn-warning btn-xs btn-flat" href="<?php echo base_url() . 'index.php/admin/detail_siswa/' . $sis->id_siswa; ?>"><i class="glyphicon glyphicon-list-alt"></i> Detail</a>
                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url() . 'index.php/admin/edit_siswa/' . $sis->id_siswa; ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url() . 'admin/hapus_siswa/' . $sis->id_siswa; ?>"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
              <?php } ?>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
</div>
</section>