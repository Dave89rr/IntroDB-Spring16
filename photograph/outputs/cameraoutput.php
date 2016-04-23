<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
	include("../connection.php");
	$r = mysqli_query($dbc, "SELECT * FROM Cameras");

	while ( $row = mysqli_fetch_array($r))
	{
		echo $row['CameraID']."/".$row['ShotCount']."/".$row['CameraType']."/".$row['Batteries']."/".$row['PrimaryLense'];
		echo "<br>";
	}
mysqli_close($dbc); //always close the connection for security
?>
