<?php
session_start();
include('../db/connection.php');
?>

<h1>My Messages:</h1>
<table>
	<tbody>
		<?php
			$user = $_SESSION['mem_id']; //$user = $_SESSION['username'];
			// echo "$user";
			// $qu = mysql_query("SELECT * from messages where touser = $user");
			$qu = mysql_query("SELECT fname, lname, message from member, messages where mem_id = (SELECT fromuser from messages where touser = $user)");
			// if (mysql_num_rows($qu) > 0) {
				while ($row = mysql_fetch_array($qu)) {
					echo $row["fname"];

					echo " ".$row["lname"]." has sent you : </br>";


					echo $row["message"];
				}
			// }
		?>
	</tbody>
</table>