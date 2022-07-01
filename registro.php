<?php
	include('conexion.php');
	require 'db.php';
	
	if(isset($_POST['enviar'])){
		$nombre = mysqli_real_escape_string($conexion, $_POST['name']);
		$apellido = mysqli_real_escape_string($conexion, $_POST['lastname']);
		$user = mysqli_real_escape_string($conexion, $_POST['user']);
		$email = mysqli_real_escape_string($conexion, $_POST['email']);
		$fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
		$dni = mysqli_real_escape_string($conexion, $_POST['dni']);
		$obra = mysqli_real_escape_string($conexion, $_POST['obra']);
		$telefono = mysqli_real_escape_string($conexion, $_POST['telephone']);
		$password = mysqli_real_escape_string($conexion, $_POST['password']);
		$password_encriptada = sha1($password);
		$sqluser = "SELECT id FROM usuario WHERE usuario = '$user'";
		$resultadouser = $conexion -> query($sqluser);
		$filas = $resultadouser->num_rows;
		if ($filas > 0) {
			echo "<script> 
				alert('El usuario ya existe');
				window.location = 'registro.php';
			</script>";
			
		}else{
			$sqlusuario = "INSERT INTO usuario(nombre, apellido, usuario, email, fecha, dni, obra_social, telefono, contraseña) VALUES ('$nombre','$apellido','$user','$email','$fecha','$dni','$obra','$telefono','$password')";
			$resultadousuario = $conexion -> query($sqlusuario);
			if ($resultadousuario > 0 ) {
				echo "<script> 
				alert('Registro completo');
				window.location = 'registro.php';
				</script>";
			}else{
				echo "<script> 
				alert('Error en el registro');
				window.location = 'registro.php';
				</script>";
			}
		}


	}
	#$mensaje = '';

	#if (!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['dni']) && !empty($_POST['obra']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['fecha'])){

	#	$sql = "INSERT INTO usuario(usuario, contraseña, nombre, apellido, dni, telefono, email, obra_social, fecha) VALUE (:user, :password, :name, :lastname, :dni, :telephone, :email, :obra, :fecha)";
	#	$stmt = $conn->prepare($sql);
	#	$stmt->bindParam(':user', $_POST['user']);
	#	$stmt->bindParam(':name', $_POST['name']);
	#	$stmt->bindParam(':lastname', $_POST['lastname']);
	#	$stmt->bindParam(':dni', $_POST['dni']);
	#	$stmt->bindParam(':email', $_POST['email']);
	#	$stmt->bindParam(':telephone', $_POST['telephone']);
	#	$stmt->bindParam(':obra', $_POST['obra']);
	#	$stmt->bindParam(':fecha', $_POST['fecha']);
	#	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	#	$stmt->bindParam(':password', $password);

	#	if($stmt->execute()){
	#		$mensaje = 'Registro correcto';*
	#	}else{
	#		$mensaje = 'Registro incorrecto';
	#	}

	#}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Consultorio Sonsrisa Feliz</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover"><meta name="msapplication-tap-highlight" content="no">
	<link href="https://d1di2lzuh97fh2.cloudfront.net/files/2z/2zf/2zf89c.css?ph=2f2d2c3c0b" rel="stylesheet">
	<link href="https://d1di2lzuh97fh2.cloudfront.net/files/0j/0jj/0jjtww.css?ph=2f2d2c3c0b" rel="stylesheet">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/0h/0hh/0hhkev.css?ph=2f2d2c3c0b" data-wnd_color_scheme_file="">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/42/42e/42e5o5.css?ph=2f2d2c3c0b" data-wnd_additive_color_file="">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/2f/2f9/2f9knw.css?ph=2f2d2c3c0b" data-wnd_typography_file="">
	<meta name="description" content="Gabriel Carrasco 1646, Resistencia, Chaco 3500">
	<meta name="keywords" content="">
	<meta name="generator" content="Webnode 2">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">

<meta property="og:url" content="https://consultorio-sonsrisa-feliz.webnode.es/">
<meta property="og:title" content="Consultorio Sonsrisa Feliz">
<meta property="og:type" content="article">
<meta property="og:description" content="Gabriel Carrasco 1646, Resistencia, Chaco 3500">
<meta property="og:site_name" content="Consultorio Sonsrisa Feliz">
<meta property="og:image" content="https://consultorio-sonsrisa-feliz.webnode.es/_files/200000003-0a3280a32a/700/ortodoncia.png">
<meta property="og:article:published_time" content="2020-09-13T00:00:00+0200">
<meta name="robots" content="index,follow">
<link rel="canonical" href="https://consultorio-sonsrisa-feliz.webnode.es/">
<script async="" src="//www.google-analytics.com/analytics.js"></script><script>window.checkAndChangeSvgColor=function(c){try{var a=document.getElementById(c);if(a){c=[["border","borderColor"],["outline","outlineColor"],["color","color"]];for(var h,b,d,f=[],e=0,m=c.length;e<m;e++)if(h=window.getComputedStyle(a)[c[e][1]].replace(/\s/g,"").match(/^rgb[a]?\(([0-9]{1,3}),([0-9]{1,3}),([0-9]{1,3})/i)){b="";for(var g=1;3>=g;g++)b+=("0"+parseInt(h[g],10).toString(16)).slice(-2);"0"===b.charAt(0)&&(d=parseInt(b.substr(0,2),16),d=Math.max(16,d),b=d.toString(16)+b.slice(-4));f.push(c[e][0]+"="+b)}if(f.length){var k=a.getAttribute("data-src"),l=k+(0>k.indexOf("?")?"?":"&")+f.join("&");a.src!=l&&(a.src=l,a.outerHTML=a.outerHTML)}}}catch(n){}};</script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-797705-6', 'auto',{"name":"wnd_header"});ga('wnd_header.set', 'dimension1', 'W2');ga('wnd_header.set', 'anonymizeIp', true);ga('wnd_header.send', 'pageview');</script>
</head>
	</head>
	<body class="l l-05 layout-05 c-s-l wt-home b-btn-r b-btn-s-m b-btn-dn b-btn-bw-1 img-d-n img-t-u img-h-n line-solid b-e-ds lbox-d c-s-l wnd-fe desktop safari">
		<div class="wnd-page cs-sky ac-none">

		<div id="wrapper" class="l-w t-11">

<header id="header" class="l-h">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><div class="s section header header-07 page sc-w">
	<div class="section-bg s-bg">
		<div class="section-bg-layer">
			
		</div>
		<div class="section-bg-layer section-bg-overlay"></div>
	</div>

	<div class="nav-line section-fixed wnd-fixed">
		<div class="section-inner">
			<div class="logo logo-color-text wnd-font-size-10 nunito wnd-logo-with-text wnd-iar-1-1" id="wnd_LogoBlock_823393" data-wnd_mvc_type="wnd.fe.LogoBlock">
    <div class="logo-content">
        <a href="index.html">
            <div class="logo-image">
	            <div class="logo-image-cell">
                    <img src="https://consultorio-sonsrisa-feliz.webnode.es/_files/200000000-9de409de42/200/logosonrisa.png">
</div>
            </div>
            
	        <div class="logo-text">
                <span class="logo-text-cell"><font class="wnd-font-size-120"><strong>Consultorio Sonrisa Feliz</strong></font></span>
	        </div>
        </a>
    </div>
</div>

			

			<nav id="menu" role="navigation" style=""><div class="menu-font">
	<a href="#" class="close-menu" rel="nofollow">
		<span>Close Menu</span>
	</a>
	<ul class="level-1"><li class="wnd-homepage">
			<a class="menu-item" href="index.php"><span class="menu-item-text">Inicio</span></a>
			
		</li><li class="wnd-active wnd-active-path">
			<a class="menu-item" href="nosotros.html"><span class="menu-item-text">Sobre nosotros</span></a>
			
		</li><li>
			<a class="menu-item" href="servicios.html"><span class="menu-item-text">Servicios</span></a>
			
			
		</li><li>
			<a class="menu-item" href="contacto.php"><span class="menu-item-text">Contacto</span></a>
			
		</li>
		<li class="" style="">
				<a class="menu-item" href="entrar.php"><span class="menu-item-text">Iniciar Sesion</span></a>
			</li>
			<li class="" style="">
				<a class="menu-item" href="registro.php"><span class="menu-item-text">Registrarse</span></a>
			</li>
	</ul><span class="more-text">Más</span>
</div></nav><div id="menu-mobile" class="">
				<a href="#" id="menu-submit"><span></span>Menú</a>
			</div>
		</div>
	</div>
</div></div>
</div>

</header>
		
		

		<div class="ez-c">
			<div class="b b-text cf">
	
				<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1 class="wnd-align-center">Registrarse</h1></div>
			</div>

			<div class="b form block cf typo-07">
				<form action="registro.php" method="post" >

				<fieldset class="form-fieldset">
				<div>
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Nombre</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="name" required="" value="" type="text" maxlength="150" placeholder="Ingrese su nombre">
					</div>
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Apellido</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="lastname" required="" value="" type="text" maxlength="150" placeholder="Ingrese su apellido">
					</div>
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Usuario</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="user" required="" value="" type="text" maxlength="150" placeholder="Ingrese su usuario">
					</div>
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Email</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="email" required="" value="" type="text" maxlength="150" placeholder="Ingrese su email">
					</div>
					<div class="form-input form-date cf wnd-form-field wnd-required">
						<label for="field-wnd_DateField_893023"><span class="it inline-text link">
						<span class="it-c">Fecha</span>
						</span></label>
						<input id="field-wnd_DateField_893023" name="fecha" required="" value="" type="date" placeholder="24.10.2020">
		    			<span class="datepicker-icon"></span>
					</div>
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">DNI</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="dni" required="" value="" type="number" maxlength="150" placeholder="Ingrese su dni">
					</div>
					<div class="form-input form-select cf wnd-form-field wnd-required">
					<label for="field-wnd_SelectboxField_154263"><span class="it inline-text link">
					<span class="it-c">Obra social</span>
					</span></label>
					<div class="select">
					<select id="field-wnd_SelectboxField_154263" name="obra" required="">
					<option value="INSSEP" selected="">INSSEP</option><option value="OSDE">OSDE</option><option value="OCECAC">OCECAC</option><option value="OSCHOCA">OSCHOCA</option><option value="PAMI">PAMI</option>
					</select>
					</div>
					</div>
					
					<!--
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Obra social</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="obra" required="" value="" type="text" maxlength="150" placeholder="Ingrese su obra social">
					</div>
					-->
					<div class="form-input form-text cf wnd-form-field wnd-required">
						<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
						<span class="link">Telefono</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" name="telephone" required="" value="" type="tel" maxlength="150" placeholder="Ingrese su telefono">
					</div>
					<div class="form-input form-textarea cf wnd-form-field">
						<label for="field-wnd_LongTextField_990818"><span class="inline-text">
						<span class="link">Contraseña</span>
						</span></label>
						<input id="field-wnd_ShortTextField_391496" type="password" name="password" placeholder="Ingrese su contraseña" maxlength="150">
					
					</div>
					<div class="form-submit b-btn cf b-btn-1" style="margin-left: 250px">
						<input name="enviar" type="submit" value="Enviar">
					</div>
				</fieldset>

		

			</form>

	<div style="text-align: center">
			<p>¿Ya tenes una cuenta? <a href="entrar.php">¡Ingresá!</a></p>
		</div>

</div>
</div>
		
	</body>
	
		
			
		
</html>