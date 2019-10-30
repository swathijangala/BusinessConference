<?php

//Create connection
$con = mysql_connect(':mysql', 'test2', '123');   //'mysql.default_host', 'mysql_user', 'mysql_password'

//Must create 'test'@'localhost user from terminal window 'sudo mysql' --- no password for 'test', so password field left blank
//Must grant 'test'@localhost' access to write to Tables as follows
//mysql> grant all on CIT647StudentsConcertsProfiles.* to 'test'@'localhost;
//
//check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}
echo "Connected successfully. ";


//select database
mysql_select_db("CIT647StudentsConcertsProfiles", $con);

//Create Random Unique ID for RowNum field in Database Table
$pattern = "1234567890";
$ID = $pattern{rand(0,10)};
for($i = 1; $i < 10; $i++)
{
    $ID .= $pattern{rand(0,10)};
}

// sql to create test table
$sql = "INSERT INTO CIT647StudentsConcertProfilesTable1 (ID, FirstName, LastName, Email_ID, PhoneNumber, Country, State, Zipcode, SelectEvent1, SelectEvent2, SelectEvent3, SelectEvent4, SelectEvent5, SelectEvent6, SelectEvent7, SelectEvent8) VALUES ('$ID', '$_POST[FirstName]','$_POST[LastName]','$_POST[Email_ID]','$_POST[PhoneNumber]' ,'$_POST[Country]' ,'$_POST[state]' ,'$_POST[Zipcode]' ,'$_POST[SelectEvent1]' ,'$_POST[SelectEvent2]' ,'$_POST[SelectEvent3]' ,'$_POST[SelectEvent4]','$_POST[SelectEvent5]' ,'$_POST[SelectEvent6]' ,'$_POST[SelectEvent7]' ,'$_POST[SelectEvent8]')"; 
  
  // Store from names in variables
  $First = $_POST['FirstName'];
  $Last = $_POST['LastName'];
  $Email_ID = $_POST['Email_ID'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $Country = $_POST['Country'];
  $State = $_POST['State'];
  $Zipcode = $_POST['Zipcode'];
  $SelectEvent1 = $_POST['SelectEvent1'];
  $SelectEvent2 = $_POST['SelectEvent2'];
  $SelectEvent3 = $_POST['SelectEvent3'];
  $SelectEvent4 = $_POST['SelectEvent4'];
  $SelectEvent5 = $_POST['SelectEvent5'];
  $SelectEvent6 = $_POST['SelectEvent6'];
  $SelectEvent7 = $_POST['SelectEvent7'];
  $SelectEvent8 = $_POST['SelectEvent8'];

  
if (mysql_query($sql, $con)){
  echo "Records added successfully.";
} else {
  echo "ERROR: Not able to execute $sql. " .mysql_error($con);
}


// Close the connection
mysql_close($con);
/*
 * To change this template use Tools | Templates.
 */
?>

<br><center><h1>We've received your information.</h1></center>
<br><br>
<center>
Thank you for submitting your information for the concert.<br>
Make sure to path a copy of the following information for your records,<br>
including the following confirmation ID which will be used to print<br>
a ticket for you when you arrive at the ticket booth.<br>
<br>
Your ticket confirmation number is as follows:<br>
<br>

<?php
  
  echo "Confirmation Number: " . $ID . "<br>";
  echo "FirstName: " . $First . "<br>";
  echo "LastName: " . $Last . "<br>";
  echo "Email_ID: " . $Email_ID . "<br>";
  echo "PhoneNumber: " .$PhoneNumber . "<br>";
  echo "Country: " . $Country . "<br>";
  echo "State: " . $State . "<br>";
  echo "Zipcode: " . $Zipcode . "<br>";
  echo "Day: " . $Day . "<br>";
  echo "SelectEvent1: " . $SelectEvent1 . "<br>";
  echo "SelectEvent2: " . $SelectEvent2 . "<br>";
  echo "SelectEvent3: " . $SelectEvent3 . "<br>";
  echo "SelectEvent4: " . $SelectEvent4 . "<br>";
  echo "SelectEvent5: " . $SelectEvent5 . "<br>";
  echo "SelectEvent6: " . $SelectEvent6 . "<br>";
  echo "SelectEvent7: " . $SelectEvent7 . "<br>";
  echo "SelectEvent8: " . $SelectEvent8 . "<br>";
 
  ?>
        <br>
      <input type="button"
      onClick="window.print()"
      value="print This page"/>
  <br><br>  <a href="index.html">Return to the HomePage</a>
</center>
  
         
 
 
 
 
 