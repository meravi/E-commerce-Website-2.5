<?php 
session_start();
include "../NepdevSetting/Config.php";
if(isset($_POST['AdminLogin']))
{ 
$Email =  mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['Email']);
 $Password =  mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['Password']);
    if($Email=="" AND $Password=="")
    {
        echo "<script>alert('Please Enter Email And Password');</script>";
    }
    elseif($Email=="")
    {
        echo "<script>alert('Please Enter Email');</script>";
    }
    elseif($Password=="")
    {
        echo "<script>alert('Please Enter Password');</script>";
    }
    else
    {
    $NepdevSuccessLogin = $NepdevJDLight->NepdevAdminCheck($Email,$Password);
        if($NepdevSuccessLogin==1)
        {
            $_SESSION['NepdevAdmin'] = $Email;
            header("location:Home.php");
        }
        else
        {
            echo "<script>alert('username password does not matched');</script>";
        }
}
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>

<body>
    <!--/login-->

    <div class="error_page">
        <!--/login-top-->

        <div class="error-top">
            <h2 class="inner-tittle page">Augment</h2>
            <div class="login">
                <h3 class="inner-tittle t-inner">Login</h3>
                <div class="buttons login">
                    <ul>
                        <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                        <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <form method="post">
                    <input type="text" name="Email" placeholder="Enter Your Email" value="<?php if(isset($_POST['AdminLogin'])){ echo $Email; } ?>">
                    <input type="password" name="Password" placeholder="Enter Your Password" value="<?php if(isset($_POST['AdminLogin'])){ echo $Password; }  ?>">
                    <div class="submit"><input type="submit" name="AdminLogin" value="Login"></div>
                    <div class="clearfix"></div>

            
                </form>
            </div>


        </div>


        <!--//login-top-->
    </div>

    <!--//login-->
    <!--footer section start-->
    <div class="footer">
        <div class="error-btn">
            <a class="read fourth" href="index.html">Return to Home</a>
        </div>
        <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
    </div>
    <!--footer section end-->
    <!--/404-->
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
