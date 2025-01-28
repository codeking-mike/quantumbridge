<?php
 include("functions/auth.php");
 if(isset($_GET['ed'])){
 $_SESSION['user'] = $_GET['ed'];
    header("location:../user");
 }else{
	header("location:index.php"); 
	 
 }
 ?>