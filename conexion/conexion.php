<?php
    $conexion = null;

    function conectar()
    {
        global $conexion;
        $conexion = mysqli_connect("localhost","root","","salon") or die (mysql_error());
    }

    function consultar($query)
    {
        global $conexion;
        return mysqli_query($conexion, $query);
    }
?>