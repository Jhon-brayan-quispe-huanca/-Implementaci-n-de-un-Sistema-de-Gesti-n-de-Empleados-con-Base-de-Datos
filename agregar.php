<?php
// Incluir el archivo de la base de datos
include("./basedatos.php");

// Obtener el nombre y la edad del empleado del formulario
$nombre = $_REQUEST['empleado_nombre']; 
$edad = $_REQUEST['empleado_edad']; 

// Verificar que tanto el nombre como la edad no estén vacíos
if(!empty($nombre) && !empty($edad)){
    // Conectar a la base de datos
    $conexion = conectar_db();

    // Preparar la consulta para insertar el empleado en la tabla 'empleados'
    $consulta = "INSERT INTO empleados(nombre,edad) VALUES('$nombre','$edad')";
    
    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Verificar si la consulta fue exitosa
    if ($resultado){
        // Redireccionar a la página listaEmpleado.php si la inserción fue exitosa
        header('Location: listaEmpleado.php');
    } else {
        // Redireccionar a la página nuevoEmpleado.php si hubo un error en la inserción
        header('Location: nuevoEmpleado.php');
    }
} else {
    // Redireccionar a la página nuevoEmpleado.php si tanto el nombre como la edad están vacíos
    header('Location: nuevoEmpleado.php');
}
?>
