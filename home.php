<?php
session_start();
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

    <div id="cover">

        <div id="header" class="link">
          <ul id="main_menu">
            <li class="selected"><a href="home.php" title="home">Home</a></li>
            <li><a href="friends.php" title="Friends">Friends</a></li>
            <li><a href="activity.php" title="activity">Activity</a></li>
            <li><a href="search.php" title="search">Search</a></li>
            <li><a href="/index.php" title="logout">Log Out</a></li>
        </ul>

    </div>
    <div class="allinfo">
        <div class="head">             
            <a href="/setpic.php"><img src="<?php echo "upload/{$_SESSION['mem_id']}.png" ?>" width="230" height="230" alt="no image found"/></a>
        </div>

        <div class="info">
            <h>FirstName:</h>
            <?php 
            echo $_SESSION["fname"] 
            ?>

            <h>LastName:</h>
            <?php 
            echo $_SESSION["lname"] 
            ?>
            <br/>
            <h>Gender:</h>
            <?php 
            echo $_SESSION["gender"] 
            ?>
            <br/>
            <h>Age:</h>
            <?php 
            echo $_SESSION["age"] 
            ?>
        </div>
    </div>
</div>
</body>
</html>
