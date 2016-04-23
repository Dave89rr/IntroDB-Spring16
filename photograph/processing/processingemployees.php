<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $EFN = $_POST['EMPFIRSTNAME'];
  $ELN = $_POST['EMPLASTNAME'];
  $EA = $_POST['EMPADDRESS'];
  $EC = $_POST['EMPCITY'];
  $ES = $_POST['EMPSTATE'];
  $EZ = $_POST['EMPZIP'];
  $EP = $_POST['EMPPHONE'];
  $ECP = $_POST['EMPCELLPHONE'];
  $EEM = $_POST['EMPEMAIL'];
  $EPAS = $_POST['EMPPASS'];

  //if values are not empty, proceed to store them in the database
  if(!empty($EFN) && !empty($ELN) && !empty($EA) && !empty($EZ) && !empty($ECP) && !empty($EEM) && !empty($EPAS))
  {
    mysqli_query($dbc, "INSERT INTO EMPLOYEES(EMPFIRSTNAME, EMPLASTNAME, EMPADDRESS, EMPCITY,  EMPSTATE, EMPZIP, EMPPHONE, EMPCELLPHONE, EMPEMAIL, EMPPASS )
    VALUES ('$EFN', '$ELN', '$EA', '$EC','$ES','$EZ','$EP','$ECP', '$EEM', '$EPAS')");
    echo "<meta http-equiv='refresh' content='0;url=../employeepage.php'/>";
  }
  else
  {
    echo "ERROR: you left some values in blank!";
  }
}
else
{
  echo "<strong>Please complete the form...</strong>";
}
?>
