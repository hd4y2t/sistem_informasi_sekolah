<div class="col-lg-6 col-md-6">
  <div class="col-padded">
    <ul class="list-unstyled clear-margins">
      <li class="widget-container widget_recent_news">
          <h1 class="title-widget">SEJARAH SINGKAT</h1>
              <ul class="list-unstyled">
                <?php foreach($profil->result() as $row){ ?>
                <li class="recent-news-wrap">
                <?php echo $row->sejarah; ?>

                </li>
                  <?php } ?>
                </ul>
            </li>
        </ul>
      </div>
  </div>
