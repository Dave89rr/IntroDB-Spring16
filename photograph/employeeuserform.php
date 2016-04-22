<html>
<head>
<title>Add a new Employee</title>
</head>
<body>
	<h1> Add a New Employee</h1>
	<form action="processingemployees.php" method="post">
		<!-- <p>EmployeeID: <input type="text" name="EMPLOYEEID" size="20" maxlength="50" /></p> -->
		<table>
			<tr>
				<td>*First Name:</td><td><input type="text" name="EMPFIRSTNAME" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*Last Name:</td><td><input type="text" name="EMPLASTNAME" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*Address:</td><td><input type="text" name= "EMPADDRESS" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>City:</td><td><input type="text" name= "EMPCITY" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>State:</td><td><input type="text" name="EMPSTATE" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*ZIP:</td><td><input type="text" name="EMPZIP" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>Phone:</td><td><input type="text" name="EMPPHONE" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*CellPhone:</td><td><input type="text" name="EMPCELLPHONE" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*Email:,</td><td><input type="text" name="EMPEMAIL" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*Password:</td><td><input type="password" name="EMPPASS" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
