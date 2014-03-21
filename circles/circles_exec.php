<link rel="stylesheet" type="text/css" href="style.css">

<?php

include('../db/connection.php');
$owner_id = $_SESSION['mem_id'];

if(count($_POST)>0) 
{
	$query=mysql_query("SELECT * from circles where owner_id ='$owner_id' and circles_name = '" . $_POST["circles_name"] . "'")or die(mysql_error());
	$rownumber = mysql_num_rows($query);
	if($rownumber > 0)
	{
		echo "circle name has been used";
	}
	else
	{
		mysql_query("INSERT INTO circles(owner_id, circles_name)VALUES('$owner_id', '" . $_POST["circles_name"] . "')");
		echo "successful created a circle";
		mysql_close($bd);
	}
}
?>