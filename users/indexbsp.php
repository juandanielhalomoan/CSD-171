<?php
    session_start();
    error_reporting(0);
    include("includes/config.php");
    if(isset($_POST['submit']))
    {
        $ret=mysqli_query($bd, "SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'");
        $num=mysqli_fetch_array($ret);
        if($num>0)
        {
            $extra="dashboardbsp.php";//
            $_SESSION['login']=$_POST['username'];
            $_SESSION['id']=$num['id'];
            $host=$_SERVER['HTTP_HOST'];
            $uip=$_SERVER['REMOTE_ADDR'];
            $status=1;
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit();
        }
        else
        {
            $_SESSION['login']=$_POST['username'];	
            $uip=$_SERVER['REMOTE_ADDR'];
            $status=0;
            $errormsg="Invalid username or password";
            $extra="login.php";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="assets/css/buat.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <script type="text/javascript">
        function valid()
        {
            if(document.forgot.password.value!= document.forgot.confirmpassword.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.forgot.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <form class="form-login" name="login" method="post">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="assets/img/login2.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3 mb-4">
                            <div></div><h2 class="form-login-heading">SIGN IN</h2></small>
                            <div></div>
                            <p style="padding-left:4%; padding-top:2%;  color:red">
                            <?php if($errormsg){
                                echo htmlentities($errormsg);
                            }?></p>
		        		    <p style="padding-left:4%; padding-top:2%;  color:green">
                            <?php if($msg){
                                echo htmlentities($msg);
                            }?></p>
                        </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 fs-4">Alamat Email</h6>
                            </label> <input class="mb-4 fs-5" type="text" placeholder="Masukkan alamat email yang valid" name="username" required autofocus> </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 fs-4">Password</h6>
                            </label> <input class="fs-5" type="password" name="password" placeholder="Masukkan password" required> </div>
                        <div class="row mb-3 mt-3 px-3"> <button type="submit" name="submit" class="btn btn-danger text-center pt-3 pb-3 fs-4">Login</button></div>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold fs-4">Don't have an account? <a class="text-danger" href="regis.php">Register</a></small> </div>  
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