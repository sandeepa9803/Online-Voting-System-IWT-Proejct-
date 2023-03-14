<?php
  require_once('connection.php');
  
  if(isset($_POST['btn'])){
	  $Email=mysqli_real_escape_string($_POST['email'],$con);
	  $Password=mysqli_real_escape_string($_POST['lgn-password'],$con);
	  
	  echo $Email , $Password;
  } 
 ?>