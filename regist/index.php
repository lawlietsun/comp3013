<html lang="en-US">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>Register</title>
</head>
<body>
  <div class="login-card">
    <h1>Register</h1>
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
        <input type="text" name="fname" placeholder="First Name" id="fname" required="">
        <input type="text" name="lname" placeholder="Last Name" id="lname" required="">
        <input type="text" name="age" placeholder="Age" id="age" required="">
        <input type="email" name="email" placeholder="Username/Email" id="email" required="">
        <input type="password" name="creatpassword" placeholder="Creat A Password" id="creatpassword" required="">
        <input type="password" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword" required="">
        <button type="submit">Sign Up </button>
      </form>

      <div class="login-help">
        <a href="/index.php">Already had an account</a>
      </div>
    </form>
  </div>
</body>
</html>
