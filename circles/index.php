<link rel="stylesheet" type="text/css" href="../css/homestyle.css">


<?php
//Start session
session_start();
//Unset the variables stored in session
// unset($_SESSION["mem_id"]);
// // unset($_SESSION["email"]);
// unset($_SESSION["fname"]);
// unset($_SESSION["lname"]);

include('../db/connection.php');
include('circles_exec.php');
?>

<html lang="en-US">
<head>

	<title>Circles</title>
</head>
<body>
	<div id="header" class="link">
		<ul id="main_menu">
			<li><a href="/home.php" title="home">Home</a></li>
			<li><a href="/profile/index.php" title="Profile">Profile</a></li>
			<li><a href="/friends/index.php" title="Friends">Friends</a></li>
			<li><a href="/activity.php" title="activity">Activity</a></li>
			<li class="selected"><a href="index.php" title="search">Search</a></li>
			<li><a href="/index.php" title="logout">Log Out</a></li>
		</ul>

	</div>
</br>
<h1>Circles</h1>

<form name="circleform" action="" method="post"> 
	<form>
		<input type="text" name="circles_name" placeholder="CircleName" required="">
		<button type="submit">Create A Circle</button>
	</form>


	<div class='friend'>
		<div class="container">
			<div class="row">
				<div class="span4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>My Circles</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$owner_id = $_SESSION['mem_id'];
						// echo $mem_id;
							$query=mysql_query("SELECT * from circles where owner_id ='$owner_id'")or die(mysql_error());
							$rownumber = mysql_num_rows($query);
							if($rownumber > 0)
							{
								while($row=mysql_fetch_array($query)){
									?>
									<tr>
										<td>
											<?php 
											echo $row['circles_name'];
											$target_owner_id = $rownumber['owner_id'];
											$target_circles_name = $rownumber['circles_name'];
											echo "<a href='circles_friends.php?target_circles_name=$target_circles_name'>  View friends</a>";
											echo "<a href='../friends/index.php?target_owner_id=$target_owner_id'>   Add friends</a>"."<br />";
											?>

										</td>
									</tr>
									<?php 
								} 
							}
							else{
								echo "You dont have any circle. Please create a circle.";
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>



</form>
</body>
</html>