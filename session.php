<?php 

 session_start();
$uname= $_POST['uname'];
$_SESSION['admin']= $uname;

session_destroy();
