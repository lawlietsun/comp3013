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
            echo $rownumber['lname']."<br />";
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