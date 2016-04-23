<?php

	include("../connection.php");
	$r = mysqli_query($dbc, "SELECT * FROM Cameras");

	while ( $row = mysqli_fetch_array($r))
	{
		echo $row['CameraID']."/".$row['ShotCount']."/".$row['CameraType']."/".$row['Batteries']."/".$row['PrimaryLense'];
		echo "<br>";
	}
mysqli_close($dbc); //always close the connection for security
?>
