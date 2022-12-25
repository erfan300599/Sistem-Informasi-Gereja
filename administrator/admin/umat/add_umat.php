<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data
		</h3>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Apakah Anda Kepala Keluarga ?</label>
			<div class="col-sm-6">
				<button onclick="funKeluarga()" class="btn btn-primary">Ya</button>
				<button onclick="funNonKeluarga()" class="btn btn-primary">Tidak</button>
			</div>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div id="keluarga">
				<div id="divKeluarga" style="display: none">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">No Kartu Keluarga</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="kepalaKeluarga2" id="no_kk" name="no_kk" placeholder="No Kartu Keluarga">
						</div>
					</div>
				</div>

				<div id="divNonKeluarga" style="display: none">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kepala Keluarga</label>
						<div class="col-sm-6">
							<select name="idkk" id="kepala_keluarga" class="form-control">
								<option value="" disabled selected>- Pilih Kepala Keluarga -</option>
								<?php
								// ambil data dari database
								$queryN = "SELECT * FROM tb_kk JOIN tb_umat  ON tb_umat.nama_umat = tb_kk.kepala_keluarga GROUP BY id_kk";
								$hasilN = mysqli_query($koneksi, $queryN);
								while ($row = mysqli_fetch_array($hasilN))
								{
								?>
									<option value="<?= $row['id_kk'] ?>">
										<?= $row['no_kk'] . '-' . $row['nama_umat'] ?>
									</option>
								<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Relasi dengan Kepala keluarga</label>
						<div class="col-sm-3">
							<select name="hubungan" id="hubungan" class="form-control">
								<option value="" disabled selected>- Hub Keluarga -</option>
								<option>Istri</option>
								<option>Anak</option>
								<option>Orang Tua</option>
								<option>Mertua</option>
								<option>Menantu</option>
								<option>Cucu</option>
								<option>Famili Lain</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>







			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_umat" name="nama_umat" placeholder="Nama Umat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama KUB</label>
				<div class="col-sm-4">
					<select name="id_kub" id="id_kub" class="form-control select2bs4" required>
						<option value="" disabled selected>- Pilih KUB -</option>
						<?php
						// ambil data dari database
						$query = "select * from tb_kub where id_kub";
						$hasil = mysqli_query($koneksi, $query);
						while ($row = mysqli_fetch_array($hasil))
						{
						?>
							<option value="<?php echo $row['id_kub'] ?>">
								<?php echo $row['nama_kub'] ?>
							</option>
						<?php
						}
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lingkungan</label>
				<div class="col-sm-4">
					<select name="id_lingkungan" id="id_lingkungan" class="form-control select2bs4" required>
						<option value="" disabled selected>- Pilih Lingkungan -</option>
						<?php
						// ambil data dari database
						$query = "select * from tb_lingkungan where id_lingkungan";
						$hasil = mysqli_query($koneksi, $query);
						while ($row = mysqli_fetch_array($hasil))
						{
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

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" onchange="hitungUmur(this.value)" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Umur</label>
				<div class="col-sm-3">
					<input name="umur" type="text" class="form-control" id="inputUmur" readonly>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
						<option value="" disabled selected>- Pilih Jenis Kelamin -</option>
						<option value="LK">Laki-laki</option>
						<option value="PR">Perempuan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan Desa</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" onkeyup="cariDesa(this.value)" id="exampleDataList" placeholder="Cari Kelurahan/Desa">
				</div>
				<div class="col-sm-6">
					<select class="form-control" id="daftarDesaaN" name="kelurahanDesa">
						<option value="" disabled>Pilih Desa</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Golongan Darah</label>
				<div class="col-sm-3">
					<select name="gol_darah" id="gol_darah" class="form-control" required>
						<option value="" disabled selected>- Pilih Golongan Darah -</option>
						<option>A</option>
						<option>B</option>
						<option>AB</option>
						<option>O</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan</label>
				<div class="col-sm-3">
					<select name="pendidikan" id="pendidikan" class="form-control" required>
						<option value="" disabled selected>- Pilih Pendidikan -</option>
						<option>TK</option>
						<option>SD</option>
						<option>SMA</option>
						<option>SMK</option>
						<option>S1</option>
						<option>S2</option>
						<option>S3</option>
						<option>Tidak Bersekolah</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="status_kawin" id="status_kawin" class="form-control" required>
						<option value="" disabled selected>- Pilih Status Perkawinan-</option>
						<option>Sudah</option>
						<option>Belum</option>
						<option>Cerai Mati</option>
						<option>Cerai Hidup</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-3">
					<select name="pekerjaan" id="pekerjaan" class="form-control" required>
						<option value="" disabled selected>- Pilih Pekerjaan-</option>
						<option>Tukang</option>
						<option>Wiraswasta</option>
						<option>PNS</option>
						<option>Pelajar</option>
						<option>Tidak Bekerja</option>
						<option>Belum Bekerja</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan Gereja</label>
				<div class="col-sm-3">
					<select name="jabatan_gereja" id="jabatan_gereja" class="form-control">
						<option value="" disabled selected>- Pilih Jabatan Gereja -</option>
						<option>Pengurus Gereja</option>
						<option>Pengurus Stasi</option>
						<option>Pengurus Lingkungan</option>
						<option>Pengurus KUB</option>
						<option>Umat</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No. Handphone/WhatsApp</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="082123...." required>
				</div>
			</div>
			<!-- 
				<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTN</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_nikah" name="tempat_nikah" placeholder="Tempat nikah">
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tanggal_nikah" name="tanggal_nikah" placeholder="Tanggal nikah">
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTK</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_komuni" name="tempat_komuni" placeholder="Tempat komuni">
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tanggal_komuni" name="tanggal_komuni" placeholder="Tanggal komuni">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTB</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_baptis" name="tempat_baptis" placeholder="Tempat Baptis">
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tanggal_baptis" name="tanggal_baptis" placeholder="Tanggal Baptis">
				</div>
			</div> -->

	</div>
	<div class="card-footer">
		<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
		<a href="?page=data-umat" title="Kembali" class="btn btn-secondary">Batal</a>
	</div>
	</form>
</div>





<?php

if (isset($_POST['Simpan']))
{
	//mulai proses simpan data
	$sql_simpan = "INSERT INTO tb_umat (id_kub, id_lingkungan, nik, nama_umat, jenis_kelamin, alamat, rt, rw, pekerjaan, jabatan_gereja, pendidikan, gol_darah, no_hp, tempat_lahir, tanggal_lahir, status_kawin, umur, status_umat) VALUES (
      		'" . $_POST['id_kub'] . "',
      		 '" . $_POST['id_lingkungan'] . "',
            '" . $_POST['nik'] . "',
            '" . $_POST['nama_umat'] . "',
			'" . $_POST['jenis_kelamin'] . "',
			'" . $_POST['alamat'] . "',
			'" . $_POST['rt'] . "',
			'" . $_POST['rw'] . "',
			'" . $_POST['pekerjaan'] . "',
			'" . $_POST['jabatan_gereja'] . "',
			'" . $_POST['pendidikan'] . "',
			'" . $_POST['gol_darah'] . "',
			'" . $_POST['no_hp'] . "',
			'" . $_POST['tempat_lahir'] . "',
			'" . $_POST['tanggal_lahir'] . "',
			'" . $_POST['status_kawin'] . "',
			'" . $_POST['umur'] . "',

            'Ada')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);

	if (($_POST['no_kk'] != ""))
	{
		// Simpan Data Kartu Keluarga
		$sql_simpan2 = "INSERT INTO tb_kk (no_kk, kepala_keluarga, alamat, rt, rw, kec, kab, prov, id_kelurahan_desa) VALUES (
		'" . $_POST['no_kk'] . "',
		'" . $_POST['nama_umat'] . "',
		'" . $_POST['alamat'] . "',
		'" . $_POST['rt'] . "',
		'" . $_POST['rw'] . "',
		'" . $_POST['kec'] . "',
		'" . $_POST['kab'] . "',
		'" . $_POST['prov'] . "',
		'" . $_POST['kelurahanDesa'] . "')";
		$query_simpan2 = mysqli_query($koneksi, $sql_simpan2);
	}
	if ($_POST['hubungan'] != "")
	{
		$sql = "SELECT MAX(id_umat) FROM TB_UMAT";
		$sql2 = mysqli_query($koneksi, $sql);
		$sql2 = mysqli_fetch_assoc($sql2);

		$idUmat = $sql2['MAX(id_umat)'];

		$sql_simpan2 = "INSERT INTO tb_anggota (id_kk, id_umat, hubungan) VALUES( 
            '" . $_POST['idkk'] . "',
            '" . $idUmat . "',
            '" . $_POST['hubungan'] . "')";
		$query_simpan2 = mysqli_query($koneksi, $sql_simpan2);
	}


	mysqli_close($koneksi);

	if ($query_simpan2)
	{
		echo  "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-umat';
          }
      })</script>";
	}
	else
	{
		echo "<script>
      Swal.fire({title: 'Tambah Data Gagal Karena Nomor KK Sudah Ada',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-umat';
          }
      })</script>";
	}
}
     //selesai proses simpan data
