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
      <li><a href="profile.php" title="Profile">Profile</a></li>
      <li><a href="friends.php" title="Friends">Friends</a></li>
      <li><a href="activity.php" title="activity">Activity</a></li>
      <li class="selected"><a href="search.php" title="search">Search</a></li>
      <li><a href="/index.php" title="logout">Log Out</a></li>
    </ul>

  </div>

  <div id="container">

    <div class="info_block">
      <h2>search</h2>
      <div style="width: 700px;">

        <?php

        require_once('db/connection.php');
        $result = mysql_query("SELECT fname, lname from member");

        echo "All Users";

        echo $result;

        ?>

      </div>


    </div>
  </body>
  </html>



