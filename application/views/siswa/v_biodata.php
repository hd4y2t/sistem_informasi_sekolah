<div class="content-wrapper">
 <div class="row">
                        <div class="col-md-11" style="margin-left: 2%; margin-top: 1%;">
                            <ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#biodata">BIODATA SISWA</a></li>
                            </ul>
                        <form action="<?php echo base_url().'siswa/ubah_data' ?>" method="POST">
                            <div class="tab-content active">
                                <div class="tab-pane active" id="biodata">
                                    <table class="table table-bordered">
                                        <tr class="info"><th colspan="2">DATA SISWA <?php echo $this->session->flashdata('info'); ?></th><th colspan="2"></th></tr>
                                        <tr><td width="190">NIS | NISN</td>
                                            <td><input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nis');?>" disabled></td>
                                            <td><input type="text" class="form-control" name="nis" value="<?php echo $this->session->userdata('nama');?>" disabled></td>
                                        </tr>
                                        <tr><td>NAMA LENGKAP</td>
                                            <td><input type="text" class="form-control" name="ttl" value="<?php echo $this->session->userdata('nama');?>" disabled></td>
                                        </tr>
                                        <tr><td>KELAS | JURUSAN</td>
                                           <td><input type="text" class="form-control" name="kelas" value="<?php echo $this->session->userdata('kelas');?>" disabled></div>
                                           <td><input type="text" class="form-control" name="jurusan" value="<?php echo $this->session->userdata('jurusan');?>" disabled></td>
                                        </tr>
                                        <tr><td>ALAMAT</td>
                                            <td><textarea name="alamat" class="form-control" disabled=" disabled"> <?php echo $this->session->userdata('alamat');?></textarea></td>
                                        </tr>
                                        <tr><td>TTL</td>
                                            <td><input type="text" class="form-control" name="ttl" value="<?php echo $this->session->userdata('ttl');?>" disabled></td>
                                        </tr>
                                        <tr><td>JENIS KELAMIN | AGAMA</td>
                                           <td><input type="text" class="form-control" name="jk" value="<?php echo $this->session->userdata('jk');?>" disabled></div>
                                           <td><input type="text" class="form-control" name="agama" value="<?php echo $this->session->userdata('agama');?>" disabled></td>
                                       </tr>
                                    </table>
                                <div class="tab-pane active" id="biodata">
                                    <table class="table table-bordered">
                                        <tr class="info"><th colspan="2">WALI MURID</th><th colspan="2"></th></tr>
                                        <tr><td width="190">AYAH | IBU</td>
                                            <td><input type="text" class="form-control" name="ayah" value="<?php echo $this->session->userdata('nama_ayah');?>" disabled></td>
                                            <td><input type="text" class="form-control" name="ibu" value="<?php echo $this->session->userdata('nama_ibu');?>" disabled></td>
                                        </tr>
                                       <tr><td width="150">PEKERJAAN | KONTAK</td>
                                            <td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $this->session->userdata('pekerjaan_ortu');?>" disabled></td>
                                            <td><input type="text" class="form-control" name="kontak" value="<?php echo $this->session->userdata('kontak_ortu');?>" disabled></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" class="form-control" name="id_siswa" value="<?php echo $this->session->userdata('id_siswa');?>" disabled>
                                    <input type="hidden" class="form-control" name="foto" value="<?php echo $this->session->userdata('foto');?>">
                              </form> 
                                </div>
                                
                                
                                
                          