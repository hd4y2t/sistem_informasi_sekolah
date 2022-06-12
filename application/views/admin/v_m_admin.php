<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8">
            <h3 class="col-md-12 page-header"></h3>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Admin</div>
            <div class="panel-body">
                <?php echo form_open_multipart('admin/update_admin') ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">Daftar Admin</div>
            <div class="panel-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin->result() as $row) { ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->username ?></td>
                                <td>*************</td>
                                <td class="text-center">
                                    <a href="<?php echo base_url() . 'index.php/admin/edit_siswa'; ?>"><i class="fa fa-edit"></i> Edit</a> |
                                    <a href="<?php echo base_url() . 'admin/hapus_admin/' . $row->id_admin ?>"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>