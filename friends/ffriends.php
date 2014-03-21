
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- <link rel="stylesheet" type="text/css" href="../css/homestyle.css"> -->

<?php
// session_start();

include('index.php');

$user_id = $_GET['user_id'];
// echo $user_id;
?>
<div class="info_block">
<div class='friendinfo'>
	<?php
	$query=mysql_query("SELECT * from member where mem_id in (select friend_id from friend where mem_id = $user_id)")or die(mysql_error());
	while($row=mysql_fetch_array($query)){

				echo $row['fname'];
				echo " ";
				echo $row['lname']."<br />";
	
	} 
	?>
</div>
</div>