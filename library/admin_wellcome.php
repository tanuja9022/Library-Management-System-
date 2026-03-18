<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script type="text/javascript" src="js.js"></script>		
	<link rel="stylesheet" type="text/css" href="liberary.css">
	</head>
		<body>
		
		<?php
		session_start(); 
		
		$email=$_SESSION["email"];
		$password=$_SESSION["password"];
		
		if(isset($email) && isset($password))
		{
			if("farrukh@library.com" == $email && "test" == $password)
			{
		?>
	<form action="action.php" method="get">
	<div>
	<?php include("library_logo.php");?>	
	</div>
	<div id="header">
	<div id="header_text">
	
	<?php
			include("title.php");
			title_database("title","title_id",3);

	?>			
	
	</div>
	  </div>
	<hr>
	
	<?php include("menu.php");?>
	<div id="center">


	<?php
		include("fieldset_function.php");
		fieldset("Issue Book");	
		?>
		
		<table >
		<tr>
			<td>
		<h3>
		<?php	
				include("tag.php");
				tag_database("tag","tag_id",3);
			
		?>
		</h3>
		
		</td>
		<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
						<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
				<td>&nbsp;
			
		</td>
					<td>
				<?php
						include("select.php");
						select("select_book","Book","book",1);
				?>
			</td>
		</tr>
		</table>
		<hr>
		<table>
		<tr>
	
	
    	<tr>

			<td>
				<?php
						select("select_person","person","person",1);
				?>
			</td>

			<td>
				<?php
						select("select_day","Day","days",1);
				?>
			</td>


			<td>
			
				<?php
						select("select_month","month","months",1);
				?>
			
			</td>

			<td>
			
				<?php
						select("select_year","Year","years",1);
				?>
			
			</td>
		</tr>
			<tr>
				<td>&nbsp;
				
				</td>
			</tr>	
	
		<tr>
			<td>
		<h3>
		<?php	
				
				tag_database("tag","tag_id",6);
			
		?>
		</h3>
			</td>
			</tr>
				</table>
		<hr>
		<table>
			
		<tr>
			
						
						
						<td>&nbsp;
				
			</td>
									<td>&nbsp;
				
			</td>
	
			<td>
				<?php
						select("select_day","Day","days",1);
				?>
			</td>


			<td>
			
				<?php
						select("select_month","month","months",1);
				?>
			
			</td>

			<td>
			
				<?php
						select("select_year","Year","years",1);
				?>
			
			</td>
		</tr>     
		
		
		<tr>
			<td>
		<h3>
		<?php	
				
				tag_database("tag","tag_id",7);
			
		?>
		</h3>
			</td>
			</tr>
				</table>
		<hr>
		<table>
			
		<tr>
			<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
						<td>&nbsp;
				
			</td>
									<td>&nbsp;
				
			</td>
	
			<td>
				<?php
						select("select_day","Day","days",1);
				?>
			</td>


			<td>
			
				<?php
						select("select_month","month","months",1);
				?>
			
			</td>

			<td>
			
				<?php
						select("select_year","Year","years",1);
				?>
			
			</td>
		</tr>       
    	 
  		<tr>
			<td>&nbsp;
				
				</td>
			<td colspan="13">
				<input type="submit" value="Submit">
				<a href="action.php?registration">Create Account</a>
				<a href="action.php?view">View Account</a>
				<a href="action.php?delete">Delete Account</a>
				<a href="action.php?update">update Account</a>
				<a href="action.php?view_book">View Books</a>
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
	<?php
		}
		else
		{
		$_SESSION["invalid"]="<font color='red'><b>Invalid Email and Password</b></font>";
		header("location:admin_login.php");
	
		}
	}
	else
	{
		header("location:admin_login.php");
	
	}

	
	
	?>
	</body>
</html>