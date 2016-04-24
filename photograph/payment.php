<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
	include("connection.php");
  echo   "<div class='navbg'>
    <a href='employeepage.php'><img class='logohorizontal' src='img/apphotohoriz.png'></a>
    <table class='navbar'>
      <tr>
        <td><a href='employeepage.php' id='navbutton'>Home</a></td>
        <td><a href='findperson.php' id='navbutton'>Find</a></td>
        <td><a href='payment.php' id='navbutton'>Bill</a></td>
        <td><a href='logout.php' id='navbutton'>Logout</a></td>
      </tr>
    </table>
  </div>
  <br><br>";
  echo "<link rel='stylesheet' type='text/css' href='css/master.css'/>";

  ?>
