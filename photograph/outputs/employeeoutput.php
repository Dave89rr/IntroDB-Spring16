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
    echo "<h1>Employees</h1>";
  	echo "<table border='1' align='center' class='output'>";
  	echo "<tr class='outputrow'>";
  	echo "<th><b>ID</b></th>";
  	echo "<th><b>First Name</b></th>";
    echo "<th><b>Last Name</b></th>";
    echo "<th><b>Address</b></th>";
    echo "<th><b>City</b></th>";
    echo "<th><b>State</b></th>";
    echo "<th><b>ZIP</b></th>";
    echo "<th><b>Phone</b></th>";
    echo "<th><b>Cellphone</b></th>";
    echo "<th><b>Email</b></th>";
  	echo "</tr>";
    $r = mysqli_query($dbc, "SELECT * FROM employees");
    $numrows = mysqli_num_rows($r);

if($numrows != 0){
    while ( $row = mysqli_fetch_array($r))
    {
        echo "<tr class='outputrow'>";
    		echo "<td>".$row['EMPLOYEEID']."</td>";
    		echo "<td>".$row['EMPFIRSTNAME']."</td>";
        echo "<td>".$row['EMPLASTNAME']."</td>";
        echo "<td>".$row['EMPADDRESS']."</td>";
        echo "<td>".$row['EMPCITY']."</td>";
        echo "<td>".$row['EMPSTATE']."</td>";
        echo "<td>".$row['EMPZIP']."</td>";
        echo "<td>".$row['EMPPHONE']."</td>";
        echo "<td>".$row['EMPCELLPHONE']."</td>";
        echo "<td>".$row['EMPEMAIL']."</td>";
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
