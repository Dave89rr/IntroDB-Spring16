<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
	include("../connection.php");
  echo   "<table class='navbar'>
            <tr>
              <td><a href='../employeepage.php' id='navbutton'>Home</a></td>
              <td><a href='../logout.php' id='navbutton'>Logout</a></td>
            </tr>
          </table>";
  echo "<link rel='stylesheet' type='text/css' href='../css/master.css'/>";
  echo "<h1>Cameras</h1>";
	echo "<table border='1' align='center'>";
	echo "<tr>";
	echo "<td><b>ID</b></td>";
	echo "<td><b>Shot Count</b></td>";
  echo "<td><b>Type</b></td>";
  echo "<td><b>Batteries</b></td>";
  echo "<td><b>Main Lense</b></td>";
  echo "</tr>";
	$r = mysqli_query($dbc, "SELECT * FROM Cameras");
  $numrows = mysqli_num_rows($r);

if($numrows != 0){
	while ( $row = mysqli_fetch_array($r))
	{
    echo "</tr>";
		echo "<td>".$row['CAMERAID']."</td>";
    echo "<td>".$row['SHOTCOUNT']."</td>";
    echo "<td>".$row['CAMERATYPE']."</td>";
    echo "<td>".$row['BATTERIES']."</td>";
    echo "<td>".$row['PRIMARYLENSE']."</td>";
		echo "</tr>";
	}
} else {
  echo "</table>";
  echo "<h1>";
  echo "No Data Found!";
  echo "</h1>";
  echo "<meta http-equiv='refresh' content='2;url=../employeepage.php'/>";
}
mysqli_close($dbc); //always close the connection for security
echo "</table>";
?>
