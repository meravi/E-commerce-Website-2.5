<style>
.sortsel
    {
        clear: left;
        height: 50px;
    
        width: 100%;
        float: right;
        margin-top: 10px;
    }
    .sel
    {
        float: right;
        padding: 15px;
        height: auto;
    }
  .sortsel  form
    {
        float: right;
        
    }
    .prt_name
    {
        width: 100%;
        color: red;
        text-align: center;
    }

    .cartform input
    {
       
        padding: 6px 8px;
        background: #FF595E;
       border: none;
       margin-top: 70%;
        color: #fff;
        width: 100%;
    }
    .cartform input.button{
        color: #000;
    }

</style>

<?php $FrontProCatName = $_GET['Name']; ?>    



   
            
		 <div class="col-md-9" style="float:right;">
         <?php 
            
             $ProCatName = $FrontProCatName;
             $SuccessCatDisFont = $NepdevJDLight->NepdevAllProductFront($FrontProCatName);
             ?>
 <br>
             <div class="CatBanner">
            <span><?php echo strtoupper("Welcome To ".$ProCatName." Zone"); ?></span>
             </div>
             <div class="sorts">
                  
             <div class="sortsel">
				 <div class="myfilter">
                    <form method="POST">
                 <select name="ProFilter">
                     <option value="Select Product"><?php if(isset($_POST['ProFilter'])){ echo $_POST['ProFilter']; } else { echo "Select Products"; } ?></option>
                     <option value="All Products">All Product</option>
                     <option value="Low To High">Low To High</option>
                     <option value="High To Low"> High To Low</option>
                     <option value="Discount Item">Discount Item</option>
                     <option value="Latest Products">Latest</option>
                     <option value="Oldest Product">Oldest</option>
                    </select>
                    <input type="submit" value="Filter" name="FilterPro">
                        </form>
				 </div>
                <div class="sel">
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
                
                    
                    
                    
                    if(isset($_POST['FilterPro']))
                    {
                        $ProFilter = $_POST['ProFilter'];
                        
                        switch($ProFilter)
                        {
                            case "Select Product" :
                                echo "<script>alert('Select Any Product ');</script>";
                                break;
                            case "All Products" : 
                                /////// Display All Product
                                ?>
                    <?php 
            
             while($SuccessCatDisFontNow = $SuccessCatDisFont->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
						     
                                <div class="cartform">
                                
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
           </form>
                                </div>              
                                
                                
                                
                                
                                
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div> 	</a>	
            
					<?php } ?>
                    
              
                    <?php 
                                break;
                            case "Discount Item" :  ?>
                                        <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
						  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                              </form></div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                            <?php     break;
                            case "Low To High" :
                                //////// for low to high
                                ?>
                                
                               <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form></div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                                <?php break;
                                ?>    
                                <?php 
                            case "High To Low" :
                              /////////// Hight To Low 
                                ?>
                                           <?php 
                                $SuccessCatDisHTL = $NepdevJDLight->NepdevProDisHTL($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisHTL->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form> </div>
							</h4>
							</div>
						</div> 					
							<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
			</div> 	</a>	
            
					<?php } ?> 
                                <?php 
                                break;
                            case "Latest Products" :
                                ?>
                                               <?php 
                                $SuccessCatDisLatest = $NepdevJDLight->NepdevProDisLatest($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLatest->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form> </div>
							</h4>
							</div>
						</div> 					
							<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
			</div> 	</a>	
            
					<?php } ?> 
                                
                                <?php break;
                            case "Oldest Product" : 
                        //////// display old product 
                    ?>
                                             <?php 
                                $SuccessCatDisOldest = $NepdevJDLight->NepdevProDisOldest($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisOldest->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form> </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?> 
                  
                    <?php 
                                
                                break;
                            
                                default :
                                ?>
                    
                            <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form>  </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
                                
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                    <?php 
                        }
                    } else
                    {
                    ?>
                  <?php       
                          $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form>  </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
                                
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?> 
                    
                    
                    
                    <?php } ?>
                
                 </div> 
                 </div>
             </div>
             
             
             
           
         </div>
<?php include "catbrand.php"; ?>
