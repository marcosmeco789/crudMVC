<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>Editar empleado</h1>
    <form action="../controlador/actualizar.php" method="post">
        <?php
        for ($i = 0; $i < count($datos); $i++) { 
        ?>
            <input type="hidden" name="id" value="<?php echo $datos[$i]['id']; ?>">
            <label for="">Nombre: </label><input type="text" name="nombre" id="" value="<?php echo $datos[$i]['nombre']; ?>">
            <br>
            <br>
            <label for="">Apellidos: </label><input type="text" name="apellidos" id="" value="<?php echo $datos[$i]['apellidos']; ?>">
            <br>
            <br>
            <label for="">Telefono: </label><input type="text" name="telefono" id="" value="<?php echo $datos[$i]['telefono']; ?>">
            <br>
            <br>
            <label for="">Departamento: </label><input type="text" name="departamento" id="" value="<?php echo $datos[$i]['departamento']; ?>">
            <br>
            <br>
            <input type="submit" value="Actualizar"> 

        <?php
        }
        ?>
    </form>
</body>

</html>