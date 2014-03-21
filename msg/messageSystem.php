<?php
session_start();
include('../db/connection.php');
?>


<?php

$user_id = $_GET['user_id'];
// echo $user_id;
	// $con = mysqli_connect('localhost', 'root', 'root', 'comp3013') or die(mysql_error());
	// if (isSet($_POST['sendMessage'])) {
		// if (isSet($_POST['to']) && $_POST['to'] != '' && isSet($_POST['from']) && $_POST['from'] != '' && isSet($_POST['message']) && $_POST['message'] != '') {
			$to = $user_id;
			$from = $_SESSION['mem_id'];
			$message = $_POST['message'];
			echo "to = ".$to;
			echo "from = ".$from;
			mysql_query("INSERT INTO messages(message, touser, fromuser) VALUES ('$message', '$to', '$from')") or die(mysql_error());
			// if ($q) {
				// echo 'Message sent.';
			// }
			// else
				// echo 'Failed to send message.';
		// }
	// }
?>


<h1>My Messages:</h1>
<table>
	<tbody>
		<?php
			$user = $_SESSION['mem_id']; //$user = $_SESSION['username'];
			$qu = mysqli_query($con, "SELECT * FROM `messages` WHERE `to`='$to'");
			if (mysqli_num_rows($qu) > 0) {
				while ($row = mysqli_fetch_array($qu)) {
					echo '<tr><td>'.$row["from"].'</td><td>'.$row["message"].'</td></tr>';
				}
			}
		?>
	</tbody>
</table>
