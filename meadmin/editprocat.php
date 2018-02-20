<?php
 if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
include "../NepdevSetting/Config.php";
  if(isset($_POST['AddProductCategory']))
  {
      $ProductCategory = $_POST['ProductCategory'];
     $upprocatname = $_POST['upprocatname'];
      
  }
?>

<div class="graph-2 general">
    <h3 class="inner-tittle two">&nbsp;&nbsp;&nbsp; Edit Product Category</h3>
    <div class="grid-1">
        <div class="form-body">
   <form method="post">
            <br><br>
      
                  <div class="form-group">
                    <label for="selector1" class="col-sm-4 control-label">My Product Category</label>
                    <div class="col-sm-6">
                    <?php 
                              $NepdevDisCatItem = $NepdevJDLight->NepdevDisplayCat();
                        ?>
                        
                                 <select id="selector1" class="form-control1" name="ProductCategory">
                                <?php if(isset($_POST['AddProductCategory'])){ ?> 
                            <option value="<?php echo $ProductCategory; ?>"><?php echo $ProductCategory; ?></option>
                                     <input type="text" name="upprocatname" placeholder="<?php echo $ProductCategory; ?> Into....">
                            <?php } else {  ?>
					   <?php while($NepdevCatFetch =  $NepdevDisCatItem->fetch_assoc()){ ?>
                      
                            <?php   
{ ?>
                            <option value="<?php echo $NepdevCatFetch['category']; ?>"><?php echo $NepdevCatFetch['category']; ?></option>								<?php } } } ?>				
                        </select>
                        
       
                       <input type="submit" class="btn btn-default" value="Edit Select Category" name="AddProductCategory">
                      </div>
                </div>
            </form> 
       </div>
    </div>
</div>

<!--

         <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">ProductCategory Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product Category Name..." name="ProductName">
                    </div>

                </div>
          
          
                
               
    <input type="submit" class="btn btn-default" value="Add Product Category" name="AddProductCategory">
            </form>-->
