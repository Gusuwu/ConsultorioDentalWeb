<?php

if(isset($_POST['nombre'])){
	if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) ) {
		$name = $_POST['nombre'];
		$mail = $_POST['correo'];
		$msg = $_POST['mensaje'];
		$destino = "draanasonrisa@gmail.com";
		
		$header = "From: " . $mail . "\r\n"; 
		$header.= "Reply-To: " . $mail . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail = mail($destino, "Consulta", $msg, $header);
		if ($mail) {
			echo "<h4>Correo enviado exitosamente</h4>";
		}
	}
}
?>
