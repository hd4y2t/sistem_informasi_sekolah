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
            <form action="<?php echo base_url().'guru/input_nilai_siswa' ?>" method="POST"> 
              <table class="table table-bordered">
                <tr><td>KELAS</td>
                    <td>
                      <select name="kelas" class="form-control" >
                      <?php foreach($kelas->result() as $row){ ?>
                      <option value="<?php echo $row->id_kelas ?>"><?php echo $row->nama_kelas ?></option>
                      <?php } ?>
                    </select>
                    </td>
                    <td><button class="btn btn-primary pull-right" type="submit"><i class="fa fa-check"></i> TAMPILKAN DAFTAR SISWA</button></td>
                    </form>
                </tr>
                <tr><td>NAMA SISWA</td>
                    <td>
                     <select name="siswa" class="form-control" disabled="">
                      <option value=""></option>
                    </select>
                    </div>
                </tr>
                <tr><td>PELAJARAN</td>
                    <td>
                    <select name="pelajaran" class="form-control"  disabled="">
                      <option value=""></option>
                    </select>    
                    </td>
                </tr>
                <tr><td>SEMESTER & TAHUN AJARAN</td>
                    <td>
                      <select name="semester" class="form-control" disabled="" >
                        <option value=""></option>
                      </select>
                    <td>
                      <select name="tahun" class="form-control"  disabled="">
                        <option value=""></option>
                      </select>
                    </td>
                </tr>
                <tr><td>NILAI UAS</td>
                    <td>
                      <input name="nilai" type="text" placeholder="Nilai" class="form-control" disabled="">
                    <td>
                      <select name="keterangan" class="form-control" disabled="">
                        <option>KETERANGAN</option>
                        <option value="Baik Sekali">Baik Sekali</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Remidi">Remidi</option>
                      </select>
                    </td>
                </tr>

              </table>
            </form>

