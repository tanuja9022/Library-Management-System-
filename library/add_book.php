<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script type="text/javascript" src="js.js"></script>		
	<link rel="stylesheet" type="text/css" href="liberary.css">
	</head>
		<body>
	<form action="submit_book.php" method="get">
	<div>
	<?php include("library_logo.php");?>	
	</div>
	<div id="header">
	<div id="header_text">
	
	<?php
			include("title.php");
			title_database("title","title_id",5);

	?>			
	
	</div>
	  </div>
	<hr>
	
	<?php include("menu.php");?>
	<label>
			<h1>
		<?php 
				include("tag.php");
				tag_database("tag","tag_id",5);
		
		?>
	</h1>

	<?php
		include("fieldset_function.php");
		fieldset("Admin");	
		?>
	<table>
    <tr>
	<td>
		Book Name
	</td>
	<td>		<input name="book_name" id="book_name"  type="text" onBlur="empty(this.id,'bname','your fields is empty!')"   style="width:200px;" />
	</td>
	<td id="bname"></td>
	  </tr>
        <tr>
	<td>
		Book Category  
	</td>
	<td>		<input name="book_cat" id="book_cat"  type="text" onBlur="empty(this.id,'bcat','your fields is empty!')"   style="width:200px;"  />
	</td>
	<td id="bcat"></td>
	  </tr>
                <tr>
	<td>
		Book Author
	</td>
	<td>		<input name="book_author" id="book_author"  type="text" onBlur="empty(this.id,'bauthor','your fields is empty!')"  style="width:200px;" />
	</td>
	<td id="bauthor"></td>
	  </tr>
    <tr>
    <td>&nbsp;	</td>
    <td><input type="submit" value="Insert" /></td>
  </tr>
  
	</table>
	</fieldset>
	</label>
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