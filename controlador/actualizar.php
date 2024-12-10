<?php 

require_once "../modelo/modelo.php";

$empleado = new Empleado;
$datos = $empleado->actualizarEmpleado($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['departamento'], $_POST['id']);

require_once "../vista/vista.php";


?>