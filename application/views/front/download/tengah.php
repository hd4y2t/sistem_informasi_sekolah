<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget"><i class="fa fa-cloud-download"></i> LIST DOWNLOAD FILE</h1>
                <ul class="list-unstyled">
                <?php foreach($download->result() as $row){ ?>
                    <li class="recent-news" style="margin-top: 5%;">
                    <h1 class="title-median"><a href="" title=""><?php echo $row->nama ?></a></h1>
                        <div class="recent-news-meta">
                            <div class="recent-news-date"><?php echo date('d/m/Y',strtotime($row->tgl_upload)) ?></div>
                        </div>
                        <p style="text-align: justify;"><?php $text = $row->deskripsi; echo strip_tags(substr($text,0,200)) ?></p>
                        <a class="btn btn-primary btn-xs" href="<?php echo base_url().'upload/file/'.$row->file ?>" download target="_blank" title="<?php echo $row->file ?>"><i class="fa fa-cloud-download"></i> Download</a>
                    </li>    
                <?php } ?>
                </ul>
            </li>
        </ul>                 
    </div>
</div>
