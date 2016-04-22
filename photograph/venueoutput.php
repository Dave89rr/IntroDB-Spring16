<?php

    include("connection.php");
    $r = mysqli_query($dbc, "SELECT * FROM Venues");
    
    while ( $row = mysqli_fetch_array($r))
    {
        echo $row['VenueID']."/".$row['VenueAddress']."/".$row['VenueCity']."/".$row['VenueState']."/".$row['VenueZip']."/".$row['VenueNumber']."/".$row['VenueContactName']."/".$row['VenueType']; 
        echo "<br>";
    }
mysqli_close($dbc); //always close the connection for security
echo "database connection closed.";


?>