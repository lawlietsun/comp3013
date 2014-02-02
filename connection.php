<?php
// $mysql_hostname = "localhost";
// $mysql_user = "root";
// $mysql_password = "root";
// $mysql_database = "comp3013";


$mysql_hostname = "eu-cdbr-azure-west-b.cloudapp.net";
$mysql_user = "bc303ee8a90e6f";
$mysql_password = "21ca7bfd";
$mysql_database = "yuesunuAKTN5vkXx";


$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
