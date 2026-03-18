
<?php
include("dbcon.php");

$title=mysql_query("select * from title where title_id=1");

while($show=mysql_fetch_array($title))
{
	echo $show[1];

}

?>	