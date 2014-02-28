<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];
mysql_query("INSERT INTO member(fname, lname, age, email, password)VALUES('$fname', '$lname', '$age', '$email', SHA1($password))");
header("location: index.php?remarks=success");
mysql_close($con);
?>