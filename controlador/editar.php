<?php 

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    require_once "../modelo/modelo.php";
    $empleado = new Empleado;
    $datos = $empleado->getEmpleado($_GET['id']);
    require_once "../vista/vistaEditar.php";
} else {
    echo "Error al obtener el empleado";
}
?>