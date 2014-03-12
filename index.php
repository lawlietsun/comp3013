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
<<<<<<< HEAD
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
=======
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="login-card">
            <form name="loginform" action="login_exec.php" method="post">
                <?php
                if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) 
                {
                    echo '<ul class="err">';
                    foreach ($_SESSION['ERRMSG_ARR'] as $msg) 
                    {
                        echo '<li>', $msg, '</li>';
                    }
                    echo '</ul>';
                    unset($_SESSION['ERRMSG_ARR']);
                }
                ?>

                <h1>Log-in</h1><br>
                <form>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="" class="login login-submit" value="login">
                </form>

                <div class="login-help">
                    <a href="#">Register</a> • <a href="#">Forgot Password</a>
                </div>
            </form>
        </div>
    </body>
>>>>>>> develop
</html>