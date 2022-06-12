<style type="text/css">
  .img_gallery{
    width: 150px;
    height: 120px;
  }
</style>

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <div class="panel-heading">GALERI KEGIATAN</div>
            <div class="panel-body">
              <a class="btn btn-primary btn-flat" href="<?php echo base_url().'admin/tambah_galeri' ?>"><i class="glyphicon glyphicon-upload"></i> UPLOAD FOTO KEGIATAN </a>
            </div>
            <div class="box-body">
              <div class="block-content collapse in">
                <div class="row-fluid padd-bottom">
                  <?php foreach ($gallery->result() as $row){ ?>
                  <div class="col-md-3">
                    <a href="#" class="thumbnail img_gallery">
                      <img src="<?php echo base_url('upload/gallery/').$row->gambar ?>">
                    </a>
                    <p><a href="" class="btn btn-danger btn-flat btn-xs" style="margin-top: -20%"><i class="fa fa-trash"></i> Hapus </a><a href="" class="btn btn-warning btn-flat btn-xs" style="margin-top: -20%"><i class="fa fa-pencil"></i> Edit </a></p>
                  </div><?php } ?>
                </div>
            </div>
          </div><?php echo $this->pagination->create_links() ?>
        </div>
      </div>
  </section>
</div>
            
