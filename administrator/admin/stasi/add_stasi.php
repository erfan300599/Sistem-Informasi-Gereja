<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Stasi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_stasi" name="nama_stasi" placeholder="Nama Stasi" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ketua</label>
				<div class="col-sm-4">
					<select name="ketua" id="ketua" class="form-control select2bs4" required>
						<option value="" disabled selected>- Pilih Ketua -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umat where status_umat='Ada'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umat'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama_umat'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sekretaris</label>
				<div class="col-sm-4">
					<select name="sekretaris" id="sekretaris" class="form-control select2bs4" required>
						<option value="" disabled selected>- Pilih Sekretaris -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umat where status_umat='Ada'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umat'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama_umat'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bendahara</label>
				<div class="col-sm-4">
				<select name="bendahara" id="bendahara" class="form-control select2bs4" required>
							<option value="" disabled selected>- Pilih Bendahara -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_umat where status_umat='Ada'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_umat'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama_umat'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Kepala Keluarga</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlah_kk" name="jumlah_kk" placeholder="Jumlah KK" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-stasi" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_stasi (nama_stasi, ketua, sekretaris, bendahara, jumlah_kk) VALUES (
            '".$_POST['nama_stasi']."',
			'".$_POST['ketua']."',
			'".$_POST['sekretaris']."',
			'".$_POST['bendahara']."',
			'".$_POST['jumlah_kk']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-stasi';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-stasi';
          }
      })</script>";
    }}
     //selesai proses simpan data
