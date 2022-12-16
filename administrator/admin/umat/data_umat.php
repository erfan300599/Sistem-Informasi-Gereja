<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Umat
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-umat" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			<!-- 	<a href="admin/umat/cet_umat.php" class="btn btn-primary" name="btnCetak" target="_blank">
					<i class="fa fa-print"></i> Cetak Data</a> -->
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>No Kartu Keluarga</th>
						<th>KUB</th>
						<th>Lingkungan-Stasi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("SELECT p.id_umat,p.id_kub, p.tanggal_lahir, p.nik, p.nama_umat, p.jenis_kelamin, p.alamat, p.rt, p.rw, a.id_kk, k.no_kk, k.kepala_keluarga, b.id_kub, b.nama_kub, c.id_lingkungan, c.nama_lingkungan, d.id_stasi, d.nama_stasi from 
			  tb_umat p left join tb_anggota a on p.id_umat=a.id_umat 
			  left join tb_kk k on a.id_kk=k.id_kk left join tb_lingkungan c on p.id_lingkungan=c.id_lingkungan left join tb_stasi d on c.id_stasi=d.id_stasi inner join tb_kub b on p.id_kub=b.id_kub where status_umat='Ada'");
					while ($data = $sql->fetch_assoc())
					{
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td>
								<?php echo $data['nama_umat']; ?>
							</td>
							<td>
								<?php echo $data['jenis_kelamin']; ?>
							</td>
							<input hidden type="date" class="form-control" id="tanggal_lahirA" value="<?php echo $data['tanggal_lahir']; ?>" />
							<td id="">
								<?php

								$originalDate = $data['tanggal_lahir'];
								$dateOfBirth = date("Y-m-d", strtotime($originalDate));
								$today = date("Y-m-d");
								$diff = date_diff(date_create($dateOfBirth), date_create($today));

								echo($diff->format("%y tahun"));
								?>
							</td>
							<td>
								<?php echo $data['alamat']; ?>
								RT
								<?php echo $data['rt']; ?>/ RW
								<?php echo $data['rw']; ?>.
							</td>
							<td>
								<?php echo $data['no_kk']; ?>-
								<?php echo $data['kepala_keluarga']; ?>
							</td>
							<td>
								<?php echo $data['nama_kub']; ?>
							</td>
							<td>
								<?php echo $data['nama_lingkungan']; ?>-
								<?php echo $data['nama_stasi']; ?>
							</td>
							<td>
								<a href="?page=view-umat&kode=<?php echo $data['id_umat']; ?>" title="Detail" class="btn btn-info btn-sm">
									<i class="fa fa-user"></i>
								</a>
								<a href="?page=edit-umat&kode=<?php echo $data['id_umat']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="?page=del-umat&kode=<?php echo $data['id_umat']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
									<a />
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