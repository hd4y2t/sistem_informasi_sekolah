<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget">BERITA DAN ARTIKEL</h1>
                <ul class="list-unstyled">
                <?php foreach($berita->result() as $row){ ?>
                    <li class="recent-news-wrap">
                    <h1 class="title-median"><a href="" title=""><?php echo $row->judul ?></a></h1>
                        <div class="recent-news-meta">
                            <div class="recent-news-date"><?php echo date('d/m/Y',strtotime($row->waktu)) ?></div>
                        </div>
                        <div class="recent-news-content clearfix">
    
                                <img src="<?php echo base_url().'upload/berita/'.$row->gambar ?>" style="height:100%;"/></a>

                                <p style="text-align: justify;">
                                <?php echo $row->isi; ?>
                                </p><a class="btn btn-success btn-xs pull-right" href="read/<?php echo $row->id_berita; ?>">Selengkapnya <i class="fa fa-arrow-right"></i></a>
           
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</div>

