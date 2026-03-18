<?php
	function select($drop_name,$select_name,$table,$result)
	{
		?>
			<select name="<?php echo $drop_name;?>" id="<?php echo $drop_name;?>" style="  border:none;">
			<option value=""><h3>Select <?php echo $select_name; ?></h3></option>
			<?php
			mysql_connect("localhost","root","") or die("Your server counld not be connectd!");
			mysql_select_db("lib") or die("Your database counld not be connectd!");
			
			$title=mysql_query("select * from $table" );
	
		while($show=mysql_fetch_array($title))
		{
			?>
				<option value="<?php echo  $show[0]; ?>"><?php echo  $show[$result]; ?></option>
			
		<?php
		}
		?>
			</select>
	<?php
	}
	

			
?>