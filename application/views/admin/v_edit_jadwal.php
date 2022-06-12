<div class="content-wrapper">
    <section class="content center">
        <div class="row">
            <div class="col-md-8" style="margin-left: 15%;">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">EDIT DATA JADWAL</h3>
                    </div>
                    <?php echo form_open('admin/update_jadwal') ?>
                    <div class="form-horizontal">
                        <?php foreach ($jadwal as $k) { ?>
                            <div class="box-body">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-8">
                                            <select name="kelas" class="form-control" style="width:40%;">
                                                <?php foreach ($kelas->result() as $j) {
                                                    if ($k->jadwal_kelas == $j->id_kelas) { ?>
                                                        <option value="<?php echo $j->id_kelas; ?>" selected><?php echo $j->nama_kelas; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $j->id_kelas; ?>"><?php echo $j->nama_kelas; ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Pelajaran</label>
                                        <div class="col-sm-8">
                                            <select name="pelajaran" class="form-control" style="width:40%;">
                                                <?php foreach ($pelajaran->result() as $p) {
                                                    if ($k->jadwal_pelajaran == $p->id_pelajaran) { ?>
                                                        <option value="<?php echo $p->id_pelajaran; ?>" selected><?php echo $p->nama_pelajaran; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $p->id_pelajaran; ?>"><?php echo $p->nama_pelajaran; ?></option>
                                                <?php }
                                                }
                                                ?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Jam</label>
                                        <div class="col-sm-8">
                                            <select name="jam" class="form-control" style="width:40%;">
                                                <option value="07.15" <?php if ($k->jadwal_jam == '07.15') echo "selected" ?>>07.15</option>
                                                <option value="08.15" <?php if ($k->jadwal_jam == '08.15') echo "selected" ?>>08.15</option>
                                                <option value="09.15" <?php if ($k->jadwal_jam == '09.15') echo "selected" ?>>09.15</option>
                                                <option value="10.15" <?php if ($k->jadwal_jam == '10.15') echo "selected" ?>>10.15</option>
                                                <option value="11.15" <?php if ($k->jadwal_jam == '11.15') echo "selected" ?>>11.15</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Hari</label>
                                        <div class="col-sm-8">
                                            <select name="hari" class="form-control" style="width:40%;">
                                                <option value="senin" <?php if ($k->jadwal_hari == 'senin') echo "selected" ?>>Senin</option>
                                                <option value="selasa" <?php if ($k->jadwal_hari == 'selasa') echo "selected" ?>>Selasa</option>
                                                <option value="rabu" <?php if ($k->jadwal_hari == 'rabu') echo "selected" ?>>Rabu</option>
                                                <option value="kamis" <?php if ($k->jadwal_hari == 'kamis') echo "selected" ?>>Kamis</option>
                                                <option value="jumat" <?php if ($k->jadwal_hari == 'jumat') echo "selected" ?>>Jumat</option>
                                                <option value="sabtu" <?php if ($k->jadwal_hari == 'sabtu') echo "selected" ?>>Sabtu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Pengajar</label>
                                        <div class="col-sm-8">
                                            <select name="guru" class="form-control" style="width:40%;">
                                                <?php foreach ($guru->result() as $g) {
                                                    if ($k->jadwal_guru == $g->id_guru) { ?>
                                                        <option value="<?php echo $g->id_guru; ?>" selected><?php echo $g->nama_guru; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $g->id_guru; ?>"><?php echo $g->nama_guru; ?></option>
                                                <?php }
                                                }
                                                ?>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Input</button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </section>