<?php
    $servername = "localhost";
    $username = "root";
    $password = "0000";
    $dbname = "connectDB";
    $port = 3307;

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Comprobar conexión
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
?>
