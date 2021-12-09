<?php session_start();
  error_reporting(0);
  include('includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  { 
    header('location:indexbsp.php');
  }
  else
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bali Speak Up! - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets2/img/gambar1-removebg.png" rel="icon">
  <link href="assets2/img/gambar1-removebg.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("includes/header.php");?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("includes/sidebar.php");?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="">
        <!-- Left side columns -->
        <div class="">
          <div class="row">
            <!--Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Hi, Welcome Back! <span>| ADMIN</span></h5>
                    <div class="d-flex align-items-center">
                      <img src="assets2/img/helo2.png" alt="" style="width: 30%;">
                      <p>Cek dan tangani semua laporan kasus tindakan kekerasan yang dilaporkan oleh user. </p>
                    </div>
                  </div>
                </div>
            </div><!-- End Card -->
            <!-- New Card -->
            <div class="col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Laporan Belum Diproses</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                          $rt = mysqli_query($bd, "SELECT * FROM laporan_user where status is null");
                          $num1 = mysqli_num_rows($rt);
                      {?>
                      <h6><?php echo htmlentities($num1); ?></h6>
											<?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End New Card -->

            <!-- New Card -->
            <div class="col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Laporan Sedang Diproses</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                      $status="Sedang diproses";                   
                      $rt = mysqli_query($bd, "SELECT * FROM laporan_user where status='$status'");
                      $num1 = mysqli_num_rows($rt);
                    {?>
                    <h6><?php echo htmlentities($num1); ?></h6>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End New Card -->
            <!-- New Card -->
            <div class="col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Laporan Selesai Diproses</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                      $status="Selesai diproses";                   
                      $rt = mysqli_query($bd, "SELECT * FROM laporan_user where status='$status'");
                      $num1 = mysqli_num_rows($rt);
                    {?>
                    <h6><?php echo htmlentities($num1); ?></h6>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End New Card -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("includes/footer.php");?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/chart.js/chart.min.js"></script>
  <script src="assets2/vendor/echarts/echarts.min.js"></script>
  <script src="assets2/vendor/quill/quill.min.js"></script>
  <script src="assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>
</body>
</html>
<?php } ?>