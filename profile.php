<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/homestyle.css">

</head>
<body>
  <div id="cover">
  </div>

  <div id="header" class="link">
    <ul id="main_menu">
      <li><a href="home.php" title="home">Home</a></li>
      <li class="selected"><a href="profile.php" title="Profile">Profile</a></li>
      <li><a href="friends/index.php" title="Friends">Friends</a></li>
      <li><a href="activity.php" title="activity">Activity</a></li>
      <li><a href="search/index.php" title="search">Search</a></li>
      <li><a href="/index.php" title="logout">Log Out</a></li>
    </ul>
  </div>

  <!-- <div id="container"> -->


  <div class="info_block">
    <h2>Profile</h2>


    <!-- <div style="width: 700px;"> -->
    <form action="update_exec.php" method="post">
      <div class="message">
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
          echo 'Update Success';
        }

        if ( $remarks == 'passwordsincorrect' ) 
        {
          echo 'Passwords inconsistent';
        }
        ?>
      </div>
      <p>First Name</p><input type="text" name="fname" placeholder="<?php echo $_SESSION["fname"]?>" id="fname" required="">
      <p>Last Name</p><input type="text" name="lname" placeholder="<?php echo $_SESSION["lname"]?>" id="lname" required="">
      <p>age</p><input type="text" name="age" placeholder="<?php echo $_SESSION["age"]?>" id="age" required="">
      <p>email (You cannot change this)</p><input type="email" name="email" placeholder="<?php echo $_SESSION["email"]?>" readonly>
      <p>password<p><input type="password" name="creatpassword" placeholder="New Password" required="" id="creatpassword">
        <p>confirm password<p><input type="password" name="confirmpassword" placeholder="New Password again" required="" id="confirmpassword">
          <p></p><button type="submit">Update</button>
        </form>
      </div>

      <!-- </div> -->
    </body>
    </html>



