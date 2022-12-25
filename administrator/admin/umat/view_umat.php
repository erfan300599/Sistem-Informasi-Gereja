<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_umat where id_umat ='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user"></i> Detail Umat</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					<td style="width: 150px">
						<b>NIK</b>
					</td>
					<td>:
						<?php echo $data_cek['nik']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama</b>
					</td>
					<td>:
						<?php echo $data_cek['nama_umat']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTL</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_lahir']; ?>
						/
						<?php echo $data_cek['tanggal_lahir']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Umur</b>
					</td>
					<input type="date" class="form-control" id="tanggal_lahirA" value="<?php echo $data_cek['tanggal_lahir']; ?>" />
					<td id="inputUmurA"><td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jenis Kelamin</b>
					</td>
					<td>:
						<?php echo $data_cek['jenis_kelamin']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Alamat</b>
					</td>
					<td>:
						<?php echo $data_cek['alamat']; ?>, RT
						<?php echo $data_cek['rt']; ?>/ RW
						<?php echo $data_cek['rw']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Pendidikan</b>
					</td>
					<td>:
						<?php echo $data_cek['pendidikan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Gol. Darah</b>
					</td>
					<td>:
						<?php echo $data_cek['gol_darah']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Status Kawin</b>
					</td>
					<td>:
						<?php echo $data_cek['status_kawin']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Pekerjaan</b>
					</td>
					<td>:
						<?php echo $data_cek['pekerjaan']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Jabatan Gereja</b>
					</td>
					<td>:
						<?php echo $data_cek['jabatan_gereja']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>No. Hp/Wa</b>
					</td>
					<td>:
						<?php echo $data_cek['no_hp']; ?>
					</td>
				</tr>
				<!-- <tr>
					<td style="width: 150px">
						<b>TTN</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_nikah']; ?>
						/
						<?php echo $data_cek['tanggal_nikah']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTK</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_komuni']; ?>
						/
						<?php echo $data_cek['tanggal_komuni']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>TTB</b>
					</td>
					<td>:
						<?php echo $data_cek['tempat_baptis']; ?>
						/
						<?php echo $data_cek['tanggal_baptis']; ?>
					</td>
				</tr> -->


			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-umat" class="btn btn-warning">Kembali</a>
		</div>
	</div>
</div>