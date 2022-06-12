<div class="content-wrapper">
<section class="content">
<div class="row">
<div class="col-md-12" style="margin-top: 1%;">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Buku Tamu</h3>

              <div class="box-tools pull-right">
              </div>
            </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php foreach ($tamu->result() as $t) { ?>
                  <tr>
                    <td><i class="fa fa-envelope-o text-yellow"></i></a></td>
                    <td class="mailbox-name"><?php echo $t->nama ?></td>
                    <td class="mailbox-subject" style="width: 50%;"><?php echo $t->isi_pesan ?>
                    </td>
                    <td class="mailbox-date"><label class="label label-success"><?php echo date('d/m/Y',strtotime($t->waktu)) ?> </label></td>
                    <td style="width: 20%;">
                      <a class="btn btn-success btn-xs btn-flat" href="<?php echo base_url().'admin/baca_buku_tamu/'.$t->id ?>"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
                      <a class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url().'admin/hapus_buku_tamu/'.$t->id ?>"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section></div>