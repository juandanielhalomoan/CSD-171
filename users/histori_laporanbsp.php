<?php 
  session_start();
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
  <title>Histori Laporan</title>
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
      <h1>Histori Laporan</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-xxl-4 col-xl-12">
        <div class="col-xxl-4 col-xl-12">
          <div class="card pt-5">
            <div class="card-body">
              <!-- Table -->
              <table class="table table-bordered border-secondary">
                <thead>
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal Laporan dibuat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $query=mysqli_query($bd, "select * from laporan_user where id_user='".$_SESSION['id']."'");
                   while($row=mysqli_fetch_array($query))
                {
                ?>
                  <tr>
                    <th scope="row"><?php echo htmlentities($row['laporan_id']);?></th>
                    <td><?php echo htmlentities($row['tanggal_dibuat']);?></td>
                    <td>
                    <?php 
                       $status=$row['status'];
                       if($status=="" or $status=="NULL")
                       { ?>
                         <button type="button" class="btn btn-danger">Belum diproses</button>
                      <?php }
                       if($status=="Sedang diproses"){ ?>
                       <button type="button" class="btn btn-warning">Sedang diproses</button>
                       <?php }
                       if($status=="Selesai diproses") {
                       ?>
                       <button type="button" class="btn btn-success">Selesai diproses</button>
                    <?php } ?>
                      <td>
                        <a href="laporan_detailbsp.php?cid=<?php echo htmlentities($row['laporan_id']);?>">
                        <button type="button" class="btn btn-secondary">View Details</button></a>
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table -->
            </div>
          </div>
        </div>
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