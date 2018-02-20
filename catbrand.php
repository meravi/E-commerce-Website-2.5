<div class="rsidebar span_1_of_left" style="float:left;">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <?php $catDisInCat = $NepdevJDLight->NepdevDisCat(); ?>
						 			 <?php while($discats =$catDisInCat->fetch_assoc()){  ?>
						 <div class="tab1">
							 <ul class="place">	
					
								 <li class="sort"><a href="index.php?Products=allproducts&Name=<?php echo $discats['category']; ?>"><?php echo $discats['category']; ?></a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
					
					      </div>						  
						<?php } ?>
						
						  <!--script-->
						<!-- script -->					 
				 </div>
						 </section>
					
				   <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<?php 
									$disB = $NepdevJDLight->NepdevDisplayBrand();
									while($disBrands =$disB->fetch_assoc()){ ?>
									<label class="checkbox"><a href="index.php?Products=DisplayByBrand&brand=<?php echo $disBrands['brand']; ?>"><?php echo $disBrands['brand']; ?></a></label>
									<?php } ?>
								</div>
							</div>
				   </section>				   
					 
	     