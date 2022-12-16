<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
				</div>
			</div>

			<!-- <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Selesai</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
				</div>
			</div> -->

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Perayaan/Bacaan/Warna Liturgi</label>
				<div class="col-sm-6">
					<textarea class="ckeditor" id="konten_calendar" name="konten_calendar"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Admin Posting</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="user_postingan" name="user_postingan" value="administrator" readonly>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-calendar" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php



if (isset($_POST['Simpan']))
{
	//mulai proses simpan data
	$konten_calendar = strip_tags($_POST['konten_calendar']);

	$sql_simpan = "INSERT INTO tb_liturgi (title, start, end1, user) VALUES (
            '" . $konten_calendar. "',
			'" . $_POST['tanggal_mulai'] . "',
			'" . $_POST['tanggal_mulai'] . "',
			'" . $_POST['admin_postingan'] . "')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan)
	{
		echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kalender';
          }
      })</script>";
	}
	else
	{
		//	echo $sql_simpan;

		echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
         window.location = 'index.php?page=add-kalendar';
         }
      })</script>";
	}
}
     //selesai proses simpan data
