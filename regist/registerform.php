<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>register</title>
</head>
<body>
	<FORM ACTION="register.php" METHOD=get>
		<h1>welcome to the registration page</h1>
		please input the registration details to create an account here<br>
		<table border="2">
			<tr>
				<td>User Name :</td><td><input name="regname" type="text" size"20"></input></td>
			</tr>
			<tr>
				<td>email :</td><td><input name="regemail" type="text" size"20"></input></td>
			</tr>
			<tr>
				<td>password :</td><td><input name="regpass1" type="password" size"20"></input></td>
			</tr>
			<tr>
				<td>retype password :</td><td><input name="regpass2" type="password" size"20"></input></td>
			</tr>
		</table>
		<input type="submit" value="register me!"></input>
	</FORM>
</body>
</html>