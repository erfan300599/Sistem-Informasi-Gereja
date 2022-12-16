<?php
include'administrator/inc/koneksi.php';
 $sql_cek = "SELECT * FROM tb_pengaturan WHERE id_pengaturan=1";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
         if ($data_cek['gambar_gereja']) {
      $gambar = "administrator/website/gambar/" . $data_cek['gambar_gereja'];
    } else {
      $gambar = "administrator/website/gambar/noimage.png";
    }

      $sql = $koneksi->query("SELECT COUNT(id_umat) as umat  from tb_umat where status_umat='Ada'");
  while ($data= $sql->fetch_assoc()) {
    $pend=$data['umat'];
  }

    $sql = $koneksi->query("SELECT COUNT(id_stasi) as stasi from tb_stasi");
  while ($data= $sql->fetch_assoc()) {
    $stasi=$data['stasi'];
  }

    $sql = $koneksi->query("SELECT COUNT(id_lingkungan) as lingkungan  from tb_lingkungan");
  while ($data= $sql->fetch_assoc()) {
    $lingkungan=$data['lingkungan'];
  }

    $sql = $koneksi->query("SELECT COUNT(id_kub) as kub  from tb_kub");
  while ($data= $sql->fetch_assoc()) {
    $kub=$data['kub'];
  }
?>
<!DOCTYPE html>
<html lang="ID">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TENTANG- GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</title>
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
          <li><a class="active" href="about.php">TENTANG</a></li>
<!--           <li><a href="services.html">Services</a></li> -->
<!--           <li><a href="portfolio.html">Portfolio</a></li> -->
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
          <li><a href="contact.php">KONTAK</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>TENTANG</h2>
          <ol>
            <li><a href="index.php">BERANDA</a></li>
            <li>TENTANG</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?php echo $gambar; ?>"  alt="" class="img-fluid">
              </div>


              <div class="entry-meta">
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $data_cek['tentang_gereja']; ?>
               </p>

              </div>

            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->
          <div class="col-lg-4">

            <div class="sidebar">
              
              <h3 class="sidebar-title">Ayat Kitab Suci</h3>
              <div class="sidebar-item categories">
               <p><?php echo $data_cek['isi_judul']; ?></p>
              </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Single Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $pend;  ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Umat</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $kub;  ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>KUB</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $lingkungan;  ?>"data-purecounter-duration="1" class="purecounter"></span>
            <p>Lingkungan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $stasi;  ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Stasi</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/romo.jpg" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Pastor Paroki</h3>
              <ul>
                <li><strong>Nama Lengkap</strong>: <?php echo $data_cek['pastor_paroki']; ?></li>
                <li><strong>Alamat</strong>: <?php echo $data_cek['alamat_gereja']; ?></li>
                <li><strong>Email</strong>: <?php echo $data_cek['email_gereja']; ?></li>
                <li><strong>Nomor Hanphone</strong>: <?php echo $data_cek['no_hp']; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Tentang Pastor Paroki</h2>
              <p>
               <?php echo $data_cek['tentang_pastor']; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

<!--           <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

<!--           <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Kontak</h4>
            <p>
              <?php echo $data_cek['alamat_gereja']; ?> <br>
             <?php echo $data_cek['kabupaten_gereja']; ?><br>
              <?php echo $data_cek['provinsi_gereja']; ?><br><br>
              <strong>Nomor Handphone:</strong> <?php echo $data_cek['no_hp']; ?><br>
              <strong>Email:</strong> <?php echo $data_cek['email_gereja']; ?><br>
            </p>


          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang <?php echo $data_cek['nama_web']; ?> </h3>
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