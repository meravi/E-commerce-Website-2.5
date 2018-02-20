<?php 


  $cid = $_GET['caid'];
                $pid = $_GET['pid'];
if(isset($_POST['UpcartDone']))
{
    $upcartqty = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['upcartqty']);
    $cartkoid = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['cartkoid']);
    //$Totalprice = 
    $productpricecart = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['productpricecart']);
    $Totalprice = $upcartqty*$productpricecart;
    $SuccessUpCartQty = $NepdevJDLight->NepdevUpdateProCartQty($cartkoid,$Totalprice,$upcartqty);
    if($SuccessUpCartQty==true)
    {
       echo "<script>alert('Success Update Cart'); window.location='index.php?Products=cart';</script>";
    }
    else
    {
        echo "<script>alert('Cant Update Cart');</script>";
    } 
}
?>
<div class="container">
	<div class="check-sec">	 
			<div class="col-md-12 cart-items">
			<h1>My Shopping Bag</h1>
	 <?php 
             $sid = session_id();
              
                
               ///display cart info from cart
                $SuccessCartDis = $NepdevJDLight->NepdevDisCartsPage($cid,$sid);
             
                $SuccessCartFetch = $SuccessCartDis->fetch_assoc();
                
                  /////display cart info from products ////
                    $SuccessCartDetail = $NepdevJDLight->NepdevDisCartsById($pid);
                    $SuccessCartDetailFetch =$SuccessCartDetail->fetch_assoc();
                
            
            
            ?>
              <form method="post">
                  <input type="hidden" name="cartkoid" value="<?php echo $SuccessCartFetch['id']; ?>">
                  <input type="hidden" name="productpricecart" value="<?php echo $SuccessCartFetch['Price']; ?>">
			<div class="cart-header">
               
                 
                <div class="close">
                 <input type="submit" name="UpcartDone" value="Update">
                    
                       
                </div>
                
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="meadmin/pro_img/<?php echo $SuccessCartDetailFetch['ProImage']; ?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						    <h3><a href="single.html"><?php echo strtoupper($SuccessCartDetailFetch['ProName']); ?></a><span>For: <?php echo strtoupper($SuccessCartDetailFetch['ProCat']); ?></span></h3>
							<ul class="qty">
							
								<li><p>Qty : <input type="number" name="upcartqty" value="<?php echo $SuccessCartFetch['p_qty']; ?>" min="1"> </p></li>
                                <li><p>Per Piece:<?php echo $SuccessCartDetailFetch['ProNewPrice']; ?> </p></li>
                                <li><p>SubTotal for <?php echo strtoupper($SuccessCartDetailFetch['ProName'])  ?> Rs: <?php $CartQty = $SuccessCartFetch['p_qty']*$SuccessCartDetailFetch['ProNewPrice']; echo $CartQty; ?></p></li>
							</ul>
														
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
            <?php   ?>
                 </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>