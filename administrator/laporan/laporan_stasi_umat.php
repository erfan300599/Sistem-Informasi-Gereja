<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-file"></i>Laporan Umat PerStasi</h3>
  </div>
</div>
  <form action="./report/cetak_stasi_umat.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Stasi</label>
        <div class="col-sm-6">
          <select name="id_stasi" id="id_stasi" class="form-control select2bs4" required>
            <option value="" disabled selected>- Pilih Stasi -</option>
            <?php
        // ambil data dari database
        $query = "select * from tb_stasi";
        $hasil = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_array($hasil)) {
        ?>
            <option value="<?php echo $row['id_stasi'] ?>">
              <?php echo $row['nama_stasi'] ?>
            </option>
            <?php
        }
        ?>
          </select>
        </div>
      </div>

    </div>
    <div class="card-footer">

      <input target="_blank" type="submit" name="Cetak" value="Cetak" class="btn btn-info"></input>
    </div>
  </form>
</div>
       

      


