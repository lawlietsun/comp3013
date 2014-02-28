<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/comp3013/style.css">
</head>
<body>
    <div class="login-card">
        <h1>register</h1>
        <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
            <!-- <table> -->
            <tr>
                <td>       
                    <div>
                      <?php 
                      $remarks=$_GET['remarks'];
                      if ($remarks==null and $remarks=="")
                      {
                        echo '';
                    }
                    if ($remarks=='success')
                    {
                        echo 'Registration Success';
                    }
                    ?>  
                </div></td>
            </tr>

            <form>
                <input type="text" name="fname" placeholder="First Name" required="">
                <input type="text" name="lname" placeholder="Last Name" required="">
                <input type="text" name="age" placeholder="Age" required="">
                <input type="email" name="email" placeholder="Username/Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <input type="password" name="repassword" placeholder="Confirm Password" required="">
                <button type="submit">Sign Up </button>
           </form>

           <!-- <tr> -->
           <!-- <td><div align="right"></div></td> -->
           <!-- <td><input name="submit" type="submit" class="login login-submit" value="Sign Up" /></td> -->

           <div class="login-help">
            <a href="/comp3013/index.php">Already had an account</a>
        </div>
        <!-- </tr> -->
    </div>
    <!-- </table> -->
</form>
</body>
</html>