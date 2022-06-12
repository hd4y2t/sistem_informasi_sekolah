<div class="content-wrapper">
    <section class="content">
    <h2><?php echo $this->session->flashdata('info'); ?></h2>
      <div class="row">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profil Sekolah</h3>
            </div>
            <form action="<?php echo base_url().'admin/update_profil' ?>" method="POST" />
              <div class="box-body">
              <?php foreach ($profil->result() as $row) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Sekolah</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->nama_sekolah ?>">
                  <input name="id" type="hidden" class="form-control" value="<?php echo $row->id ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Sekolah</label>
                  <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->alamat ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <input name="status" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->status ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telepon</label>
                  <input name="telepon" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->telepon ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Pos</label>
                  <input name="kodepos" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->kodepos ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Akreditasi</label>
                  <input name="akreditasi" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->akreditasi ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Jurusan</label>
                  <input name="jurusan" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->jumlah_jurusan ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input name="email" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row->email ?>">
                </div>
              </div>
            </div>
            </div>
        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Sejarah</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea name="sejarah" class="form-control" rows="3"> <?php echo $row->sejarah ?> </textarea>
                </div>
            </div>
          </div>
          </div>
              <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Visi Misi</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                <?php $this->load->view('admin/v_editor'); ?>
                  <label>Textarea</label>
                  <textarea name="visi" class="form-control" rows="3"> <?php echo $row->visi_misi ?> </textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-flat pull-right">Update</button>
              </form>
                          <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>