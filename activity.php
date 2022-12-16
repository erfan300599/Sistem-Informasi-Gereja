<?php
include'administrator/inc/koneksi.php';
 $sql_cek = "SELECT * FROM tb_pengaturan WHERE id_pengaturan=1";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
?>


<!DOCTYPE html>
<html lang="ID">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KEGIATAN- GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</title>
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
          <li><a class="active" href="activity.php">KEGIATAN</a></li>
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

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>KEGIATAN</h2>
          <ol>
            <li><a href="index.php">BERANDA</a></li>
            <li>KEGIATAN</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">SEMUA</li>
<!--               <li data-filter=".filter-app">Tri Hari Suci</li>
              <li data-filter=".filter-card">Bulan Kitab Suci</li>
              <li data-filter=".filter-web">Serba Serbi</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <?php 
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_kegiatan");
              while ($data= $sql->fetch_assoc()) {
            ?>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
            <div class="portfolio-item">
              <img src="<?php echo 'administrator/website/gambar/' . $data['gambar_kegiatan']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><?php echo $data['judul_kegiatan']; ?></h3>
                <div>
                  <a href="<?php echo 'administrator/website/gambar/' . $data['gambar_kegiatan']; ?>"  data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $data['judul_kegiatan']; ?>"><i class="bx bx-plus"></i></a>
                  <a href="activity-details.php?kode=<?php echo $data['id_kegiatan']; ?>"  title="Activity Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
    <?php
              }
            ?>
<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Web 3</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>App 2</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Card 2</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Web 2</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>App 3</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Card 1</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Card 3</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Web 1</h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
            <h4>KONTAK</h4>
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
          <strong> Gereja Santo Karolus Agung Orakeri Ende</strong>
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