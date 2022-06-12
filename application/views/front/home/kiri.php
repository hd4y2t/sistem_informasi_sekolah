<div class="col-lg-3 col-md-3">
    <div class="col-padded col-shaded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
              <div class="box box-solid">
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="<?php echo base_url().'home/login_siswa'?>"><i class="fa fa-users"></i> Login Siswa</a></li>
                    <li class="active"><a href="<?php echo base_url().'home/login_guru'?>"><i class="fa fa-graduation-cap"></i> Login Guru </a></li>
                    <li class="active"><a href="<?php echo base_url().'home/login_admin'?>"><i class="fa fa-user"></i> Login Admin </a></li>
                    <li class="active"><a href="<?php echo base_url().'home/register_data_alumni'?>"><i class="fa fa-graduation-cap"></i> Register Alumni </a></li>
                  </ul>
                </div>
            </li>
            <li class="widget-container widget_recent_news">
                <h1 class="title-widg"></h1>
                <h1 class="title-widget">LINK</h1>
                <?php foreach($baner->result() as $row){ ?>
                    <img class="thumbnail" src="<?php echo base_url().'upload/setting/'.$row->gambar ?>" alt="">
                <?php } ?>
            </li>
        </ul>
    </div>
</div>
