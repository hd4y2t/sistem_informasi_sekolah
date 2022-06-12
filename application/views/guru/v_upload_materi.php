<div class="content-wrapper" onload="alert('<?php echo $this->session->flashdata('sukses') ?>')">
    <section class="content">
      <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <P>TAMBAH MATERI PELAJARAN</P>
                            </div>
                            <div class="panel-body">
                                    <div class="form-group">
                                    <?php echo form_open_multipart('guru/upload_materi_proses'); ?>
                                        <label>Judul Materi</label>
                                        <input style="width: 100%;" name="judul" type="text" class="form-control">
                                
                                    </div>
                                    <div class="form-group">
                                        <label>MATERI KELAS</label>
                                           <select name="kelas" class="form-control" style="width:70%;">
                                                      <?php foreach ($kelas->result() as $k) { ?>
                                                      <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                                      <?php } ?>                                                 
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label>PELAJARAN</label>
                                           <select name="pelajaran" class="form-control" style="width:70%;">
                                                      <?php foreach ($pelajaran->result() as $row) { ?>
                                                      <option value="<?php echo $row->id_pelajaran; ?>"><?php echo $row->nama_pelajaran; ?></option>
                                                      <?php } ?>                                                 
                                          </select>
                                    </div>
                                    <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea name="deskripsi" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>File Materi</label>
                                         <input style="width: 100%;" name="file" type="file">
                                    </div>
                                    <button name="simpan" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Kirim</button> | <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading bg-success">
                                <p>DATA MATERI PELAJARAN</p>
                            </div>
                            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Materi</th>
                                <th>Pelajaran</th>
                                <th>Kelas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($materi->result() as $row) { ?>
                            <tr>
                                <td><?php echo $row->judul_materi ?></td>
                                <td><?php echo $row->nama_pelajaran ?></td>
                                <td><?php echo $row->nama_kelas ?></td>
                                <td>
                                    <a href="<?php echo base_url().'index.php/admin/hapus_pengumuman/'?>" class="btn btn-danger btn-xs" href=""><i class="fa fa-trash"></i> Hapus</a>
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