<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db($db);
if(isset([$_POST'user name'])) {
	$uname=$_POST['username'];
	$password=$_POST['password'];

$sql="select * from loginform where user='".$uname."'AND Password='".$password."'
limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
	echo "You Have Successfully Logged in";
	exit();
}
else{
	echo "You Have Entered Incorrect Password";
	exit();
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="Loginbox">
	<img src="avatar_img.png" class="avatar">
	<h1>Your Account</h1>
	<form method="POST" action="#">
		<p>User Name</p>
		<input type="text" name="" placeholder="Enter User Name">
		<p>Password</p>
		<input type="Password" name="" placeholder="Enter Password">
		<input type="Submit" name="" value="SIGN IN">
		<a href="#">Change password?</a>
		<a href=""></a>
	</form>
	
</body>

</html>