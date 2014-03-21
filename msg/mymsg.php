<?php
session_start();
?>

<h1>My Messages:</h1>
<table>
	<tbody>
		<?php
			$user = $_SESSION['mem_id']; //$user = $_SESSION['username'];
			$qu = mysqli_query($con, "SELECT * FROM `messages` WHERE `to`='$user'");
			if (mysqli_num_rows($qu) > 0) {
				while ($row = mysqli_fetch_array($qu)) {
					echo '<tr><td>'.$row["from"].'</td><td>'.$row["message"].'</td></tr>';
				}
			}
		?>
	</tbody>
</table>