<?php

	include("../connection.php");
	$r = mysqli_query($dbc, "SELECT * FROM users");

	while ( $row = mysqli_fetch_array($r))
	{
		echo $row['first_name']."/".$row['email'];
		echo "<br>";
	}
mysqli_close($dbc); //always close the connection for security
?>
