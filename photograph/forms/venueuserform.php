<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    echo "<meta http-equiv='refresh' content='1;url=../login.html'/>";
    echo "<h1 align='center'>Access Denied!</h1>";
    die('');
}
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/master.css"/>
    <title>Add a new venue</title>
  </head>
  <body>
    <div class="navbg">
      <a href="../employeepage.php"><img class="logohorizontal" src="../img/apphotohoriz.png"></a>
      <table class="navbar">
        <tr>
          <td><a href="../employeepage.php" id="navbutton">Home</a></td>
          <td><a href="../findperson.php" id="navbutton">Find</a></td>
          <td><a href="../payment.php" id="navbutton">Bill</a></td>
          <td><a href="../logout.php" id="navbutton">Logout</a></td>
        </tr>
      </table>
    </div>
    <br><br>
    <h1>New Venue Information</h1>
    <form action="../processing/processingvenue.php" method="post" class="info">
      <table>
        <tr>
          <td>*Name:</td><td><input type="text" name="VENUENAME" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Address:</td><td><input type="text" name="VENUEADDRESS" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>City:</td><td><input type="text" name="VENUECITY" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*State:</td><td><input type="text" name= "VENUESTATE" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*ZIP:</td><td><input type="text" name= "VENUEZIP" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Number:</td><td><input type="text" name="VENUENUMBER" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>Contact Name:</td><td><input type="text" name="VENUECONTACTNAME" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td>*Type:</td><td><input type="text" name="VENUETYPE" size="20" maxlength="50" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
