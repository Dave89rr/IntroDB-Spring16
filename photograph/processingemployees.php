
<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$EID = $_POST['EmployeeID'];
$EFN = $_POST['EmpFirstName'];
$ELN = $_POST['EmpLastName'];
$EA = $_POST['EmpAddress'];
$EC = $_POST['EmpCity'];
$ES = $_POST['EmpState'];
$EZ = $_POST['EmpZIP'];
$EP = $_POST['EmpPhone'];
$ECP = $_POST['EmpCellPhone'];

//if values are not empty, proceed to store them in the database
if(!empty($EID) && !empty($EFN) && !empty($ELN) && !empty($EA) && !empty($EC) && !empty($ES) && !empty($EZ) && !empty($EP) && !empty($ECP))
{
        mysqli_query($dbc, "INSERT INTO employees(EmployeeID, EmpFirstName, EmpLastName, EmpAddress, EmpCity,  EmpState, EmpZIP, EmpPhone, EmpCellPhone )
        VALUES ('$EID', '$EFN', '$ELN', '$EA', '$EC','$ES','$EZ','$EP','$ECP',)");
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
