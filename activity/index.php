<?php
include('act_exec.php');
?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/homestyle.css">
</head>
<body>
  <div id="cover">
  </div>

  <div id="header" class="link">
    <ul id="main_menu">
      <li><a href="/home.php" title="home">Home</a></li>
      <li><a href="/profile/index.php" title="Profile">Profile</a></li>
      <li><a href="/friends/index.php" title="Friends">Friends</a></li>
      <li class="selected"><a href="index.php" title="activity">Activity</a></li>
      <li><a href="/circles/index.php" title="circles">Circles</a></li>
      <li><a href="/search/index.php" title="search">Search</a></li>
      <li><a href="/index.php" title="logout">Log Out</a></li>
    </ul>

  </div>

  <div class="container">


    <div class="info_block">
      <h1>Activity</h1>
      <form name="reg" action="" method="post" >
        <input type="text" name="activity" placeholder="Post Some Here" id="activity" required="" style="width: 500px;">
        <button type="submit">Post</button>
      </form>
      <?php
      // session_start();

      include('../db/connection.php');

      // $friend_id=$_SESSION["mem_id"];

      // mysql_query("INSERT INTO actvivies(friend_id, activity)VALUES('$friend_id', '$activity')");

      // mysql_close($bd);
      $myid = $_SESSION["mem_id"];
      $query = mysql_query("SELECT * FROM activities where friend_id = $myid ORDER BY id DESC");
      echo "my posts:"."</br>";
      while($row=mysql_fetch_array($query)){
            echo "<br/>".$row['activity']."<br />";
            echo "<br/>".$row['date']."   ".$row['time']."<br />";
      } 
      ?>
      <div style="width: 700px;">

      </div>

    </div>
  </body>
  </html>



