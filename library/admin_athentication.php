<?php
		session_start();
		$email=$_SESSION["email"]=$_REQUEST["email"];
		$password=$_SESSION["password"]=$_REQUEST["password"];
		header("location:admin_wellcome.php");
		


?>