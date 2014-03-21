<?php
session_start();

include('../db/connection.php');

$friend_id=$_SESSION["mem_id"];
$activity=$_POST['activity'];

if($activity != null){

mysql_query("INSERT into activities(friend_id, activity, time, date) VALUES('$friend_id', '$activity', CURTIME(), CURDATE())");

mysql_close($bd);
}


?>