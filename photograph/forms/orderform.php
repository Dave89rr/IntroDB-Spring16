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
		<title>Add a new Employee</title>
	</head>
	<body>
    <div class="navbg">
      <a href="../employeepage.php"><img class="logohorizontal" src="../img/apphotohoriz.png"></a>
      <table class="navbar">
        <tr>
          <td><a href="../employeepage.php" id="navbutton">Home</a></td>
          <td><a href="../findperson.php" id="navbutton">Find</a></td>
          <td><a href="../payment.php" id="navbutton">Bill</a></td>
          <td><a href="forms/combinedform.php" id="navbutton">+Event</a></td>
          <td><a href="../logout.php" id="navbutton">Logout</a></td>
        </tr>
      </table>
    </div>
    <br><br>
		<h1>New Employee Information</h1>
		<form action="../processing/processingorders.php" method="post" class="info">
			<table>
				<tr>
					<td>*ClientID:</td><td><input type="text" name="CLIENTID" size="20" maxlength="10" /></td>
				</tr>
				<tr>
					<td>*EmployeeID:</td><td><input type="text" name= "EMPLOYEEID" size="20" maxlength="10" /></td>
				</tr>
				<tr>
					<td>*PackageID:</td><td><input type="text" name= "PACKAGEID" size="20" maxlength="10" /></td>
				</tr>
				<tr>
					<td>*VenueID:</td><td><input type="text" name="VENUEID" size="20" maxlength="10" /></td>
				</tr>
				<tr>
					<td>*CameraID:</td><td><input type="text" name="CAMERAID" size="20" maxlength="10" /></td>
				</tr>
				<tr>
					<td>Event Type:</td><td><input type="text" name="EVENTTYPE" size="20" maxlength="25" /></td>
				</tr>
        <tr>
          <td>*Event Date:</td><td><input type="text" name="EVENTDATE" size="20" maxlength="10" /></td>
        </tr>
        <tr>
					<td>Accessories:,</td><td><input type="text" name="ACCESSORIES" size="20" maxlength="255" /></td>
				</tr>
				<tr>
					<td>Special Requests:</td><td><input type="text" name="SPECIALREQUESTS" size="20" maxlength="180" /></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" name="submit" value="Submit" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>
