<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data KUB</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kub" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama KUB</th>
						<th>Nama Lingkungan</th>
						<th>Ketua</th>
						<th>Sekretaris</th>
						<th>Bendahara</th>
						<th>Jumlah Kepala Keluarga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from tb_kub");
              while ($data= $sql->fetch_assoc()) {
              	$ket = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[ketua]'"));
				$sek = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[sekretaris]'"));
				$ben = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[bendahara]'"));
				$lingkungan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_lingkungan where id_lingkungan='$data[id_lingkungan]'"));
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_kub']; ?>
						</td>
						<td>
							<?php echo $lingkungan['nama_lingkungan']; ?>
						</td>
						<td>
							<?php echo $ket['nama_umat']; ?>
						</td>
						<td>
							<?php echo $sek['nama_umat']; ?>
						</td>
						<td>
							<?php echo $ben['nama_umat']; ?>
						</td>
						<td>
							<?php echo $data['jumlah_kk']; ?>
							<a href="?page=data-umat&kode=<?php echo $data['id_kub']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
							<i class="fa fa-users"></i>
							</a>
						</td>

						<td>
							<a href="?page=edit-kub&kode=<?php echo $data['id_kub']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kub&kode=<?php echo $data['id_kub']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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