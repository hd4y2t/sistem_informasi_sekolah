<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="panel-heading">TAMBAH EKSTRAKULIKULER SEKOLAH</div>
                            <div class="panel-body">
                                <?php $this->load->view('admin/v_editor') ?>
                                    <div class="form-group">
                                    <?php echo form_open_multipart('admin/tambah_ekstrakulikuler'); ?>
                                        <label>Nama Ektrakulikuler</label>
                                        <input style="width: 100%;" name="kategori" type="hidden" class="form-control" value="ekstrakulikuler">
                                        <input style="width: 100%;" name="judul" type="text" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Ekstrakulikuler</label>
                                        <input style="width: 100%;" name="foto" type="file" class="form-control" required="">
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                    <div class="col-sm-6">
                       <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="panel-heading">TAMBAH EKSTRAKULIKULER SEKOLAH</div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Ekstrakulikuler</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($ekstrakulikuler->result() as $row ) { ?>
                            <tr>
                                <td><?php echo $row->judul ?></td>
                                <td align="center">
                                    <a href="<?php echo base_url().'admin/hapus_ekstrakulikuler/'.$row->id ?>" class="btn btn-danger btn-xs btn-flat" href=""><i class="fa fa-trash"></i> Hapus</a>
                                    <a href="<?php echo base_url().'admin/edit_ekstrakulikuler/'.$row->id ?>" class="btn btn-success btn-xs btn-flat" href=""><i class="fa fa-edit"></i> Edit</a>
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