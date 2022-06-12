<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
      <div class="row">
                    <div class="col-sm-4">
                      <div class="box box-primary">
            <div class="box-header with-border">
                                <P>TAMBAH FASILITAS SEKOLAH</P>
                            </div>
                            <div class="panel-body">
                                    <div class="form-group">
                                    <?php echo form_open_multipart('admin/tambah_fasilitas_sekolah'); ?>
                                        <label>Nama Fasilitas</label>
                                        <input style="width: 100%;" name="kategori" type="hidden" class="form-control" value="fasilitas" ">
                                        <input style="width: 100%;" name="judul" type="text" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                         <input style="width: 100%;" name="foto" type="file" class="form-control" required="">
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-sm-8">
                                             <div class="box box-primary">
            <div class="box-header with-border">
                                <p>DATA FASILITAS SEKOLAH</p>
                            </div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Ekstrakulikuler</th>
                                <th>Deskripsi</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr> 
                        </thead>
                        <tbody>
                        <?php foreach ($fasilitas->result() as $row) { ?>
                            <tr>
                                <td><?php echo $row->judul ?></td>
                                <td><?php echo $row->deskripsi ?></td>
                                <td style="width: 35%; text-align: center;">
                                    <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_pengumuman/' ?>"><i class="fa fa-edit"></i> edit</a>
                                    <a href="<?php echo base_url().'admin/hapus_fasilitas/'.$row->id ?>" class="btn btn-danger btn-xs" href=""><i class="fa fa-trash"></i> hapus</a>
                                </td>  
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
          </div>
          </div>
                    </div>
                </div>
                </div>

                </section>