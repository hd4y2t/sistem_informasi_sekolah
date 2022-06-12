  <div class="content-wrapper">
      <section class="content">
          <div class="box box-primary">
              <div class="box-header with-border">
                  <div class="panel-heading"><i class="fa fa-users"></i> DATA JADWAL PELAJARAN</div>


                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>NO</th>
                              <th>Nama Kelas</th>
                              <th>Jurusan</th>
                              <th>Pelajaran</th>
                              <th>Hari</th>
                              <th>Jam</th>
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