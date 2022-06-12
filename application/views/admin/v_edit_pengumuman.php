<div class="content-wrapper">
    <section class="content">
      <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <em style="text-align: left;">Tambahkan Pengumuman</em>
                            </div>
                            <div class="panel-body">
                                <?php $this->load->view('admin/v_editor') ?>
                                <?php echo form_open_multipart('admin/update_pengumuman'); ?>
                                <?php foreach ($edit_pengumuman->result() as $row) { ?>
                                    <div class="form-group">
                                        <label>Judul Pengumuman</label>
                                        <input style="width: 50%;" name="judul" type="text" class="form-control" value="<?php echo $row->judul ?>">
                                         <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_pengumuman ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Pengumuman</label>
                                        <textarea name="deskripsi" class="form-control" rows="6"><?php echo $row->isi ?></textarea>
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading bg-success">
                                <em style="text-align: left;">DATA PENGUMUMAN</em>
                            </div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Pengumuman</th>
                                <th>Tanggal</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                   <?php foreach ($pengumuman->result() as $p) { ?>
                            <tr>
                                <td width="60%;"><?php echo $p->judul; ?></td>
                                <td><?php echo date('d/m/Y',strtotime($p->waktu)) ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo base_url().'admin/edit_pengumuman/'.$p->id_pengumuman; ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url().'index.php/admin/hapus_pengumuman/'.$p->id_pengumuman; ?>" class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
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