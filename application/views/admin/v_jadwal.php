  <div class="content-wrapper">
      <section class="content">
          <div class="box box-primary">
              <div class="box-header with-border">
                  <div class="panel-heading"><i class="fa fa-users"></i> DATA JADWAL PELAJARAN</div>
                  <div class="panel-body">
                      <a class="btn btn-primary btn-flat" href="<?php echo base_url() . 'admin/tambah_data_jadwal' ?>"><i class="glyphicon glyphicon-plus"></i> TAMBAH JADWAL </a>
                  </div>

                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>NO</th>
                              <th>Nama Kelas</th>
                              <th>Jurusan</th>
                              <th>Pelajaran</th>
                              <th>Hari</th>
                              <th>Jam</th>
                              <th>Pengajar</th>
                              <th class="text-center">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            $i = 1;
                            foreach ($jadwal->result() as $k) { ?>
                              <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $k->nama_kelas; ?></td>
                                  <td><?php echo $k->nama_jurusan; ?></td>
                                  <td><?php echo $k->nama_pelajaran; ?></td>
                                  <td><?php echo $k->jadwal_hari; ?></td>
                                  <td><?php echo $k->jadwal_jam; ?></td>
                                  <td><?php echo $k->nama_guru; ?></td>
                                  <td class="text-center">
                                      <a class="btn btn-success btn-xs" href="<?php echo base_url() . 'admin/edit_jadwal/' . $k->jadwal_id ?>"><i class="fa fa-edit"></i> Edit</a>
                                      <a class="btn btn-danger btn-xs" href="<?php echo base_url() . 'admin/hapus_jadwal/' . $k->jadwal_id; ?>"><i class="fa fa-trash"></i> Hapus</a>
                                  </td>
                              </tr>
                          <?php $i++;
                            } ?></tfoot>
                  </table>
              </div>
          </div>
  </div>
  </div>
  </tbody>
  </table>
  </div>
  </div>
  </section>
  </div>
  </section>