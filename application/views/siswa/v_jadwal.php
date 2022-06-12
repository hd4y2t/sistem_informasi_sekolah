<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">MATA PELAJARAN</h3>
                    </div>
                    <form>
                        <select style="height: 32px; margin-bottom: 2%; margin-top: 2%; margin-left: 1%;">
                            <option>HARI</option>
                            <option value="senin">senin</option>
                            <option value="selasa">selasa</option>
                            <option value="rabu">rabu</option>
                            <option value="kamis">kamis</option>
                            <option value="jumat">jumat</option>
                            <option value="sabtu">sabtu</option>
                        </select>
                        <button class="btn btn-danger"> Tampilkan </button>
                    </form>
                    <div class="dataTable_wrapper">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Pelajaran</th>
                                    <th>Guru</th>
                                    <!-- <th>Deskripsi</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->jadwal_hari ?></td>
                                        <td><?php echo $row->jadwal_jam ?></td>
                                        <td><?php echo $row->nama_pelajaran ?></td>
                                        <td><?php echo $row->nama_guru ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>