<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Create database --------------------------------------------------------
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	mysqli_close($conn);
?>