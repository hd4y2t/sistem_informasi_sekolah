<div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Baca Buku Tamu</h3>
            </div>
            <?php foreach ($tamu->result() as $t) { ?>
            <div class="box-body no-padding">
              <div class="mailbox-read-info bg-primary">
                <h5>Dari<span></span>: <?php echo $t->nama ?>
                <span class="mailbox pull-right">Dikirim Tanggal : <?php echo date('d/m/Y',strtotime($t->waktu)) ?></span></h5>

              </div>
            <div class="mailbox-read-info bg-danger">
                <h5>Kontak: <?php echo $t->kontak ?></h5></h5>
                <h5>Alamat: <?php echo $t->alamat ?>

            </h5></div>
                  
              </div>
              <div class="mailbox-read-message">
              <?php echo $t->isi_pesan ?>
              </div>
              <div class="mailbox-read-message">
              <a class="btn btn-primary" href="<?php echo base_url().'admin/buku_tamu' ?>">Kembali</a>
              <a class="btn btn-danger" href="">Hapus</a>
              </div>
              <?php } ?>
            </div>