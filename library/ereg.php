<?php 

	if(eregi("^[a-z]{4,25}$",$uname))
	{

		
	}
	else
	{
	header("location:index.php");
	$_SESSION["name"]="a-z A-Z allowed";
	}
	header("location:view.php");
	}
	echo  "</tr>
  <tr>
    <td>last name</td>";
	if(eregi("^[a-z]{4,25}$",$lname))
	{
	echo  "<td>".$lname."</td>";
	}
	else
	{
		header("location:index.php");
	}
    echo  "</tr> 
    <tr>
    <td>cell</td>";
	if(eregi("^[0-9]{4}$",$net) && eregi("^[0-9]{7}$",$subs))
	{
	echo  "<td>".$net."-".$subs."</td>";
	}
	else
	{
		header("location:index.php");
		$_SESSION["num"]="0-9 are allowed";
	}
    
 echo "</tr>
    <tr>
    <td>e-mail</td>";
    if(eregi("^[a-z0-9._]{4,15}@[a-z]{2,5}.[a-z]{3}$",$email))
	{
	echo  "<td>".$email."</td>";
	}
	else
	{
		header("location:index.php");
		$_SESSION["email"]="exp_1.23@exp.com are allowed";
	}
  echo "</tr> 
    <tr>
    <td>address</td>";
        if(eregi("^[a-z0-9]{4,25}$",$address))
	{
	echo  "<td>".$address."</td>";
	}
	else
	{
		header("location:index.php");
		$_SESSION["add"]="a-z0-9.\- are allowed";
	}

	
?>