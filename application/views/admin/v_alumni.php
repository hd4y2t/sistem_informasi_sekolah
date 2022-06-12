<div class="content-wrapper">
  <section class="content">
    <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading"><i class="fa fa-graduation-cap"></i> DATA ALUMNI</div>
                    <div class="panel-body">
                  <form action="<?php echo base_url().'admin/rekap_alumni'?>" method="POST">
                    <select name="" style="margin-bottom: 4%; height: 35px;">
                    <?php foreach ($tahun->result() as $row) { ?>
                      <option><?php echo $row->tahun_ajaran ?></option>
                    <?php } ?>
                    </select>
                    <button class="btn btn-primary btn-flat" value="submit">Lihat Data Alumni</button>
                  </form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Lengkap</th>
                  <th>Angkatan</th>
                  <th>Jurusan</th>
                  <th>Status</th>
                  <th>Instansi / Perguruan Tinggi</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($alumni->result() as $row) { ?>
                <tr>
                  <td>1</td>
                  <td><?php echo $row->nama_alumni ?></td>
                  <td><?php echo $row->tahun_lulus  ?></td>
                  <td><?php echo $row->id_jurusan ?></td>
                  <td><?php echo $row->status ?></td>
                  <td><?php echo $row->keterangan ?></td>
                  <td class="text-center">
                    <a onclick="alert-prompt" class="btn btn-danger btn-xs" onclick="alert-prompt" href="<?php echo base_url().'admin/hapus_alumni/'.$row->id_alumni ?>"><i class="fa fa-trash"></i> hapus</a>
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