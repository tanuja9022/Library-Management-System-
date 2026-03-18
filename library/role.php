<?php
	function role_database($table)
	{
		mysql_connect("localhost","root","") or die("Your server counld not be connectd!");
		mysql_select_db("lib") or die("Your database counld not be connectd!");

		$title=mysql_query("select * from $table");
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
	}
	
	?>
	</select>
