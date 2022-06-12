  <div class="content-wrapper">
  <section class="content">
                         <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading"><i class="fa fa-users"></i> DATA KELAS</div>
                    <div class="panel-body">
                           <a class="btn btn-primary btn-flat" href="<?php echo base_url().'index.php/admin/tambah_data_kelas' ?>"><i class="glyphicon glyphicon-plus"></i>   TAMBAH KELAS </a>
                    </div>
                    
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Kelas</th>
                  <th>Jurusan</th>
                  <th>Tahun Masuk</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kelas->result() as $k) { ?>
                <tr>
                  <td><?php echo $k->id_kelas; ?></td>
                  <td><?php echo $k->nama_kelas; ?></td>
                  <td><?php echo $k->nama_jurusan; ?></td>
                  <td><?php echo $k->tahun_masuk; ?></td>
                  <td class="text-center">
                    <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_kelas/'.$k->id_kelas ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_kelas/'.$k->id_kelas; ?>"><i class="fa fa-trash"></i> Hapus</a>
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