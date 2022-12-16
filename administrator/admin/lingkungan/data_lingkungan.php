<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Lingkungan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-lingkungan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lingkungan</th>
						<th>Nama Stasi</th>
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
			  $sql = $koneksi->query("SELECT * from tb_lingkungan");
              while ($data= $sql->fetch_assoc()) {
              	$ket = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[ketua]'"));
				$sek = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[sekretaris]'"));
				$ben = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_umat where id_umat='$data[bendahara]'"));
				$stasi = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from tb_stasi where id_stasi='$data[id_stasi]'"));
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_lingkungan']; ?>
						</td>
						<td>
							<?php echo $stasi['nama_stasi']; ?>
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
							<a href="?page=data-umat&kode=<?php echo $data['id_lingkungan']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
							<i class="fa fa-users"></i>
							</a>
						</td>

						<td>
							<a href="?page=edit-lingkungan&kode=<?php echo $data['id_lingkungan']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-lingkungan&kode=<?php echo $data['id_lingkungan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</>
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