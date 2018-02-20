<?php
if(isset($_POST['AddToCarts']))
{
            $sid = session_id();
               $p_qty = $_POST['p_qty'];
               $pid = $_POST['pid'];
               $prosize = "llll";
               $singleprice = $_POST['proprice'];
                $sprice = $_POST['proprice'];
               $totalproprice = $sprice*$p_qty;
$InsCartNow = $NepdevJDLight->NepdevProCart($pid,$p_qty,$singleprice,$totalproprice,$prosize,$sid);
             
           } ?>
<!DOCTYPE html>
<html>
<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>
<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

</head>
<body> 
<!--header-->

<!--header//-->
<div class="product">
	 <div class="container">	
		      <?php 

        $NepdevPid = $_GET['id'];
        $NepdevFrontDis = $NepdevJDLight->NepdevSingleProduct($NepdevPid);
        $NepdevFrontFetch = $NepdevFrontDis->fetch_assoc();
        
        if(isset($_POST['AddToCart']))
        {
          
            @session_start();
            $_SESSION['user_cart'] = "On";
             $sid = session_id();
            $ProQty= $_POST['ProQty'];
            $ProSize = $_POST['ProSize'];
            $NepdevSuccessCart =  $NepdevJDLight->NepdevCart($NepdevPid,$ProQty,$ProSize,$sid);
            if($NepdevSuccessCart==true)
            {
                echo "<script>alert('Success Added To Your cart'); window.location='Index.php';</script>";
            }
            
        }
        ?>
		 <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">	
					 <div class="flexslider">
							  <ul class="slides">
								<li data-thumb="meadmin/pro_img/<?php echo $NepdevFrontFetch['ProImage']; ?>">
									<div class="thumb-image"> <img src="meadmin/pro_img/<?php echo $NepdevFrontFetch['ProImage']; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
<!--
								<li data-thumb="images/si2.jpg">
									 <div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="images/si3.jpg">
								   <div class="thumb-image"> <img src="images/si3.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
-->
							  </ul>
						</div>					 					 
					 <script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

				 </div>	
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para">
						 <h4><?php echo strtoupper($NepdevFrontFetch['ProName']); ?> </h4>							
							<h5 class="item_price">Rs<?php echo $NepdevFrontFetch['ProNewPrice']; ?> <del>Rs<?php echo $NepdevFrontFetch['ProOldPrice']; ?> </del></h5>							
							<p class="para">
						  <?php echo $NepdevFrontFetch['ProOverview']; ?>
						  </p>
							<div class="prdt-info-grid">
								 <ul>
									 <li>- Brand : <?php echo strtoupper($NepdevFrontFetch['ProBrand']); ?></li>
								
								 </ul>
							</div>
										
					 </div>
				 </div>
				 <div class="clearfix"> </div>
			 </div>
	     </div>
		 
		 
		 <div class="bottom-prdt">
			 <div class="btm-grid-sec">
				 <?php $singleprod = $NepdevJDLight->NepdevLatestPro();
				  while($disSinglePro=$singleprod->fetch_assoc()){
				 ?>
			
				 
							 <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $disSinglePro['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
								<a href="index.php?Products=SingleProduct&id=<?php echo $disSinglePro['id']; ?>"><button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button></a>
							</h4>
							</div>
						</div>
						
										
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $disSinglePro['ProName']; ?></h4>								<?php
                                $NewP = $disSinglePro['ProNewPrice'];
                                $OldP = $disSinglePro['ProOldPrice'];
                        if($NewP>=$OldP)
                        {
                            
                       
                                ?>	
								<span class="item_price">Rs.<?php echo $disSinglePro['ProNewPrice'] ?></span>
								<?php } else
                        {
                                ?>
								<div class="ofr">
								  <p class="pric1"><del>Rs<?php echo $disSinglePro['ProOldPrice']; ?></del></p><?php } ?>
									<?php 
                 $sub = $disSinglePro['ProOldPrice']-$disSinglePro['ProNewPrice'];
                                    $div = $sub/$disSinglePro['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 { ?>
						          <p class="disc">Rs.<?php echo $disSinglePro['ProNewPrice'] ?>
                                    <?php 
                       echo "Save ".$mul."%";
                 } 
                                    ?></p>
								</div>
								<form method="post">
                                    <input type="hidden" name="pid" value="<?php echo $disSinglePro['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $disSinglePro['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $disSinglePro['ProNewPrice'] ?>">
		<input type="number" class="item_quantity" value="1" name="p_qty" min="1">
								<input type="submit" class="item_add items" name="AddToCarts" value="ADD">
								</form>
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div>	
			 
				 
				 
				 
				 
				 
<?php } ?>
			
		
				  <div class="clearfix"></div>
			 </div>			
		 </div>
	 </div>
</div>
<!---->
