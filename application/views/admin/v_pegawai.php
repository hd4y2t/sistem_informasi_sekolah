  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
       <a class="btn btn-success" href="<?php echo base_url().'index.php/admin/tambah_siswa' ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Data </a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Akademik</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
				<div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Kontak</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pegawai->result() as $peg) { ?>
                            <tr>
                                <td><?php echo $peg->id_pegawai; ?></td>
                                <td><?php echo $peg->nama_pegawai; ?></td>
                                <td><?php echo $peg->alamat; ?></td>
                                <td><?php echo $peg->jabatan; ?></td>
                                <td><?php echo $peg->kontak; ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo base_url().'index.php/admin/edit_siswa'; ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="<?php echo base_url().'index.php/admin/delete_data_pegawai/'.$peg->id_pegawai; ?>"><i class="fa fa-trash"></i></a>
                                </td>  
                            </tr>
                      <?php } ?>
                        </tbody>
                    </table>
                </div>
          </div>
          </div>
          </div>
      </section>