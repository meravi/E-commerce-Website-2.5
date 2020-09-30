<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
Front end customize by Pramila khatiwada & Susila Pandey 
Back End : Ravi Khadka khadkaravi170@gmail.com
-->


<?php include "NepdevSetting/Config.php";  session_start(); $_SESSION['user']='true'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<!-- Custom Theme files -->
<!--theme style-->
	
<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> 
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<style>
  
    .CatBanner
    {
        width: 100%;
        margin-left: 20px;
        background: #D21E79;
        font-size: 18px;
        text-align: center;
        padding: 14px 16px;
        color: #3090C7;
        font-weight: bold;
        text-transform: capitalize;
        box-shadow: 5px 3px 0px #28262C;
    }
    .viewall a
    {
        float: right;
        border: 1px solid none;
        padding: 14px 16px;
        background: #D21E79;
        color: #fff;
    }
    .viewall a:hover
    {
        color: #fff;
        background: #0E79B2;
    }
    .product-model
    {
       
    }
    </style>
</head>
<body> 
<!--header-->
<div class="header-top">
<?php include "mymenu.php" ?>
			<div class="clearfix"> </div>
</div>
<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>Products</li>
		 </ol>
			
     <?php 
         $NepdevPages = "index1";
         if(isset($_GET['Products']))
         {
             $NepdevPages = $_GET['Products'];
         }
         include $NepdevPages.".php";
         ?>

    </div>


<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>© 2015 Lighting. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		 </div>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
	</div>
<!---->
</body>
</html>
