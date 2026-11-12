
<?php
session_start();
include 'conexion.php';

// Verificamos que los datos lleguen por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_producto = intval($_POST['id_producto']);

    // Verificamos que el producto exista en la base de datos
    $sql = "SELECT * FROM producto WHERE id_producto = ?";
    $consulta = mysqli_prepare($conexion, $sql);

    mysqli_stmt_bind_param($consulta, "i", $id_producto);
    mysqli_stmt_execute($consulta);

    $resultado = mysqli_stmt_get_result($consulta);

    if (mysqli_num_rows($resultado) > 0) {

        // Creamos el carrito si todavia no existe
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array();
        }

        // Si el producto ya existe, aumentamos su cantidad
        if (isset($_SESSION['carrito'][$id_producto])) {
            $_SESSION['carrito'][$id_producto]++;
        } else {
            $_SESSION['carrito'][$id_producto] = 1;
        }
    }

    mysqli_stmt_close($consulta);

    // Regresamos a la pagina anterior
    $volver = $_POST['volver'] ?? 'productos.php';

    if ($volver != 'productos.php' && $volver != 'servicios.php') {
        $volver = 'productos.php';
    }

    header("Location: " . $volver);
    exit();
}

mysqli_close($conexion);
?>
