<?php
 if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
include "../NepdevSetting/Config.php";
//$BrandName
if(isset($_POST['AddProductBrand']))
{
    $BrandName = $_POST['ProductName'];
    if($BrandName=="")
    {
        echo "<script>alert('Add Some Product Brand And Then Submit');</script>";
    }
    else
    {
        $BrandAddSuccess = $NepdevJDLight->NepdevAddBrand($BrandName);
        if(!$BrandAddSuccess)
        {
            
            echo "<script>alert('You Have Already Added $BrandName Brand');</script>";
        }
    }
}
?>

<div class="graph-2 general">
    <h3 class="inner-tittle two">&nbsp;&nbsp;&nbsp; Add Product Brands</h3>
    <div class="grid-1">
        <div class="form-body">
            <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Product Brand Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product Brand Name..." name="ProductName">
                    </div>

                </div>
          
          
                
               
    <input type="submit" class="btn btn-default" value="Add Product Brand" name="AddProductBrand">
            </form>
            <br><br>
          
                  <div class="form-group">
                    <label for="selector1" class="col-sm-4 control-label">My Product Brand</label>
                    <div class="col-sm-6">
                    <?php  $NepdevDisBrandItem = $NepdevJDLight->NepdevDisplayBrand(); ?>
                        <select id="selector1" class="form-control1" name="ProductBrands">
					   <?php while($NepdevBrandFetch =  $NepdevDisBrandItem->fetch_assoc()){ ?>
                            <option><?php echo $NepdevBrandFetch['brand']; ?></option>								<?php } ?>				
                        </select>
                      
                      </div>
                </div>
        </div>

    </div>
</div>
