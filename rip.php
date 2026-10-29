<?php
// Incluimos el archivo que conecta a la base de datos
include 'conexion.php'; 

// Verificamos si los datos se enviaron por el metodo POST desde el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email_reg'];
    $password = $_POST['pass_reg'];

    // Buscamos en la base de datos si ya existe un usuario registrado con ese correo
    $consulta_verificar = "SELECT * FROM usuarios WHERE correo = '$email'";
    $resultado_verificar = mysqli_query($conexion, $consulta_verificar);

    // Si encontramos resultados, significa que el correo ya esta usado
    if (mysqli_num_rows($resultado_verificar) > 0) {
        echo "<h2 style='color: red; font-family: sans-serif; text-align: center; margin-top: 50px;'>";
        echo "Error: Este correo ya esta registrado en Black Hat Organization.";
        echo "</h2>";
        // Redirigimos de vuelta a rip.html despues de 3 segundos
        echo "<meta http-equiv='refresh' content='3;url=rip.html'>";
    } else {
        // Ciframos la contrasena de forma segura antes de guardarla
        $password_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
        // Preparamos la consulta para insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO usuarios (usuario, correo, password) VALUES ('$nombre', '$email', '$password_encriptada')";

        // Ejecutamos la insercion y verificamos si se guardo correctamente
        if (mysqli_query($conexion, $sql)) {
            echo "<h2 style='color: #00ff00; font-family: sans-serif; text-align: center; margin-top: 50px;'>";
            echo "¡Cuenta creada con exito, " . $nombre . "!";
            echo "</h2>";
            echo "<p style='text-align: center; font-family: sans-serif;'>Seras redirigido para iniciar sesion...</p>";
            // Redirigimos a rip.html despues de 3 segundos para que pueda entrar
            echo "<meta http-equiv='refresh' content='3;url=rip.html'>";
        } else {
            // Si ocurre algun error al guardar, lo mostramos en pantalla
            echo "Error: " . mysqli_error($conexion);
        }
    }
}

// Cerramos la conexion abierta con la base de datos
mysqli_close($conexion);
?>