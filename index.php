<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connectDB</title>
</head>

<body>
    <form method="POST" action="insertDB.php" id="form">
        <input type="text" id="titulo" name="titulo" hidden>
        <input type="text" id="contenido" name="contenido" hidden>
    </form>
</body>
        
    <script>
        // Recuperamos los datos de la API en un JSON
        let datos = '';
        fetch('https://localhost/colegio/wp-json/wp/v2/posts')
            .then(result => result.json())
            .then((output) => {
                // Asignamos los datos del JSON a una variable
                datos = output; // Los datos del JSON están en formato array, por lo que ahora datos es un array
                
                // Introducimos en el formulario los datos a insertar en la BD
                document.getElementById("titulo").value = datos[0]['title']['rendered']; // Cogemos del array el primer elemento (último post), el título
                document.getElementById("contenido").value = datos[0]['content']['rendered'];

        }).catch(err => console.error(err));

        // Enviamos el formulario, esperando 1s
        function enviarFormulario() {
            document.getElementById("form").submit(); 
        } // Es necesario esperar 1s para que le de tiempo a insertar y comprobar los datos
        setTimeout(enviarFormulario, 1000); // setTimeout(FUNCTION, ms)
    </script>
</html>
