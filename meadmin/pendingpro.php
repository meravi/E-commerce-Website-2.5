<?php 
if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
include "../NepdevSetting/Config.php";
 $OrderDisplay = $NepdevJDLight->NepdevSuccessOrderDis();
$sn = 1;
?>
<div class="tab-main">
                        <!--/tabs-inner-->
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-tittle">Responsive Horizontal Tabs </h2>
                                <div class="graph">
                                    <div class="content tab">
                                     
                                      
                                <table class="table table-striped">
    <thead>
      <tr>
        <th>SN</th>
        <th>Name </th>
        <th>Email</th>
		  <th>Phone</th>
		  <th>Address</th>
		  <th>Product</th>
		  <th>Quantity*Price</th>
		  <th>Total</th>
		  <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
		<?php while($orderdis=$OrderDisplay->fetch_assoc()){ ?>
		<?php  $pid=  $orderdis['pid']; ?>
		<?php $successfetchimg = $NepdevJDLight->NepdevProImg($pid);
		 while($add_pro_detail= $successfetchimg->fetch_assoc()){
		?>
      <tr>
		  
        <td><?php echo $sn; ?></td>
        <td><?php echo $orderdis['fullname']; ?></td>
        <td><?php echo $orderdis['email']; ?></td>
		  <td><?php echo $orderdis['phone']; ?></td>
		  <td><?php echo $orderdis['address']; ?></td>
		  <td><strong><?php echo strtoupper($add_pro_detail['ProName']); ?></strong><br>
			  <img src="pro_img/<?php echo $add_pro_detail['ProImage']; ?>" width="150" hight="150"></td>
		  <td><?php echo $orderdis['p_qty']; ?> * Rs<?php echo $orderdis['Price']; ?></td>
		  <td>Rs <?php echo $orderdis['TotalPrice']; ?></td>
		  <td>success</td>
		  <td>cancel</td>
      </tr>
		<?php } $sn++; } ?>
    </tbody>
  </table>
                         
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
              