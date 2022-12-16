<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_berita WHERE id_berita='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);


    if ($data_cek['gambar_berita']) {
      $gambar = "website/gambar/" . $data_cek['gambar_berita'];
    } else {
      $gambar = "website/gambar/noimage.png";
    }
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
					<input type="text" class="form-control" id="id_berita" name="id_berita" value="<?php echo $data_cek['id_berita']; ?>"
					 readonly/>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Berita</label>
				<div class="col-sm-4">
					<select name="kategori_berita" id="kategori_berita" class="form-control select2bs4" required>
						<option>- Pilih Kategori -</option>
							<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['kategori_berita'] == "Bahan Pemahaman Alkitab") echo "<option value='Bahan Pemahaman Alkitab' selected>Bahan Pemahaman Alkitab</option>";
                else echo "<option value='Bahan Pemahaman Alkitab'>Bahan Pemahaman Alkitab</option>";

                if ($data_cek['kategori_berita'] == "Berita Gereja") echo "<option value='Berita Gereja' selected>Berita Gereja</option>";
				else echo "<option value='Berita Gereja'>Berita Gereja</option>";
				
				if ($data_cek['kategori_berita'] == "Renungan") echo "<option value='Renungan' selected>Renungan</option>";
                else echo "<option value='AB'>AB</option>";

                if ($data_cek['kategori_berita'] == "Serba Serbi") echo "<option value='Serba Serbi' selected>Serba Serbi</option>";
                else echo "<option value='Serba Serbi'>Serba Serbi</option>";
            ?>
					</select>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Berita</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?php echo $data_cek['judul_berita']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Konten Berita</label>
				<div class="col-sm-6">
					<textarea class="ckeditor" id="konten_berita" name="konten_berita"><?php echo $data_cek['konten_berita']; ?></textarea> 
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ringkasan Berita</label>
				<div class="col-sm-6">
					<textarea class="ckeditor" id="ringkasan_berita" name="ringkasan_berita"><?php echo $data_cek['ringkasan_berita']; ?></textarea> 
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Posting</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_postingan" name="tanggal_postingan" value="<?php echo $data_cek['tanggal_postingan']; ?>"  required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Admin Posting</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="user_postingan" name="user_postingan" value="<?php echo $data_cek['user_postingan']; ?>" readonly>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="upload" name="gambar_berita" value="<?php echo $data_cek['gambar_berita']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-6">
					<img  id="preview" src="<?php echo $gambar; ?>" width="200px">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-berita" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
  function readURL(input) {

    if (input.files &&
      input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#upload").change(function() {
    readURL(this);
  });

  $(function() {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor1a');
    CKEDITOR.replace('editor2a');
  })
</script>
<?php

    if (isset ($_POST['Ubah'])){
   $fileName = $_FILES['gambar_berita']['name'];
   if ($fileName) {
 move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "website/gambar/" . $_FILES['gambar_berita']['name']);
     $sql_ubah = "UPDATE tb_berita SET 
		kategori_berita='".$_POST['kategori_berita']."',
		judul_berita='".$_POST['judul_berita']."',
		konten_berita='".$_POST['konten_berita']."',
		ringkasan_berita='".$_POST['ringkasan_berita']."',
		tanggal_postingan='".$_POST['tanggal_postingan']."',
		user_postingan='".$_POST['user_postingan']."',
		gambar_berita='$fileName'
		WHERE id_berita='".$_POST['id_berita']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-berita';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-berita';
        }
      })</script>";
    }
   }
}
