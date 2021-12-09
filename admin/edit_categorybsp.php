<?php
  session_start();
  include('includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {	
    header('location:indexbsp.php');
  }
  else{
  date_default_timezone_set('Asia/Kolkata');// change according timezone
  $currentTime = date( 'd-m-Y h:i:s A', time () );
  if(isset($_POST['submit']))
  {
    $kategori=$_POST['kategori'];
    $description=$_POST['description'];
    $id=intval($_GET['id']);
    $sql=mysqli_query($bd, "update kategori_laporan set nama_kategori='$kategori',deskripsi_kategori='$description'where id='$id'");
    $_SESSION['msg']="Kategori Updated !!";
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
      <h1>Edit Kategori Laporan</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-xxl-4 col-xl-12">
            <div class="card">
              <div class="card-body pt-5">
              <?php if(isset($_POST['submit']))
              {?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Berhasil!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
              <?php } ?>  
                <!--Form Elements -->
                <form class="form-horizontal row-fluid" name="kategori" method="post" >
                <?php
                $id=intval($_GET['id']);
                $query=mysqli_query($bd, "select * from kategori_laporan where id='$id'");
                while($row=mysqli_fetch_array($query))
                {
                ?>	
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kategori" placeholder="Masukkan nama kategori baru" value="<?php echo  htmlentities($row['nama_kategori']);?>" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="description" rows="5" style="height: 100px"><?php echo  htmlentities($row['deskripsi_kategori']);?></textarea>
                      </div>
                    </div>
                <?php } ?>	
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Update</button>
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