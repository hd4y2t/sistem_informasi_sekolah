<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-primary">
            <div class="box-header with-border">
                            <div class="panel-heading">
                                <P>TULIS AGENDA KEGIATAN</P>
                            </div>
                            <?php echo form_open_multipart('admin/tambah_agenda'); ?>
                            <div class="panel-body">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="tanggal" type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input name="pukul" type="text" class="form-control pull-right" placeholder="Pukul">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <input name="tempat"  type="text" class="form-control pull-right" placeholder="Tempat">
                                    </div>
                                    <div class="input-group date" style="margin-bottom: 3%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                        <input name="keterangan" type="text" class="form-control pull-right" placeholder="Keterangan">
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary btn-flat"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-6">
                                  <div class="box box-primary">
            <div class="box-header with-border">
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($agenda->result() as $row) { ?>
                            <tr>
                                <td style="width: 30%;"><?php echo $row->deskripsi ?></td>
                                <td><?php echo $row->tanggal ?></td>
                                <td><?php echo $row->pukul ?></td>
                                <td style="width: 19%;">
                                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/edit_agenda/'.$row->id ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url().'admin/hapus_agenda/'.$row->id ?>" class="btn btn-danger btn-xs btn-flat" href=""><i class="fa fa-trash"></i></a>
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

