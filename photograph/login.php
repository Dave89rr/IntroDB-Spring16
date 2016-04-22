<?php
error_reporting(0);
include("connection.php");
//grab values email and password from login form
$login_email = $_POST['login_email']; //match with the name in the login form
$login_password = $_POST['login_password'];
//create the query and number of rows returned from the query
$query = mysqli_query($dbc, "SELECT * FROM Employees WHERE EMPEMAIL='".$login_email."'");
$numrows = mysqli_num_rows($query);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
//create condition to check if there is 1 row with that email
if($numrows != 0){

//grab the email and password from that row returned before
	while($row = mysqli_fetch_array($query)){

		$dbemail = $row['EMPEMAIL']; //must matching with the field name in your database table;
		$dbpass = $row['EMPPASS'];
		$dbfirstname = $row['EMPFIRSTNAME'];

		}
//create condition to check if email and password are equal to the returned row

	if($login_email==$dbemail){
		if($login_password==$dbpass){
			echo "     ";

			echo "Welcome ".$dbfirstname."!";
			echo "<a href = 'employeepage.html'>Click here to be redirected to the Employees Page. </a>";

		}else{
			echo "your password is incorrect!";

		}
	}else{

		echo "your email is incorrect!";

	}

}else{

echo "Invalid credentials! If you are not registered please register bellow...";

}
}else{

	echo "Please Login...";

}
?>
