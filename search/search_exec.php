<link rel="stylesheet" type="text/css" href="style.css">

<?php
// session_start();
require_once('../db/connection.php');

// $message="";
if(count($_POST)>0) 
{
    $result = mysql_query("SELECT * FROM member WHERE fname LIKE '%" . $_POST["name"] . "%' OR lname LIKE '%" . $_POST["name"] . "%'");
    $rownumber = mysql_num_rows($result);
    ?>
    <div class=userlist>
        <?php
        if($rownumber > 0)
        {
        // header("Location: index.php?remarks=match");
            while($rownumber = mysql_fetch_array($result))
            {
                echo $rownumber['fname'];
                echo " ";
                echo $rownumber['lname'];

                $found_mem_id = $rownumber['mem_id'];
                $mem_id = $_SESSION['mem_id'];

                $result1 = mysql_query("SELECT * FROM friend WHERE mem_id = '$mem_id' and friend_id ='$found_mem_id'");
                $rownumber1 = mysql_num_rows($result1);

                if($rownumber1 > 0)
                {
                echo ''."<br />";
                }
                else
                {
                echo "<a href='search_addfriends.php?found_mem_id=$found_mem_id'>     Add a new friend</a>"."<br />";
                }
            }
        }
        else
        {
        // header("Location: index.php?remarks=unmatch");
            echo "not found";
        }
        ?>
    </div>
    <?php
}
?>