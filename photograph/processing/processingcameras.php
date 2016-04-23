<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$SCount = $_POST['SHOTCOUNT'];
$CamType = $_POST['CAMERATYPE'];
$NumBat = $_POST['BATTERIES'];
$PriLense = $_POST['PRIMARYLENSE'];

//if values are not empty, proceed to store them in the database
if(!empty($SCount) && !empty($PriLense))
{
		mysqli_query($dbc, "INSERT INTO CAMERAS('CAMERAID', 'SHOTCOUNT', 'CAMERATYPE', 'BATTERIES', 'PRIMARYLENSE')
		VALUES ('$SCount', '$CamType', '$NumBat', '$PriLense')");
		echo " row  inserted, everything worked fine!";
		echo "<a href = '../employeepage.html'>Click here to be redirected to the employee Page. </a>";
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
