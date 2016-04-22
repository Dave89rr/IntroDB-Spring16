<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$cellphone = $_POST['cellphone'];
$referal = $_POST['referal'];

//if values are not empty, proceed to store them in the database
if(!empty($fname) && !empty($lname) && !empty($address) && !empty($city) && !empty($state) && !empty($zip) && !empty($phone) && !empty($cellphone) && !empty($referal))
{
		mysqli_query($dbc, "INSERT INTO client('CLIENTID', 'FirstName', 'LastName', 'address', 'state', 'city', 'ZIP', 'Phone', 'cellPhone', 'Referal')
		VALUES ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$phone', '$cellphone','$referal')");
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
