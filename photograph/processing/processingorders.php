<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$CliID = $_POST['CLIENTID'];
	$EmpID = $_POST['EMPLOYEEID'];
	$PackID = $_POST['PACKAGEID'];
	$VenID = $_POST['VENUEID'];
	$CamID = $_POST['CAMERAID'];
	$EvType = $_POST['EVENTTYPE'];
	$EvDate = $_POST['EVENTDATE'];
	$Acc = $_POST['ACCESSORIES'];
	$SpecReq = $_POST['SPECIALREQUESTS'];

	//if values are not empty, proceed to store them in the database
	if(!empty($SCount) && !empty($PriLense))
	{
		mysqli_query($dbc, "INSERT INTO ORDERS(CLIENTID, EMPLOYEEID, PACKAGEID, VENUEID, CAMERAID, EVENTTYPE, EVENTDATE, ACCESSORIES, SPECIALREQUESTS)
		VALUES ('$CliID', '$EmpID', '$PackID', '$VenID', '$CamID', '$EvType', '$EvDate', '$Acc', '$SpecReq')");
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
