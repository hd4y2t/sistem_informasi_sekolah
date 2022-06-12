<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
      <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <P>EDIT AGENDA KEGIATAN</P>
                            </div>
                            <?php echo form_open_multipart('admin/update_agenda'); ?>
                            <div class="panel-body">
                            <?php foreach ($agenda_kegiatan->result() as $row) { ?>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" rows="6"><?php echo $row->deskripsi ?></textarea>
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="tanggal" type="text" class="form-control pull-right" id="datepicker" value="<?php echo $row->tanggal ?>">
                                        <input name="id" type="hidden" value="<?php echo $row->id ?>">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input name="pukul" type="text" class="form-control pull-right" value="<?php echo $row->pukul ?>">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <input name="tempat"  type="text" class="form-control pull-right" value="<?php echo $row->tempat ?>">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                        <input name="keterangan" type="text" class="form-control pull-right" value="<?php echo $row->keterangan ?>">
                                    </div>
                                    <?php } ?>
                                    <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading bg-success">
                                <p>AGENDA KEGIATAN SEKOLAH</p>
                            </div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Hari/Tanggal</th>
                                <th>Pukul</th>
                                <th>Tempat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($agenda->result() as $row) { ?>
                            <tr>
                                <td width="30%;"><?php echo $row->deskripsi ?></td>
                                <td><?php echo $row->tanggal ?></td>
                                <td><?php echo $row->pukul ?></td>
                                <td><?php echo $row->tempat ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo base_url().'admin/edit_pengumuman/' ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url().'index.php/admin/hapus_pengumuman/'?>" class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
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

