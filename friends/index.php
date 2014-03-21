<html>
<link rel="stylesheet" type="text/css" href="../css/homestyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
session_start();
include('../db/connection.php');
?>
<body>
	<div id="cover">
		<div id="header" class="link">
			<ul id="main_menu">
				<li><a href="/home.php" title="home">Home</a></li>
				<li><a href="/profile/index.php" title="Profile">Profile</a></li>
				<li class="selected"><a href="index.php" title="Friends">Friends</a></li>
				<li><a href="/activity/index.php" title="activity">Activity</a></li>
				<li><a href="/circles/index.php" title="circles">Circles</a></li>
				<li><a href="/search/index.php" title="search">Search</a></li>
				<li><a href="/index.php" title="logout">Log Out</a></li>
			</ul>
		</div>
	</div>
<!-- 	<br>
	<br> -->
	<!-- <div class='friend'> -->
	<!-- <div class="container"> -->
	<div class="info_block">
		<div class="row">
			<!-- <div class="span4"> -->
			<!-- <table class="table table-bordered"> -->
			<h1>My friends</h1>
			<!-- <tbody> -->
			<?php
			$mem_id = $_SESSION['mem_id'];

						// echo $mem_id;
			$query=mysql_query("SELECT * from member where mem_id in (select friend_id from friend where mem_id = $mem_id)")or die(mysql_error());
			while($row=mysql_fetch_array($query)){

				echo $row['fname'];
				echo " ";
				echo $row['lname'];
				$friend_id = $row['mem_id'];
									// echo $friend_id;
				$user_id = $friend_id;
				echo "<a href='ffriends.php?user_id=$user_id'>  View friends</a>";			
				echo "<a href='addtocircle.php?friend_id=$friend_id'>  Add to a circle</a>";
				echo "</br>";
				?>

				Message:<input type='text' name='message' />

				<?php
										// echo "</br>";
				echo "<a href='../msg/index.php?user_id=$user_id'>  Sent message</a>";
				echo "</br></br>";

			} 
			?>
			<!-- </tbody> -->
			<!-- </table> -->
			<!-- </div> -->

			<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
</div>
</body>
</html>