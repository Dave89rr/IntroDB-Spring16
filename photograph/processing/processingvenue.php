
<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$VA = $_POST['VENUEADDRESS'];
$VC = $_POST['VENUECITY'];
$VS = $_POST['VENUESTATE'];
$VZ = $_POST['VENUEZIP'];
$VN = $_POST['VENUENUMBER'];
$VCN = $_POST['VENUECONTACTNAME'];
$VP = $_POST['VENUETYPE'];

//if values are not empty, proceed to store them in the database
if(!empty($VA) && !empty($VS) && !empty($VZ) && !empty($VN) && !empty($VP))
{
        mysqli_query($dbc, "INSERT INTO VENUES(VENUEADDRESS, VENUECITY, VENUESTATE, VENUEZIP,  VENUENUMBER, VENUECONTACTNAME, VENUETYPE )
        VALUES ('$VA', '$VC', '$VS', '$VZ','$VN','$VCN','$VP')");
        echo " row  inserted, everything worked fine!";
        echo "<a href = '../employeepage.php'>Click here to be redirected to the Employee Page. </a>";
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
