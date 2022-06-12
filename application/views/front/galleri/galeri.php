<div id="k-body">
    <div class="container">
        <div class="row">
            <div class="k-breadcrumbs col-lg-12 clearfix">
                <ol class="breadcrumb">
                    <li><a href="">Galleri</a></li>
                    <li class="active">Album Foto </li>
                </ol>
            </div>            
        </div>
        
        <div class="row no-gutter fullwidth"> 
            <div class="col-lg-12 col-md-12"> 	
                <div class="col-padded">       
                    <h1 class="page-title"></span></h1>   
                        <div class="news-body">
                            <div class="row gutter k-equal-height">
                            <?php foreach ($galeri->result() as $g){ ?>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                	<figure class="gallery-photo-thumb">
                                    	<a href="<?php echo base_url().'upload/gallery/'.$g->gambar ?>" title="<?php echo $g->deskripsi ?>" data-fancybox-group="gallery-bssb" class="fancybox"><img src="<?php echo base_url().'upload/gallery/'.$g->gambar ?>" alt="<?php echo $g->deskripsi ?>" /></a>
                                    </figure>
                                    <div class="gallery-photo-description">
                                    	<?php echo $g->deskripsi ?>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   