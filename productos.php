<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos y Servicios - Black Hat OrganizatiOn</title>
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
        <a href="carrito.php" class="dif"><img src="cartw.png" class="carrito-b"></a>
        <a href="rip.html">Iniciar Sesion / Registrarse</a>
    </nav>

    <div class="contenido">
        <h1 class="titulo-pagina">NUESTROS PRODUCTOS</h1>
        <p class="subtitulo-pagina">Artefactos de alta tecnologia destructiva para tus planes mas villanescos.</p>

        <div class="catalogo">
            <!--Primer productote -->
            <div class="item-card">
                <img src="EVIL_RAY00.png" alt="" class="img-cuadrada">
                <div class="item-info">
                    <h2>RAYO MALIGNO</h2>
                    <p>¡Este dispositivo hara que tus pesadillas se hagan realidad...literalmente! (O quizas no solo cosas malvadas..)</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="1">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--segundo productO -->
            <div class="item-card">
                <img src="GRAVITY_DEV00.png" alt="Gravity Device" class="img-cuadrada">
                <div class="item-info">
                    <h2>Dispositivo antigravedad (No es un rayo eh)</h2>
                    <p>BATERIA DE LITIO DE POLIMERO RECARGABLE DE 300 MAH INTEGRADA que garantiza que tu tambien flotaras.</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="2">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--tercer producto -->
            <div class="item-card">
                <img src="MEDUSA00.png" alt="Medusa Device" class="img-cuadrada">
                <div class="item-info">
                    <h2>Dispositivo Medusa</h2>
                    <p>Desde langostas de roca hasta gnomos de jardin, ¡lo que tu imaginas, lo creas!, ¡Crea las estatuas mas fieles a tu malvada grandeza, intentando compensar algo que te falta!</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="3">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>
            
            <!--cuartO producto-->
            <div class="item-card">
                <img src="DEM_GUITAR00.png" alt="guitarrita de la Dem" class="img-cuadrada"> 
                <div class="item-info">
                    <h2>La guitarra de Demencia</h2>
                    <p>Destruye el techo y sacude los pisos. Esta guitarra única con una decoración audaz y exclusiva garantiza un sonido potente y ensordecedor que no te dejará oírte a ti mismo ni a nadie en un radio de diez millas. Solo llévatela, no queremos que la toque más, POR FAVOR.</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="4">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--Quinto productOoo-->
            <div class="item-card">
                <img src="SECURITY_SYS00.png" alt="casa segurA" class="img-cuadrada">
                <div class="item-info">
                    <h2>Sistema de seguridad BHO</h2>
                    <p>Da igual si se trata de un pájaro molesto o del cartero, este sistema de seguridad mantiene tu guarida a salvo y tu césped en llamas.</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="5">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--Sexto productotE-->
            <div class="item-card">
                <img src="SIZE_MAN_RAY00.png" alt="Manipulacion del tamañotE" class="img-cuadrada">
                <div class="item-info">
                    <h2>Rayo de Manipulacion de Tamaño</h2>
                    <p>Hace cosas grandes y pequeñas, ¿de verdad es tan difícil? Pero si de verdad no lo entiendes, ¡también vendemos cerebros!</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="6">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

             <!--septimo productotE-->
            <div class="item-card">
                <img src="cabeza.jpg" alt="cabeza de Quetzalcoatl" class="img-cuadrada">
                <div class="item-info">
                    <h2>Cabeza de Quetzalcoatl</h2>
                    <p>¿Quieres esfumar a tus enemigos en un parpadeo?, ¡esta cabeza te encantara, elimina a tu peor enemigo, a tu suegra o tus mismos empleados!</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="7">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--octavO productotE-->
            <div class="item-card">
                <img src="flor.jpg" alt="Flor FetidA" class="img-cuadrada">
                <div class="item-info">
                    <h2>Flor Fetida</h2>
                    <p>¿Eres un pobre villano que no deja de ser amable?, ¡No sufras mas!..pues con esta flor podras hacer todo lo malvado que se le ocurra..</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="8">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--novenO productotE-->
            <div class="item-card">
                <img src="kit.jpg" alt="kit mi villaniA" class="img-cuadrada">
                <div class="item-info">
                    <h2>kit "Mi Villanía"</h2>
                    <p>¿Su pequeño parasito no muestra señales de villania?, nosotros le echamos la mano con nuestro kit para prqueños villanos, ¡aproveche la oferta!</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="9">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>

            <!--Y EL PRODUCTO DIEZ-->
            <div class="item-card">
                <img src="Hat-bot.png" alt="roboOot" class="img-cuadrada">
                <div class="item-info">
                    <h2>Hat-B0T</h2>
                    <p>¿Buscas un esclavo competente?, ¿sus empleados no dan la talla?, ¡no se preocupe!, nuestros Hat-Bots están listos para servirte</p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id_producto" value="10">
                        <input type="hidden" name="volver" value="productos.php">
                        <button type="submit"><img src="cart.png" class="carrito">Adquirir Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Granados Aguirre Evelyn Ivonne</p>
        <p>Num.Control: 24308051280551</p>
    </footer>
</body>
</html>
