<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>


<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ms3test";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<table border="1" align="center" > 
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Sex</th>
  <th>Pic</th>
  <th>Bank</th>
  <th>Amount</th>
  <th>Yes/No 1</th>
  <th>Yes/No 2</th>
  <th>City</th>
   
</tr>

<?php

echo "<img alt=\"Embedded Image\" src=\"data:image/png;base64,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\" />";


$sql = "SELECT A, B, C, D, E, F, G, H, I, J FROM ms3interview LIMIT 10";
$result = $conn->query($sql);


ECHO " Database Info";
echo "</br>";
echo "</br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  
echo
   "<tr>
    <td>{$row['A']}</td>
    <td>{$row['B']}</td>
    <td>{$row['C']}</td>
	<td>{$row['D']}</td>
	
	<!-- <td><image src=base64_encode{$row['E']}/></td> -->
	
	
	
	<td><img src=data:image/png;base64_decode{$row['E']}/></td>
	
	
	
    <!-- <td>{$row['E']}</td> -->
    <td>{$row['F']}</td>
	<td>{$row['G']}</td>
	<td>{$row['H']}</td>
    <td>{$row['I']}</td>
    <td>{$row['J']}</td>
   </tr>\n";
  
  
  {
	# Attempt to parse the blobs to images

	# $sql = "SELECT * FROM ms3interview WHERE E = $E"; $sth = $db->query($sql);
	# $result=mysqli_fetch_array($sth); echo '<img src="data:image/jpeg;base64,'. base64_encode( 	$result['image'] ). '"/>'; 
	  
	   }
} 

	else {
	echo "0 results";
}
$conn->close();
?>


