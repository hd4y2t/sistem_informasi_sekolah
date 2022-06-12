<div class="content-wrapper">
  	<section class="content center">
    	<div class="row">
      		<div class="col-md-8" style="margin-left: 10%;">
        		<div class="box box-success">
          			<div class="box-header with-border">
            		<h3 class="box-title">INPUT DATA SISWA</h3>
          			</div>
          			<?php echo form_open_multipart('admin/simpan_data_siswa');?>
						  <div class="form-horizontal">
              				<div class="box-body">

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">NIS</label>
                  				<div class="col-sm-8" style="width:30%;">
                    				<input type="text" class="form-control" name="nis" placeholder="NIS" required="" />
                  				</div>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">NISN</label>
                          <div class="col-sm-8" style="width:30%;">
                            <input type="text" class="form-control" name="nisn" placeholder="NISN" required="" />
                          </div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">NAMA LENGKAP</label>
                  				<div class="col-sm-8">
                    				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="" />
                  				</div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">ALAMAT</label>
                  				<div class="col-sm-8">
                    			<textarea name="alamat" class="form-control" rows="3" placeholder="Alamat" id="alamat" required=""></textarea>
                  				</div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">TTL</label>
                  				<div class="col-sm-8">
                    				<input type="text" class="form-control" name="ttl" placeholder="Tempat dan Tanggal Lahir" required="" />
                  				</div>
                			</div>

                			<div class="form-group">	
                  				<label for="inputEmail3" class="col-sm-4 control-label">JENIS KELAMIN</label>
                  				<div class="col-sm-8">
                  					<div class="radio">
				                    	<label>
				                     	<input type="radio" name="jk" id="optionsRadios1" value="Laki-Laki" checked>LAKI-LAKI </label></br>
				                    	<input type="radio" name="jk" id="optionsRadios2" value="Perempuan"> PEREMPUAN
				                    	</label>
				                    </div>
				                </div>   
                			</div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">AGAMA</label>
                          <div class="col-sm-8">
                             <select name="agama" class="form-control" style="width:40%;">
                                        <option>PILIH AGAMA</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                            </select>
                        </div>
                      </div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">KELAS</label>
                  				<div class="col-sm-8">
                    				 <select name="kelas" class="form-control" style="width:40%;">
                                        <option>PILIH KELAS</option>
                                        <?php foreach ($kelas->result() as $k) { ?>
                                        <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                        <?php } ?>                                                 
                    				</select>
                 				</div>
                 			</div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">JURUSAN</label>
                          <div class="col-sm-8">
                             <select name="jurusan" class="form-control" style="width:40%;">
                                        <option>PILIH JURUSAN</option>
                                        <?php foreach ($jurusan->result() as $j) { ?>
                                        <option value="<?php echo $j->id_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                                        <?php } ?>                                                 
                            </select>
                        </div>
                      </div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4  text-center" style="color: red;">DATA ORANG TUA / WALI MURID</label>
                  		</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">NAMA AYAH</label>
                  				<div class="col-sm-8" style="width:40%;">
                    				<input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" required="">
                  				</div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">NAMA IBU</label>
                  				<div class="col-sm-8" style="width:40%;">
                    				<input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" required="">
                  				</div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">KONTAK</label>
                  				<div class="col-sm-8" style="width:40%;">
                    				<input type="text" class="form-control" name="kontak" placeholder="Kontak" required="">
                  				</div>
                			</div>

                			<div class="form-group">
                  				<label for="inputEmail3" class="col-sm-4 control-label">PEKERJAAN</label>
                  				<div class="col-sm-8" style="width:40%;">
                    				<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Wali Murid" required="">
                  				</div>
                			</div>
                  <button name="save" class="btn btn-default btn-flat pull-right" type="submit"><i class="fa fa-check-square-o"></i> TAMBAHKAN</button>