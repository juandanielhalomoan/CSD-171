<?php
  session_start();
  include('includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  { 
    header('location:indexbsp.php');
  }
  else {
    if(isset($_POST['update']))
    {
      $nomorLaporan=$_GET['cid'];
      $status=$_POST['status'];
      $remark=$_POST['remark'];
      $query=mysqli_query($bd, "insert into status_laporan(laporan_id,status,remark) values('$nomorLaporan','$status','$remark')");
      $sql=mysqli_query($bd, "update laporan_user set status='$status' where laporan_id='$nomorLaporan'");
      echo "<script>alert('Berhasil diupdate');</script>";
    }
?>
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
  <?php include('includes/header.php');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('includes/sidebar.php');?>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Nomor Laporan <?php echo htmlentities($_GET['cid']); ?></h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-xxl-4 col-xl-12">
          <div class="card">
            <div class="card-body pt-5">
              <!-- Form Elements -->
              <form name="updateticket" id="updatecomplaint" method="post"> 
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-select" name="status" required="required" aria-label="Default select example">
                        <option selected>Pilih status</option>
                        <option value="Sedang diproses">Sedang diproses</option>
                        <option value="Selesai diproses">Selesai diproses</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Tanggapan<br><span class="text-muted">max 200 words</span></br></label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="remark" cols="50" rows="10" required="required" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" name="update" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form><!-- End Form Elements -->
            </div>
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