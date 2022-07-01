<?php
include('db.php');
$conexion = new mysqli($server,$username,$password,$database);

if(mysqli_connect_errno()){
	echo "No conectado", msqli_connect_error();
	exit();
}
?>