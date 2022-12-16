<?php
include'administrator/inc/koneksi.php';
 $sql_cek = "SELECT * FROM tb_pengaturan WHERE id_pengaturan=1";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

    if(isset($_GET['kode'])){
        $sql_cek1 = "SELECT * from tb_kegiatan where id_kegiatan ='".$_GET['kode']."'";
        $query_cek1 = mysqli_query($koneksi, $sql_cek1);
        $data_cek1 = mysqli_fetch_array($query_cek1,MYSQLI_BOTH);
    }
?>



<!DOCTYPE html>
<html lang="ID">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DETAIL KEGIATAN- GEREJA SANTO KAROLUS AGUNG ORAKERI ENDE</title>
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
        <h1 class="text-light"><a href="index.php"><?php echo $data_cek['nama_web']; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">BERANDA</a></li>
          <li><a href="tentang.php">TENTANG</a></li>
<!--           <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li> -->
          <li><a href="berita.php">BERITA</a></li>
          <li><a class="kegiatan" href="kegiatan.php">KEGIATAN</a></li>
          <li><a href="kalendar.php">KALENDER</a></li>
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

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
               <input type="hidden" name="id_kegiatan" value="<?php echo $data_cek1['id_kegiatan']; ?>">
        <div class="d-flex justify-content-between align-items-center">
          <h2>DETAIL KEGIATAN</h2>

          <ol>
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="kegiatan.php">KEGIATAN</a></li>
            <li><?php echo $data_cek1['judul_kegiatan']; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?php echo 'administrator/website/gambar/' . $data_cek1['gambar_kegiatan']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="activity-details.php"><?php echo $data_cek1['judul_kegiatan']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href=""><?php echo $data_cek1['user_postingan']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01"><?php echo $data_cek1['tanggal_postingan']; ?></time></a></li>
              <!--     <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">12 Comments</a></li> -->
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 <?php echo $data_cek1['konten_kegiatan']; ?>
                </p>

              </div>

            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">CARI</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

<?php
  $sql12 = $koneksi->query("SELECT COUNT(id_kegiatan) as THS  from tb_kegiatan where kategori_kegiatan='Tri Hari Suci'");
  while ($data12= $sql12->fetch_assoc()) {
    $ths=$data12['THS'];
}

  $sql12 = $koneksi->query("SELECT COUNT(id_kegiatan) as BKS  from tb_kegiatan where kategori_kegiatan='Bulan Kitab Suci'");
  while ($data12= $sql12->fetch_assoc()) {
    $bks=$data12['BKS'];
}

  $sql12 = $koneksi->query("SELECT COUNT(id_kegiatan) as OMK from tb_kegiatan where kategori_kegiatan='OMK'");
  while ($data12= $sql12->fetch_assoc()) {
    $omk=$data12['OMK'];
}

  $sql12 = $koneksi->query("SELECT COUNT(id_kegiatan) as SS  from tb_kegiatan where kategori_kegiatan='Serba Serbi'");
  while ($data12= $sql12->fetch_assoc()) {
    $ss=$data12['SS'];
}
?>
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Tri Hari Suci <span>(<?php echo $ths; ?>)</span></a></li>
                  <li><a href="#">Bulan Kitab Suci<span>(<?php echo $bks; ?>)</span></a></li>
                  <li><a href="#">Orang Muda Katolik <span>(<?php echo $omk; ?>)</span></a></li>
                  <li><a href="#">Serba Serbi<span>(<?php echo $ss; ?>)</span></a></li>
                  <li><a href="#">Sekami<span>(<?php echo $ss; ?>)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                          <?php 
        $no = 1;
        $sql1 = $koneksi->query("SELECT * FROM tb_kegiatan");
              while ($data1= $sql1->fetch_assoc()) {
            ?>
                <div class="post-item clearfix">
                  <img src="<?php echo 'administrator/website/gambar/' . $data1['gambar_kegiatan']; ?>"  alt="">
                  <h4><a href="activity-details.php?kode=<?php echo $data1['id_kegiatan']; ?>"><?php echo $data1['judul_kegiatan']; ?></a></h4>
                  <time datetime="2020-01-01"><?php echo $data1['tanggal_postingan']; ?></time>
                </div>
    <?php
              }
            ?>
<!--                 <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div> -->

<!--                 <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div> -->

  <!--               <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div> -->

<!--                 <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div> -->

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

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
            <h3>About <?php echo $data_cek['nama_web']; ?></h3>
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
          <strong>Sistem Informasi Gereja Santo Karolus Agung Orakeri Ende</strong>
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