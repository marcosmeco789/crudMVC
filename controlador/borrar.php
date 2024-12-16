<?php 
    require_once "../modelo/modelo.php";   

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $empleado = new Empleado;
        $empleado->eliminarEmpleado($_GET['id']);
        $datos = $empleado->getEmpleados(); 
        require_once "../vista/vista.php";
    } else {
        echo "Error al eliminar el empleado";
    }
?>