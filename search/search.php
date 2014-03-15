<?php
if(isset($_POST['completedsearch']))
{
	$term = $_POST['query'];
	$mysql = mysql_connect("localhost","root","root");
	mysql_select_db("comp3013");
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