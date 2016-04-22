
<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$VA = $_POST['VenueAddress'];
$VC = $_POST['VenueCity'];
$VS = $_POST['VenueState'];
$VZ = $_POST['VenueZIP'];
$VN = $_POST['VenueNumber'];
$VCN = $_POST['VenueContactName'];
$VP = $_POST['VenueType'];

//if values are not empty, proceed to store them in the database
if(!empty($VA) && !empty($VC) && !empty($VS) && !empty($VZ) && !empty($VN) && !empty($VCN) && !empty($VP))
{
        mysqli_query($dbc, "INSERT INTO users(VenueAddress, VenueCity, VenueState, VenueZIP,  VenueNumber, VenueContactName, VenueType ) 
        VALUES ('$VA', '$VC', '$VS', '$VZ','$VN','$VCN','$VP')");
        echo " row  inserted, everything worked fine!";    
        echo "<a href = 'login.html'>Click here to be redirected to the Login Page. </a>"; 
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
