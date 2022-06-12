<div class="content-wrapper">
    <section class="content center">
        <div class="row">
            <div class="col-md-8" style="margin-left: 15%;">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">INPUT DATA JADWAL</h3>
                    </div>
                    <?php echo form_open('admin/simpan_jadwal') ?>
                    <div class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
                                <div class="col-sm-8">
                                    <select name="kelas" class="form-control" style="width:40%;">
                                        <?php foreach ($kelas->result() as $j) { ?>
                                            <option value="<?php echo $j->id_kelas; ?>"><?php echo $j->nama_kelas; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pelajaran</label>
                                <div class="col-sm-8">
                                    <select name="pelajaran" class="form-control" style="width:40%;">
                                        <?php foreach ($pelajaran->result() as $j) { ?>
                                            <option value="<?php echo $j->id_pelajaran; ?>"><?php echo $j->nama_pelajaran; ?></option>
                                        <?php } ?>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Jam</label>
                                <div class="col-sm-8">
                                    <select name="jam" class="form-control" style="width:40%;">
                                        <option value="07.15">07.15</option>
                                        <option value="08.15">08.15</option>
                                        <option value="09.15">09.15</option>
                                        <option value="10.15">10.15</option>
                                        <option value="11.15">11.15</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Hari</label>
                                <div class="col-sm-8">
                                    <select name="hari" class="form-control" style="width:40%;">
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pengajarlabel</label>
                                <div class="col-sm-8">
                                    <select name="guru" class="form-control" style="width:40%;">
                                        <?php foreach ($guru->result() as $j) { ?>
                                            <option value="<?php echo $j->id_guru; ?>"><?php echo $j->nama_guru; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Input</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>