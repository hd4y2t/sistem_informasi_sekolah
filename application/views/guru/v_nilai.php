 <div class="content-wrapper">
  <section class="content-header">
<div class="box box-primary">
            <div class="box-header with-border">
      <div class="panel-heading">DATA NILAI UALANGAN SEMESTER SISWA</div>
        <div class="panel-body">

        </div>
            <div class="box-header">
              <h3 class="box-title"></h3>
         

            <div class="form-group">
              <a class="btn btn-danger btn-flat" href="<?php echo base_url().'guru/input_nilai' ?>"><i class="glyphicon glyphicon-edit"></i> INPUT NILAI ULANGAN SEMESTER SISWA </a>
            </div>

            <div class="form-group">
            <form action="<?php echo base_url().'guru/nilai' ?>" method="POST">
                <select name="kelas" style="height: 32px; width: 150px;">
                  <option>Pilih Kelas</option>
                  <?php foreach ($kelas->result() as $row) { ?>
                  <option value="<?php echo $row->id_kelas?>"><?php echo $row->nama_kelas ?></option>
                  <?php } ?>
                </select>
                <select name="pelajaran" style="height: 32px; width: 150px;">
                  <option>Pilih Pelajaran</option>
                  <?php foreach ($pelajaran->result() as $row) { ?>
                  <option value="<?php echo $row->id_pelajaran ?>"><?php echo $row->nama_pelajaran ?></option>
                  <?php } ?>
                </select>
                <select name="tahun" style="height: 32px; width: 150px;">
                  <option>Pilih Tahun Ajaran</option>
                  <?php foreach ($tahun->result() as $row) { ?>
                  <option value="<?php echo $row->id ?>"><?php echo $row->tahun_ajaran ?></option>
                  <?php } ?>
                </select>
                <select name="semester" style="height: 32px; width: 150px;">
                  <option>Pilih Semester</option>
                  <option value="Genap">Genap</option>
                  <option value="Ganjil">Ganjil</option>
                </select>
                <button class="btn btn-info btn-flat" type="submit">TAMPILKAN NILAI</button>
                </form>
            </div>
          </div>

            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped table-stored">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>Semester</th>
                  <th>UAS</th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($nilai->result() as $row){ ?>
                <tr>
                  <td><?php echo ++$mulai ?></td>
                  <td><?php echo $row->nama_siswa ?></td>
                  <td><?php echo $row->nama_kelas ?></td>
                  <td><?php echo $row->nama_pelajaran ?></td>
                  <td><?php echo $row->semester ?></td>
                  <td><?php echo $row->nilai_uas ?></td> 
                  <td>
                    <a href="<?php echo base_url().'guru/edit_nilai/'.$row->id_nilai ?>" class="btn btn-success btn-xs btn-flat"><i class="fa fa-edit"> </i></a>
                    <a href="<?php echo base_url().'guru/hapus_nilai/'.$row->id_nilai ?>" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"> </i></a>
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

