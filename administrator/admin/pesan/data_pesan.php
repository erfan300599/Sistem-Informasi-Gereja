<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pesan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Nomor Telepon</th>
						<th>Pesan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_pesan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['tanggal_pesan']; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['no_telepon']; ?>
						</td>
						<td>
							<?php echo $data['isi_pesan']; ?>
						</td>
						<td>
							<a href="?page=del-pesan&kode=<?php echo $data['id_pesan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</a>
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