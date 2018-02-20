<?php 
 if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
?>
<!DOCTYPE html>
<?php include "../NepdevSetting/Config.php";
$NepdevPid = $_GET['id'];
?>
<html>
    <style>
        ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}</style>
    <body>
        <?php 
        
        $NepdevSingleProDis = $NepdevJDLight->NepdevSingleProduct($NepdevPid);
       
        if($NepdevSingleProDis==true)
        {
             $NepdevSingleProDisFetch = $NepdevSingleProDis->fetch_assoc();
        }
        else
        {
            header("location:Home.php?NepdevPage=EditProduct");
        }
        if(isset($_POST['NepdevUpdatePro']))
        {
            
            
        $UpProName = $_POST['UpProName'];
        $UpPrice = $_POST['UpPrice'];
            $UpOldPrice = $_POST['UpOldPrice'];
//        $UpProColor = $_POST['UpProColor'];
//            $UpProSize = $_POST['UpProSize'];
            $UpProductBrands = strtoupper($_POST['UpProductBrands']);
            $UpProCat = strtoupper($_POST['UpProCat']);
//            $UpProductMaterial = $_POST['UpProductMaterial'];
           $UpImage = $_FILES['UpImage']['name'];
            if($UpImage=="")
            {
                $UpImage = $_POST['OldImage'];
            }
            else
            {
                move_uploaded_file($_FILES['UpImage']['tmp_name'],"pro_img/".$UpImage);
            }
            $UpProDes = $_POST['UpProDes'];
            
            $SuccessUpSignlePro = $NepdevJDLight->NepdevUpdatePro($UpProName,$UpPrice,$UpOldPrice,$UpProCat,$UpProductBrands,$UpProDes,$UpImage,$NepdevPid);
            if($SuccessUpSignlePro=="true")
            {
                echo "<script>alert('Success Update $UpProName'); window.location='Home.php?NepdevPage=EditProduct';</script>";
            }
            else
            {
                echo "<script>alert('Cant Update Try Later');</script>";
            }
        }
        ?>
        <div class="container">
        	<div class="row">
                <form method="POST" enctype="multipart/form-data">
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Old Image</h4>
               <div class="col-xs-6 item-photo">
                   <img style="min-width:450px; min-height:450px;" src="pro_img/<?php echo $NepdevSingleProDisFetch['ProImage']; ?>">
                   <input type="hidden" name="OldImage" value="<?php echo $NepdevSingleProDisFetch['ProImage']; ?>">
                </div>
           
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>
                    <input type="text" name="UpProName" value ="<?php echo $NepdevSingleProDisFetch['ProName']; ?>"></h3>    
                    <h5 style="color:#337ab7"><?php echo strtoupper($NepdevSingleProDisFetch['ProCat']); ?> <a href="#"><?php echo strtoupper($NepdevSingleProDisFetch['ProBrand']); ?></a></h5>
        
                    <!-- Precios -->
                
        <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px;">Rs. <input type="text" name="UpPrice" value="<?php echo $NepdevSingleProDisFetch['ProNewPrice']; ?>"></h3>
                    <h6 class="title-price"><small>Old Price</small></h6>
                    <h3 style="margin-top:0px;"><del>Rs.</del> <input type="text" name="UpOldPrice" value="<?php echo $NepdevSingleProDisFetch['ProOldPrice']; ?>"></h3>
                   
                    <!-- Detalles especificos del producto -->
          
       
                       <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label"> Brand</label>
                    <div class="col-sm-10">
                       
                          <?php  $NepdevDisBrandItem = $NepdevJDLight->NepdevDisplayBrand(); ?>
                        <select id="selector1" class="form-control1" name="UpProductBrands">
                            <option value="<?php echo $NepdevSingleProDisFetch['ProBrand']; ?>"><?php echo $NepdevSingleProDisFetch['ProBrand']; ?></option>
					   <?php while($NepdevBrandFetch =  $NepdevDisBrandItem->fetch_assoc()){ ?>
                            <option value="<?php echo  $NepdevBrandFetch['brand']; ?>"><?php echo $NepdevBrandFetch['brand']; ?></option>								<?php  } ?>				
                        </select>
                      </div>
                </div>
                    
                        <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                                   <?php 
                              $NepdevDisCatItem = $NepdevJDLight->NepdevDisplayCat();
                        ?>
                        <select id="selector1" class="form-control1" name="UpProCat">
                            <option value="<?php echo $NepdevSingleProDisFetch['ProCat']; ?>"><?php echo $NepdevSingleProDisFetch['ProCat']; ?></option>
					   <?php while($NepdevCatFetch =  $NepdevDisCatItem->fetch_assoc()){ ?>
                      
                            <?php   
{ ?>
                            <option value="<?php echo $NepdevCatFetch['category']; ?>"><?php echo $NepdevCatFetch['category']; ?></option>								<?php } }  ?>				
                        </select>
                    </div>
                </div>
                    
                    
                        <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Change Image</label>
                    <div class="col-sm-6">
                        <input type="file" name="UpImage">
                    </div>
                        
                        
                </div>
              
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <input type="submit" class="btn btn-success" name="NepdevUpdatePro" value="Update Product">
                       
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Description</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                    <textarea name="UpProDes" value="<?php echo $NepdevSingleProDisFetch['ProOverview']; ?>"> <?php echo $NepdevSingleProDisFetch['ProOverview']; ?></textarea>    
                            </small>
                        </p><br><br>	<br><br>	
                            </div>
                </div>	
                    </form>
            </div>
        </div> 
        
        <script>
           $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
        </script>
    </body>
</html>
