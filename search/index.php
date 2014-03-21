<link rel="stylesheet" type="text/css" href="../css/homestyle.css">


<?php
//Start session
session_start();
//Unset the variables stored in session
// unset($_SESSION["mem_id"]);
// // unset($_SESSION["email"]);
// unset($_SESSION["fname"]);
// unset($_SESSION["lname"]);

include('search_exec.php');

?>

<html lang="en-US">
<head>
  <!--     <meta charset="utf-8"> -->
<!--     <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="shortcut icon" href="/logo/logo.png"> -->
  <title>Search Friends</title>
</head>
<body>
  <div id="header" class="link">
    <ul id="main_menu">
      <li><a href="/home.php" title="home">Home</a></li>
      <li><a href="/profile/index.php" title="Profile">Profile</a></li>
      <li><a href="/friends/index.php" title="Friends">Friends</a></li>
      <li><a href="/activity/index.php" title="activity">Activity</a></li>
      <li class="selected"><a href="index.php" title="search">Search</a></li>
      <li><a href="/index.php" title="logout">Log Out</a></li>
    </ul>

  </div>
</br>
<h1>Search Friends</h1>

<form name="searchform" action="" method="post"> 
  <form>
    <input type="text" name="name" placeholder="name" required="">
    <button type="submit">Search Friends</button>
  </form>
  <?php 

  // $remarks = "";
  // if ( isset($_GET['remarks']) ) 
  // {
  //   $remarks = $_GET['remarks'];
  // }

  // if ($remarks == 'match')
  // {
  //   echo 'results';
  // }

  // if ( $remarks == 'unmatch' ) 
  // {
  //   echo 'Not Found';
  // }
  ?> 
</form>
</body>
</html>

