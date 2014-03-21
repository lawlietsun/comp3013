<?php
// session_start();

include('../db/connection.php');
include('index.php');

$addto_circles_name = $_GET['addto_circles_name'];
$mem_id = $_SESSION['mem_id'];
$friend_id = $_GET['friend_id'];

// $result = mysql_query("SELECT * FROM friend WHERE mem_id = '$mem_id' and friend_id ='$found_mem_id'");
// $rownumber = mysql_num_rows($result);

// if($rownumber > 0)
// {

// }
// else{
	mysql_query("INSERT INTO circles(owner_id, friend_id, circles_name)VALUES('$mem_id', '$friend_id', '$addto_circles_name')");

	echo "successful add a friend to a circle";

	mysql_close($bd);

// }
?>