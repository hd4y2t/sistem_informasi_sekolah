<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget">EKSTRAKULIKULER</h1>
                <ul class="list-unstyled">
                <?php foreach($ekstrakulikuler->result() as $row){ ?>
                    <li class="recent-news-wrap">
                    <h1 class="title-median"><a href="" title=""><?php echo $row->judul ?></a></h1>
                        <div class="recent-news-content clearfix">
                            <figure class=" thumbnail">
                                <a href="" title="Konten">
                                <img src="<?php echo base_url().'upload/halaman/'.$row->foto ?>" style="height:90px"/></a>
                            </figure>
                                           
                                        </div>

                                    </li>    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
