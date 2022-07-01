<?php
	
	include('conexion.php');

	require 'db.php';

	session_start();
	if(isset($_SESSION['id_usuario'])){
		header("Location: home.php");
	}

	if(!empty($_POST)){
		$usuario = mysqli_real_escape_string($conexion, $_POST['user']);
		$password = mysqli_real_escape_string($conexion, $_POST['password']);
		$password_encriptada = sha1($password);
		$sql = "SELECT id FROM usuario WHERE usuario = '$usuario'  AND contraseña = '$password' ";
		$resultado = $conexion -> query($sql);
		$rows = $resultado->num_rows;
		if ($rows > 0) {
			$row = $resultado->FETCH_ASSOC();
			$_SESSION['id_usuario'] = $row['id'];
			header("Location: home.php");
		}else{
			echo "<script> 
				alert('Usuario o contraseña incorrecta');
				window.location = 'entrar.php';
				</script>";
		}
	}

	#if (isset($_SESSION['user_id'])) {
	#	header('Location: /sonrisa');
	#}

	#if (!empty($_POST['email']) && !empty($_POST['password'])){
	#	$records = $conn ->prepare('SELECT id, usuario, contraseña FROM usuario WHERE email=:email');
	#	$records -> bindParam(':email', $_POST['email']);
	#	$records -> execute();
	#	$resultado = $records->fetch(PDO::FETCH_ASSOC);

	#	$mensaje = '';

	#	if (count($resultado) > 0 && password_verify($_POST['password'], $resultado['contraseña'])) {
	#		$_SESSION['user_id'] = $resultado['id'];
	#		header('Location: /sonrisa');
	#	}else{
	#		$mensaje = 'Logeo Incorrecto';
	#	}
	#}
?>

<!DOCTYPE html>
<html class="js flexbox cssmask objectfit object-fit pc" prefix="og: https://ogp.me/ns#" lang="es">
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
		

		<div class="ez-c"><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1 class="wnd-align-center">Ingresar</h1></div>
</div><div class="b form block cf typo-07">
	<form action="entrar.php" method="post" >

		<fieldset class="form-fieldset">
		<div>
			<div class="form-input form-text cf wnd-form-field wnd-required">
				<label for="field-wnd_ShortTextField_391496"><span class="inline-text">
				<span class="link">Usuario</span>
				</span></label>
				<input id="field-wnd_ShortTextField_391496" name="user" required="" value="" type="text" maxlength="150" placeholder="Ingrese su usuario">
			</div>
			<div class="form-input form-textarea cf wnd-form-field">
				<label for="field-wnd_LongTextField_990818"><span class="inline-text">
				<span class="link">Contraseña</span>
				</span></label>
				<input id="field-wnd_ShortTextField_391496" type="password" name="password" placeholder="Ingrese su contraseña" maxlength="150" required="">
			</div>
		</div>
		<div class="form-submit b-btn cf b-btn-1" style="margin-left: 250px">
			<input name="enviar" type="submit" value="Entrar">
		</div>
		
		</fieldset>

		

	</form>
		<div style="text-align: center">
			<p>¿Todavia no tenes una cuenta? <a href="registro.php">¡Registrate!</a></p>
		</div>
	
</div></div>
		
	</body>
</html>
