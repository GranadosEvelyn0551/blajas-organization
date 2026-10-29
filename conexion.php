<?php
// Guardamos en variables los datos necesarios para entrar a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "blajas";

// Intentamos establecer la conexion usando los datos anteriores
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

// Si la conexion fallo, detenemos el codigo y mostramos el error
if (!$conexion) {
    die("Fallo la conexion: " . mysqli_connect_error());
}

//perOoo si todo salio bien y conecto, mostramos este mensaje en pantalla
echo "FUNCIONA";
?>