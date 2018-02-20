<?php 

 $pid =$_GET['caid'];
  $sid =  session_id();
    $successremCart =  $NepdevJDLight->NepdevRemoveCart($pid,$sid);
if($successremCart==true)
{
    echo "<script>alert('Success Remove From Your Cart'); window.location='index.php?Products=cart';</script> ";
}
else
{
    echo "<script>alert('Cant Remove'); window.location='index.php?Products=cart';</script>";
}