<?php
echo "Bonjour !";
$mysqli = new mysqli("localhost","root","","SEC");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
	echo "Connexion établie";
}

$sql = "SELECT * FROM test";
$result = mysqli_query($mysqli,$sql);
echo "<table border='1'>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	printf ("<tr><td>%s</td><td>%s</td><td> %s</td><td><a href='#'>Passer ce test</a></td></tr>", $row["titre"], $row["duree"],$row['date']);	
	echo "<br/>";
}// Free result set
echo "</table>";
mysqli_free_result($result);


?>