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
?>


<!DOCTYPE html>
<html lang="ID">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME - GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Icon -->
  <link href="administrator/dist/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">
<!--   <link href="zoldyck.css" rel="stylesheet"> -->

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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span><?php echo $data_cek['nama_web']; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">BERANDA</a></li>
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
          <li><a href="contact.php">KONTAK</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Yuk... Kembali Ke Gereja!</h2>
          <p class="animate__animated animate__fadeInUp">Sebab dalam satu Roh kita semua, baik orang Yahudi, maupun orang Yunani, baik budak, maupun orang merdeka, telah dibaptis menjadi satu tubuh dan kita semua diberi minum dari satu Roh. <b class="text text-warning">1 Korintus 12:13</b></p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Ora Et Labora</h2>
          <p class="animate__animated animate__fadeInUp">Dan segala sesuatu yang kamu lakukan dengan perkataan dan perbuatan, lakukanlah semuanya itu dengan nama Tuhan Yesus, sambil mengucap syukur oleh Dia kepada Allah, Bapa Kita. <b class="text text-warning">Kolose 3:17</b></p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya/a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Duc In Altum</h2>
          <p class="animate__animated animate__fadeInUp">Bertolaklah ke tempat yang dalam dan tebarkanlah jalamu untuk menangkap ikan. <b class="text text-warning">Lukas 5:4</b></p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="section-title">
          <h2>Jadwal Misa</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Misa Mingguan</a></h4>
              <h6 class="text text-bg-primary">Sabtu</h6>
              <p class="description">16.30 - 18.00 WITA</p>
              <h6 class="text text-bg-primary">Minggu</h6>
              <p class="description">6.00 - 7.30 WITA</p>
              <p class="description">7.30 - 9.00 WITA </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Misa Harian</a></h4>
              <h6 class="text text-bg-primary">Senin - Jumat</h6>
              <p class="description">6.00 - 7.30 WITA</p>
              <p class="description">16.30 - 18.00 WITA</p>
              <h6 class="text text-bg-primary">Sabtu</h6>
              <p class="description">6.00 - 7.30 WITA</p>
            </div>
          </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Jumat Pertama</a></h4>
              <p class="description">6.00 - 7.30 WITA</p>
              <p class="description">16.30 - 18.00 WITA</p>
              <p class="description">16.30 - 18.00 WITA</p>
            </div>
          </div> 

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Hari Raya Katolik</a></h4>
              <p class="description text text-bg-primary">Coming Soon</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container"><br>
        <div class="section-title">
          <h2>Profil Gereja</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 video-box">
            <img id="preview" src="<?php echo $gambar; ?>" class="img-fluid" alt="">
           <!--  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
              data-autoplay="true"></a> -->
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

     <!--        <div class="icon-box"> -->
              <p class="description">Gereja Kuasi Santo Karolus Agung Orakeri resmi berdiri dengan surat keputusan Uskup Keuskupan Agung Ende No: 104/ 5K/ KUS/ IX/ 2017, tanggal 4 November 2017. Kuasi Santo Karolus Agung Orakeri didirikan sebagai persiapan ke arah Paroki baru pemekaran dari Paroki Santo Eduardus Nangapanda dan cakupan sementara wilayah pelayanan pastoral meliputi Stasi Orakeri, Stasi Marakoja, Stasi Watumite, Stasi Oja dan Stasi Malaara. Pendirian gereja Kuasi Santo Karolus Agung Orakeri disusul dengan pengangkatan Pastor Kuasi Santo Karolus Agung Orakeri oleh Uskup Agung Ende melalui surat keputusan No: 027/ SK/ KUS/ IV/ 2018 tanggal 9 April 2018. Tanggal 20 April 2018. Reverendus Dominus Fidelis Markus Demu dilantik menjadi Pastor Kuasi Santo Karolus Agung Orakeri, oleh Reverendus...<a href="about.php">Read More</a></p>
<!--             </div> -->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section  class="features">
      <div class="container">
       <div class="section-title">
          <h2>Pelayanan</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/yesus.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
          <h3>Jadwal Pelayanan Sekretariat Paroki</h3><br>
            <ul>
              <li>Senin - Sabtu : 08.00 - 20.00 WITA & </li>
              <li>Minggu : 08.00 - 15.00 WITA</li>
            </ul>
            <p class="fst-bold text-danger">
              Libur Nasional Tutup
            </p>
            <p class="fst-bold">
              *Harap datang tepat waktu dan sesuai dengan jam kerja.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/intensi.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Intensi Misa</h3> <br>
            <p>
             Umat diberikan kesempatan untuk menyampaikan intensi misa di semua jam misa (harian & mingguan). Permohonan dapat diajukan melalui Sekretariat Paroki, paling lambat 1 (satu) minggu sebelumnya.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

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

         <!--  <div class="col-lg-3 col-md-6 footer-links">
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
            <h3>Tentang <?php echo $data_cek['nama_web']; ?></h3>
            <p><?php echo $data_cek['isi_judul']; ?></p>
            <div class="social-links mt-3">
              <a href="twitter.com/karolus-ende" class="twitter"><i class="bx bxl-twitter"></i></a>
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
          <strong> Sistem Informasi Gereja Kuasi Santo Karolus Agung Orakeri Ende</strong>
        </a>.
        All rights reserved.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
</body>

</html>