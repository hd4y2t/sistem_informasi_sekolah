<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8" style="margin-top: 1%;">
        </div>
    </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Setting Baner</div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('admin/tambah_baner') ?>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Copy Link Disini..">
                            </div>
                            <div class="form-group">
                                <label>Pilih Gambar</label>
                                <p class="bg-danger" style="padding: 1px;">Gambar yang di upload berukuran harus 240px x 90px</p>
                                <input type="file" name="baner">
                            </div>
                              <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">Setting Baner</div>
                    <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="30%">Link</th>
                                            <th>Gambar</th>
                                            <th width="25%"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($baner->result() as $b) { ?>
                                        <tr class="gradeU">
                                            <td><?php echo $b->link ?></td>
                                            <td><img src="<?php echo base_url().'upload/setting/'.$b->gambar ?>"></td>
                                            <td align="center"><a class="btn btn-danger" href="<?php echo base_url().'admin/delete_baner/'.$b->id ?>"> Hapus</a></td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        