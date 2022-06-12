    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                        <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
                        <li class="active"><?php echo $blog['title'];?></li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            <?php
            // Session 
            if($this->session->flashdata('sukses')) { 
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            } 
            // Error
            echo validation_errors('<div class="alert alert-success">','</div>'); 
            ?>
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                    
                                <figure class="news-featured-image">	
                                    <img src="<?php echo base_url('assets/upload/image/'.$blog['image']);?>" alt="Featured image 4" class="img-responsive" />
                                </figure>
                                
                                <div class="news-title-meta">
                                    <h1 class="page-title"><?php echo $blog['title'];?></h1>
                                    <div class="news-meta">
                                        <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($blog['date_post'])); ?></span>
                                        <span class="news-meta-category"><a href="<?php echo $blog['category_name'];?>" title="<?php echo $blog['category_name'];?>"><?php echo $blog['category_name'];?></a></span>
                                        <span class="news-meta-comments"><a href="#" title="3 comments"><?php echo $count;?> comments</a></span>
                                    </div>
                                </div>
                                
                                <div class="news-body">
                                    <p><?php echo $blog['title'];?></p>                                    
                                </div>                            
                            
                            </div>
                        
                        </div><!-- row end -->  
                        
                        <div class="row row-splitter">
                        
                        </div> 
                        
                        <div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            
                            	<div id="comments"><!-- comments wrap -->

                                	<h6 class="remove-margin-top">Comments ( <?php echo $count;?> )</h6><!-- comments list title -->
                                    
                                    <ol class="commentlist"><!-- comments list -->
                                            
                                       <?php foreach ($comments as $comment){?> 
                                        <li class="comment" id="li-comment-3"><!-- comment -->
                                                
                                            <div id="comment-3">
                                                
                                                <div class="comment-avatar"><!-- author avatar -->
                                                    <img width="50" height="50" class="avatar avatar-50 photo" src="<?php echo base_url();?>assets/front/img/avatar.png" alt="User Avatar" />
                                                </div><!-- author avatar end -->
                                                    
                                                <div class="comment-content-wrap"><!-- comment content wrap -->
                                                
                                                    <div class="comment-author"><!-- author start -->
                                                        <cite class="fn"><?php echo $comment['name'];?> - <i><?php echo $comment['email'];?></i><span class="label"> Post author</span></cite>
                                                    </div><!-- author end -->
                                    
                                                    <div class="comment-meta commentmetadata"><!-- comment meta-->
                                                        <a href="#"><?php echo $comment['date_comment'];?></time></a>
                                                    </div><!-- comment meta end -->
                                                    
                                                    <div class="comment-body"><!-- comment text -->
                                                        <p>
                                                        <?php echo $comment['message'];?>
                                                        </p>
                                                    </div><!-- comment text end -->
                                                    
                                                </div><!-- comment content wrap end -->
                                                    
                                            </div>
                                    
                                        </li><!-- comment end -->
                                        <?php } ?>
                                        
                                    </ol><!-- comments list end -->
                                    
                                    <div class="comment-respond" id="respond"><!-- post comment form wrap -->
                                    
                                        <h6 class="comment-reply-title" id="reply-title">Post Comment</h6><!-- post comment title -->
                                        
                                        <form class="comment-form" id="commentform" method="post" action="<?php echo base_url('blog/replyBlog');?>"><!-- post comment form -->
                                            <input type="hidden" name="blog_id" value="<?php echo $blog['blog_id'];?>">
                                            <div class="row"><!-- row -->                                            
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-12"><!-- name, email, website -->
                                                
                                                    <div class="row"><!-- row -->
                                                    
                                                        <div class="form-group col-lg-12">
                                                            <label for="author">Name <span class="required">*</span></label>
                                                            <input type="text" aria-required="true" size="30" value="" name="name" id="author" class="form-control" required />
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-12">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" required />
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-12">
                                                            <label for="url">Website</label>
                                                            <input type="url" size="30" value="" name="website" id="url" class="form-control" required>
                                                        </div>
                                                        
                                                    </div><!-- row end -->
                                                    
                                                </div><!-- name, email, website end -->
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-12"><!-- textarea -->
                                                
                                                    <div class="row"><!-- row -->
                                                    
                                                        <div class="form-group clearfix col-lg-12">
                                                            <label for="comment">Comment</label>
                                                            <textarea aria-required="true" rows="8" cols="45" name="message" id="comment" class="form-control" required></textarea>
                                                        </div>
                                                        
                                                    </div><!-- row end -->
                                                    
                                                </div><!-- textarea -->
                                                
                                            </div><!-- row end -->
                                            
                                            <div class="row"><!-- row -->
                                            
                                                <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                    <input type="submit" value="Post Comment" id="submit" name="submit" class="btn btn-default" /><!-- submit -->
                                                </div>
                                                
                                            </div><!-- row end -->
                                            
                                        </form><!-- post comment form end -->
                                        
                                    </div><!-- post comment form wrap end -->
                                
                                </div><!-- comments wrap end -->
                            
                            </div>
                        
                        </div><!-- row end -->                   
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widget -->
                    
                                <h1 class="title-widget">Kategori Blog</h1>
                                <?php foreach ($categories as $category){?>
                                <ul>
                                	<li><a href="<?php echo base_url('blog/kategori/'.$category['slug_category']);?>" title="menu item"><?php echo $category['category_name'];?></a></li>
                                </ul>
                                <?php } ?>                
							</li>
                            
                        	<li class="widget-container widget_up_events"><!-- widget -->
                    
                                <h1 class="title-widget">Blog Terkait</h1>
                                
                                <ul class="list-unstyled">
                                
                                <?php
                                $category_id = $blog['category_id'];
                                $blogTerkait = $this->mBlogs->blogTerkait($category_id);
                                $i=0;
                                foreach ($blogTerkait as $blogTerkait){
                                    if ($i == 1 && $blogTerkait['blog_id']++ < 10) { 
                                ?>
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="<?php echo base_url('blog/detil/'.$blogTerkait['slug_blog']);?>" title="<?php echo $blogTerkait['title'];?>"><?php echo $blogTerkait['title'];?></a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                        <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($blogTerkait['date_post'])); ?></span>
                                        </div>
                                        
                                        <div class="news-body">
                                            <p>
                                                <?php
                                                    $out = strlen($blogTerkait['content']) > 150 ? substr($blogTerkait['content'],0,150).'... <a href="'. base_url('blog/detil/'.$blogTerkait['slug_blog']).'" class="moretag">detil Selengkapnya</a> ' : $blogTerkait['content'];
                                                    echo $out;
                                                ?>  
                                            </p>                                    
                                        </div>
                                    
                                    </li>                            
                                <?php }else{ $i++; }} ?>
                                
                                </ul>
                            
                            </li>                            
                            
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->    