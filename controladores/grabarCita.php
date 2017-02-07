<?php
    include '../conexion/Conexion.php';
    conectar();

    consultar("insert into citas(personal_id,nombres,apellidos,celular,fecha,hora,detalles) values ('".$_POST['personal_id']."','".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['celular']."','".$_POST['fecha']."','".$_POST['hora']."','".$_POST['detalles']."')");
    echo "<script type=\"text/javascript\">window.location='../index.html';</script>";
?>