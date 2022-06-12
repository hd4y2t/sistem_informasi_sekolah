<div class="col-lg-6 col-md-6">
  <div class="col-padded">
    <ul class="list-unstyled clear-margins">
      <li class="widget-container widget_recent_news">
          <h1 class="title-widget">PROFIL SMK MA'ARIF 1 KALIREJO</h1>
              <ul class="list-unstyled">
                <?php foreach($profil->result() as $row){ ?>
                <li class="recent-news-wrap">
                  <table class=" table-responsive">
                    <tr>
                      <td>Nama Sekolah</td>
                      <td>  : <?php echo $row->nama_sekolah ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>  : <?php echo $row->alamat ?></td>
                    </tr>
                    <tr>
                      <td>Kode Pos</td>
                      <td>  : <?php echo $row->kodepos ?></td>
                    </tr>
                    <tr>
                      <td>Telepon</td>
                      <td>  : <?php echo $row->telepon ?></td>
                    </tr>
                    <tr>
                      <td>E-Mail</td>
                      <td>  : <?php echo $row->email ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>  : <?php echo $row->status ?></td>
                    </tr>
                    <tr>
                      <td>Akreditasi</td>
                      <td>  : <?php echo $row->akreditasi ?></td>
                    </tr>
                    <tr>
                      <td>Jumlah Jurusan</td>
                      <td>  : <?php echo $row->jumlah_jurusan ?></td>
                    </tr>
                  </table>

                </li>
                  <?php } ?>
                </ul>
            </li>
        </ul>
      </div>
  </div>
