<?php
  session_start();
  error_reporting(0);
  include('includes/config.php');
  if(strlen($_SESSION['login'])==0)
  { 
    header('location:indexbsp.php');
  }
  else{
  date_default_timezone_set('Asia/Kolkata');
  $currentTime = date( 'd-m-Y h:i:s A', time () );
  if(isset($_POST['submitpwd']))
  {
    $sql=mysqli_query($bd, "SELECT password FROM  users where password='".md5($_POST['password'])."' && email='".$_SESSION['login']."'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
      $con=mysqli_query($bd, "update users set password='".md5($_POST['newpassword'])."' where email='".$_SESSION['login']."'");
      $successmsg="Password Changed Successfully !!";
    }
    else
    {
      $errormsg="Old Password not match !!";
    }
  }

  if(isset($_POST['submit']))
  {
    $nama=$_POST['nama'];
    $contactno=$_POST['contactno'];
    $kabupaten=$_POST['kabupaten'];
    $alamat=$_POST['alamat'];
    $query=mysqli_query($bd, "update users set nama_lengkap='$nama',nomor_telp='$contactno',kabupaten='$kabupaten',alamat='$alamat'
      where email='".$_SESSION['login']."'");
    if($query)
    {
      $successmsg="Profile Successfully !!";
    }
    else
    {
      $errormsg="Profile not updated !!";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profil User</title>
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
  <script type="text/javascript">
    function valid()
    {
      if(document.chngpwd.password.value=="")
      {
        alert("Current Password Filed is Empty !!");
        document.chngpwd.password.focus();
        return false;
      }
      else if(document.chngpwd.newpassword.value=="")
      {
        alert("New Password Filed is Empty !!");
        document.chngpwd.newpassword.focus();
        return false;
      }
      else if(document.chngpwd.confirmpassword.value=="")
      {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.confirmpassword.focus();
        return false;
      }
      else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
      {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
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
      <h1>Profile</h1>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="assets2/img/default_profile.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo htmlentities($row['nama_lengkap']);?></h2>
              <h3>User Bali Speak Up!</h3>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  <?php if($successmsg)
                  {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <b>Berhasil diedit!</b> <?php echo htmlentities($successmsg);?></div>
                  <?php }?>

                  <?php if($errormsg)
                  {?>
                      <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Gagal diedit!</b> </b> <?php echo htmlentities($errormsg);?></div>
                  <?php }?>
                  <?php $query=mysqli_query($bd, "select * from users where email='".$_SESSION['login']."'");
                  while($row=mysqli_fetch_array($query)) 
                  {
                  ?>       
                  <form class="form-horizontal style-form" method="post" name="profile" >
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" required="required" class="form-control" id="fullName" value="<?php echo htmlentities($row['nama_lengkap']);?>">
                       </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="useremail" required="required" type="email" class="form-control" id="Email" value="<?php echo htmlentities($row['email']);?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nomor HP</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="text" name="contactno" required="required" id="Phone" value="<?php echo htmlentities($row['nomor_telp']);?>" class="form-control">
                        </div>
                      </div>
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Kabupaten</label>
                      <div class="col-md-8 col-lg-9">
                      <select name="kabupaten" required="required" class="form-control">
                            <option value="<?php echo htmlentities($row['kabupaten']);?>"><?php echo htmlentities($st=$row['kabupaten']);?></option>
                            <?php $sql=mysqli_query($bd, "select nama_kabupaten from kabupaten ");
                            while ($rw=mysqli_fetch_array($sql)) {
                              if($rw['nama_kabupaten']==$st)
                              {
                                continue;
                              }
                              else
                              {
                              ?>
                              <option value="<?php echo htmlentities($rw['nama_kabupaten']);?>"><?php echo htmlentities($rw['nama_kabupaten']);?></option>
                            <?php
                              }}
                            ?>
                          </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea  name="alamat" required="required" id="Address" class="form-control"><?php echo htmlentities($row['alamat']);?></textarea>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-danger">Simpan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <?php if($successmsg)
                      {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Well done!</b> <?php echo htmlentities($successmsg);?></div>
                      <?php }?>
                      <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                      <?php }?>
                  <form class="form-horizontal style-form" method="post" name="chngpwd" onSubmit="return valid();">
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword" required="required">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" required="required">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="password" name="confirmpassword" required="required" class="form-control" id="renewPassword">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submitpwd" class="btn btn-danger">Ubah Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
                </div>
              </div><!-- End Tabs -->
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