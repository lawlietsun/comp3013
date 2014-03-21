<link rel="stylesheet" type="text/css" href="style.css">

<?php
require_once('../db/connection.php');
include('index.php');

$target_circles_name = $_GET['target_circles_name'];

    $result = mysql_query("SELECT * FROM member WHERE mem_id in (select friend_id from circles where circles_name = '$target_circles_name')");
    $rownumber = mysql_num_rows($result);

    ?>
    <div class="userlist">
        <h1> Friends in this circle</h1>
        <?php

        if($rownumber > 0)
        {
            while($row = mysql_fetch_array($result))
            {
                echo $row['fname'];
                echo " ";
                echo $row['lname']."<br />";
            }
        }
        else
        {
            echo "You dont have any friend in this circle.";
        }
        ?>
    </div>
    <?php

?>