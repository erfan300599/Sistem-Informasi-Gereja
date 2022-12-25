<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Berita</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
					<a href="?page=add-berita" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Berita</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Judul Berita</th>
						<th>Tanggal Posting</th>
						<th>User</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * FROM tb_berita");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['kategori_berita']; ?>
						</td>
						<td>
							<?php echo $data['judul_berita']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_postingan']; ?>
						</td>
						<td>
							<?php echo $data['user_postingan']; ?>
						</td>
						<td>
							<a href="?page=edit-berita&kode=<?php echo $data['id_berita']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-berita&kode=<?php echo $data['id_berita']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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