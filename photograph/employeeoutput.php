<?php

    include("connection.php");
    $r = mysqli_query($dbc, "SELECT * FROM employees");
	echo "test.";
    
    while ( $row = mysqli_fetch_array($r))
    {
        echo $row['EmployeeID']."/".$row['EmpFirstName']."/".$row['EmpLastName']."/".$row['EmpAdress']."/".$row['EmpCity']."/".$row['EmpState']."/".$row['EmpZip']."/".$row['EmpPhone']."/".$row['EmpCellPhone'];
        echo "<br>";
    }
mysqli_close($dbc); //always close the connection for security
echo "database connection closed.";


?>