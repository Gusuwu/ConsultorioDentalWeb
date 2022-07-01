<?php
include('conexion.php');
session_start();
$iduser = $_SESSION['id_usuario'];

$turnos = array();

$conexion -> set_charset('utf8');
$sql = $conexion ->prepare("SELECT * FROM turnos WHERE id_usuario = $iduser");
$sql->execute();
$resultado = $sql->get_result();

while ($row = $resultado->fetch_assoc()) $turnos[]=$row;

$cliente = array();

$sql = $conexion->prepare("SELECT * FROM usuario WHERE id = $iduser");
$sql->execute();
$resultado = $sql->get_result();

while ($row = $resultado->fetch_assoc()) $cliente[]=$row;
$conexion-> close();


?>
