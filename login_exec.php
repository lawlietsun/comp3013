<?php

// session_start();

require_once('db/connection.php');

$message="";
if(count($_POST)>0) {
    $result = mysql_query("SELECT * FROM member WHERE email='" . $_POST["email"] . "' and password = '". sha1($_POST["password"]) ."'");
    $row  = mysql_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["mem_id"] = $row[mem_id];
        $_SESSION["email"] = $row[email];
        $_SESSION["fname"] = $row[fname];
        $_SESSION["lname"] = $row[lname];
        $_SESSION["age"] = $row[age];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["mem_id"])) {
    header("Location:home.php");
}
?>
