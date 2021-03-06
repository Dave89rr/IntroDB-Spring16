<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
	include("../connection.php");
  echo   "<div class='navbg'>
    <a href='../employeepage.php'><img class='logohorizontal' src='../img/apphotohoriz.png'></a>
    <table class='navbar'>
      <tr>
        <td><a href='../employeepage.php' id='navbutton'>Home</a></td>
        <td><a href='../historyperson.php' id='navbutton'>History</a></td>
        <td><a href='../payment.php' id='navbutton'>Bill</a></td>
        <td><a href='forms/combinedform.php' id='navbutton'>+Event</a></td>
        <td><a href='../logout.php' id='navbutton'>Logout</a></td>
      </tr>
    </table>
  </div>
  <br><br>";
  echo "<link rel='stylesheet' type='text/css' href='../css/master.css'/>";
  echo "<h1>Orders</h1>";
	echo "<table border='1' align='center' class='output'>";
	echo "<tr class='outputrow'>";
	echo "<th><b>ID</b></th>";
	echo "<th><b>Client ID</b></th>";
  echo "<th><b>Employee ID</b></th>";
  echo "<th><b>Package ID</b></th>";
  echo "<th><b>Venue ID</b></th>";
  echo "<th><b>Camera ID</b></th>";
  echo "<th><b>Event Type</b></th>";
  echo "<th><b>Event Date</b></th>";
  echo "<th><b>Accessories</b></th>";
  echo "<th><b>Special Requests</b></th>";
  echo "</tr>";
	$r = mysqli_query($dbc, "SELECT * FROM Orders");
  $numrows = mysqli_num_rows($r);

if($numrows != 0){
	while ( $row = mysqli_fetch_array($r))
	{
    echo "<tr class='outputrow'>";
		echo "<td>".$row['CAMERAID']."</td>";
    echo "<td>".$row['CLIENTID']."</td>";
    echo "<td>".$row['EMPLOYEEID']."</td>";
    echo "<td>".$row['PACKAGEID']."</td>";
    echo "<td>".$row['VENUEID']."</td>";
    echo "<td>".$row['CAMERAID']."</td>";
    echo "<td>".$row['EVENTTYPE']."</td>";
    echo "<td>".$row['EVENTDATE']."</td>";
    echo "<td>".$row['ACCESSORIES']."</td>";
    echo "<td>".$row['SPECIALREQUESTS']."</td>";
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
