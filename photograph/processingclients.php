<?php
include('connection.php');
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

//if values are not empty, proceed to store them in the database
if(!empty($FNAME) && !empty($LNAME) && !empty($ADDRESS) && !empty($CITY) && !empty($ZIP) && !empty($PHONE) && !empty($EMAIL))
{
		mysqli_query($dbc, "INSERT INTO client('FIRSTNAME', 'LASTNAME', 'ADDRESS', 'CITY', 'STATE', 'ZIP', 'PHONE', 'CELLPHONE', 'EMAIL')
		VALUES ('$FNAME', '$LNAME', '$ADDRESS', '$CITY', '$STATE', '$ZIP', '$PHONE', '$CELLPHONE','$REFERAL')");
		echo " row  inserted, everything worked fine!";
		echo "<a href = 'employeepage.html'>Click here to be redirected to the employee Page. </a>";
}
	else{
			echo "ERROR: you left some values in blank!";
		}
	}
	else
	{
	echo "<strong>Please complete the form...</strong>";
}

?>
