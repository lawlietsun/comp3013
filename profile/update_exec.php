<?php
// session_start();

// $host = "eu-cdbr-azure-west-b.cloudapp.net";
// $user = "b0be1b17ba7186";
// $pwd = "62ebd3b9";
// $db = "comp301A7bEecu9x";
//     // Connect to database.
// try {
// 	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
// 	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// }
// catch(Exception $e){
// 	die(var_dump($e));
// }
//     // Insert registration info
// if(!empty($_POST)) 
// {
// 	$fname = $_POST['fname'];
// 	$lname = $_POST['lname'];
// 	$email = $_POST['email'];
// 	$age = $_POST['age'];
// 	$creatpassword=$_POST['creatpassword'];
// 	$confirmpassword=$_POST['confirmpassword'];
// 	/*

// 	我加的东西2

// 	*/

// 	$result = mysql_query("SELECT email FROM member WHERE email = '$email'");
// 	$rownumber = mysql_num_rows($result);
// 	if ($rownumber > 0)
// 	{
// 		header("location: index.php?remarks=email");
// 	}
// 	else
// 	{
// 		if ($creatpassword == $confirmpassword)
// 		{
// 			try 
// 			{
// 				$password = sha1($_POST['creatpassword']);
//        	 	// Insert data
// 				// $sql_insert = "UPDATE member(fname, lname, age, email, password) VALUES (?,?,?,?,?)";
// 				$usrid = $_SESSION["mem_id"];
// 				$sql_insert = "UPDATE member SET fname=$fname, lname=$lname, age=$age, email=$email, password=$creatpassword WHERE mem_id=$usrid";

// // 				UPDATE table_name
// // SET column1=value1,column2=value2,...
// // WHERE some_column=some_value;


// 				$stmt = $conn->prepare($sql_insert);
// 				// $stmt->bindValue(1, $fname);
// 				// $stmt->bindValue(2, $lname);
// 				// $stmt->bindValue(3, $age);
// 				// $stmt->bindValue(4, $email);
// 				// $stmt->bindValue(5, $password);
// 				$stmt->execute();
// 			}
// 			catch(Exception $e) {
// 				die(var_dump($e));
// 			}
// 			header("location: index.php?remarks=success");
// 		}
// 		else
// 		{
// 			header("location: index.php?remarks=passwordsincorrect");
// 		}
// 	}

// }


session_start();
include('../db/connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$creatpassword=$_POST['creatpassword'];
$confirmpassword=$_POST['confirmpassword'];
$usrid = $_SESSION["mem_id"];

if($creatpassword != $confirmpassword){
	header("location: index.php?remarks=passwordsincorrect");
}
else{
	$password = sha1($_POST['creatpassword']);
	mysql_query("UPDATE member SET fname='$fname', lname='$lname', age='$age', password='$password' WHERE mem_id=$usrid");
	header("location: index.php?remarks=success");
}

mysql_close($bd);







?>
