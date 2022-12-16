<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-file"></i>Laporan Umat PerLingkungan</h3>
  </div>
</div>
  <form action="./report/cetak_lingkungan_umat.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Lingkungan</label>
        <div class="col-sm-6">
          <select name="id_lingkungan" id="id_lingkungan" class="form-control select2bs4" required>
            <option value="" disabled selected>- Pilih Lingkungan -</option>
            <?php
        // ambil data dari database
        $query = "select * from tb_lingkungan";
        $hasil = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_array($hasil)) {
        ?>
            <option value="<?php echo $row['id_lingkungan'] ?>">
              <?php echo $row['nama_lingkungan'] ?>
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
       

      


