
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
    $state=$_POST['state'];
    $sql=mysqli_query($bd, "insert into kabupaten(nama_kabupaten) values('$state')");
    $_SESSION['msg']="Sukses menambahkan kabupaten !!";
  }
  if(isset($_GET['del']))
  {
    mysqli_query($bd, "delete from kabupaten where id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Kabupaten terhapus !!";
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
      <h1>Tambah Kabupaten/Kota</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-xxl-4 col-xl-12">
            <div class="card">
              <div class="card-body pt-5">
							<?php if(isset($_POST['submit']))
              {?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil! <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div
              <?php } ?>
							<?php if(isset($_GET['del']))
              {?>
									<div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    Oh ! <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php } ?>
                <!-- Form Elements -->
                <form class="form-horizontal row-fluid" name="Category" method="post" >
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="state" placeholder="Masukkan nama kabupaten/kota baru" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Tambah</button>
                    </div>
                  </div>
                </form><!-- End Form Elements -->
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>

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
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $query=mysqli_query($bd, "select * from kabupaten");
                $cnt=1;
                while($row=mysqli_fetch_array($query))
                {
                ?>								
                  <tr>
                    <th scope="row"><?php echo htmlentities($cnt);?></th>
                    <td><?php echo htmlentities($row['nama_kabupaten']);?></td>
                    <td><?php echo htmlentities($row['tanggal_dibuat']);?></td>                   
                    <td>
                      <a href="edit_kotabsp.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-warning"><i class="bi bi-info-circle"></i></button></a>
                      <a href="tambah_kotabsp.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></a>
                    </td>
                   </tr>
                <?php $cnt=$cnt+1; } ?>
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