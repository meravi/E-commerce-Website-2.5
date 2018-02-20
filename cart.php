
<?php 
  $sid = session_id();


if(isset($_POST['UpcartDone']))
{
    $upcartqty = $_POST['newcartqty'];
    $cartkoid = $_POST['cartkoid'];
    
    $SuccessUpCartQty = $NepdevJDLight->NepdevUpdateProCartQty($upcartqty,$cartkoid);
    if($SuccessUpCartQty==true)
    {
       echo "<script>alert('Success Update Cart');</script>";
    }
    else
    {
        echo "<script>alert('Cant Update Cart');</script>";
    } 
}
?>
<div class="container">
	<div class="check-sec">	 
		<div class="col-md-3 cart-total">
			<a class="continue" href="index.php">Continue to basket</a>
<!--
			<div class="price-details">
				<h3>Price Details</h3>
				<span>Total</span>
				<span class="total1">
               
                </span>
				
				<div class="clearfix"></div>				 
			</div>	
-->
			<ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price">
                  <?php $TotalPaisa = $NepdevJDLight->NepdevTotalPrices($sid);
                   $TotalPaisaFetch = $TotalPaisa->fetch_assoc();
                   $sum = $TotalPaisaFetch['total_paisa']; echo "Rs ".$sum;
                    ?>
                  </li>			   
			</ul> 
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<a class="order" href="index.php?Products=checkouts">Place Order</a>
		
		</div>
		<div class="col-md-9 cart-items">
		 <form method="post">
            <h1>My Shopping Bag</h1>
	 <?php 
           
                $SuccessCartDis = $NepdevJDLight->NepdevDisCarts($sid);
                $sn=1;
            
                while($SuccessCartFetch = $SuccessCartDis->fetch_assoc())
                {  
                    $cid = $SuccessCartFetch['pid'];
                    $SuccessCartDetail = $NepdevJDLight->NepdevDisCartsById($cid);
                    while($SuccessCartDetailFetch =$SuccessCartDetail->fetch_assoc())
                    {
            
            
            ?>
             
                  <input type="hidden" name="cartkoid" value="<?php echo $SuccessCartFetch['id']; ?>">
			<div class="cart-header">
                <?php   echo $sn; ?>
                 
                <div class="close">
                    <a href="index.php?Products=updatecartqty&caid=<?php echo $SuccessCartFetch['id']; ?>&pid=<?php echo $SuccessCartDetailFetch['id']; ?>"><i class="fas fa-check-circle"></i></a>
                    | 
                    <a href="index.php?Products=removepro&caid=<?php echo $SuccessCartFetch['id']; ?>&pid=<?php echo $SuccessCartDetailFetch['id']; ?>"><i class="fas fa-trash"></i></a>
                       
                </div>
                
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="meadmin/pro_img/<?php echo $SuccessCartDetailFetch['ProImage']; ?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						    <h3><a href="single.html"><?php echo strtoupper($SuccessCartDetailFetch['ProName']); ?></a><span>For: <?php echo strtoupper($SuccessCartDetailFetch['ProCat']); ?></span></h3>
							<ul class="qty">
							
								<li><p>Qty : <?php echo $SuccessCartFetch['p_qty']; ?></p></li>
                                <li><p>Per Piece:<?php echo $SuccessCartDetailFetch['ProNewPrice']; ?> </p></li>
                                <li><p>SubTotal Rs: <?php $CartQty = $SuccessCartFetch['p_qty']*$SuccessCartDetailFetch['ProNewPrice']; echo $CartQty; ?></p></li>
							</ul>
														
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
            <?php }$sn++; }  ?>
                 </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>