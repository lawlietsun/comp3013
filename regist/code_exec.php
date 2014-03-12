<?php
session_start();
include('db/connection.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$creatpassword=$_POST['creatpassword'];
$confirmpassword=$_POST['confirmpassword'];

if ($creatpassword == $confirmpassword)
{
	$password = SHA1($_POST['creatpassword']);

	mysql_query("INSERT INTO member(fname, lname, age, email, password)VALUES('$fname', '$lname', '$age', '$email', '$password')");
	header("location: index.php?remarks=success");
	mysql_close($bd);
}

else
{
	header("location: index.php?remarks=incorrect");
}
?>