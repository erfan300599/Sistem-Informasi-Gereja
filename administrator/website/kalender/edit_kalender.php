<?php

if (isset($_GET['kode']))
{
    $sql_cek = "SELECT * FROM tb_liturgi WHERE id='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">No Sistem</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $data_cek['id']; ?>" readonly />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="start" name="start" value="<?php echo $data_cek['start']; ?>" required>
                </div>
            </div>

            <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="end1" name="end1" value="<?php echo $data_cek['end1']; ?>" required>
                </div>
            </div> -->

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Perayaan/Bacaan/Warna Liturgi</label>
                <div class="col-sm-6">
                    <textarea class="ckeditor" id="title" name="title"><?php echo $data_cek['title']; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Admin Posting</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="user_postingan" name="user_postingan" value="<?php echo $data_cek['user']; ?>" readonly>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
            <a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<?php
if (isset($_POST['Ubah']))
{
    $konten_calendar = strip_tags($_POST['title']);

    $sql_ubah = "UPDATE tb_liturgi SET 
        title='" . $konten_calendar . "',
        start='" . $_POST['start'] . "',
        end1='" . $_POST['start'] . "',
        user='" . $_POST['user_postingan'] . "'
        WHERE id='".$_POST['id']."'";
        
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah)
    {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kalender';
        }
      })</script>";
    }
    else
    {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?edit-kalender&kode={$data["id"]}';
        }
      })</script>";
    }
}
