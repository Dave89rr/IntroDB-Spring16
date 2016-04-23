<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['pw'];

//if values are not empty, proceed to store them in the database
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password))
{
		mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, phone, pw )
		VALUES ('$fname', '$lname', '$email', '$phone','$password')");
		echo " row  inserted, everything worked fine!";
		echo "<a href = '../login.html'>Click here to be redirected to the Login Page. </a>";
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
