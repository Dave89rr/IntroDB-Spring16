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
		<title>Add a new client</title>
	</head>
	<body>
    <div class="navbg">
      <a href="../employeepage.php"><img class="logohorizontal" src="../img/apphotohoriz.png"></a>
      <table class="navbar">
        <tr>
          <td><a href="../employeepage.php" id="navbutton">Home</a></td>
          <td><a href="../historyperson.php" id="navbutton">History</a></td>
          <td><a href="../payment.php" id="navbutton">Bill</a></td>
          <td><a href="forms/combinedform.php" id="navbutton">+Event</a></td>
          <td><a href="../logout.php" id="navbutton">Logout</a></td>
        </tr>
      </table>
    </div>
    <br><br>
		<h1>Client Information</h1>
		<form action="../processing/processingcombined.php" method="post" class="info">
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
					<td>Referral?:</td><td><input type="text" name="REFERRAL" size="20" maxlength="100"/></td>
				</tr>
				<tr>
					<td>*Email:</td><td><input type="text" name="EMAIL" size="20" maxlength="100"/></td>
				</tr>
        <tr>
          <td>*Venue Name:</td><td><input type="text" name="VENUENAME" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Venue Address:</td><td><input type="text" name="VENUEADDRESS" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>City:</td><td><input type="text" name="VENUECITY" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*State:</td><td><input type="text" name= "VENUESTATE" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*ZIP:</td><td><input type="text" name= "VENUEZIP" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Number:</td><td><input type="text" name="VENUENUMBER" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>Contact Name:</td><td><input type="text" name="VENUECONTACTNAME" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Type:</td><td><input type="text" name="VENUETYPE" size="20" maxlength="50" /></td>
        </tr>
				<tr>
					<td></td><td><input type="submit" name="submit" value="Submit" /></td>
				</tr>
		</form>
	</body>
</html>
