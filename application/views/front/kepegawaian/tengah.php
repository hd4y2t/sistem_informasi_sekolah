<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget">TENAGA PENDIDIK SMK MA'ARIF 1 KALIREJO</h1>
            </li>
        </ul>

        <table class="table table-bordered table-striped table-stored">
            <thead>
                <tr>
                    <th width="9%;">NO</th>
                    <th>FOTO</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($guru->result() as $row){ ?>
                <tr>
                    <td><?php echo ++$mulai ?></td>
                    <td class="img" style="width: 90px; height: 90px;">
                        <img src="<?php echo base_url().'upload/guru/'.$row->foto ?>" alt="">
                    </td>
                    <td style="text-transform: capitalize;">
                        <i class="fa">Nama</i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row->nama_guru ?><br>
                        <i class="fa">Alamat</i> &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row->alamat ?><br>
                        <i class="fa">TTL</i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row->ttl ?><br>
                        <i class="fa">Mengajar</i> : <?php echo $row->nama_pelajaran ?><br>
                    </td>
                        </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
