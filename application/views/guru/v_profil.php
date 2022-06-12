<div class="content-wrapper">
<div class="row">
<div class="col-md-9" style="margin-left: 10%; margin-top: 2%;">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">BIODATA GURU</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <form action="<?php echo base_url().'guru/update_profil'?>">
              <div class="table-responsive">
                <table class="table table-bordered">                  
                        <tr>
                          <td>NUPTK | NIP</td>
                          <td><input type="text" class="form-control" name="nuptk" value="<?php echo $this->session->userdata('nuptk');?>" disabled></div>
                          <td><input type="text" class="form-control" name="jurusan" value="<?php echo $this->session->userdata('nip');?>" disabled></td>
                        </tr>
                        <tr>
                          <td>NAMA LENGKAP</td>
                          <td><input type="text" class="form-control" name="kelas" value="<?php echo $this->session->userdata('nama_guru');?>" disabled></div>
                        </tr>
                        <tr>
                          <td>ALAMAT</td>
                          <td><textarea name="alamat" class="form-control" disabled><?php echo $this->session->userdata('alamat');?></textarea></td>
                        </tr>
                        <tr>
                          <td>TTL</td>
                          <td><input type="text" class="form-control" name="ttl" value="<?php echo $this->session->userdata('ttl');?>" disabled></td>
                        </tr>
                        <tr>
                          <td>JENIS KELAMIN | AGAMA</td>
                            <td><input type="text" class="form-control" name="jk" value="<?php echo $this->session->userdata('jk');?>" disabled></div>
                            <td><input type="text" class="form-control" name="agama" value="<?php echo $this->session->userdata('agama');?>" disabled></td>
                        </tr>
                        <tr>
                          <td width="190">JENJANG PENDIDIKAN</td>
                          <td><input type="text" class="form-control" name="ayah" value="<?php echo $this->session->userdata('jenjang_pendidikan');?>" disabled></td>
                        </tr>
                        <tr>
                          <td width="150">KONTAK</td>
                          <td><input type="text" class="form-control" name="kontak" value="<?php echo $this->session->userdata('kontak');?>" disabled></td>
                        </tr>
                    </table>   
                  </div>
                </div>
               