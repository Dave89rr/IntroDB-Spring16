
<html>
<head>
<title>Add a new venue</title>
</head>
<body>
  <h1>New Venue</h1>
  <form action="processingvenues.php" method="post">
    <table>
      <tr>
        <td>*Name:</td><td><input type="text" name="VENUENAME" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>*Address:</td><td><input type="text" name="VA" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>City:</td><td><input type="text" name="VC" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>*State:</td><td><input type="text" name= "VS" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>*ZIP:</td><td><input type="text" name= "VZ" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>*Number:</td><td><input type="text" name="VNUM" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>Contact Name:</td><td><input type="text" name="VCN" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td>*Type:</td><td><input type="text" name="VT" size="20" maxlength="50" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</body>
</html>
