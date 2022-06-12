<div class="content-wrapper">
<section class="content center">
  <div class="row">
    <div class="col-md-12" style="margin-left: 15%;">
      <section class="content">
        <div class="row">
          <div class="col-md-8">
          <?php foreach ($siswa->result() as $row) { ?>
          <div class="box box-primary">
          <div class="panel panel-heading"><center><b>DETAIL SISWA</b></center></div>
          <div class="box-body">
          <div class="col-md-12">
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <td style="width: 150px;">NIS</td>
                  <td><?php echo $row->nis ?></td>
                </tr>
                <tr>
                  <td style="width: 150px;">NISN</td>
                  <td><?php echo $row->nisn ?></td>
                </tr>
                <tr>
                  <td>Nama Siswa</td>
                  <td><?php echo $row->nama_siswa ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><?php echo $row->alamat ?></td>
                </tr>
                <tr>
                  <td>JK</td>
                  <td><?php echo $row->jk ?></td>
                </tr>
                <tr>
                  <td>TTL</td>
                  <td><?php echo $row->ttl ?></td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td><?php echo $row->agama ?></td>
                </tr>
                <tr>
                  <td>Nama Ayah</td>
                  <td><?php echo $row->nama_ayah ?></td>
                </tr>
                <tr>
                  <td>Nama Ibu</td>
                  <td><?php echo $row->nama_ibu ?></td>
                </tr>
                <tr>
                  <td>Pekerjaan Wali</td>
                  <td><?php echo $row->pekerjaan_ortu ?></td>
                </tr>
                <tr>
                  <td>Kontak Wali Murid</td>
                  <td><?php echo $row->kontak_ortu ?></td>
                </tr>
              <?php } ?>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>








