<?php 
require_once "../modelo/modelo.php";

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $empleado = new Empleado;
    $empleado->actualizarEmpleado($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['departamento'], $_POST['id']);
    $datos = $empleado->getEmpleados(); // Obtener la lista actualizada de empleados
    require_once "../vista/vista.php";
} else {
    echo "Error: ID del empleado no especificado.";
}