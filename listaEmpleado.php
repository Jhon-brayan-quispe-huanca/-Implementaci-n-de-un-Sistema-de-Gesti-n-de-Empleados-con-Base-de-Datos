<?php
// Incluir el archivo de la base de datos
include ('./basedatos.php');

// Establecer conexión con la base de datos
$conexion = conectar_db();

// Consulta SQL para seleccionar todos los empleados
$consulta = "SELECT * FROM empleados";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vincular archivo de estilos CSS -->
</head>
<body>
    <h1>Lista de empleados</h1>
    <ul>
        <?php
        // Recorrer los resultados obtenidos de la consulta
        foreach($resultado as $fila){
            // Imprimir cada empleado en una lista
            echo "<li>". $fila['nombre'] . " " . $fila['edad'] . " años</li>";
        }
        ?>
    </ul>
</body>
</html>

    