<?php 





  if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }

 include "../NepdevSetting/Config.php";
 if(isset($_POST['AddProduct']))
 {
     
     $ProductName = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductName']);
     $ProductNewPrice = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductNewPrice']);
     $ProductOldPrice = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductOldPrice']);
    // $ProductColor = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductColor']);
    // $ProductDimension = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductDimension']);
     $ProductCategory = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductCategory']);
     $ProductBrands = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductBrands']);
    // $ProductMaterial = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductMaterial']);
     $ProductDescription = mysqli_real_escape_string($NepdevJDLight->Protects(),$_POST['ProductDescription']);
     $ProductImg = $_FILES['ProductImage']['name'];
	move_uploaded_file($_FILES['ProductImage']['tmp_name'],"pro_img/".$ProductImg);
     

     if($ProductName=="" AND $ProductNewPrice=="" AND $ProductOldPrice="" AND $ProductCategory=="" AND $ProductBrands=="" AND $ProductDescription=="" AND $ProductImg=="")
     {
         echo "<script>alert('All Field Are Blank ');</script>";
     }
   
     elseif($ProductName=="")
     {
        echo "<script>alert('Please Enter Product Name');</script>";    
     }
     elseif($ProductNewPrice=="")
     {
         echo "<script>alert('Please Enter New Price');</script>";
     }
//     
//     elseif($ProductColor=="")
//    {    
//         echo "<script>alert('Please Enter Product Color');</script>";
//     }
//     elseif($ProductDimension=="")
//     {
//         echo "<script>alert('Please Enter Product Size');</script>";
//     }
     elseif($ProductCategory=="")
     {
         echo "<script>alert('Please Select Product Category');</script>";
     }
     elseif($ProductBrands=="")
     {
         echo "<script>alert('Please Select Product Brand');</script>";
     }
//     elseif($ProductMaterial=="")
//     {
//         echo "<script>alert('Please Enter Product Material');</script>";
//     }
     elseif($ProductDescription=="")
     {
         echo "<script>alert('Please Enter Product Description');</script>";
     }
     elseif($ProductImg=="")
     {
         echo "<script>alert('Please Select Any One Image For Product');</script>";
     }
         else
     {
       
 $NepdevSuccessAddProduct =
     $NepdevJDLight->NepdevAddnewProduct($ProductName,$ProductNewPrice,$ProductOldPrice,$ProductCategory,$ProductBrands,$ProductDescription,$ProductImg);
             if($NepdevSuccessAddProduct==true)
             {
                 echo "<script>alert('Success Added $ProductName Product');</script>";
                 header("location:Home.php");
             }
             else
             {
                 echo "<script>alert('cant added');</script>";
             }
         }
 } 
?>

<div class="graph-2 general">
    <h3 class="inner-tittle two">&nbsp;&nbsp;&nbsp; Add New Product </h3>
    <div class="grid-1">
        <div class="form-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product Name Here..." name="ProductName" value="<?php if(isset($_POST['AddProduct'])){ echo $ProductName; } ?>">
                    </div>

                </div>
      
<div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">New Price</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product New Price 700" name="ProductNewPrice" value="<?php if(isset($_POST['AddProduct'])){ echo $ProductNewPrice; } ?>">
                    </div>

                </div>
<div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Old  Price</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Product New Price 700" name="ProductOldPrice" value="<?php if(isset($_POST['AddProduct'])){ echo $ProductNewPrice; } ?>">
                    </div>

                </div>

                
                <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">Product Category</label>
                    <div class="col-sm-8">
                          <?php 
                              $NepdevDisCatItem = $NepdevJDLight->NepdevDisplayCat();
                        ?>
                        <select id="selector1" class="form-control1" name="ProductCategory">
                                <?php if(isset($_POST['AddProduct'])){ ?> 
                            <option value="<?php echo $ProductCategory; ?>"><?php echo $ProductCategory; ?></option>
                            <?php } else {  ?>
					   <?php while($NepdevCatFetch =  $NepdevDisCatItem->fetch_assoc()){ ?>
                      
                            <?php   
{ ?>
                            <option value="<?php echo $NepdevCatFetch['category']; ?>"><?php echo $NepdevCatFetch['category']; ?></option>								<?php } } } ?>				
                        </select>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">Product Brand</label>
                    <div class="col-sm-8">
                          <?php  $NepdevDisBrandItem = $NepdevJDLight->NepdevDisplayBrand(); ?>
                        <select id="selector1" class="form-control1" name="ProductBrands">
                              <?php if(isset($_POST['AddProduct'])){ ?>
                         <option value="<?php echo $ProductBrands; ?>"><?php echo $ProductBrands; ?></option>
                            <?php } else { ?>    
                            
					   <?php while($NepdevBrandFetch =  $NepdevDisBrandItem->fetch_assoc()){ ?>
                            <option value="<?php echo  $NepdevBrandFetch['brand']; ?>"><?php echo $NepdevBrandFetch['brand']; ?></option>								<?php } } ?>				
                        </select>
                      </div>
                </div>
   
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Product Overview</label>
                    <div class="col-sm-8"><textarea name="ProductDescription" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="Write Product Overview..."><?php if(isset($_POST['AddProduct'])){ echo $ProductDescription; } ?></textarea></div>
                </div>
                        <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-8">
               
                        <input type="file" name="ProductImage">
                 
                            </div>
                </div>
          <input type="submit" class="btn btn-default" value="Add Product" name="AddProduct">
            </form>
            <br><br>
        </div>

    </div>
</div>
