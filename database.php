<?php

// Create connection
$con=mysqli_connect('localhost','csc412','csc412','csc412');


// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$Name = $_POST["Name"];
$Quote = $_POST["Quote"];
//echo $Name;
mysqli_query($con,"INSERT INTO 412demoQuote VALUES ('$Quote','$Name')");
$result = mysqli_query($con,"SELECT * FROM 412demoQuote");

while($row = mysqli_fetch_array($result)) {
  echo $row['Name'] . " " . $row['Quote'];
  echo "<br>";
}

mysqli_close($con);
?>