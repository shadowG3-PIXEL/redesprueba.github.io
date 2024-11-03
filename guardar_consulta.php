<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$database = "formulario_consultas"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$apellido_paterno = isset($_POST['apellidop']) ? $_POST['apellidop'] : null;
$apellido_materno = isset($_POST['apellidom']) ? $_POST['apellidom'] : null;
$correo_electronico = isset($_POST['correo']) ? $_POST['correo'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
$tipo_consulta = isset($_POST['tipo_consulta']) ? $_POST['tipo_consulta'] : null;
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : null;

// Preparar la sentencia SQL
$sql = "INSERT INTO consultas (nombre, apellido_paterno, apellido_materno, correo_electronico, telefono, tipo_consulta, mensaje) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Error en la preparación de la sentencia: " . $conn->error;
    exit();
}

// Preparar la sentencia SQL para insertar los datos
$sql = "INSERT INTO consultas (nombre, apellido_paterno, apellido_materno, correo_electronico, telefono, tipo_consulta, mensaje) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Error en la preparación de la sentencia: " . $conn->error;
    exit();
}

// Vincular los parámetros
$stmt->bind_param("sssssss", $nombre, $apellido_paterno, $apellido_materno, $correo_electronico, $telefono, $tipo_consulta, $mensaje);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Tu consulta ha sido enviada con éxito.";
} else {
    echo "Error al enviar la consulta: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
