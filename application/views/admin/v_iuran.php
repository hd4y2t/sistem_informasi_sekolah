<div class="content-wrapper">
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="panel-heading"><i class="fa fa-group "></i> DATA SISWA</div>
            </div>

            <?php echo $this->session->flashdata('info') ?>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-stored">
                        <thead>
                            <tr>
                                <th style="width: 10px;">NO</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Januari</th>
                                <th>februari</th>
                                <th>Maret</th>
                                <th>April</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agustus</th>
                                <th>September</th>
                                <th>Oktober</th>
                                <th>November</th>
                                <th>Desember</th>
                                <th class="text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($iuran->result() as $sis) { ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td style="text-transform: uppercase;"><?= $sis->nama_siswa; ?></td>
                                    <td style="text-transform: uppercase;"><?= $sis->nama_kelas; ?></td>
                                    <td style="text-transform: uppercase;"><?= $sis->nama_jurusan; ?></td>
                                    <td><?php
                                        if ($sis->iuran_januari == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_februari == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_maret == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_april == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_mei == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_juni == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_juli == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_agustus == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_september == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_oktober == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_november == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($sis->iuran_desember == 0) {
                                            echo "belum lunas";
                                        } else {
                                            echo "lunas";
                                        }
                                        ?></td>

                                    <td class="text-center">
                                        <a class="btn btn-warning btn-xs btn-flat" href="<?php echo base_url() . 'admin/tambah_iuran/' . $sis->iuran_siswa; ?>"><i class="glyphicon glyphicon-list-alt"></i> Bayar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tfoot>
                    </table>
                </div>
            </div>
        </div>
</div>
</section>