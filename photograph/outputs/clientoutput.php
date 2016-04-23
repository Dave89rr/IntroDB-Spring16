<?php

    include("../connection.php");
    echo "<br>";
    echo "<h1>Clients</h1>";
  	echo "<table border='1'>";
  	echo "<tr>";
  	echo "<td><b>Client ID</b></td>";
  	echo "<td><b>First Name</b></td>";
    echo "<td><b>Last Name</b></td>";
    echo "<td><b>Address</b></td>";
    echo "<td><b>City</b></td>";
    echo "<td><b>State</b></td>";
    echo "<td><b>ZIP</b></td>";
    echo "<td><b>Phone</b></td>";
    echo "<td><b>Cellphone</b></td>";
    echo "<td><b>Referral</b></td>";
    echo "<td><b>Email</b></td>";
  	echo "</tr>";
    $r = mysqli_query($dbc, "SELECT * FROM employees");


    while ( $row = mysqli_fetch_array($r))
    {
        echo "<tr>";
    		echo "<td>".$row['CLIENTID']."</td>";
    		echo "<td>".$row['EMPFIRSTNAME']."</td>";
        echo "<td>".$row['EMPLASTNAME']."</td>";
        echo "<td>".$row['EMPADDRESS']."</td>";
        echo "<td>".$row['EMPCITY']."</td>";
        echo "<td>".$row['EMPSTATE']."</td>";
        echo "<td>".$row['EMPZIP']."</td>";
        echo "<td>".$row['EMPPHONE']."</td>";
        echo "<td>".$row['EMPCELLPHONE']."</td>";
        echo "<td>".$row['REFERRAL']."</td>";
        echo "<td>".$row['EMPEMAIL']."</td>";
    		echo "</tr>";
        // echo $row['EmployeeID']."/".$row['EmpFirstName']."/".$row['EmpLastName']."/".$row['EmpAdress']."/".$row['EmpCity']."/".$row['EmpState']."/".$row['EmpZip']."/".$row['EmpPhone']."/".$row['EmpCellPhone'];
        // echo "<br>";
    }
mysqli_close($dbc); //always close the connection for security
echo "</table>";
echo "<br><br>";
// echo "database connection closed.";


?>
