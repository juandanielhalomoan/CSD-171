<?php
    include('includes/config.php');
    error_reporting(0);
    if(isset($_POST['submit']))
    {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $kontak=$_POST['kontak'];
        $status=1;
        $query=mysqli_query($bd, "insert into users(nama_lengkap,email,password,nomor_telp,status) values('$nama','$email','$password','$kontak','$status')");
        $msg="Registrasi berhasil. Sekarang anda dapat login !";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link href="assets/css/buat.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
	<script>
        function userAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data:'email='+$("#email").val(),
                type: "POST",
                success:function(data){
                    $("#user-availability-status1").html(data);
                    $("#loaderIcon").hide();
                },
                error:function (){}
            });
        }
    </script>
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto pt-1">
        <div class="card card0 border-0" >
            <form method="post">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="assets/img/regis.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3 mb-4">
                            <div></div><h2 class="form-login-heading fs-3">REGISTRASI USER</h2></small>
                            <p style="padding-left: 1%; color: green">
                            <?php if($msg){
                                echo htmlentities($msg);
                            }?>
                            </p>
                            <div></div>
                        </div>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Name</h6>
                            </label> <input class="mb-4 fs-5" type="text" name="nama" placeholder="Masukkan nama lengkap" required="required" autofocus> </div>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Alamat Email</h6>
                            </label> <input class="mb-4 fs-5" type="email" id="email" onBlur="userAvailability()" name="email" required="required" placeholder="Masukkan alamat email yang valid"> 
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="row px-3 mb-4"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Password</h6>
                            </label> <input class="fs-5" type="password" name="password" placeholder="Masukkan password" required="required"> </div>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Nomor HP</h6>
                            </label> <input class="mb-4 fs-5" type="text" maxlength="13" name="kontak" required="required" autofocus placeholder="Masukkan nomor handphone"> </div>
                        <div class="row mb-3 px-3"> <button type="submit" name="submit" id="submit" class="btn btn-danger text-center pt-3 pb-3 fs-4">Register</button></div>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold fs-5">Already Registered ? <a class="text-danger" href="indexbsp.php">Sign In</a></small> </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg2.jpg", {speed: 500});
    </script>
</body>
</html>