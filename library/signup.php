<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="liberary.css">
			
		<script type="text/javascript" src="js.js">
		</script>		
	
		<title>
			Library Managment System
			</title>
	
	</head>
	<body>
	
	<div>
	<?php include("library_logo.php");?>	
	</div>
	<div id="header">
	<div id="header_text">
	
	<?php
			include("title.php");
			title_database("title","title_id",4);

	?>			
	
	</div>
	  </div>
	<hr>
		<?php include("book_logo_menu.php");?>
	<div id="menu">
	<?php include("menu.php");?>

	</div>
	<div id="center">
			<h1>
		<?php 
				include("tag.php");
				tag_database("tag","tag_id",4);
		
		?>
	</h1>
	<?php
		
		include("fieldset_function.php");
		fieldset("Registration");
		session_start(); 
		echo $_SESSION["submit"];
		echo $_SESSION["invlaid"];
		session_destroy();	
		?>
		<form action="insert_person_info.php" method="get" name="signup">
	<table>
    <tr>
	<td>
		Username
	</td>
	<td>
		<input name="username" id="username"  type="text"  />
	</td>
	<td id="un"></td>
	  </tr>
    <tr>
    <td>
		Password	</td>
    <td><input name="password" id="password" type="password"  /></td>
	<td id="pass"></td>
  </tr>
      <tr>
    <td>
		Confirm password	</td>
    <td><input name="cpassword" id="cpassword" type="password"  /></td>
	<td id="cpass"></td>
  </tr>
      <tr>
    <td>
		Email	</td>
    <td><input name="email" id="email" type="text"  /></td>
	<td id="em"></td>
  </tr>
    <tr>
    <td>
		CNIC	</td>
    <td><input name="cnic1" id="cnic" type="text" />
     
		<td id="nic"></td>
  </tr>

  
  <tr>
    <td>
		Cell	</td>
    <td>
	<input name="cel" id="cel" type="text"  />

	</td>
	<td id="cell"></td>
  </tr>
      <tr>
    <td>
		Address	</td>
    <td><input name="address" id="address" type="text" /></td>
	<td id="add"></td>
  </tr>
        <tr>
    <td>
		Role
	</td>
   
	<td>
	<?php
		mysql_connect("localhost","root","admin") or die("Your server counld not be connectd!");
		mysql_select_db("lib") or die("Your database counld not be connectd!");

		$title=mysql_query("select * from role");
		?>
		<select name="role" id="role" >
		<option value="">Select Role</option>
		<?php
	
		while($show=mysql_fetch_array($title))
		{
		?>
			<option value="<?php echo $show[0];?>"><?php echo $show[1];?></option>
		<?php
		}
		
	?>
	</select>

	</td>
	 </tr>
    <tr>
    <td>&nbsp;	</td>
    <td><input type="button" value="Submit" onClick="validate()"  /></td>
  </tr>
  </form>
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

	</body>
</html>