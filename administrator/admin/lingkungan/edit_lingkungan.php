<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_lingkungan WHERE id_lingkungan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_lingkungan" name="id_lingkungan" value="<?php echo $data_cek['id_lingkungan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lingkungan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_lingkungan" name="nama_lingkungan" value="<?php echo $data_cek['nama_lingkungan']; ?>"
					/>
				</div>
			</div>

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Stasi</label>
				<div class="col-sm-4">
					<select name="id_stasi" id="id_stasi" class="form-control select2bs4" required>
						<option value="" disabled selected>- Pilih Stasi -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_stasi where id_stasi";
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

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ketua</label>
				<div class="col-sm-3">
					<select name="ketua" id="ketua" class="form-control">
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
				<div class="col-sm-3">
					<select name="sekretaris" id="sekretaris" class="form-control">
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
				<div class="col-sm-3">
					<select name="bendahara" id="bendahara" class="form-control">
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
				<label class="col-sm-2 col-form-label">Jumlah KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlah_kk" name="jumlah_kk" value="<?php echo $data_cek['jumlah_kk']; ?>"/>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-lingkungan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
	</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_lingkungan SET 
		nama_lingkungan='".$_POST['nama_lingkungan']."',
		id_stasi='".$_POST['id_stasi']."',
		ketua='".$_POST['ketua']."',
		sekretaris='".$_POST['sekretaris']."',
		bendahara='".$_POST['bendahara']."',
		jumlah_kk='".$_POST['jumlah_kk']."'
		WHERE id_lingkungan='".$_POST['id_lingkungan']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-lingkungan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-lingkungan';
        }
      })</script>";
    }}
