
<?php
// session_start();

include('../db/connection.php');
include('index.php');

// $friend_id = $_GET['friend_id'];
$mem_id = $_SESSION['mem_id'];

$data = mysql_query("SELECT * FROM circles WHERE owner_id = '$mem_id'");
while($datarow=mysql_fetch_array($data))
{
	$circles_name = $datarow['circles_name'];
	$owner_id = $datarow['owner_id'];
}

$result = mysql_query("SELECT * FROM circles WHERE owner_id = '$owner_id' group by circles_name");
$rownumber = mysql_num_rows($result);
if($rownumber > 0){
	while($row=mysql_fetch_array($result)){
		echo $row['circles_name'];
		$owner_id = $row['circles_name'];
		// $addto_circles_name = $row['owner_id'];
		echo "<a href='add_exec.php?addto_circles_name=$addto_circles_name&friend_id=$_GET[friend_id]'>  Add</a>";
		
		
	}
}
else{
	echo 'you dont have any circle, please create a circle.';
		
	echo "</br>";
}

// $result = mysql_query("SELECT * FROM circles WHERE friend_id = '$friend_id' and circles_name ='$circles_name'");
// $rownumber = mysql_num_rows($result);

// if($rownumber > 0)
// {
// 			echo "this friend already in this circle";
// }
// else{
// 		mysql_query("INSERT INTO circles(friend_id)VALUES('$friend_id')");
// 		echo "successful created a circle";
// 		mysql_close($bd);

// }
?>