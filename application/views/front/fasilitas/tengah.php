<div class="col-lg-6 col-md-6">
  <div class="col-padded">
    <ul class="list-unstyled clear-margins">
      <li class="widget-container widget_recent_news">
          <h1 class="title-widget">FASILITAS SEKOLAH</h1>
              <ul class="list-unstyled">
                <?php foreach($profil->result() as $row){ ?>
                <li class="recent-news-wrap">
                  <table class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th>Foto</th>
                          <th>Nama Fasilitas</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($fasilitas->result() as $row){ ?>
                        <tr>
                          <td><img src="<?php echo base_url('upload/halaman/').$row->foto;?>"></td>
                          <td><?php echo $row->judul; ?></td>
                          <td><?php echo $row->deskripsi; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                  </table>

                </li>
                  <?php } ?>
                </ul>
            </li>
        </ul>
      </div>
  </div>
