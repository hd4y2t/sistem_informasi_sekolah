<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">MATERI PELAJARAN</h3> 
          </div>
          <form>
            <select style="height: 32px; margin-bottom: 2%; margin-top: 2%; margin-left: 1%;">
              <option>Materi Pelajaran Kelas</option>
              <option value="">Kelas</option>
            </select>
            <button class="btn btn-danger"> Tampilkan </button>
          </form>
          <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Materi</th>
                                <th>Pelajaran</th>
                                <th>Kelas</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($materi->result() as $row) { ?>
                            <tr>
                                <td><?php echo $row->judul_materi ?></td>
                                <td><?php echo $row->nama_pelajaran ?></td>
                                <td><?php echo $row->nama_kelas ?></td>
                                <td><?php echo $row->deskripsi ?></td>
                                <td><label class="label label-danger"><?php echo $row->file ?></label></td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('upload/materi/'.$row->file) ?>"><i class="fa fa-cloud-download"></i> Download</a>
                                </td>  
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>