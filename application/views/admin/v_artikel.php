<div class="content-wrapper">
  <section class="content-header">
<div class="box box-primary">
            <div class="box-header with-border">
      <div class="panel-heading"><h2><i class="fa fa-send"></i> BERITA</h2></div>
        <div class="panel-body">
          <a class="btn btn-default btn-flat" href="<?php echo base_url().'admin/tambah_artikel' ?>"><i class="fa fa-pencil"></i>  TULIS BERITA</a>
        </div>
            <div class="box-header">
              <h3 class="box-title"><?php echo $this->session->flashdata('info'); ?></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($berita->result() as $b) { ?>
                <tr>
                  <td><h4><label class="label label-info"><i class="fa fa-tag"></i> <?php echo $b->kategori ?></label></h4></td>
                  <td style="font-weight: bold; text-transform: uppercase; width: 200px;"><?php echo $b->judul ?></td>
                  <td style="text-align: justify;"><?php $text = $b->isi; echo strip_tags(substr($text,0,290)) ?></td>
                  <td style="width: 20%;"><center>
                    <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/edit_artikel/'.$b->id_berita ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url().'admin/hapus_artikel/'.$b->id_berita ?>"><i class="fa fa-trash"></i> Hapus</a>
                    </center>
                  </td>
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>