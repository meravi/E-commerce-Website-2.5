<?php
$brand = $_GET['brand'];
 $successdis = $NepdevJDLight->NepdevDisplayBrandByName($brand);

?>
<div class="product-model">	 
	 <div class="container">
		 <div class="col-md-9 product-model-sec">
			 
					 <a href="index.php?Products=allproducts&Name=">
						   <div class="CatBanner">
                 <span>Welcome To <?php echo strtoupper($brand).' Brand'; ?></span>
             </div>	 </a>	
			<br>
			  <div class="viewall">
             <a href="index.php?Products=allproducts&Name=">View All </a>
                 </div>
		
		 <?php while($branddis = $successdis->fetch_assoc()){ ?>
		 	 <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $branddis['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
								<a href="index.php?Products=SingleProduct&id=<?php echo $branddis['id']; ?>"><button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button></a>
							</h4>
							</div>
						</div>
						
										
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $branddis['ProName']; ?></h4>								<?php
                                $NewP = $branddis['ProNewPrice'];
                                $OldP = $branddis['ProOldPrice'];
                        if($NewP>=$OldP)
                        {
                            
                       
                                ?>	
								<span class="item_price">Rs.<?php echo $branddis['ProNewPrice'] ?></span>
								<?php } else
                        {
                                ?>
								<div class="ofr">
								  <p class="pric1"><del>Rs<?php echo $branddis['ProOldPrice']; ?></del></p><?php } ?>
									<?php 
                 $sub = $branddis['ProOldPrice']-$branddis['ProNewPrice'];
                                    $div = $sub/$branddis['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 { ?>
						          <p class="disc">Rs.<?php echo $branddis['ProNewPrice'] ?>
                                    <?php 
                       echo "Save ".$mul."%";
                 } 
                                    ?></p>
								</div>
								<form method="post">
                                    <input type="hidden" name="pid" value="<?php echo $branddis['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $branddis['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $branddis['ProNewPrice'] ?>">
		<input type="number" class="item_quantity" value="1" name="p_qty" min="1">
								<input type="submit" class="item_add items" name="AddToCarts" value="ADD">
								</form>
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div>	
			
			 <?php } ?>
			 	
			 
			
			 
			</div> 	
			     </div>
		</div>
