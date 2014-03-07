<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>

<html lang="en-US">
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
                    <input type="email" name="email" placeholder="Username/Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <!-- <input type="submit" name="" class="login login-submit" value="login"> -->
                    <button type="submit">Login</button>
                </form>

                <div class="login-help">
                    <a href="/regist/index.php">Register</a> • <a href="#">Forgot Password</a>
                </div>
            </form>
        </div>
    </body>
</html>