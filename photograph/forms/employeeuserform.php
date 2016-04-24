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
          <td><a href="../logout.php" id="navbutton">Logout</a></td>
        </tr>
      </table>
    </div>
    <br><br>
		<h1> Add a New Employee</h1>
		<form action="../processing/processingemployees.php" method="post">
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
