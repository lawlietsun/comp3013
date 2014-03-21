
<?php
// session_start();

include('../db/connection.php');
include('index.php');

$found_mem_id = $_GET['found_mem_id'];
$mem_id = $_SESSION['mem_id'];

// $result = mysql_query("SELECT * FROM friend WHERE mem_id = '$mem_id' and friend_id ='$found_mem_id'");
// $rownumber = mysql_num_rows($result);

// if($rownumber > 0)
// {

// }
// else{
	mysql_query("INSERT INTO friend(mem_id, friend_id)VALUES('$mem_id', '$found_mem_id')");
	mysql_query("INSERT INTO friend(mem_id, friend_id)VALUES('$found_mem_id', '$mem_id')");

	echo "successful add a friend";

	mysql_close($bd);

// }
?>