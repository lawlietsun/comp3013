<?php
//Start session
/*
session_start();

//Include database connection details
require_once('connection.php');

//Array to store validation errors
$errmsg_arr = array();

//Validation error flag
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
{
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}

//Sanitize the POST values
$email = clean($_POST['email']);
$password = clean($_POST['password']);

//Input Validations
if ($email == '') {
    $errmsg_arr[] = 'email missing';
    $errflag = true;
}
if ($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

//If there are input validations, redirect back to the login form
if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: index.php");
    exit();
}

//Create query
$qry = "SELECT * FROM member WHERE email='$email' AND password='$password'";
$result = mysql_query($qry);

//Check whether the query was successful or not
if ($result) {
    if (mysql_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $member = mysql_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['email'];
        $_SESSION['SESS_LAST_NAME'] = $member['password'];
        session_write_close();
        header("location: home.php");
        exit();
    } else {
        //Login failed
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: index.php");
            exit();
        }
    }
} else {
    die("Query failed");
}*/
session_start();

require_once('connection.php');

$message="";
if(count($_POST)>0) {
    // $conn = mysql_connect("localhost","root","root");
    // mysql_select_db("comp3013",$conn);
    $result = mysql_query("SELECT * FROM member WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"] ."'");
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