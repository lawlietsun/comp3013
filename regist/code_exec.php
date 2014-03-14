<?php
session_start();

$host = "eu-cdbr-azure-west-b.cloudapp.net";
$user = "b0be1b17ba7186";
$pwd = "62ebd3b9";
$db = "comp301A7bEecu9x";
    // Connect to database.
try {
	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
	die(var_dump($e));
}
    // Insert registration info
if(!empty($_POST)) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$creatpassword=$_POST['creatpassword'];
	$confirmpassword=$_POST['confirmpassword'];
	
	$result = mysql_query("SELECT email FROM member WHERE email = '$email'");
	$rownumber = mysql_num_rows($result);
	if ($rownumber > 0)
	{
		if ($creatpassword == $confirmpassword)
		{
			try 
			{
				$password = sha1($_POST['creatpassword']);
       	 	// Insert data
				$sql_insert = "INSERT INTO member(fname, lname, age, email, password) VALUES (?,?,?,?,?)";
				$stmt = $conn->prepare($sql_insert);
				$stmt->bindValue(1, $fname);
				$stmt->bindValue(2, $lname);
				$stmt->bindValue(3, $age);
				$stmt->bindValue(4, $email);
				$stmt->bindValue(5, $password);
				$stmt->execute();
			}
			catch(Exception $e) {
				die(var_dump($e));
			}
			header("location: index.php?remarks=success");
		}
		else
		{
			header("location: index.php?remarks=passwordsincorrect");
		}
	}
	else
	{
		header("location: index.php?remarks=email");
	}
	
}
?>
