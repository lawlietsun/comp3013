<link rel="stylesheet" type="text/css" href="style.css">

<?php

require_once('../db/connection.php');
$owner_id = $_SESSION['mem_id'];

if(count($_POST)>0) 
{
    mysql_query("INSERT INTO circles(owner_id, circles_name)VALUES('$owner_id', '" . $_POST["circles_name"] . "')");
    echo "successful created a circle";
    mysql_close($bd);



}
?>