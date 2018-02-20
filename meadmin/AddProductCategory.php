<?php
 if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
include "../NepdevSetting/Config.php";
if(isset($_POST['AddProductCategory']))
{
   $CatName = strtoupper($_POST['ProductName']);
    if($CatName=="")
    {
        echo "<script>alert('Cant Add Blank Category');</script>";
    }
    else
    {
        $ProductCatSuccess = $NepdevJDLight->NepdevAddCat($CatName);
        if($ProductCatSuccess)
        {
            echo "<script>alert('Success Add');</script>";
        }
        else
            {
        echo "<script>alert('You Have Already Added $CatName');</script>";
        }
        
    }
}
?>

<div class="graph-2 general">
    <h3 class="inner-tittle two">&nbsp;&nbsp;&nbsp; Add Product Category</h3>
    <div class="grid-1">
        <div class="form-body">
            <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">ProductCategory Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product Category Name..." name="ProductName">
                    </div>

                </div>
          
          
                
               
    <input type="submit" class="btn btn-default" value="Add Product Category" name="AddProductCategory">
            </form>
            <br><br>
      
                  <div class="form-group">
                    <label for="selector1" class="col-sm-4 control-label">My Product Category</label>
                    <div class="col-sm-6">
                    <?php 
                              $NepdevDisCatItem = $NepdevJDLight->NepdevDisplayCat();
                        ?>
                        <select id="selector1" class="form-control1" name="ProductCategory">
					   <?php while($NepdevCatFetch =  $NepdevDisCatItem->fetch_assoc()){ ?>
                            <option><?php echo $NepdevCatFetch['category']; ?></option>								<?php } ?>				
                        </select>
                      
                      </div>
                </div>
        </div>

    </div>
</div>
