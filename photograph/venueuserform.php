
<html>
<head>
<title>Add a new venue</title>
</head>
<body>
  <h1>New Venue</h1>
  <form action="processingvenue.php" method="post">
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
