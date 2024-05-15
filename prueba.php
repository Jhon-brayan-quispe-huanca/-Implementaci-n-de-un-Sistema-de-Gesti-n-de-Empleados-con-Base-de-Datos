
<?php
// Incluir el archivo de la base de datos
include("./basedatos.php");

// Establecer conexión con la base de datos
$conexion = conectar_db();

// Verificar si hay un error de conexión
if($conexion->connect_error){
    // Si hay un error, mostrar un mensaje y terminar el script
    die('ERROR: No se pudo conectar a la base de datos' . $conexion->connect_error);
}

// Si no hay error de conexión, mostrar un mensaje de conexión exitosa
echo "Conexión Exitosa";

// Cerrar la conexión a la base de datos
$conexion->close();
?>

