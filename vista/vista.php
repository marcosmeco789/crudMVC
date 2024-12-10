<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
</head>

<body>
    <h1>Listado de los empleados</h1>
    <table border="" cellpadding="10" cellspacing="0" style="width: 40%;">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Departamento</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        <tbody>
            <?php
            for ($i = 0; $i < count($datos); $i++) {
            ?>
                <tr>
                    <td><?php echo $datos[$i]['nombre']; ?></td>
                    <td><?php echo $datos[$i]['apellidos']; ?></td>
                    <td><?php echo $datos[$i]['telefono']; ?></td>
                    <td><?php echo $datos[$i]['departamento']; ?></td>
                    <td><?php echo "<a href=\"../controlador/editar.php?id={$datos[$i]['id']}\">Editar</a>"?></td>
                    <td><?php echo "<a href=\"../controlador/borrar.php?id={$datos[$i]['id']}\">Borrar</a>"?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="../index.php" style="color: green;">Volver a la pagina principal</a>
</body>
</body>

</html>