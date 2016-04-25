<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
echo "<br><br><h1>Welcome, ";
echo $_SESSION["Username"];
echo "</h1>";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/master.css"/>
  <title>Photographers4U</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
</head>
<body>
  <div class="navbg">
    <a href="employeepage.php"><img class="logohorizontal" src="img/apphotohoriz.png"></a>
    <table class="navbar">
      <tr>
        <td><a href="employeepage.php" id="navbutton">Home</a></td>
        <td><a href="findperson.php" id="navbutton">Find</a></td>
        <td><a href="payment.php" id="navbutton">Bill</a></td>
        <td><a href="forms/combinedform.php" id="navbutton">+Event</a></td>
        <td><a href="logout.php" id="navbutton">Logout</a></td>
      </tr>
    </table>
  </div>
    <table align="center">
      <!-- <tr>
        <td><h3>Cameras</h3></td>
        <td></td>
      </tr> -->
      <tr>
        <td class="title"><h2>Cameras</h2></td>
        <td><a href="outputs/cameraoutput.php" class="button button1">Camera List</a></td>
        <td><a href="forms/cameraform.php" class="button">New Camera</a></td>
      </tr>
      <!-- <tr>
        <td><h3>Venues</h3></td>
        <td></td>
      </tr> -->
      <tr>
        <td class="title"><h2>Venues</h2></td>
        <td><a href="outputs/venueoutput.php" class="button button1">Venue List</a></td>
        <td><a href="forms/venueuserform.php" class="button">New Venue</a></td>
      </tr>
      <!-- <tr>
        <td><h3>Clients</h3></td>
        <td></td>
      </tr> -->
      <tr>
        <td class="title"><h2>Clients</h2></td>
        <td><a href ="outputs/clientoutput.php" class="button button1">Client List</a></td>
        <td><a href ="forms/clientuserform.php" class="button" class="button">New Client</a></td>
      </tr>
      <!-- <tr>
        <td><h3>Employees</h3></td>
        <td></td>
      </tr> -->
      <tr>
        <td class="title"><h2>Employees</h2></td>
        <td><a href="outputs/employeeoutput.php" class="button button1">Employee List</a></td>
        <td><a href="forms/employeeuserform.php" class="button">New Employee</a></td>
      </tr>
      <!-- <tr>
        <td><h3>Orders</h3></td>
        <td></td>
      </tr> -->
      <tr>
        <td class="title"><h2>Orders</h2></td>
        <td><a href="outputs/orderoutput.php" class="button button1">Order List</a></td>
        <td><a href="forms/orderform.php" class="button">New Order</a></td>
      </tr>
    </table>
  </body>
</html>
