<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">INFORMASI NILAI SISWA</h3> 
          </div>

          <section class="content">
            <div class="box-body">
              <form action="<?php echo base_url().'siswa/nilai' ?>" method="POST">
                <select name="kelas" style="height: 32px; width: 150px;>
                  <?php foreach ($kelas->result() as $row) { ?>
                  <option value="<?php echo $row->id_kelas?>"><?php echo $row->nama_kelas ?></option>
                  <?php } ?>
                </select>
                <select name="pelajaran" style="height: 32px; width: 150px;">
                  <?php foreach ($pelajaran->result() as $row) { ?>
                  <option value="<?php echo $row->id_pelajaran ?>"><?php echo $row->nama_pelajaran ?></option>
                  <?php } ?>
                </select>
                <select name="tahun" style="height: 32px; width: 150px;">
                  <?php foreach ($tahun->result() as $row) { ?>
                  <option value="<?php echo $row->id ?>"><?php echo $row->tahun_ajaran ?></option>
                  <?php } ?>
                </select>
                <select name="semester" style="height: 32px; width: 150px;">
                  <option value="Ganjil">GANJIL</option>
                  <option value="Genap">GENAP</option>
                </select>
                <button class="btn btn-info btn-flat" type="submit">TAMPILKAN NILAI</button>
                </form>
                 <div class="table-responsive">
                  <table class="table example1 table table-bordered table-hover table-striped tablesorter">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Semester</th>
                    <th>Tahun Ajaran</th>
                    <th>Nilai UAS</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($nilai->result() as $row) { ?>
                  <tr>
                    <td>No</td>
                    <th><?php echo $row->nama_siswa ?></th>
                    <td><?php echo $row->nama_pelajaran ?></td>
                    <td><?php echo $row->semester ?></td>
                    <td><?php echo $row->tahun_ajaran ?></td>
                    <td><?php echo $row->nilai_uas ?></td>
                    <td><?php echo $row->keterangan ?></td>
                  </tr><?php } ?>
                  </tfoot>
                </tbody>
               </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</section>