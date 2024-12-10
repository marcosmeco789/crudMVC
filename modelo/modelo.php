<?php
class Empleado
{
    private $empleados = [];
    private $dbc;

    public function __construct()
    {
        $this->dbc = new PDO("mysql:host=localhost;dbname=modelo_mvc","root","");

    }

    public function setEmpleado($nombre, $apellidos, $telefono, $departamento)
    {
        $sql = "INSERT INTO empleados(nombre, apellidos, telefono, departamento) VALUES ('{$nombre}', '{$apellidos}', '{$telefono}', '{$departamento}')";
        $result = $this->dbc->query($sql);
        $this->dbc = null;
        return $result;

    }


    public function getEmpleados()
    {
        $sql = "SELECT * FROM empleados";
        foreach ($this->dbc->query($sql) as $row) {
            $this->empleados[] = $row;
        }
        $this->dbc = null;
        return $this->empleados;
    }


    public function getEmpleado($id)
    {
        $sql = "SELECT * FROM empleados WHERE id = '{$id}'";
        foreach ($this->dbc->query($sql) as $row) {
            $this->empleados[] = $row;
        }
        $this->dbc = null;
        return $this->empleados;
    }

    public function actualizarEmpleado($nombre, $apellidos, $telefono, $departamento, $id)
    {
        $sql = "UPDATE empleados SET nombre = '{$nombre}', apellidos = '{$apellidos}', telefono = '{$telefono}', departamento = '{$departamento}' WHERE id = '{$id}'";
        $result = $this->dbc->query($sql);
        $this->dbc = null;
        return $result;
    }
}
