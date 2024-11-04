<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovaciones en Tecnología de PC</title>
    <link rel="stylesheet" href="cssprinci.css"> 
    <link rel="stylesheet" href="cssarmapc.css"> 
</head>

<body>
<?php
// Configuración de conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_consultas");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Función para obtener los componentes según la tabla correspondiente
function obtenerComponentes($conexion, $tabla) {
    $opciones = "";
    $sql = "SELECT nombre, precio FROM $tabla WHERE nombre IS NOT NULL";
    $resultado = $conexion->query($sql);

    // Verificación de errores en la consulta
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $opciones .= "<option value='{$fila['precio']}'>{$fila['nombre']} - \Bs {$fila['precio']}</option>";
        }
    } else {
        $opciones = "<option value='0'>No hay componentes disponibles</option>";
    }
    return $opciones;
}
?>
    <nav class="navbar">
        <div class="logo">
            <img src="listo.jpg" alt="Logo de Tienda de PC">
        </div>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="novedades.html">Novedades</a></li>
            <li>
                <a href="welcometop.html">Ranking</a>
                <div class="dropdown-content">
                    <div class="submenu">
                        <a href="#">Procesadores</a>
                        <div class="submenu-content">
                            <a href="topintel.html">Intel</a>
                            <a href="topamd.html">AMD</a>
                        </div>
                    </div>

                    <div class="submenu">
                        <a href="#">Tarjetas Gráficas</a>
                        <div class="submenu-content">
                            <a href="topnvidia.html">NVIDIA</a>
                            <a href="topradeon.html">RADEON</a>
                        </div>
                    </div>
                    <div class="submenu">
                        <a href="#">Laptos</a>
                        <div class="submenu-content">
                            <a href="toplaptopgamer.html">Gamers</a>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="armapc.html">Arma tu pc</a></li>
            <li><a href="meme.html">Contacto</a></li>
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <h1>Arma tu PC</h1>
            <form id="pc-config-form" onsubmit="event.preventDefault(); calcularPrecio();">
                <!-- Procesador -->
                <label for="procesador">Selecciona un Procesador:</label>
                <select id="procesador">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'procesador'); ?>
                </select>

                <!-- Tarjeta Gráfica -->
                <label for="tarjeta_grafica">Selecciona una Tarjeta Gráfica:</label>
                <select id="tarjeta_grafica">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'tarjeta_grafica'); ?>
                </select>

                <!-- RAM -->
                <label for="ram">Selecciona la Memoria RAM:</label>
                <select id="ram">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'ram'); ?>
                </select>

                <!-- Almacenamiento -->
                <label for="almacenamiento">Selecciona el Almacenamiento:</label>
                <select id="almacenamiento">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'almacenamiento'); ?>
                </select>

                <!-- Fuente de Poder -->
                <label for="fuente_poder">Selecciona una Fuente de Poder:</label>
                <select id="fuente_poder">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'fuente_poder'); ?>
                </select>

                <!-- Case -->
                <label for="cases">Selecciona un Case:</label>
                <select id="cases">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'cases'); ?>
                </select>

                <!-- Refrigeración -->
                <label for="refrigeracion">Selecciona un Sistema de Refrigeración:</label>
                <select id="refrigeracion">
                    <option value="0">-- Selecciona --</option>
                    <?php echo obtenerComponentes($conexion, 'refrigeracion'); ?>
                </select>

                <div class="button-container">
                    <button type="submit">Calcular Precio</button>
                    <button type="button" onclick="borrarOpciones()">Borrar Opciones</button>
                </div>
            </form>

            <div class="total" id="precio-total"></div>

        </div>
    </div>  

    <script src="script1.js"></script>   
    <script src="sumacomp.js"></script>   

    <?php $conexion->close(); ?>
</body>
</html>