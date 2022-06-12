<div class="col-lg-6 col-md-6">
    <div class="col-padded">
        <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news">
                <h1 class="title-widget">BUKU INDUK SISWA</h1>
                <form action="<?php echo base_url().'siswa/buku_induk_siswa' ?>" method="POST">
                    <div class="form-group col-md-6">
                        <select name="kelas" class="form-control" style="height: 35px;">
                            <option> Pilih Kelas</option>
                            <?php foreach($kelas->result() as $row){ ?>
                            <option value="<?php echo $row->id_kelas ?>"><?php echo $row->nama_kelas ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-info" type="submit">Tampilkan</button>
                </form>
            </li>
        </ul>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($siswa->result() as $row){ ?>
                        <tr>
                            <td><?php echo ++$mulai ?></td>
                            <td><?php echo $row->nis ?></td>
                            <td><?php echo $row->nama_siswa ?></td>
                            <td><?php echo $row->jk ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
</div>
