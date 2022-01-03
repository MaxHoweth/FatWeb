<?php

$servername = "localhost";
$username = "root";
$password = ""; // MUST BE ENTERED BEFORE TESTING!!!!!
$dbname = "main";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	die('Could not connect: ' . $conn->connect_error );
}

echo 'Connected Successfully!'; 

$sql = "SELECT * FROM `testTable` WHERE 1;";
$result = $conn->query($sql);


if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"] . " name: " . $row["name"] ;
	}
	
}


?>
