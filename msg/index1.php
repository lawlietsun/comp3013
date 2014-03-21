<?php
// session_start();
$user_id = $_GET['user_id'];
// echo $user_id;
include('messageSystem.php');
?>

<html>
	<head></head>
	<body>
		<h1>Send Message:</h1>
		<form action='' method='POST'>
		<table>
			<tbody>
				<!-- <tr>
					<td>To: </td><td><input type='text' name='to' /></td>
				</tr>
				<tr>
					<td>From: </td><td><input type='text' name='from' /></td>
				</tr> -->
				<tr>
					<td>Message: </td><td><input type='text' name='message' /></td>
				</tr>
				<tr>
					<td></td><td><input type='submit' value='Create Task' name='sendMessage' /></td>
				</tr>
			</tbody>
		</table>
		</form>
	</body>
</html>