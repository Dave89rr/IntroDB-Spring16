<html>
<head>
<title>Add a new cameras</title>
</head>
<body>
	<h1>New Client Form</h1>
	<form action="processingcameras.php" method="post">
		<table>
			<tr>
				<td>*ShotCount:</td><td><input type="text" name="SHOTCOUNT" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>CameraType:</td><td><input type="text" name="CAMERATYPE" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>Batteries:</td><td><input type="text" name= "BATTERIES" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td>*PrimaryLense:</td><td><input type="text" name= "PRIMARYLENSE" size="20" maxlength="50" /></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" value="Submit" /></td>
			</tr>
	</form>
</body>
</html>