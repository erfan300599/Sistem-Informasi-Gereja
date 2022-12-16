<?php
include'administrator/inc/koneksi.php';
 $sql_cek = "SELECT * FROM tb_pengaturan WHERE id_pengaturan=1";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        date_default_timezone_set("Asia/Jakarta");
        $tanggal=date('Y-m-d H:i:s');
?>


<!DOCTYPE html>
<html lang="ID">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KONTAK - GEREJA ST. KAROLUS AGUNG ORAKERI ENDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Icon -->
  <link href="administrator/dist/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span><?php echo $data_cek['nama_web']; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">BERANDA</a></li>
          <li><a href="about.php">TENTANG</a></li>
<!--           <li><a href="services.html">Services</a></li> -->

<!--           <li><a href="team.html">Team</a></li> -->
          <li><a href="news.php">BERITA</a></li>
          <li><a href="activity.php">KEGIATAN</a></li>
          <li><a href="calendar.php">KALENDER</a></li>
<!--           <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="active" href="contact.php">KONTAK</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>KONTAK</h2>
          <ol>
            <li><a href="index.php">BERANDA</a></li>
            <li>KONTAK</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>ALAMAT</h3>
                  <p><?php echo $data_cek['alamat_gereja']; ?>, <?php echo $data_cek['kecamatan_gereja']; ?>, <?php echo $data_cek['kelurahan_gereja']; ?>, <?php echo $data_cek['kabupaten_gereja']; ?>, <?php echo $data_cek['provinsi_gereja']; ?>    </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p><?php echo $data_cek['email_gereja']; ?> </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>TELEPON</h3>
                  <p><?php echo $data_cek['no_hp']; ?> </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Telepon" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="isi_pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
<!--               <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --><br>
              <div class="text-center"><button type="submit"class="btn btn-primary" name="btnkirim">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <?php

if(isset($_POST['btnkirim'])){
  //Mulai proses simpan data
  $sql_simpan="INSERT INTO tb_pesan(nama_lengkap,email,no_telepon,isi_pesan,tanggal_pesan) VALUES(
'".$_POST['nama_lengkap']."',
'".$_POST['email']."',
'".$_POST['no_telepon']."',
'".$_POST['isi_pesan']."',
'$tanggal')";
$query_simpan=mysqli_query($koneksi,$sql_simpan);
mysql_close($koneksi);

}


    ?>

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12217.968612934636!2d121.44120647993724!3d-8.737196570943837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db297c9b6a66ef1%3A0x6135ed0e0195a04a!2sGereja%20Kuasi%20Paroki%20St.%20Karolus%20Agung%20Orakeri!5e0!3m2!1sid!2sid!4v1657646479515!5m2!1sid!2sid"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <?php echo $data_cek['alamat_gereja']; ?> <br>
             <?php echo $data_cek['kabupaten_gereja']; ?><br>
              <?php echo $data_cek['provinsi_gereja']; ?><br><br>
              <strong>Nomor Handphone:</strong> <?php echo $data_cek['no_hp']; ?><br>
              <strong>Email:</strong> <?php echo $data_cek['email_gereja']; ?><br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang <?php echo $data_cek['nama_web']; ?></h3>
               <p><?php echo $data_cek['isi_judul']; ?></p>
            <div class="social-links mt-3">
              <a href="facebook.com/karolus-ende" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="instragram.com/karolus-ende" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/c/KOMSOSAGUNGENDEvoca" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="https://api.whatsapp.com/send?phone=<?php echo $data_cek['no_hp']; ?>"class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; 2022. Developer -
        <a target="_blank" href="https://www.youtube.com/channel/UCpusqK_s8aQJvjGuuMofBTA">
          <strong> Sistem Informasi Gereja Santo Karolus Agung Orakeri Ende</strong>
        </a>.
        All rights reserved.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>