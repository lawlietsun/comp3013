<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION["mem_id"]);
unset($_SESSION["email"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);

include('login_exec.php');

?>

<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="shortcut icon" href="/logo/logo.png">
    <title>Log-in</title>
</head>
<body>

    <div class="login-card">
        <form name="loginform" action="" method="post">
            <h1>Log-in</h1><br>
            <form>
                <div class="message">
                    <?php 
                    if($message!="") { 
                        echo $message; 
                    } 
                    ?>
                </div>
                <input type="email" name="email" placeholder="Username/Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>

            <div class="login-help">
                <a href="/regist/index.php">Register</a> • <a href="#">Forgot Password</a>
            </div>
        </form>
    </div>
</body>
</html>
