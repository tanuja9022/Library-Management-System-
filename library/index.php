<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script type="text/javascript" src="js.js"></script>		
	<link rel="stylesheet" type="text/css" href="liberary.css">
	</head>
		<body>
	<form action="index/login.php" method="get">
	<div>
	<?php include("library_logo.php");?>	
	</div>
	<div id="header">
	<div id="header_text">
	
	<?php
			include("title.php");
			title_database("title","title_id","1");

	?>			
	
	</div>
	  </div>
	<hr>
	
	<?php include("menu.php");?>
	<div id="center">
			<h1>
		<?php 
				include("tag.php");
				tag_database("tag","tag_id",1);
		
		?>
	</h1>

	<?php
		include("fieldset_function.php");
		fieldset("Login");	
		?>
	<table>
    <tr>
	<td>
		Email
	</td>
	<td><input name="email" id="email"  type="text" onBlur="empty(this.id,'em','your fields is empty!')" onkeypress="insert_hidden()" onclick="insert_hidden()" onfocus="insert_login(1)" style="width:200px;" value="example_123.id@library.com" onBlur="insert_show()" style=" color:#CCCCCC" />
	</td>
	<td id="em"></td>
	  </tr>
    <tr>
    <td>
		Password	</td>
    <td><input name="password" id="password" type="password" onBlur="empty(this.id,'pass','your fields is empty!')" onfocus="insert_login(2)" style="width:200px; color:#66FF00;" /></td>
	<td id="pass"></td>
  </tr>
        <tr>
    <td>
		Role
	</td>
    <td>
	
	<?php 
				include("role.php");
				role_database("role");
	?>

	</td>
	<td id="roled"></td>		
	 </tr>
    <tr>
    <td>&nbsp;	</td>
    <td><input type="submit" value="Submit" />
	<a href="admin_login.php"><b>Admin Login</b></a>
		</td>
  </tr>
  
	</table>
	</fieldset>
	</div>
	<div id="boy">
	<?php include("boy.php");?>
	</div>

	<div id="footer">
	<div id="foot_menu">
		<?php include("footer.php");?>
		</div>	
	</div>
	</form>
	</body>
</html>