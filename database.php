<?php
	$servername = "localhost";
    $username = "root";
    $password = "0000";
    $dbname = "connectDB";
    $port = 3307;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
?>