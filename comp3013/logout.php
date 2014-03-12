<?php
session_start();
unset($_SESSION["mem_id"]);
unset($_SESSION["email"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
header("Location:index.php");
?>