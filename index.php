<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
        <form method="POST" action="insertDB.php" id="form">
            <input type="text" id="titulo" name="titulo" hidden>
            <input type="text" id="contenido" name="contenido" hidden>
        </form>
    <script>
        //Recuperamos los datos de la API en un JSON
        let datos = '';
        fetch('https://localhost/colegio/wp-json/wp/v2/posts?per_page=1')
            .then(result => result.json())
            .then((output) => {
                //Asignamos los datos del JSON a una variable
                datos = output;
                
                //Introducimos en el formulario los datos a insertar en la BD
                document.getElementById("titulo").value = datos[0]['title']['rendered'];
                document.getElementById("contenido").value = datos[0]['content']['rendered'];

        }).catch(err => console.error(err));

        //Enviamos el formulario, esperando 1s
        function enviarFormulario() {
            document.getElementById("form").submit(); 
        }

        setTimeout(enviarFormulario, 1000);
        
    </script>
</html>