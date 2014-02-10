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
        <!-- <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
            <tr>
                <td colspan="2">
                    <!the code bellow is used to display the message of the input validation-->

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


                <!-- </td>
            </tr>
            <tr>
                <td width="116">
                    <div align="right">Username</div>
                </td>
                <td width="177"><input name="username" type="text"/></td>
            </tr>
            <tr>
                <td>
                    <div align="right">Password</div>
                </td>
                <td><input name="password" type="password"/></td>
            </tr>
            <tr>
                <td>
                    <div align="right"></div>
                </td>
                <td><input name="" type="submit" value="login"/></td>
            </tr>
        </table> -->


        <!-- ============================================================================================================ -->

        <h1>Log-in</h1><br>
        <form>
          <input type="text" name="username" placeholder="Username">
          <input type="passwordrrrrrrrrrrrrrr" name="password" placeholder="Password">
          <input type="submit" name="" class="login login-submit" value="login">
      </form>

      <div class="login-help">
          <a href="#">Register</a> • <a href="#">Forgot Password</a>
      </div>

  </form>

</div>
</body>

</html>
