<?php 
if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
?>
<div class="tab-main">
                        <!--/tabs-inner-->
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-tittle">Responsive Horizontal Tabs </h2>
                                <div class="graph">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Profile</span></a></li>
                                            <li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>General Setting</span></a></li>
                                            <li><a href="#section-3" class="icon-food"><i class="fa fa-truck"></i>  <span>Recent Orders</span></a></li>
                                          
                                        </ul>
                                    </nav>
                                    <div class="content tab">
                                        <section id="section-1">
                                        
                                        </section>
                                        <section id="section-2">
                                           bbdd
                                        </section>
                                        <section id="section-3">
                                     <table border="1">
										 <thead>
										 <tr>SN</tr>
											 <tr>Image</tr>
											 <tr>Product</tr>
											 <tr>Full Name</tr>
											 <tr>Email</tr>
											 <tr>Phone</tr>
											 <tr>Total</tr>
										 </thead>
											</table>
                                        </section>
                                             </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->

                            </div>
                            <script src="js/cbpFWTabs.js"></script>
                            <script>
                                new CBPFWTabs(document.getElementById('tabs'));

                            </script>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
              