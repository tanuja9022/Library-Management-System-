<html>
	<head>
	<title>
	Online Library Managment System
	</title>
	</head>
	<body>
	<?php
	
	$account=$_POST["account"];
	if($account == "Registration")
	{
		header("location:signup.php");
	
	}
	
	else if($account == "View")
	{
		header("location:view.php");
	}
	
	else if($account == "Delete")
	{
		header("location:delete.php");
	}
	
	else if($account == "Update")
	{
		header("location:update.php");
	}
	?>

</fieldset>
</form>
</div>


	</body>
	</html>

