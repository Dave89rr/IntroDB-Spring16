<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/master.css"/>
		<title>Add a new cameras</title>
	</head>
	<body>
		<h1>New Camera Form</h1>
		<form action="../processing/processingcameras.php" method="post">
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
