<link rel="stylesheet" type="text/css" href="style.css">

<?php

require_once('../db/connection.php');
include('index.php');
$target_circles_name = $_GET['target_circles_name'];

if(count($_POST)>0) 
{
    $result = mysql_query("SELECT * FROM member WHERE mem_id in (select friend_id from circles where circles_name = '$target_circles_name')");
    $rownumber = mysql_num_rows($result);

    ?>
    <div class=userlist>
        <?php

        if($rownumber > 0)
        {
            while($rownumber = mysql_fetch_array($result))
            {
                echo $rownumber['fname'];
                echo " ";
                echo $rownumber['lname']."<br />";
            }
        }
        else
        {
            echo "You dont have any friend in this circle.";
        }
        ?>
    </div>
    <?php
}
?>