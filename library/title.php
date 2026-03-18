<?php
	function title_database($table,$id,$id_num)
	{
		mysql_connect("localhost","root","") or die("Your server counld not be connectd!");
		mysql_select_db("lib") or die("Your database counld not be connectd!");

		$title=mysql_query("select * from $table where $id=$id_num");
	
		while($show=mysql_fetch_array($title))
		{
			echo $show[1];

		}
	}
	
	

?>	