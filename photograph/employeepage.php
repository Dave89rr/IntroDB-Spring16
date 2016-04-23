<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
echo "<div class='relative'>Welcome, ";
echo $_SESSION["Username"];
echo "</div>";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/master.css"/>
  <title>Photographers4U</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
</head>
<body>
  <h1>Employees Page</h1>
  <table class="navbar">
    <tr>
      <td><a href="employeepage.php" id="navbutton">Home</a></td>
      <td><a href="logout.php" id="navbutton">Logout</a></td>
    </tr>
  </table>

  <br><br>
    <table align="center">
      <tr>
        <td><h3>Cameras</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="outputs/cameraoutput.php" class="button button1">Camera List</a></td>
        <td><a href="forms/cameraform.php" class="button">New Camera</a></td>
      </tr>
      <tr>
        <td><h3>Venues</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="outputs/venueoutput.php" class="button button1">Venue List</a></td>
        <td><a href="forms/venueuserform.php" class="button">New Venue</a></td>
      </tr>
      <tr>
        <td><h3>Clients</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href ="outputs/clientoutput.php" class="button button1">Client List</a></td>
        <td><a href ="forms/clientuserform.php" class="button" class="button">New Client</a></td>
      </tr>
      <tr>
        <td><h3>Employees</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="outputs/employeeoutput.php" class="button button1">Employee List</a></td>
        <td><a href="forms/employeeuserform.php" class="button">New Employee</a></td>
      </tr>
    </table>
  </body>
</html>
