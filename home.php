<?php
session_start();
include('db/connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    <title>
        <?php
        echo $_SESSION["fname"];
        echo " "; 
        echo $_SESSION["lname"];
        echo "'s Home Page"
        ?>
    </title>
</head>
<body>
    <div>

        <div id="header" class="link">
            <ul id="main_menu">
                <li class="selected"><a href="home.php" title="home">Home</a></li>
                <li><a href="profile/index.php" title="Profile">Profile</a></li>
                <li><a href="friends/index.php" title="Friends">Friends</a></li>
                <li><a href="activity/index.php" title="activity">Activity</a></li>
                <li><a href="circles/index.php" title="circles">Circles</a></li>
                <li><a href="msg/index.php" title="msg">My Message</a></li>
                <li><a href="search/index.php" title="search">Search</a></li>
                <li><a href="/index.php" title="logout">Log Out</a></li>
            </ul>
        </div>
        <div class="allinfo">
            <div class="pic">
                <a href="/setpic.php"><img src="<?php echo "upload/{$_SESSION['mem_id']}.png" ?>" width="230" height="230" alt="no image found"/></a>
            </div>
            <div class="info">
                <!-- <h>FirstName:</h> -->
                <?php 
                // echo $_SESSION["fname"] 
                ?>

                <!-- <h>LastName:</h> -->
                <?php 
                // echo $_SESSION["lname"] 
                ?>
                <!-- <br/> -->
                <!-- <h>Gender:</h> -->
                <?php 
                // echo $_SESSION["gender"] 
                ?>
                <!-- <br/> -->
                <!-- <h>Age:</h> -->
                <?php 
                // echo $_SESSION["age"] 
                ?>


                <?php
                    $myid = $_SESSION['mem_id'];
            $q = mysql_query("SELECT * from member where mem_id = $myid")or die(mysql_error());
            while($row=mysql_fetch_array($q)){
                ?>
                <!-- <img src="<?php echo "upload/{$row['mem_id']}.png" ?>" width="230" height="230" alt="no image found"/> -->
                <?php
                // echo "</br>";
                echo "FirstName : ".$row['fname'];
                echo "</br>";
                echo "LastName : ".$row['lname'];
                echo "</br>";
                echo "Age : ".$row['age'];
            }
                ?>
            </div>
        </div>
        <div class="activity">
            <p>Friends Activities:</p>
            <?php

            $myid = $_SESSION['mem_id'];
            $q = mysql_query("SELECT friend_id, activity, fname, lname, time, date from activities, member where friend_id in (SELECT friend_id from friend where mem_id = $myid) and friend_id = mem_id ORDER BY id DESC")or die(mysql_error());
            while($row=mysql_fetch_array($q)){
                ?>
                <img src="<?php echo "upload/{$row['friend_id']}.png" ?>" width="50" height="50" alt="no image found"/>
                <?php
                echo "</br>";
                echo $row['fname'];
                echo " ";
                echo $row['lname'];
                echo " : ";
                echo $row['activity'];
                echo "<br> posted at ";
                echo $row['date']."  ".$row['time'];
                echo "</br>";
                echo "</br>";
                echo "</br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
