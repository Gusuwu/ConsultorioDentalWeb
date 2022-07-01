<?php

	include("conexion.php");
	$usuario = $_REQUEST['usuario'];
	$contraseña = $_REQUEST['contraseña'];

	
	$res = $conexion -> query("SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña ='$contraseña'");

	$datos = array();

	foreach ($res as $row) {
		$datos[] = $row;
	}

	echo json_encode($datos);
	
?>