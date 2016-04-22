
<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// $EID = $_POST['EMPLOYEEID'];
$EFN = $_POST['EMPFIRSTNAME'];
$ELN = $_POST['EMPLASTNAME'];
$EA = $_POST['EMPADDRESS'];
$EC = $_POST['EMPCITY'];
$ES = $_POST['EMPSTATE'];
$EZ = $_POST['EMPZIP'];
$EP = $_POST['EMPPHONE'];
$ECP = $_POST['EMPCELLPHONE'];
$EEM = $_POST['EMPEMAIL'];
$EPAS = $_POST['EMPPASS'];

//if values are not empty, proceed to store them in the database
if(!empty($EFN) && !empty($ELN) && !empty($EA) && !empty($EZ) && !empty($ECP) && !empty($EEM) && !empty($EPAS))
{
        mysqli_query($dbc, "INSERT INTO EMPLOYEES(EMPFIRSTNAME, EMPLASTNAME, EMPADDRESS, EMPCITY,  EMPSTATE, EMPZIP, EMPPHONE, EMPCELLPHONE, EMPEMAIL, EMPPASS )
        VALUES ('$EFN', '$ELN', '$EA', '$EC','$ES','$EZ','$EP','$ECP', '$EEM', '$EPAS')");
        echo " row  inserted, everything worked fine!";
        echo "<a href = 'employeepage.html'>Click here to be redirected to the employee Page. </a>";
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
