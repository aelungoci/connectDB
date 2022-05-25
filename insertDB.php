<?php
	include 'database.php';
	// Comprobar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }

     // Obtenemos el título del post y el contenido
     $titulo = $_POST['titulo'];
     
     $contenido = strip_tags($_POST['contenido']);

     // Obtenemos el titulo del post de la BD, si existe
     $sql = "SELECT * FROM info WHERE titulo = '$titulo'";
     if ($resultado = mysqli_query($conn, $sql)) {
        $fila = $resultado -> fetch_assoc();
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }

     // Si no existe, insertamos el post
     if(empty($fila['titulo'])) {
        $sql = "INSERT INTO info(titulo, contenido) VALUES ('$titulo','$contenido')";

        if (mysqli_query($conn, $sql)) {
            echo "Registro ingresado correctamente";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
    }else{
        // En caso de existir mostramos un error
        echo "El post ya existe en la BD";
    }
?>