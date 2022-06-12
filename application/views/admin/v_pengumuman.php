<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
      <div class="row">
                    <div class="col-sm-6">
                                 <div class="box box-primary">
            <div class="box-header with-border">
                            <div class="panel-heading">
                                <P>TULIS PENGUMUMAN</P>
                            </div>
                            <div class="panel-body">
                                <?php $this->load->view('admin/v_editor') ?>
                                    <div class="form-group">
                                    <?php echo form_open_multipart('admin/tambah_pengumuman'); ?>
                                        <label>Judul Pengumuman</label>
                                        <input style="width: 50%;" name="judul" type="text" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Pengumuman</label>
                                        <textarea name="deskripsi" class="form-control" rows="6"></textarea>
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                                  <div class="box box-primary">
            <div class="box-header with-border">
                            <div class="panel-heading">
                                <p>LIST PENGUMUMAN</p>
                            </div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Pengumuman</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                   <?php foreach ($pengumuman->result() as $p) { ?>
                            <tr>
                                <td><?php echo $p->judul; ?></td>
                                <td style="width: 25%;">
                                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/edit_pengumuman/'.$p->id_pengumuman; ?>"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url().'index.php/admin/hapus_pengumuman/'.$p->id_pengumuman; ?>" class="btn btn-danger btn-xs btn-flat" href=""><i class="fa fa-trash"></i> Hapus</a>
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