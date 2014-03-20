<?php
if(isset($_POST['completedsearch']))
{
	$term = $_POST['query'];
	$mysql = mysql_connect("eu-cdbr-azure-west-b.cloudapp.net","b0be1b17ba7186","62ebd3b9");
	mysql_select_db("comp301A7bEecu9x");
    $qu = mysql_query("SELECT * FROM member WHERE fname LIKE '%{$term}%' OR lname LIKE '%{$term}%' OR age LIKE '%{$term}%'"); //selects the row that contains ANYTHING like the submitted string
    while($row = mysql_fetch_array($qu))
    {

    	echo "<tr><td>";  
    	echo $row['fname'];
    	echo "</td>";
    	echo "<td>";
    	echo $row['lname'];
    	echo "</td>";
    	echo "<td>";
    	echo $row['age'];
    	echo "</td><td>";
    }
}
?>