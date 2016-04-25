<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$OrderHist = $_POST['ORDERID'];

	//if values are not empty, proceed to store them in the database
	if(!empty($OrderHist))
	{
		mysqli_query($dbc, "INSERT INTO CAMERAS(SHOTCOUNT, CAMERATYPE, BATTERIES, PRIMARYLENSE)
		VALUES ('$SCount', '$CamType', '$NumBat', '$PriLense')");
		echo "<meta http-equiv='refresh' content='0;url=../employeepage.php'/>";
	}
	else
	{
		echo "ERROR: you left some values in blank!";
	}
}
else
{
	echo "<strong>Please complete the form...</strong>";
}
?>
