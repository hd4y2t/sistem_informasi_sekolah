<div class="content-wrapper">
    <div class="row">
        <div class="col-md-11" style="margin-left: 2%; margin-top: 1%;">
            <ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#">IURAN SPP</a></li>
            </ul>
            <?php foreach ($iuran->result() as $sis) { ?>
                <div class="tab-content active">
                    <div class="tab-pane active" id="biodata">
                        <table class="table table-bordered">
                            <tr class="info">
                                <th colspan="2">IURAN SISWA<?php echo $this->session->flashdata('info'); ?></th>
                                <th colspan="2"></th>
                            </tr>
                            <tr>
                                <td width="190">NIS | NISN</td>
                                <td><input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nis'); ?>" disabled></td>
                                </td>   
                            </tr>
                            <tr>
                                <td>NAMA LENGKAP</td>
                                <td><input type="text" class="form-control" name="ttl" value="<?php echo $this->session->userdata('nama'); ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>KELAS | JURUSAN</td>
                                <td>
                                    <input type="text" class="form-control" name="kelas" value="<?php echo $this->session->userdata('kelas') . " | " . $sis->nama_jurusan; ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>BULAN , TAHUN <?php echo date('Y'); ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td>Januari</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_januari == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>februari</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_februari == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>maret</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_maret == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>april</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_april == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>mei</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_mei == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>juni</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_juni == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>juli</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_juli == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>agustus</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_agustus == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>september</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_september == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>oktober</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_oktober == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>november</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_november == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>desember</td>
                                <td>
                                    <input type="text" class="form-control" value="<?php if ($sis->iuran_desember == 0) {
                                                                                        echo "belum lunas";
                                                                                    } else {
                                                                                        echo "lunas";
                                                                                    } ?>" disabled>
                                </td>
                            </tr>

                    </div>
                </div>
                <td></td>
                </tr>
            <?php } ?>
        </div>
    </div>
</div>