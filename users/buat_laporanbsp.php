<?php
  session_start();
  error_reporting(0);
  include('includes/config.php');
  if(strlen($_SESSION['login'])==0)
  { 
    header('location:indexbsp.php');
  }
  else{
  if(isset($_POST['submit']))
  {
    $uid=$_SESSION['id'];
    $kategori=$_POST['kategori'];
    $korban=$_POST['korban'];
    $state=$_POST['state'];
    $address=$_POST['address'];
    $complaintdetials=$_POST['complaindetails'];
    $compfile=$_FILES["compfile"]["name"];
    move_uploaded_file($_FILES["compfile"]["tmp_name"],"file/".$_FILES["compfile"]["name"]);
    $query=mysqli_query($bd, "insert into laporan_user(id_user,kategori,nama_korban,kabupaten,alamat,detail_laporan,file_laporan) values('$uid','$kategori', '$korban', '$state', '$address', '$complaintdetials','$compfile')");

    $sql=mysqli_query($bd, "select laporan_id from laporan_user order by laporan_id desc limit 1");
    while($row=mysqli_fetch_array($sql))
    {
      $cmpn=$row['laporan_id'];
    }
    $complainno=$cmpn;
    echo '<script> alert("Laporan anda berhasil didaftarkan dan urutan laporan anda adalah  "+"'.$complainno.'")</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buat Laporan</title>
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
      <h1>Buat Laporan</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-xxl-4 col-xl-12">
          <div class="card">
            <div class="card-body pt-5">
              <!-- Form Elements -->
              <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" >
              <?php if($successmsg)
              {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Berhasil dilaporkan!</b> <?php echo htmlentities($successmsg);?></div>
              <?php }?>

              <?php if($errormsg)
              {?>
                      <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Gagal dilaporkan!</b> </b> <?php echo htmlentities($errormsg);?></div>
              <?php }?>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select name="kategori" id="category" class="form-control form-select" onChange="getCat(this.value);" required="" aria-label="Default select example">
                        <option value="">Pilih Kategori</option>
                        <?php $sql=mysqli_query($bd, "select id, nama_kategori from kategori_laporan");
                          while ($rw=mysqli_fetch_array($sql)) {
                        ?>
                          <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['nama_kategori']);?></option>
                        <?php
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Korban</label>
                    <div class="col-sm-10">
                      <input type="text" name="korban" required="required" value="" required="" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <select name="state" required="required" class="form-control form-select" aria-label="Default select example">
                        <option value="">Pilih Kabupaten</option>
                        <?php $sql=mysqli_query($bd, "select nama_kabupaten from kabupaten");
                        while ($rw=mysqli_fetch_array($sql)) {
                          ?>
                          <option value="<?php echo htmlentities($rw['nama_kabupaten']);?>"><?php echo htmlentities($rw['nama_kabupaten']);?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Laporan <br><span class="text-muted">max 200 words</span></br></label>
                    <div class="col-sm-10">
                      <textarea name="complaindetails" required="required" cols="10" rows="10" maxlength="2000" class="form-control" style="height: 100px"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">File Upload</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" name="compfile" id="formFile" value="">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Submit Laporan</button>
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