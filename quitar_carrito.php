
<?php
session_start();

// Comprobamos si se quiere vaciar todo el carrito
if (isset($_POST['accion']) && $_POST['accion'] == 'vaciar') {

    unset($_SESSION['carrito']);

    header("Location: carrito.php");
    exit();

}

// Comprobamos si se quiere quitar un solo producto
if (isset($_POST['id_producto'])) {

    $id = intval($_POST['id_producto']);

    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }

}

// Regresamos al carrito
header("Location: carrito.php");
exit();
?>