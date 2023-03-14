<?php
  require_once('connection.php');
  
  if(isset($_POST['btn'])){
	  $FirstName=mysqli_real_escape_string($_POST['first-name'],$con);
	  $Lastname=mysqli_real_escape_string($_POST['last-name'],$con);
	  $Phone=mysqli_real_escape_string($_POST['mobile'],$con);
	  $Email=mysqli_real_escape_string($_POST['email'],$con);
	  $Password=mysqli_real_escape_string($_POST['password'],$con);
	  $ConfirmPassword=mysqli_real_escape_string($_POST['cn-password'],$con);
	  
	  
	  echo  $FirstName, $Lastname, $Phone, $Email, $Password ,$ConfirmPassword;
	  
	  
	  
	    
  }
  ?>