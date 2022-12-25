<?php

//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "")
{
	header("location: login.hophp");
}
else
{
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
//query untuk tabel pesan ata mengambil jumlah pesan pada tabel pesan
$sql = $koneksi->query("SELECT COUNT(id_pesan) as pesan  from tb_pesan");
while ($data = $sql->fetch_assoc())
{
	$pesan = $data['pesan'];
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>



<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-red navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<!-- Menampilkan jumlah pesan -->
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell text-white"></i>
						<span class="badge badge-warning navbar-badge"><?php echo $pesan ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">Pemberitahuan</span>
						<div class="dropdown-divider"></div>
						<a href="?page=data-pesan" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> <?php echo $pesan ?> Pesan Baru
						</a>
						<div class="dropdown-divider"></div>
						<a href="?page=data-pesan" class="dropdown-item dropdown-footer">Lihat Semua Pemberitahuan</a>
					</div>
				</li>

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>SISTEM INFORMASI GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</b>
						</font>
					</a>
				</li>

			</ul>

		</nav>
		<!-- /.navbar -->



		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<!-- 			<a href="index.php" class="brand-link">
				<img src="dist/img/izin.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> SI GEREJA</span>
			</a> -->

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/admin.ico">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Menampilkan menu berdasarkan level pengguna -->
						<!-- Level  -->
						<?php
						if ($data_level == "Administrator")
						{
						?>
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>
										Kelola Data
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<!-- 								<li class="nav-item">
									<a href="?page=data-pend" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Penduduk</p>
									</a>
								</li> -->
									<li class="nav-item">
										<a href="?page=data-umat" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Umat</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-kartu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kartu Keluarga</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-kub" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data KUB</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-stasi" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Stasi</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-lingkungan" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lingkungan</p>
										</a>
									</li>
								</ul>
							</li>

							<!-- 						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=suket-domisili" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Su-Ket Domisili</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=suket-lahir" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Su-Ket Kelahiran</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=suket-mati" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Su-Ket Kematian</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=suket-datang" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Su-Ket Pendatang</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=suket-pindah" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Su-Ket Pindah</p>
									</a>
								</li>
							</ul>
						</li> -->


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">

									<li class="nav-item">
										<a href="?page=laporan-kub-umat" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data KUB Umat</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=laporan-lingkungan-umat" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Lingkungan Umat</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=laporan-stasi-umat" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Stasi Umat</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-cogs"></i>
									<p>
										Pengaturan Website
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-kegiatan" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kegiatan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-berita" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Berita</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-kalender" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kalender</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-slider" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Slider</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=edit-pengaturan" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Pengaturan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="../index.php" target="_blank" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Lihat Website</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-header">Pengaturan</li>

							<li class="nav-item">
								<a href="?page=data-pengguna" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>
										Admin Sistem
									</p>
								</a>
							</li>

						<?php
						}
						?>


						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Keluar
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">
					<!-- Memanggil dan menampilkan halaman misalkan menampilkan isi tabel pengguna -->
					<?php
					if (isset($_GET['page']))
					{
						$hal = $_GET['page'];

						switch ($hal)
						{

								//Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

								//kartu KK
							case 'data-kartu':
								include "admin/kartu/data_kartu.php";
								break;
							case 'add-kartu':
								include "admin/kartu/add_kartu.php";
								break;
							case 'edit-kartu':
								include "admin/kartu/edit_kartu.php";
								break;
							case 'anggota':
								include "admin/kartu/anggota.php";
								break;
							case 'del-anggota':
								include "admin/kartu/del_anggota.php";
								break;
							case 'del-kartu':
								include "admin/kartu/del_kartu.php";
								break;

								//umat
							case 'data-umat':
								include "admin/umat/data_umat.php";
								break;
							case 'data-umat-laki':
								include "admin/umat/data_umat_laki.php";
								break;
							case 'data-umat-perempuan':
								include "admin/umat/data_umat_perempuan.php";
								break;
							case 'add-umat':
								include "admin/umat/add_umat.php";
								break;
							case 'edit-umat':
								include "admin/umat/edit_umat.php";
								break;
							case 'del-umat':
								include "admin/umat/del_umat.php";
								break;
							case 'view-umat':
								include "admin/umat/view_umat.php";
								break;

								//stasi
							case 'data-stasi':
								include "admin/stasi/data_stasi.php";
								break;
							case 'add-stasi':
								include "admin/stasi/add_stasi.php";
								break;
							case 'edit-stasi':
								include "admin/stasi/edit_stasi.php";
								break;
							case 'del-stasi':
								include "admin/stasi/del_stasi.php";
								break;

								//lingkungan
							case 'data-lingkungan':
								include "admin/lingkungan/data_lingkungan.php";
								break;
							case 'add-lingkungan':
								include "admin/lingkungan/add_lingkungan.php";
								break;
							case 'edit-lingkungan':
								include "admin/lingkungan/edit_lingkungan.php";
								break;
							case 'del-lingkungan':
								include "admin/lingkungan/del_lingkungan.php";
								break;

								//kub
							case 'data-kub':
								include "admin/kub/data_kub.php";
								break;
							case 'add-kub':
								include "admin/kub/add_kub.php";
								break;
							case 'edit-kub':
								include "admin/kub/edit_kub.php";
								break;
							case 'del-kub':
								include "admin/kub/del_kub.php";
								break;

								//laporan
							case 'laporan-kub-umat':
								include "laporan/laporan_kub_umat.php";
								break;
							case 'laporan-lingkungan-umat':
								include "laporan/laporan_lingkungan_umat.php";
								break;
							case 'laporan-stasi-umat':
								include "laporan/laporan_stasi_umat.php";
								break;

								//pengaturan website
							case 'edit-pengaturan':
								include "website/pengaturan/edit_pengaturan.php";
								break;

								//berita
							case 'data-berita':
								include "website/berita/data_berita.php";
								break;
							case 'add-berita':
								include "website/berita/add_berita.php";
								break;
							case 'edit-berita':
								include "website/berita/edit_berita.php";
								break;
							case 'del-berita':
								include "website/berita/del_berita.php";
								break;

								//kegiatan	
							case 'data-kegiatan':
								include "website/kegiatan/data_kegiatan.php";
								break;
							case 'add-kegiatan':
								include "website/kegiatan/add_kegiatan.php";
								break;
							case 'edit-kegiatan':
								include "website/kegiatan/edit_kegiatan.php";
								break;
							case 'del-kegiatan':
								include "website/kegiatan/del_kegiatan.php";
								break;

							

								//kalender
							case 'data-kalender':
								include "website/kalender/data_kalender.php";
								break;
							case 'add-kalendar':
								include "website/kalender/add_calendar.php";
								break;
							case 'edit-kalender':
								include "website/kalender/edit_kalender.php";
								break;
							case 'del-kalender':
								include "website/kalender/del_kalender.php";
								break;

								//slider
							case 'data-slider':
								include "website/slider/data_slider.php";
								break;
							case 'add-slider':
								include "website/slider/add_slider.php";
								break;
							case 'edit-slider':
								include "website/slider/edit_slider.php";
								break;
							case 'del-slider':
								include "website/slider/del_slider.php";
								break;

								//pesan	
							case 'data-pesan':
								include "admin/pesan/data_pesan.php";
								break;
							case 'del-pesan':
								include "admin/pesan/del_pesan.php";


								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					}
					else
					{
						// Auto Halaman Home Pengguna atau menampilkan halaman dashboard
						if ($data_level == "Administrator")
						{
							include "home/admin.php";
						}
						elseif ($data_level == "Kaur Pemerintah")
						{
							include "home/kaur.php";
						}
					}
					?>


				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy; 2022. Developer -
				<a target="_blank" href="https://www.youtube.com/channel/UCpusqK_s8aQJvjGuuMofBTA">
					<strong> Gereja Santo Karolus Agung Orakeri Ende</strong>
				</a>.
				All rights reserved.
			</div>
			<b>Sistem Informasi Gereja Versi 2022</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

	<script>
		// const targetDiv = document.getElementById("third");
		// const btn = document.getElementById("toggle");
		// btn.onclick = function() {
		// 	if (targetDiv.style.display !== "none") {
		// 		targetDiv.style.display = "none";
		// 	} else {
		// 		targetDiv.style.display = "block";
		// 	}
		// };

		const targetkepalaKeluarga = document.getElementById("kepalaKeluarga");
		const btnKeluarga = document.getElementById("btnKeluarga");

		function funKeluarga() {
			const jskeluarga = document.getElementById("divKeluarga");
			if (jskeluarga.style.display === "none") {
				jskeluarga.style.display = "block";
			} else {
				jskeluarga.style.display = "none";
			}
		}

		function funNonKeluarga() {
			const jsnonkeluarga = document.getElementById("divNonKeluarga");
			if (jsnonkeluarga.style.display === "none") {
				jsnonkeluarga.style.display = "block";
			} else {
				jsnonkeluarga.style.display = "none";
			}
		}


		function hitungUmur(tanggalLahir) {
			let dob = new Date(tanggalLahir);
			let month_diff = Date.now() - dob.getTime();
			let age_dt = new Date(month_diff);
			let year = age_dt.getUTCFullYear();
			let age = Math.abs(year - 1970);

			document.getElementById("inputUmur").value = age.toString();
		}

		$(document).ready(function() {
			let tanggalLahir = document.getElementById("tanggal_lahirA").value;

			let dob = new Date(tanggalLahir);
			let month_diff = Date.now() - dob.getTime();
			let age_dt = new Date(month_diff);
			let year = age_dt.getUTCFullYear();
			let age = Math.abs(year - 1970);

			console.log(age);

			document.getElementById("inputUmur").value = age.toString();
		});

		$(document).ready(function() {
			let tanggalLahir = document.getElementById("tanggal_lahirA").value;

			let dob = new Date(tanggalLahir);
			let month_diff = Date.now() - dob.getTime();
			let age_dt = new Date(month_diff);
			let year = age_dt.getUTCFullYear();
			let age = Math.abs(year - 1970);

			console.log(age);

			document.getElementById("inputUmurA").innerHTML = ": " + age.toString();
		});
	</script>

	<script>
		function cariDesa(nama_kelurahan_desa) {
			if (nama_kelurahan_desa.length >= 2) {
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {


						let daftarDesa = JSON.parse(xhr.responseText);


						$('#daftarDesaaN').empty();

						for (let index = 0; index < daftarDesa.length; index++) {
							let optValue = daftarDesa[index].id_kelurahan_desa;
							let optText =
								daftarDesa[index].nama_kelurahan_desa + ", " +
								daftarDesa[index].nama_kecamatan + ", " +
								daftarDesa[index].nama_kota_kabupaten + ", " +
								daftarDesa[index].nama_provinsi;

							$('#daftarDesaaN').append("<option value=" + optValue + ">" + optText + "</option>");
						}
					}
				}

				xhr.open('Get', `indonesia.php?namaDesa=${nama_kelurahan_desa}`, true);
				// ?page=laporan-kub-umat
				xhr.send();
			}
		}
	</script>

</body>

</html>