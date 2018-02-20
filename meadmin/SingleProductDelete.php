<?php 
 if(!$_SESSION['NepdevAdmin'])
  {
      header("location:index.php");
  }
 include '../NepdevSetting/Config.php';

 $NepdevDelId = $_GET['id'];
$SuccessDelPro = $NepdevJDLight->NepdevDelPro($NepdevDelId);
if($SuccessDelPro==true)
{
    echo "<script>alert('Success Delete');</script>";
    echo "<script>window.location='Home.php?NepdevPage=DeleteProduct';</script>";
}
else
{
    echo "<script>alert('cant delete ');</script>";
     echo "<script>window.location='Home.php?NepdevPage=DeleteProduct';</script>";
}