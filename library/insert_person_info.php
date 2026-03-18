<?php
	session_start();
	
	
	$uname=trim($_REQUEST["username"]);
	$password=md5(trim($_REQUEST["password"]));
	$email=trim($_REQUEST["email"]);
	$cnic=trim($_REQUEST["cnic"]);
	$cell=trim($_REQUEST["cel"]);
	$address=trim($_REQUEST["address"]);
	$role=trim($_REQUEST["role"]);

	
	include("dbcon.php");
	if(isset($uname)  && isset($cnic) && isset($password)  && isset($role) && isset($email) && isset($address) && isset($cell))
	{
	
	mysql_query("insert into person values(null,'$uname','$cnic','$password','$role','$email','$address','$cell')")or die("Your data could not be inserted!".mysql_error());
	
	$_SESSION["submit"]="<font color='#6e8709'><b>Registration has been Succussfully</b></font>";
	header("location:signup.php");
	}
	else
	{
	$_SESSION["invlaid"]="<font color='red'><b>Registration has not been Succussfully</b></font>";
	header("location:signup.php");	
	
	}
?>