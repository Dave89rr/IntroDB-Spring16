<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$FNAME = $_POST['FIRSTNAME'];
$LNAME = $_POST['LASTNAME'];
$ADDRESS = $_POST['ADDRESS'];
$CITY = $_POST['CITY'];
$STATE = $_POST['STATE'];
$ZIP = $_POST['ZIP'];
$PHONE = $_POST['PHONE'];
$CELLPHONE = $_POST['CELLPHONE'];
$EMAIL = $_POST['EMAIL'];
$REFERRAL = $_POST['REFERRAL'];

//if values are not empty, proceed to store them in the database
if(!empty($FNAME) && !empty($LNAME) && !empty($ADDRESS) && !empty($CITY) && !empty($ZIP) && !empty($PHONE) && !empty($EMAIL))
{
		mysqli_query($dbc, "INSERT INTO clients(FIRSTNAME, LASTNAME, ADDRESS, CITY, STATE, ZIP, PHONE, CELLPHONE, EMAIL, REFERRAL)
		VALUES ('$FNAME', '$LNAME', '$ADDRESS', '$CITY', '$STATE', '$ZIP', '$PHONE', '$CELLPHONE', '$EMAIL','$REFERRAL')");
		echo "<meta http-equiv='refresh' content='0;url=../employeepage.php'/>";
}
	else{
			echo "<h1 align='center'>ERROR: You left a required field blank!</h1>";
			echo "<meta http-equiv='refresh' content='2;url=../forms/clientuserform.php'/>";
		}
	}
	else
	{
	echo "<strong>Please complete the form...</strong>";
}

?>
