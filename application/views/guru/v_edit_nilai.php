<div class="content-wrapper">
    <section class="content center">
      <div class="row">
          <div class="col-md-8" style="margin-left: 15%;">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title">INPUT NILAI SEMESTER SISWA</h3>
                </div>
            <div class="form-horizontal">
            <div class="box-body">
            <form action="<?php echo base_url().'guru/update_nilai' ?>" method="POST"> 
              <table class="table table-bordered">
              <?php foreach($nilai->result() as $row){ ?>
                <input type="hidden" name="id" value="<?php echo $row->id_nilai ?>">
                <tr><td>KELAS</td>
                    <td>
                      <select name="kelas" class="form-control" >
                      <option value="<?php echo $row->id_kelas ?>"><?php echo $row->nama_kelas ?></option>
                    </select>
                    </td>
                </tr>
                 <tr><td>KELAS</td>
                    <td>
                      <select name="siswa" class="form-control" >
                      <option value="<?php echo $row->id_siswa ?>"><?php echo $row->nama_siswa ?></option>
                    </select>
                    </td>
                </tr>
                <tr><td>PELAJARAN</td>
                    <td>
                    <select name="pelajaran" class="form-control">
                      <option value="<?php echo $row->id_pelajaran ?>"><?php echo $row->nama_pelajaran ?></option>
                    </select>    
                    </td>
                </tr>
                <tr><td>TAHUN AJARAN & SEMESTER</td>
                    <td>
                      <select name="tahun" class="form-control">
                        <option value="<?php echo $row->id ?>"><?php echo $row->tahun_ajaran ?></option>
                      </select>
                    </td>
                    <td>
                      <select name="semester" class="form-control">
                        <option value="<?php echo $row->semester?>"><?php echo $row->semester?></option>
                      </select>
                    </td>
                </tr>
                <tr><td>NILAI UAS</td>
                    <td>
                      <input name="nilai" type="text" class="form-control" value="<?php echo $row->nilai_uas ?>">
                    <td>
                      <select name="keterangan" class="form-control">
                        <option>KETERANGAN</option>
                        <option value="Baik Sekali">Baik Sekali</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Remidi">Remidi</option>
                      </select>
                    </td>
                </tr>
              <?php } ?>
              </table>
              <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-check"></i> Simpan</button>
            </form>

