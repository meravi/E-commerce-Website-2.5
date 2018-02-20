<style>
.latestpro
	{
		width: 75%;
	
		min-height: 1400px !important;
		
	}
	.secloop
	{
		padding-top: 350px;
	}
</style>
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
             
           }
?>
 <div class="col-md-9 product-model-sec latestpro">
	 <a href="index.php?Products=allproducts&Name=<?php echo "latest"; ?>">
						   <div class="CatBanner">
                 <span><?php echo "latests"; ?></span>
             </div>	 </a>	
	 <br>
			  <div class="viewall">
             <a href="index.php?Products=allproducts&Name=<?php echo "all"; ?>">View All <?php  ?></a>
                 </div>
	 <?php 
	 $dislatestproitem = $NepdevJDLight->NepdevLatestProTop();
	 while($toplatestpro=$dislatestproitem->fetch_assoc()){
	 ?>
	 	 <div class="product-grid">
									
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $toplatestpro['ProImage']; ?>" class="img-responsive" alt="">
						
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
								<a href="index.php?Products=SingleProduct&id=<?php echo $toplatestpro['id']; ?>"><button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button></a>
							</h4>
							</div>
						</div>
						
										
						</div>	
			 	
	 
	 
	 <?php } ?>
</div>
<?php include "catbrand.php"; ?>





<?php
          $prodi= $NepdevJDLight->NepdevDisCat();
   
                while($prodis = $prodi->fetch_assoc())
                { 
         ?>
<div class="product-model">	 
	 <div class="container">

		 <div class="col-md-9 product-model-sec secloop">
			
			  <?php 
            
             $ProCatName = $prodis['category'];
             $SuccessCatDisFont = $NepdevJDLight->NepdevDisByCat($ProCatName);
             ?>
					 <a href="index.php?Products=allproducts&Name=<?php echo $prodis['category']; ?>">
						   <div class="CatBanner">
                 <span><?php echo strtoupper($prodis['category']); ?></span>
             </div>	 </a>	
			<br>
			  <div class="viewall">
             <a href="index.php?Products=allproducts&Name=<?php echo $prodis['category']; ?>">View All <?php echo strtoupper($prodis['category']); ?></a>
                 </div>
		
						  <?php 
                  
					while($SuccessCatDisFontNow = $SuccessCatDisFont->fetch_assoc())
             {
			
             ?>	
						 <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
								<a href="index.php?Products=SingleProduct&id=<?php echo $SuccessCatDisFontNow['id']; ?>"><button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button></a>
							</h4>
							</div>
						</div>
						
										
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>								<?php
                                $NewP = $SuccessCatDisFontNow['ProNewPrice'];
                                $OldP = $SuccessCatDisFontNow['ProOldPrice'];
                        if($NewP>=$OldP)
                        {
                            
                       
                                ?>	
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
								<?php } else
                        {
                                ?>
								<div class="ofr">
								  <p class="pric1"><del>Rs<?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p><?php } ?>
									<?php 
                 $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 { ?>
						          <p class="disc">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>
                                    <?php 
                       echo "Save ".$mul."%";
                 } 
                                    ?></p>
								</div>
								<form method="post" class="myform">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
		<input type="number" class="item_quantity" value="1" name="p_qty" min="1">
								<input type="submit" class="item_add items" name="AddToCarts" value="ADD">
								</form>
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div>	
			 	
					<?php   } ?>
	
			
			
			</div> <?php }  ?>	
				

	
	</div>
		</div>
</div>