<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=login.html'/>";
    die('Access denied!');
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <title>Photographers4U</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- /*<style type="text/css">

    p {font-family:Arial;font-size:14px;font-style:normal;font-weight:normal;letter-spacing:2px;color:006600;}
  </style>*/ -->
</head>
<body>
  <h1>Employees Page</h1>
  <p align="center"> Welcome <?php $_SESSION["Username"];?></p>
    <table align="center">
      <tr>
        <td><h3>Cameras</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="cameralist.php" class="button">Camera List</a></td>
        <td><a href="cameraform.php" class="button">New Camera</a></td>
      </tr>
      <tr>
        <td><h3>Venues</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="venueoutput.php" class="button">Venue List</a></td>
        <td><a href="venueuserform.php" class="button">New Venue</a></td>
      </tr>
      <tr>
        <td><h3>Clients</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href ="clientoutput.php" class="button">Client List</a></td>
        <td><a href ="clientuserform.php" class="button" class="button">New Client</a></td>
      </tr>
      <tr>
        <td><h3>Employees</h3></td>
        <td></td>
      </tr>
      <tr>
        <td><a href="employeeoutput.php" class="button">Employee List</a></td>
        <td><a href="employeeuserform.php" class="button">New Employee</a></td>
      </tr>
    </table>
  </body>
</html>
