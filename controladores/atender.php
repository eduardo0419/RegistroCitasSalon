<?php
    include '../conexion/Conexion.php';
    conectar();
    consultar("delete from citas where id=".$_GET['id']);
    echo "<script type=\"text/javascript\">window.location='../Vistas/menu.php';</script>";
?>