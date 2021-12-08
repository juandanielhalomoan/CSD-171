<?php session_start();
  error_reporting(0);
  include('includes/config.php');
  if(strlen($_SESSION['login'])==0)
  { 
    header('location:indexbsp.php');
  }
  else{ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Laporan</title>
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
  <?php include('includes/header.php');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('includes/sidebar.php');?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Laporan</h1>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Tabs -->
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview">
                <?php $query=mysqli_query($bd, "select laporan_user.*,kategori_laporan.nama_kategori as catname from laporan_user join kategori_laporan on kategori_laporan.id=laporan_user.kategori where id_user='".$_SESSION['id']."' and laporan_id='".$_GET['cid']."'");
                while($row=mysqli_fetch_array($query))
                {?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nomor Laporan</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['laporan_id']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tanggal Registrasi</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['tanggal_dibuat']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kategori</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['catname']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Korban</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['nama_korban']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['kabupaten']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['alamat']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Isi Laporan</div>
                    <div class="col-lg-9 col-md-8"><?php echo htmlentities($row['detail_laporan']);?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">File</div>
                    <div class="col-lg-9 col-md-8">
                    <?php $cfile=$row['file_laporan'];
                    if($cfile=="" || $cfile=="NULL")
                    {
                      echo htmlentities("File NA");
                    }
                    else{ ?>
                    <a href="file/<?php echo htmlentities($row['file_laporan']);?>"> View File</a>
                    <?php } ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8">
                    <p style="color:red"><?php 
                    if($row['status']=="NULL" || $row['status']=="" )
                    {
                    echo "Belum diproses";
                    } else{
                                  echo htmlentities($row['status']);
                    }
                    ?></p>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div><!-- End Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('includes/footer.php');?>
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