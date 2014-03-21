<?php
// session_start();

include('../db/connection.php');
include('index.php');

$addto_circles_name = $_GET['addto_circles_name'];
$mem_id = $_SESSION['mem_id'];
$friend_id = $_GET['friend_id'];


$result = mysql_query("SELECT * FROM circles WHERE friend_id = '$friend_id' and circles_name ='$addto_circles_name'");
$rownumber = mysql_num_rows($result);

if($rownumber > 0)
{
    echo 'this friend is already in this circle.';
}
else{
	mysql_query("INSERT INTO circles(owner_id, friend_id, circles_name)VALUES('$mem_id', '$friend_id', '$addto_circles_name')");

	echo "successful add a friend to a circle";

	mysql_close($bd);

}
?>