<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget">AGENDA KEGIATAN SEKOLAH</h1>
                <ul class="list-unstyled">
                <?php foreach($agenda->result() as $row){ ?>
                <table class="table table-bordere table-hover" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <b style="text-transform: uppercase;"><?php echo $row->deskripsi ?></b>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="1%;">Topik</td>
                            <td style="text-align: left;"> : <?php echo $row->keterangan ?></td>
                        </tr>
                        <tr>
                            <td width="10%;">Tempat</td>
                            <td style="text-align: left;"> : <?php echo $row->tempat ?></td>
                        </tr>
                        <tr>
                            <td width="1%;">Tanggal</td>
                            <td style="text-align: left;"> : <?php echo $row->tanggal ?></td>
                        </tr>
                        <tr>
                            <td width="1%;">Pukul</td>
                            <td style="text-align: left;"> : <?php echo $row->pukul ?></td>
                        </tr>
                        <tr>
                            <td width="1%;">Pengirim</td>
                            <td style="text-align: left;"> : <?php echo $row->pengirim ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>                    
                </ul>
            </li>
        </ul>
    </div>
</div>



