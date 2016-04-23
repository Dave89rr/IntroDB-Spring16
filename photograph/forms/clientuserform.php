<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/master.css"/>
		<title>Add a new client</title>
	</head>
	<body>
		<h1>New Client Form</h1>
		<form action="../processing/processingclients.php" method="post">
			<table>
				<tr>
					<td>*First Name:</td><td><input type="text" name="FIRSTNAME" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>*Last Name:</td><td><input type="text" name="LASTNAME" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>*Address:</td><td><input type="text" name= "ADDRESS" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>*City:</td><td><input type="text" name= "CITY" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>State:</td><td><input type="text" name="STATE" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>*ZIP:</td><td><input type="text" name="ZIP" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>*Phone:</td><td><input type="text" name="PHONE" size="20" maxlength="50"/></td>
				</tr>
				<tr>
					<td>CellPhone:</td><td><input type="text" name="CELLPHONE" size="20" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Referral:</td><td><input type="text" name="REFERRAL" size="20" maxlength="100"/></td>
				</tr>
				<tr>
					<td>*Email:</td><td><input type="text" name="EMAIL" size="20" maxlength="100"/></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" name="submit" value="Submit" /></td>
				</tr>
		</form>
	</body>
</html>
