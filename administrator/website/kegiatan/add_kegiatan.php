<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Kegiatan</label>
				<div class="col-sm-4">
					<select name="kategori_kegiatan" id="kategori_kegiatan" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Kategori -</option>
						<option>Tri Hari Suci</option>
						<option>Bulan Kitab Suci</option>
						<option>OMK</option>
						<option>Serba Serbi</option>
						<option>Sekami</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Kegiatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Konten Kegiatan</label>
				<div class="col-sm-6">
					<textarea class="ckeditor" id="konten_kegiatan" name="konten_kegiatan"></textarea> 
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Posting</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_postingan" name="tanggal_postingan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">User Posting</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="user_postingan" name="user_postingan" value="Administrator" readonly>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="gambar_kegiatan" name="gambar_kegiatan" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
    	 	$fileName = $_FILES['gambar_kegiatan']['name'];
    	 	   move_uploaded_file($_FILES['gambar_kegiatan']['tmp_name'], "website/gambar/" . $_FILES['gambar_kegiatan']['name']);
        $sql_simpan = "INSERT INTO tb_kegiatan (kategori_kegiatan, judul_kegiatan, konten_kegiatan, tanggal_postingan, user_postingan, gambar_kegiatan) VALUES (
      		'".$_POST['kategori_kegiatan']."',
            '".$_POST['judul_kegiatan']."',
            '".$_POST['konten_kegiatan']."',
			'".$_POST['tanggal_postingan']."',
			'".$_POST['user_postingan']."',
		'$fileName')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kegiatan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-kegiatan';
          }
      })</script>";
    }}
     //selesai proses simpan data
