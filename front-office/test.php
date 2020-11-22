<?php
$con = new mysqli("localhost","root","","test");
 

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM user";
$result = mysqli_query($con,$sql);

// Numeric array
//$row = mysqli_fetch_array($result, MYSQLI_NUM);
//printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	printf ("%s (%s)\n", $row["username"], $row["password"]);	
	echo "<br/>";
}


// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>