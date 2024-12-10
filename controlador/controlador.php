<?php 
require_once "../modelo/modelo.php";

$empleado = new Empleado;
$datos = $empleado->getEmpleados();

require_once "../vista/vista.php";






?>