<?php
    session_start();
    error_reporting(0);
    include("includes/config.php");
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $ret=mysqli_query($bd, "SELECT * FROM admin WHERE username='$username' and password='$password'");
        $num=mysqli_fetch_array($ret);
    if($num>0)
    {
        $extra="dashboard_adminbsp.php";//
        $_SESSION['alogin']=$_POST['username'];
        $_SESSION['id']=$num['id'];
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
    else
    {
        $_SESSION['errmsg']="Invalid username or password";
        $extra="indexbsp.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="assets/css/buat.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <form class="form-login" name="login" method="post">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="assets/images/loginadmin.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3 mb-4">
                            <div></div><h2 class="form-login-heading">SIGN IN ADMIN</h2></small>
                            <div></div>
                            <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>            
                        </div>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Username</h6>
                            </label> <input class="mb-4 fs-5" type="text" placeholder="Enter username" id="inputEmail" name="username" required autofocus> 
                        </div>
                        <div class="row px-3 mb-5"> <label class="mb-1">
                            <h6 class="mb-0 fs-4">Password</h6>
                            </label> <input class="fs-5" type="password" id="inputPassword" name="password" placeholder="Enter password" required>
                        </div>
                        <div class="row mb-3 px-3"> <button type="submit" name="submit" class="btn btn-danger text-center pt-3 pb-3 fs-4">Login</button></div>
                        <a href="../index.php"><h5 class="modal-title">Kembali ke halaman utama</h5></a>
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
    <script type="text/javascript" src="assets2/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/images/login-bg2.jpg", {speed: 500});
    </script>
</body>
</html>