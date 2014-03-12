<html lang="en-US">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Register</title>
</head>
<body>
  <div class="login-card">
    <h1>register</h1>
    <form name="reg" action="code_exec.php" method="post">
      <tr>
        <td>       
          <div>
            <?php 
 
            $remarks = "";
            if ( isset($_GET['remarks']) ) 
            {
              $remarks = $_GET['remarks'];
            }

            if ($remarks == 'email')
            {
              echo 'this email has been registrated';
            }

            if ( $remarks == 'success' ) 
            {
              echo 'Registration Success';
            }

            if ( $remarks == 'passwordsincorrect' ) 
            {
              echo 'Passwords inconsistent';
            }

            ?>  
          </div>
        </td>
      </tr>

      <form>
        <input type="text" name="fname" placeholder="First Name" required="">
        <input type="text" name="lname" placeholder="Last Name" required="">
        <input type="text" name="age" placeholder="Age" required="">
        <input type="email" name="email" placeholder="Username/Email" required="">
        <input type="password" name="creatpassword" placeholder="Creat A Password" required="">
        <input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
        <button type="submit">Sign Up </button>
      </form>

      <div class="login-help">
        <a href="/test/index.php">Already had an account</a>
      </div>
    </form>
  </div>
</body>
</html>
