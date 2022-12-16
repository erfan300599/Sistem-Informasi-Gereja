<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Kalendar</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                    <a href="?page=add-kalendar" class="btn btn-primary">
                    <i class="fa fa-edit"></i> Tambah Kalendar</a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Titel</th>
                        <th>Tanggal</th>
                        <!-- <th>Tanggal Selesai</th> -->
                        <th>Oleh</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_liturgi");
              while ($data= $sql->fetch_assoc()) {
            ?>

                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $data['title']; ?>
                        </td>
                        <td>
                            <?php echo $data['start']; ?>
                        </td>
                        <!-- <td>
                            <?php // echo $data['end1']; ?>
                        </td> -->
                        <td>
                            <?php echo $data['user']; ?>
                        </td>
                        <td>
                            <a href="?page=edit-kalender&kode=<?php echo $data['id']; ?>" title="Ubah"
                             class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="?page=del-kalender&kode=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
                             title="Hapus" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                <a/>
                        </td>
                    </tr>

                    <?php
              }
            ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->