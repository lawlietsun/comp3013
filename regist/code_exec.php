<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$creatpassword=$_POST['creatpassword'];
$confirmpassword=$_POST['confirmpassword'];

$result = mysql_query("SELECT email FROM member WHERE email = '$email'");
if (mysql_num_rows($result) > 0)
{
	header("location: index.php?remarks=email");
}

else
{
	if ($creatpassword == $confirmpassword)
	{
		$password = SHA1($_POST['creatpassword']);

		mysql_query("INSERT INTO member(fname, lname, age, email, password)VALUES('$fname', '$lname', '$age', '$email', '$password')");
		header("location: index.php?remarks=success");
		mysql_close($con);
	}

	else
	{
		header("location: index.php?remarks=passwordsincorrect");
	}
}
?>
