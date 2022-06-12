<div class="col-lg-3 col-md-3">
    <div class="col-padded col-shaded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_up_events">
                <h1 class="title-widget">sambutan kepala sekolah</h1>
                <center><img src="<?php echo base_url() . 'assets/img/' ?>kepala-sekolah.png" alt=""></center>
                <center>
                    <p>HENDRIKO, S.Pd</p>
                </center>
                <p style="text-align: justify; color: #272; font-size: 13px;"><i class="fa fa-quote-left"></i> Selamat datang di website resmi SMK Ma'arif 1 Kalirejo. Terimakasih atas kunjungan di website kami dan kami berusaha memberikan informasi kepada publik tentang kegiatan dan informasi lainnya yang menyangkut tentang sekolah kami serta kebijakan dan segala aktifitas yang ada di SMK Ma'arif 1 Kalirejo. adapun tujuan adanya website adalah sebagai penjembatan bagi masyarakat luas untuk memperoleh sebuah informasi dengan cepat dan akurat dan transparan, TERIMA KASIH <i class="fa fa-quote-right"></i></p>
                <h1 class="title-widg"></h1>
                <h1 class="title-widget">PENGUMUMAN TERBARU</h1>
                <ul class="list-unstyled">
                    <?php foreach ($pengumuman->result() as $row) { ?>
                        <li class="recent-news-wrap news-no-summary">
                            <div class="recent-news-content clearfix">
                                <div class="recent-news-text" style="margin-left: -3%;">
                                    <h1 class="title-median"><a href=""><?php echo $row->judul ?></a></h1>
                                    <p><i class="fa fa-clock-o"></i> <?php echo $row->waktu ?> | <i class="fa fa-user"></i> by <b>Admin</b></p>
                                    <div class="recent-news-meta">
                                        <div class="recent-news-date" style="text-align: justify;"><?php echo $row->isi ?></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                <a class="btn btn-info btn-xs pull-right">Semua Pengumuman</a>
            </li>
        </ul>
    </div>
</div>