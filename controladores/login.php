<?php 
	include '../conexion/Conexion.php';
	conectar();
	$res= consultar("SELECT id,name FROM users where email='".$_POST["email"]."' and password='".$_POST["password"]."'");
	if(mysqli_num_rows($res)>0)
	{
		session_start();
		$row=mysqli_fetch_row($res);
		$_SESSION['id']=$row[0];
		$_SESSION['name']=$row[1];

		echo "<script type=\"text/javascript\">window.location='../Vistas/menu.php';</script>";
	}else
	{
		echo "<script type=\"text/javascript\">window.location='../Vistas/login.php?S=1';</script>";
	}
?>