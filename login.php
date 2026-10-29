<?php
// Incluimos el archivo que realiza la conexion a la base de datos
include 'conexion.php';

// Verificamos si los datos se enviaron mediante el metodo POST (por ejemplo, desde un formulario)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardamos en variables el correo y la contrasena que escribio el usuario
    $email = $_POST['email_login'];
    $password = $_POST['pass_login'];

    // Preparamos la consulta para buscar al usuario que tenga ese correo
    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $resultado = mysqli_query($conexion, $sql);

    // Comprobamos si se encontro al menos un registro con ese correo
    if (mysqli_num_rows($resultado) > 0) {
        // Convertimos el resultado en un arreglo para poder leer sus datos
        $usuario = mysqli_fetch_assoc($resultado);
        
        // Verificamos si la contrasena escrita coincide con la contrasena cifrada de la base de datos
        if (password_verify($password, $usuario['password'])) {
            
            // Si la contrasena es correcta, mostramos un mensaje de bienvenida personalizado
            echo "<h2 style='color: rosybrown; font-family: sans-serif; text-align: center; margin-top: 50px;'>";
            echo "Bienvenido a Black Hat Organization, " . $usuario['usuario'] . "! ";
            echo "</h2>";
            echo "<p style='text-align: center; font-family: sans-serif;'>Seras redirigido al inicio en unos segundos...</p>";
            
            // Redirigimos automaticamente a la pagina principal despues de 3 segundos
            echo "<meta http-equiv='refresh' content='3;url=index.html'>";
            
        } else {
            // Si la contrasena es incorrecta, mostramos un aviso de error
            echo "<h2 style='color: red; font-family: sans-serif; text-align: center; margin-top: 50px;'>";
            echo "Contrasena incorrecta.";
            echo "</h2>";
            echo "<p style='text-align: center; font-family: sans-serif;'>Regresando para que intentes de nuevo...</p>";
            
            // Redirigimos de vuelta a rip.html despues de 3 segundos
            echo "<meta http-equiv='refresh' content='3;url=rip.html'>";
        }
    } else {
        // Si no existe ninguna cuenta registrada con ese correo, mostramos un aviso
        echo "<h2 style='color: red; font-family: sans-serif; text-align: center; margin-top: 50px;'>";
        echo "No existe una cuenta con ese correo.";
        echo "</h2>";
        echo "<p style='text-align: center; font-family: sans-serif;'>Regresando para que intentes de nuevo o te registres...</p>";
        
        // Redirigimos de vuelta a rip.html despues de 3 segundos
        echo "<meta http-equiv='refresh' content='3;url=rip.html'>";
    }
}

// Cerramos la conexion abierta con la base de datos
mysqli_close($conexion);
?>