<?php
if($_GET["regname"] && $_GET["regemail"] && $_GET["regpass1"] && $_GET["regpass2"] )
{
	if($_GET["regpass1"]==$_GET["regpass2"])
	{
		$servername="localhost";
		$username="root";
		$password="root";
		$conn= mysql_connect($servername,$username,$password)or die(mysql_error());
		mysql_select_db("comp3013",$conn);
		$sql="insert into users (name,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";
		$result=mysql_query($sql,$conn) or die(mysql_error());
		print "<h1>you have registered sucessfully</h1>";

		print "<a href='index.php'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
else print"invaild data";
?>