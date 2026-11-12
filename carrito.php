
<?php
session_start();
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi carrito - Black Hat Organization</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <img src="BHO_logo.png" alt="Black Hat Organization Logo" class="logo-principal">
</header>

<nav>
    <a href="index.html">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="servicios.php">Servicios</a>
    <a href="rip.html">Iniciar Sesion / Registrarse</a>
    <a href="carrito.php" class="dif">
        <img src="cart.png" class="carrito-b">
    </a>
</nav>

<div class="contenido">

    <h1 class="titulo-pagina">MI CARRITO</h1>

    <p class="subtitulo-pagina">
        Tus adquisiciones y contrataciones villanescas.
    </p>

    <?php

    // Comprobamos si hay productos en el carrito
    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {

        foreach ($_SESSION['carrito'] as $id => $cantidad) {

            // Buscamos el producto en la base de datos
            $sql = "SELECT * FROM producto WHERE id_producto = ?";
            $consulta = mysqli_prepare($conexion, $sql);

            mysqli_stmt_bind_param($consulta, "i", $id);
            mysqli_stmt_execute($consulta);

            $resultado = mysqli_stmt_get_result($consulta);

            if ($producto = mysqli_fetch_assoc($resultado)) {
    ?>

                <div class="item-card">

                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>"
                         class="img-cuadrada"
                         alt="Producto">

                    <div class="item-info">

                        <h2>
                            <?php echo htmlspecialchars($producto['nombre']); ?>
                        </h2>

                        <p>
                            <?php echo htmlspecialchars($producto['descripcion']); ?>
                        </p>

                        <p>
                            Cantidad: <?php echo $cantidad; ?>
                        </p>

                        <form action="quitar_carrito.php" method="POST">

                            <input type="hidden" name="id_producto"
                                   value="<?php echo $id; ?>">

                            <button type="submit">
                                Quitar del carrito
                            </button>

                        </form>

                    </div>

                </div>

    <?php
            }

            mysqli_stmt_close($consulta);
        }
    ?>
        <form action="quitar_carrito.php" method="POST">
            <input type="hidden" name="accion" value="vaciar">
            <button type="submit">Vaciar carrito</button>
        </form>

    <?php

    } else {

        echo "<h2>Tu carrito esta vacio.</h2>";
        echo "<p>¡Todavia no has elegido nada para tus planes malvados!</p>";

    }

    ?>

    <br>

    <a href="productos.php">Seguir comprando</a>

</div>

</body>
</html>

<?php
mysqli_close($conexion);
?>
