<?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "balispeakup";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bali Speak Up! - Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets1/img/gambar1-removebg.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets1/vendor/font-awesome/font-awesome.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
  <link href="assets1/css/style1.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <img src="assets1/img/balispeakup.png" alt="" style="max-height: 150px;">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="users/regis.php">Registration</a></li>
          <li><a class="nav-link scrollto" href="admin/indexbsp.php">Admin</a></li>
          <li><a class="getstarted scrollto" href="users/indexbsp.php">LOGIN</a></li>
        </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="home d-flex align-items-center">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Laporkan Dugaan Tindakan Kekerasan
          </h1>
          <h2>Jangan biarkan hal ini terjadi terus menerus</h2>
          <div>
            <a href="users/indexbsp.php" class="btn-get-started scrollto">Laporkan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets1/img/p3.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets1/img/p2.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Mengapa harus Bali Speak Up ?</h3>
            <p data-aos="fade-up" data-aos-delay="100">
            Bali Speak Up merupakan sebuah website yang berguna bagi masyarakat khususnya daerah Bali untuk melaporkan dugaan kasus-kasus tindakan kekerasan yang terjadi di lingkungan masyarakat.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Mudah Diakses</h4>
                <p>Masyarakat dapat mengakses website ini kapan saja dan dimana saja</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Penanganan Lebih Cepat</h4>
                <p>Laporan akan diproses sehingga kasus kekerasan dapat segera ditangani</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>STEPS</h2>
          <p>Langkah-langkah melakukan pelaporan</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-book-bookmark"></i></div>
              <h4 class="title"><a href="">Registrasi</a></h4>
              <p class="description">Sebelum menggunakan website, user diharapkan melakukan registrasi terlebih dahulu</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Login</a></h4>
              <p class="description">Setelah melakukan registrasi, user dapat login ke website untuk melakukan pelaporan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Buat Laporan</a></h4>
              <p class="description">Laporkan tindakan kekerasan secara detail dengan dilengkapi bukti yang mendukung</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Cek Status Laporan</a></h4>
              <p class="description">Lakukan pengecekan status secara berkala terhadap laporan yang sebelumnya sudah dibuat</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kasus-kasus</h2>
          <p>Berikut beberapa contoh kasus yang dapat dilaporkan</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>Penyekapan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-22.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>Bullying</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-33.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>KDRT</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-44.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>Kekerasan Seksual</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-55.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>Penyiksaan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets1/img/portfolio/portfolio-66.jpg" class="img-fluid" alt="">
              <div class="portfolio-links portfolio-info">
                <h4>Bullying</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Pertanyaan yang sering diajukan</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Website ini menangani kasus kekerasan di daerah Bali? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Benar, untuk saat ini website Bali Speak Up ditujukan untuk menangani kasus-kasus kekerasan yang ada di daerah Bali
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bentuk kasus kekerasan apa saja yang dapat dilaporkan pada website ini? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Kasus kekerasan yang dapat dilaporkan melalui website ini meliputi kasus penyekapan, kekerasan seksual, bullying, KDRT, penyiksaan, dll
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Berapa lama kasus kekerasan selesai ditangani? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Hal itu bergantung pada kompleksitas kasus yang dilaporkan karena diperlukan verifikasi lebih lanjut
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah dengan melaporkan kasus kekerasan melalui website dapat membuat kasus tersebut benar selesai? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tidak, website ini hanya sebagai penyalur informasi agar dapat tersampaikan lebih cepat. Namun, untuk penanganannya akan dilakukan lebih lanjut terhadap instansi terkait
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apakah user bisa melaporkan kasus selain tindakan kekerasan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tidak, website ini digunakan khusus untuk melaporkan segala tindakan kekerasan
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Clients Section ======= -->
    <section class="testi">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Laporan Masyarakat</h2>
          <p>Beberapa laporan yang telah masuk</p>
        </div>
      </div>
      <div class="testimonials-carousel-wrap">
          <div class="listing-carousel-button listing-carousel-button-next"></div>
          <div class="listing-carousel-button listing-carousel-button-prev"></div>
          <div class="testimonials-carousel" data-aos="fade-up">
              <div class="swiper-container">
                  <div class="swiper-wrapper">
                  <?php 
                  $query=mysqli_query($bd, "select * from laporan_user where sifat_laporan is not null and status is not null ");
                  while($row=mysqli_fetch_array($query))
                  {
                ?>
                      <div class="swiper-slide">
                          <div class="testi-item">
                              <div class="testi-avatar"><img src="assets1/img/default_profile.jpg"></div>
                              <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                              <div class="testimonials-text">
                                  <p><?php echo htmlentities($row['detail_laporan']);?></p>
                                  <a href="#" class="text-link"></a>
                                  <div class="testimonials-avatar">
                                      <h3><?php echo htmlentities($row['sifat_laporan']);?></h3>
                                      <h4><?php echo htmlentities($row['status']);?></h4>
                                  </div>
                              </div>
                              <div class="testimonials-text-after"></div> 
                          </div>
                      </div>
                      <?php  } ?>
                      <!--testi end-->
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- End Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="assets1/img/balispeakup.png" alt="" style="width: 10rem;">
            <p>
              <strong>Phone :</strong> (0361)-21xxx <br>
              <strong>Email :</strong> balispeakup.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Steps</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Kasus-kasus</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">F.A.Q</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Pelayanan</li>
              <li><i class="bx bx-chevron-right"></i>Pelaporan</li>
              <li><i class="bx bx-chevron-right"></i>Pengaduan</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Media</h4>
            
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BaliSpeakUp!</span></strong>
      </div>
      <div class="credits">
       <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>
  <script src="assets1/js/scripts1.js"></script>
</body>
</html>