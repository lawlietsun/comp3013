<?php
//Start session
session_start();
//Unset the variables stored in session
// unset($_SESSION["mem_id"]);
// // unset($_SESSION["email"]);
// unset($_SESSION["fname"]);
// unset($_SESSION["lname"]);

// include('login_exec.php');

?>

<html lang="en-US">
<head>
    <!--     <meta charset="utf-8"> -->
<!--     <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="shortcut icon" href="/logo/logo.png"> -->
    <title>Search Friends</title>
</head>
<body>
    <h1>Search Friends</h1>

    <form name="searchform" action="search_exec.php" method="post"> 
      <form>
        <input type="text" name="name" placeholder="name" required="">
        <button type="submit">Search Friends</button>
    </form>
    <?php 

    $remarks = "";
    if ( isset($_GET['remarks']) ) 
    {
      $remarks = $_GET['remarks'];
  }

  if ($remarks == 'match')
  {
    echo 'results';
  }

if ( $remarks == 'unmatch' ) 
{
    echo 'Not Found';
}
?> 
</form>
</body>
</html>

