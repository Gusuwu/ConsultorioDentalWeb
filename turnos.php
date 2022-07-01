<?php
	include('conexion.php');
	
	session_start();
	if(!isset($_SESSION['id_usuario'])){
		header("Location: entrar.php");
	}	
	$iduser = $_SESSION['id_usuario'];
	

	$sql = "SELECT id, nombre FROM usuario WHERE id = '$iduser'";
	$resultado = $conexion -> query($sql);
	$row = $resultado->fetch_assoc();

	if(isset($_POST['send'])){
		
		$fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
		$prestacion = mysqli_real_escape_string($conexion, $_POST['prestacion']);
		$hora = mysqli_real_escape_string($conexion, $_POST['hora']);
		$estado = 'En revision';
		if ($prestacion == "Consulta") {
			$precio = "250";
		}else if ($prestacion == "Control") {
			$precio= "350";
		}else if ($prestacion == "Extracción") {
			$precio = "400";
		}else if ($prestacion == "Urgencia"){
			$precio = "200";
		}else if($prestacion == "Implante"){
			$precio = "1000";
		}else if($prestacion == "Estetica"){
			$precio = "2000";
		}else{
			$precio = "600";
		}

		$sqlfecha = "SELECT id FROM turnos WHERE fecha_turno = '$fecha'";
		$sqlhora = "SELECT id FROM turnos WHERE hora = '$hora'";

		$resultadofecha = $conexion -> query($sqlfecha);
		$resultadohora = $conexion -> query($sqlhora);

		$nombre = $_FILES['imagen']['name'];
		$tamaño = $_FILES['imagen']['size'];
		$tipo = $_FILES['imagen']['type'];

		$destino = $_SERVER['DOCUMENT_ROOT'] . '/sonrisa/img/';

		move_uploaded_file($_FILES['imagen']['tmp_name'], $destino.$nombre);

		$imagen = fopen($destino.$nombre, 'r');

		$imagen_read = fread($imagen, $tamaño);

		$imagen_php = addslashes($imagen_read);

		fclose($imagen);

		$filas = $resultadofecha->num_rows;
		$columnas = $resultadohora -> num_rows;

		if ($filas > 0 && $columnas > 0) {
			echo "<script> 
				alert('El turno ya existe');
				window.location = 'turnos.php';
			</script>";
			
		}else{
			$sqldate = "INSERT INTO turnos(fecha_turno, prestacion, hora, id_usuario, estado, imagen, precio) VALUES ('$fecha','$prestacion', '$hora', '$iduser', '$estado', '$imagen_php', $precio)";
			$resultadousuario = $conexion -> query($sqldate);

			if (mysqli_affected_rows($conexion) > 0) {
				echo "Se inserto con exito";
			}else{
				echo "No se pudo hacer pa";
			}

			if ($resultadousuario > 0 ) {
				echo "<script> 
				alert('Turno registrado');
				window.location = 'home.php';
				</script>";
			}else{
				echo "<script> 
				alert('Error al registrar el turno');
				window.location = 'home.php';
				</script>";
			}


		}


	}
 //img src="data:image/jpeg; base64," . base64_encode($imagen) . "'"
?>
<html class="js flexbox cssmask objectfit object-fit pc" prefix="og: https://ogp.me/ns#" lang="es"><!--<![endif]-->
<head><meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Contacto :: Consultorio Sonsrisa Feliz</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
	<meta name="msapplication-tap-highlight" content="no">
	<link href="https://d1di2lzuh97fh2.cloudfront.net/files/2z/2zf/2zf89c.css?ph=2f2d2c3c0b" rel="stylesheet">
	<link href="https://d1di2lzuh97fh2.cloudfront.net/files/0j/0jj/0jjtww.css?ph=2f2d2c3c0b" rel="stylesheet">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/0h/0hh/0hhkev.css?ph=2f2d2c3c0b" data-wnd_color_scheme_file="">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/42/42e/42e5o5.css?ph=2f2d2c3c0b" data-wnd_additive_color_file="">
	<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/2f/2f9/2f9knw.css?ph=2f2d2c3c0b" data-wnd_typography_file="">
	<meta name="description" content="Gabriel Carrasca 1646, Resistencia, Chaco, 3500">
	<meta name="keywords" content="">
	<meta name="generator" content="Webnode 2">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta property="og:url" content="https://consultorio-sonsrisa-feliz.webnode.es/contacto/">
<meta property="og:title" content="Contacto :: Consultorio Sonsrisa Feliz">
<meta property="og:type" content="article">
<meta property="og:description" content="Gabriel Carrasco 1646, Resistencia, Chaco, 3500">
<meta property="og:site_name" content="Consultorio Sonsrisa Feliz">
<meta property="og:article:published_time" content="2020-09-13T00:00:00+0200">
<meta name="robots" content="index,follow">
<link rel="canonical" href="https://consultorio-sonsrisa-feliz.webnode.es/contacto/">
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="https://kit.fontawesome.com/0266ebe944.js" crossorigin="anonymous"></script>
<script>window.checkAndChangeSvgColor=function(c){try{var a=document.getElementById(c);if(a){c=[["border","borderColor"],["outline","outlineColor"],["color","color"]];for(var h,b,d,f=[],e=0,m=c.length;e<m;e++)if(h=window.getComputedStyle(a)[c[e][1]].replace(/\s/g,"").match(/^rgb[a]?\(([0-9]{1,3}),([0-9]{1,3}),([0-9]{1,3})/i)){b="";for(var g=1;3>=g;g++)b+=("0"+parseInt(h[g],10).toString(16)).slice(-2);"0"===b.charAt(0)&&(d=parseInt(b.substr(0,2),16),d=Math.max(16,d),b=d.toString(16)+b.slice(-4));f.push(c[e][0]+"="+b)}if(f.length){var k=a.getAttribute("data-src"),l=k+(0>k.indexOf("?")?"?":"&")+f.join("&");a.src!=l&&(a.src=l,a.outerHTML=a.outerHTML)}}}catch(n){}};
</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-797705-6', 'auto',{"name":"wnd_header"});ga('wnd_header.set', 'dimension1', 'W2');ga('wnd_header.set', 'anonymizeIp', true);ga('wnd_header.send', 'pageview');
</script>
</head>

<body class="l l-05 layout-05 c-s-l wt-page b-btn-r b-btn-s-m b-btn-dn b-btn-bw-1 img-d-n img-t-u img-h-n line-solid b-e-ds lbox-d c-s-l wnd-fe desktop safari">
	<div class="wnd-page cs-sky ac-none">

		<div id="wrapper" class="l-w t-11">

			<header id="header" class="l-h">

				<div class="section-wrapper cf">
					<div class="section-wrapper-content cf">
						<div class="s section header header-07 page sc-w">
							<div class="section-bg s-bg">
								<div class="section-bg-layer">
			
								</div>
								<div class="section-bg-layer section-bg-overlay">
								
								</div>
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

			

									<nav id="menu" role="navigation" style="">
										<div class="menu-font">
											<a href="#" class="close-menu" rel="nofollow">
												<span>Close Menu</span>
											</a>
											<ul class="level-1">
												<li class="wnd-homepage"><a class="menu-item" href="index.php"><span class="menu-item-text">Inicio</span></a></li>
												<li><a class="menu-item" href="nosotros.html"><span class="menu-item-text">Sobre nosotros</span></a></li>
												<li><a class="menu-item" href="servicios.html"><span class="menu-item-text">Servicios</span></a></li>
												<li class="wnd-active wnd-active-path"><a class="menu-item" href="contacto.php"><span class="menu-item-text">Contacto</span></a></li>
												<li class="" style="">
			<a class="menu-item" href="turnos.php"><span class="menu-item-text">Turnos</span></a>
		</li>
		<li class="" style="">
			<a class="menu-item" href="logout.php"><span class="menu-item-text">Salir</span></a>
		</li>
											</ul>
											<span class="more-text">Más</span>
										</div>
									</nav>
									<div id="menu-mobile" class="">
										<a href="#" id="menu-submit"><span></span>Menú</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</header>

			<main class="l-m cf" role="main">
<div class="ez-c">
			<div class="b b-text cf">
	
				<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1 class="wnd-align-center">Registrar Turno</h1></div>
			</div>

			<div class="b form block cf typo-07">
				<form action="" method="post" enctype="multipart/form-data">

				<fieldset class="form-fieldset">
				
				<div>
					<div class="form-input form-select cf wnd-form-field wnd-required">
					<label for="field-wnd_SelectboxField_154263"><span class="it inline-text link">
					<span class="it-c">Prestacion</span>
					</span></label>
					<div class="select">
					<select id="field-wnd_SelectboxField_154263" name="prestacion" required="">
					<option value="Consulta" selected="">Consulta</option><option value="Control">Control</option><option value="Extracion">Extracción</option><option value="Urgencia">Urgencia</option><option value="Implante">Implante</option><option value="Estetica">Estética</option><option value="Ortodoncia">Ortodoncia</option>
					</select>
					</div>
					</div>
					<div class="form-input form-date cf wnd-form-field wnd-required">
						<label for="field-wnd_DateField_893023"><span class="it inline-text link">
						<span class="it-c">Fecha</span>
						</span></label>
						<input id="field-wnd_DateField_893023" name="fecha" required="" value="" type="date" placeholder="24.10.2020">
		    			<span class="datepicker-icon"></span>
					</div>
					<div class="form-input form-select cf wnd-form-field wnd-required">
						<label for="field-wnd_SelectboxField_154263"><span class="it inline-text link">
							<span class="it-c">Horario</span>
							</span>
						</label>
						<div class="select">
							<select id="field-wnd_SelectboxField_154263" name="hora" required="">
								<option value="9:00" selected="">9:00 - 10:00</option><option value="10:00">10:00 - 11:00</option><option value="11:00">11:00 - 12:00</option><option value="15:00">15:00 - 16:00</option><option value="16:00">16:00 - 17:00</option><option value="17:00">17:00 - 18:00</option>
							</select>
						</div>
					</div>
					
					<div class="form-input form-file cf wnd-form-field wnd-required">
						<label for="imagen"><span class="inline-text">
							<span class="link">Foto</span>
							</span>
						</label>
						<input name="imagen" required="" type="file" maxlength="150">
					</div>
					
				</div>
			</fieldset>
						<div class="form-submit b-btn cf b-btn-3">
										<button class="b-btn-l" type="submit" name="send" value="wnd_FormBlock_477441">
											<span class="form-submit-text b-btn-t">Enviar</span>
										</button>
									</div>
		

			</form>

</div>
</div>
				
<div class="sw section-wrapper cf">
	<div class="sw-c section-wrapper-content cf"><section class="s s-hm s-hm-hidden wnd-h-hidden cf sc-w hn-default" style=""></section>
		<section class="s s-basic cf sc-w  wnd-w-default wnd-s-normal wnd-h-auto">
			<div class="s-w">
				<div class="s-o cf">
					<div class="s-bg cf">
						<div class="s-bg-l">
					
						</div>
						<div class="s-bg-l s-bg-lo"></div>
					</div>
				<div class="s-c cf">

					<div class = "col-md-8" style="align-content: center;">
							<table class = "table table-bordered">
								<thead>
									<tr>
										<th>Fecha</th>
										<th>Horario</th>
										<th>Prestación</th>
										<th>Estado</th>
										<th>Precio</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									
										<?php
										$sqlturno = "SELECT * FROM turnos WHERE id_usuario=$iduser"; 

										$resultado_turno = mysqli_query($conexion, $sqlturno); ?>
										<?php
										 while ( $rowturno = mysqli_fetch_array($resultado_turno)) { ?>
										 	<tr>
												<td><?php echo $rowturno['fecha_turno']?></td>
												<td><?php echo $rowturno['hora']?></td>
												<td><?php echo $rowturno['prestacion']?></td>
												<td><?php echo $rowturno['estado']?></td>
												<!-- <td><?php //"<img src='data:image/png; base64," . base64_encode($rowturno['imagen']) . "'>" ?></td> -->
												<td><?php echo $rowturno['precio']?></td>
												<td>
													<a href="pagar.php">
														<i class="fas fa-credit-card"> </i>
														Pagar 
													</a>
													<a href="facturapdf.php">
														<i class="fas fa-receipt"></i>
														Factura
													</a>
												</td>
											</tr>
										 <?php } ?>
											
									
											
										
										 
										
	        
								</tbody>
							</table>
						</div>

				</div>
				</div>
			</div>
		</section>
		<section class="s s-basic cf sc-w  wnd-w-default wnd-s-normal wnd-h-auto">
	<div class="s-w">
		<div class="s-o cf">
			<div class="s-bg cf">
				<div class="s-bg-l">
					
				</div>
				<div class="s-bg-l s-bg-lo"></div>
			</div>
			<div class="s-c cf">
				<div class="content ez cf">
	<div class="ez-c"><div class="column-wrapper cw cf">
	<div class="cw-c cf"><div class="column-content c cf pr pr-0" style="width:50%;">
	<div class="c-c cf"><div class="mt mt-2 mt-2-s mt-sans mt-price cf typo-07">
    <div class="mt-c cf">
        <div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Consulta</h3>

<p>Consulta</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>250 ARS</h3>
</div>
</div>
	        </div>
        </div><div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Extracción</h3>

<p>Extracción de un diente/muela</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>&nbsp;400 ARS</h3>
</div>
</div>
	        </div>
        </div><div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Implante</h3>

<p>Trabajo completo</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>1000 ARS</h3>
</div>
</div>
	        </div>
        </div><div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Ortodoncia</h3>

<p>Por sesión</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>600 ARS</h3>
</div>
</div>
	        </div>
        </div>
    </div>
</div></div>
</div><div class="column-content c cf pr pr-0" style="width:50%;">
	<div class="c-c cf"><div class="mt mt-2 mt-2-s mt-sans mt-price cf typo-07">
    <div class="mt-c cf">
        <div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Control</h3>

<p>Control de rutina</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>350 ARS</h3>
</div>
</div>
	        </div>
        </div><div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Urgencia</h3>

<p>Fuera del control rutinario</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>200 ARS</h3>
</div>
</div>
	        </div>
        </div><div class="mt-i cf">
	        <div class="mt-i-c mt-border line-color cf">
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>Estética</h3>

<p>Trabajo completo</p>
</div>
</div>
		        <div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h3>2000 ARS</h3>
</div>
</div>
	        </div>
        </div>
    </div>
</div></div>
</div></div>
</div></div>
</div>
			</div>
		</div>
	</div>
</section></div>
</div>
			</main>

<footer id="footer" class="l-f">

				<div class="section-wrapper cf">
					<div class="section-wrapper-content cf">
						<section wn-border="top" wn-border-element="footer-line" class="s section footer-02 footer-font typo-07 sc-w">
							<div class="section-bg s-bg">
								<div class="section-bg-layer">
			
								</div>
								<div class="section-bg-layer section-bg-overlay"></div>
								</div>
								<div class="section-inner">
									<div class="footer-line cf border-top">
										<div class="footer-column footer-left cf">
											<span class="inline-text">
												<span>Consultorio Sonrisa Feliz |&nbsp;Creative Software Develop 2020</span>
											</span><br>
	
										</div>
										<div class="footer-column footer-right cf">
											<div class="lang-select cf">
											</div>
										</div>
									</div>
								</div>
						</section>
					</div>
				</div>
</footer>

		</div>

	</div>

	
	<div id="wnd_footer">
		<style type="text/css">#wnd_footer {display: block; box-sizing: border-box; text-align: center; overflow: hidden; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; position: relative; width: 100%; font-family: Arial, Roboto, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 15px; line-height: 1.5; background-color: rgba(0, 0, 0, 0.7);}#wnd_footer a {color: #fff; text-decoration: none; display: inline-block;}#wnd_footer_left {width: 100%;}#wnd_footer_left_wrapper {padding: 12px 12px 6px;}#wnd_footer_right {width: 100%;}#wnd_footer_right_wrapper {padding: 6px 12px 14px;}#wnd_footer_logo {background: url(https://d1di2lzuh97fh2.cloudfront.net/client/img/wnd-logo2.svg?ph=2f2d2c3c0b) no-repeat; display: inline-block; width: 103px; height: 20px; opacity: .83;}#wnd_footer_logo b {opacity: 0;}@media only screen and (min-width: 480px) {#wnd_footer_left {float: left; min-height: 60px; width: auto; display: table;}#wnd_footer_left_wrapper {text-align: left; padding: 8px 160px 8px 12px; display: table-cell; vertical-align: middle;}#wnd_footer_right {position: absolute; top: 0; left: auto; right: 12px; bottom: 0; width: auto;}#wnd_footer_right_wrapper {text-align: right; padding: 19px 0;}}@media only screen and (min-width: 768px) {#wnd_footer_left_wrapper {padding: 16px 160px 16px 20px;}#wnd_footer_right {right: 20px;}}@media only screen and (min-width: 1200px) {#wnd_footer_left_wrapper {padding-left: 30px;}#wnd_footer_right {right: 30px;}}@media print {#wnd_footer style {display: none !important;}}
		</style>
		<div id="wnd_footer_left">
			
		</div>
		<script type="application/javascript">!function(){if(0==document.getElementsByClassName("wnd-cms").length)for(var e=document.getElementsByClassName("column-content"),s=0;s<e.length;s++){var t=e[s].querySelector("div"),l=t.getElementsByClassName("b-text-c");void 0!=l[0]&&t.firstChild==t.lastChild&&""===l[0].innerText&&(e[s].classList?e[s].classList.add("column-empty"):(e[s].classList?e[s].classList.contains("column-empty"):new RegExp("\\bcolumn-empty\\b").test(e[s].className))&&(e[s].className+=" column-empty"))}}()
		</script>
		<script type="text/javascript" src="https://d1di2lzuh97fh2.cloudfront.net/files/20/20m/20mjyx.js?ph=2f2d2c3c0b">
			
		</script>
		<script src="https://d1di2lzuh97fh2.cloudfront.net/client.fe/js.compiled/lang.es.230.js?ph=2f2d2c3c0b" crossorigin="anonymous">
			
		</script>
		<script src="https://d1di2lzuh97fh2.cloudfront.net/client.fe/js.compiled/compiled.multi.2-766.js?ph=2f2d2c3c0b" crossorigin="anonymous">
			
		</script>
		<script>var wnd = wnd || {};wnd.$data = {"image_content_items":{"wnd_ThumbnailBlock_130935":{"id":"wnd_ThumbnailBlock_130935","type":"wnd.pc.ThumbnailBlock"},"wnd_Section_default_901719":{"id":"wnd_Section_default_901719","type":"wnd.pc.Section"},"wnd_HeaderSection_header_887193":{"id":"wnd_HeaderSection_header_887193","type":"wnd.pc.HeaderSection"},"wnd_LogoBlock_823393":{"id":"wnd_LogoBlock_823393","type":"wnd.pc.LogoBlock"},"wnd_FooterSection_footer_623012":{"id":"wnd_FooterSection_footer_623012","type":"wnd.pc.FooterSection"}},"svg_content_items":{"wnd_LogoBlock_823393":{"id":"wnd_LogoBlock_823393","type":"wnd.pc.LogoBlock"}},"content_items":[],"project_info":{"isMultilanguage":false,"eshop_tax_enabled":"1","country_code":"","contact_state":"","eshop_tax_type":"VAT","eshop_discounts":false}};
		</script>
		<script>wnd.$system = {"filesPath":"https:\/\/consultorio-sonsrisa-feliz.webnode.es\/_files\/","staticFiles":"https:\/\/d1di2lzuh97fh2.cloudfront.net\/files","isCms":false,"staticCDNServers":["https:\/\/d1di2lzuh97fh2.cloudfront.net\/"],"fileUploadAllowExtension":["jpg","jpeg","png","gif","bmp","ico","svg","webp","tiff","pdf","doc","docx","ppt","pptx","pps","ppsx","odt","xls","xlsx","txt","rtf","mp3","wma","wav","ogg","amr","flac","m4a","3gp","avi","wmv","mov","mpg","mkv","mp4","mpeg","m4v","swf","gpx","stl","csv","xml","txt","dxf","dwg","iges","igs","step","stp"],"maxUserFormFileLimit":4194304,"frontendLanguage":"es","backendLanguage":"es","page":{"id":200000028,"identifier":"contacto","template":{"id":200000002,"styles":{"typography":"t-11","scheme":"cs-sky","additiveColor":"ac-none","acHeadings":false,"acSubheadings":false,"acIcons":false,"acOthers":false,"imageStyle":"img-d-n","imageHover":"img-h-n","imageTitle":"img-t-u","buttonStyle":"b-btn-r","buttonSize":"b-btn-s-m","buttonDecoration":"b-btn-dn","buttonBorders":"b-btn-bw-1","lineStyle":"line-solid","eshopGridItemStyle":"b-e-ds","lightboxStyle":"lbox-d","columnSpaces":"c-s-l","background":{"default":null},"backgroundSettings":{"default":""}}},"layout":"default","name":"Contacto","html_title":"","language":"es","langId":1,"isHomepage":false,"meta_description":null,"meta_keywords":null,"header_code":null,"footer_code":null,"styles":[],"countFormsEntries":[]},"listingsPrefix":"\/l\/","productPrefix":"\/p\/","cartPrefix":"\/cart\/","checkoutPrefix":"\/checkout\/","isCheckout":false,"isEshop":false,"isProductDetail":false,"isListingDetail":false,"hasEshopAnalytics":false,"gTagId":null,"currency":"USD","format":{"be":{"DATE_TIME":{"mask":"%d.%m.%Y %H:%M","regexp":"^(((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})(( [0-1][0-9]| 2[0-3]):[0-5][0-9])?|(([0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1,2][0-9]|3[0,1])(0[0-9]|1[0-9]|2[0-3])[0-5][0-9][0-5][0-9])))?$"},"DATE":{"mask":"%d.%m.%Y","regexp":"^((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})$"},"CURRENCY":{"mask":{"point":",","thousands":".","decimals":2,"mask":"%s","zerofill":true}}},"fe":{"DATE_TIME":{"mask":"%d.%m.%Y %H:%M","regexp":"^(((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})(( [0-1][0-9]| 2[0-3]):[0-5][0-9])?|(([0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1,2][0-9]|3[0,1])(0[0-9]|1[0-9]|2[0-3])[0-5][0-9][0-5][0-9])))?$"},"DATE":{"mask":"%d.%m.%Y","regexp":"^((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})$"},"CURRENCY":{"mask":{"point":",","thousands":".","decimals":2,"mask":"%s","zerofill":true}}}},"e_product":null,"listing_item":null,"labels":{"wnd.fe.CheckoutZipField.brInvalid":"Please enter valid ZIP code in format XXXXX-XXX","wnd.fe.CookieBar.message":"Esta p\u00e1gina web utiliza Cookies para funcionar correctamente y mejorar tu experiencia de uso. Si continuas navegando por la web, estar\u00e1s aceptando nuestra pol\u00edtica de privacidad.","wnd.fe.FeFooter.createWebsite":"\u00a1Crea tu p\u00e1gina web gratis!","wnd.fe.FormManager.error.file.notAllowedExtension":"La extensi\u00f3n \u0022{EXTENSION}\u0022 no est\u00e1 permitida.","wnd.fe.FormManager.error.file.required":"Por favor, elige el archivo que deseas subir.","wnd.fe.FormManager.error.file.sizeExceeded":"El tama\u00f1o m\u00e1ximo permitido para el archivo subido es de {SIZE} MB.","wnd.fe.FormManager.error.userChangePassword":"Las contrase\u00f1as no coinciden","wnd.fe.FormManager.error.userLogin.inactiveAccount":"Tu registro no ha sido confirmado, a\u00fan no puedes acceder.","wnd.fe.FormManager.error.userLogin.invalidLogin":"\u00a1Correo y\/o contrase\u00f1a incorrectos!","wnd.fe.ListingData.shortMonthName.Apr":"Abril","wnd.fe.ListingData.shortMonthName.Aug":"Agosto","wnd.fe.ListingData.shortMonthName.Dec":"Diciembre","wnd.fe.ListingData.shortMonthName.Feb":"Febrero","wnd.fe.ListingData.shortMonthName.Jan":"Enero","wnd.fe.ListingData.shortMonthName.Jul":"Julio","wnd.fe.ListingData.shortMonthName.Jun":"Junio","wnd.fe.ListingData.shortMonthName.Mar":"Marzo","wnd.fe.ListingData.shortMonthName.May":"Mayo","wnd.fe.ListingData.shortMonthName.Nov":"Noviembre","wnd.fe.ListingData.shortMonthName.Oct":"Octubre","wnd.fe.ListingData.shortMonthName.Sep":"Septiembre","wnd.fe.ShoppingCartManager.count.between2And4":"{COUNT} art\u00edculos","wnd.fe.ShoppingCartManager.count.moreThan5":"{COUNT} art\u00edculos","wnd.fe.ShoppingCartManager.count.one":"{COUNT} art\u00edculo","wnd.fe.ShoppingCartTable.label.itemsInStock":"Only {COUNT} pcs available in stock","wnd.fe.ShoppingCartTable.label.itemsInStock.between2And4":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.itemsInStock.moreThan5":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.itemsInStock.one":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.outOfStock":"Agotado","wnd.fe.UserBar.logOut":"Salir","wnd.pc.BlogDetailPageZone.next":"Art\u00edculos recientes","wnd.pc.BlogDetailPageZone.previous":"Art\u00edculos antiguos","wnd.pc.FileBlock.download":"DESCARGAR","wnd.pc.FormBlock.action.defaultMessage.text":"El formulario se ha enviado con \u00e9xito.","wnd.pc.FormBlock.action.defaultMessage.title":"\u00a1Muchas gracias!","wnd.pc.ListingDetailPageZone.next":"Siguiente","wnd.pc.ListingDetailPageZone.previous":"Anterior","wnd.pc.ListingItemCopy.namePrefix":"Copia de","wnd.pc.Option.defaultText":"Otra opci\u00f3n m\u00e1s","wnd.pc.PageCopy.namePrefix":"Copia de","wnd.pc.ProductAddToCartBlock.addToCart":"A\u00f1adir a la cesta","wnd.pc.ProductItem.button.viewDetail":"P\u00e1gina del producto","wnd.pc.ProductOptionGroupBlock.notSelected":"Ninguna variante seleccionada","wnd.pc.ProductOutOfStockBlock.label":"Agotado","wnd.pc.ProductPriceBlock.prefixText":"Desde ","wnd.pc.ProductPriceBlock.suffixText":"","wnd.pc.ProductsZone.label.collections":"Categor\u00edas","wnd.pc.ProductsZoneModel.label.allCollections":"Todos los productos","wnd.pc.ShoppingCartTable.label.checkout":"Pagar","wnd.pc.ShoppingCartTable.label.checkoutDisabled":"El pago no est\u00e1 disponible en este momento (no hay m\u00e9todos de env\u00edo o de pago)","wnd.pc.ShoppingCartTable.label.continue":"Seguir comprando","wnd.pc.ShoppingCartTable.label.delete":"Eliminar","wnd.pc.ShoppingCartTable.label.item":"Producto","wnd.pc.ShoppingCartTable.label.price":"Precio","wnd.pc.ShoppingCartTable.label.quantity":"Cantidad","wnd.pc.ShoppingCartTable.label.sum":"Total","wnd.pc.ShoppingCartTable.label.totalPrice":"Total","wnd.pc.ShoppingCartTable.placeholder.text":"\u00a1C\u00e1mbialo! Elige algo y vuelve aqu\u00ed.","wnd.pc.ShoppingCartTable.placeholder.title":"Tu cesta est\u00e1 vac\u00eda.","wnd.pc.SystemFooterBlock.poweredByWebnode":"Creado con {START_LINK}Webnode{END_LINK}","wnd.pc.UserChangePasswordFormBlock.invalidRecoveryUrl":"El enlace para restaurar tu contrase\u00f1a ha expirado. Para obtener un nuevo enlace ve a la p\u00e1gina {START_LINK}Forgotten password{END_LINK}","wnd.pc.UserRecoveryFormBlock.action.defaultMessage.text":"El enlace que te permite cambiar tu contrase\u00f1a ha sido enviado a tu bandeja de entrada. Si no has recibido este email por favor revisar tu bandeja de correo no deseados.","wnd.pc.UserRecoveryFormBlock.action.defaultMessage.title":"Un email con las instrucciones ha sido enviado.","wnd.pc.UserRegistrationFormBlock.action.defaultMessage.text":"Tu registro esta en espera de aprobaci\u00f3n. Cuando el mismo sea confirmado te informaremos v\u00eda correo.","wnd.pc.UserRegistrationFormBlock.action.defaultMessage.title":"Gracias por registrarte en nuestra p\u00e1gina web.","wnd.pm.AddNewPagePattern.onlineStore":"Tienda Online"},"kbLinks":{"faq":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/404\/","domainRegistration":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/3505\/","domainTransfer":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/1578\/","webmailLogin":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/272\/","webmail":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/410\/","introduction":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/2004\/","orderTracking":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/5045\/","storageBandwidth":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/573\/","subPage":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/3308\/","eshopPromo":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/58\/","eshopPromoVariants":"https:\/\/www.webnode.com\/blog\/2018\/09\/variants-are-here-sell-your-products-in-all-sizes-colors-or-flavors\/","eshopDiscounts":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/5486","domainBirthdateInfo":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/150\/","skRegistration":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/228\/","euTransfer":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/230\/","import":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/5157\/","checkoutFi":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/5392\/","emailAccounts":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/3211\/","freightPriceSettings":"https:\/\/www.webnode.co.uk\/support\/index.php?\/Knowledgebase\/Article\/View\/5659\/"},"aviary":[]};
	</script>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
			<div class="pswp__scroll-wrap">
				<div class="pswp__container">
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
				</div>
				<div class="pswp__ui pswp__ui--hidden">
					<div class="pswp__top-bar">
						<div class="pswp__counter"></div>
						<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
						<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
						<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
						<div class="pswp__preloader">
							<div class="pswp__preloader__icn">
								<div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
						<div class="pswp__share-tooltip"></div>
					</div>
					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
					<div class="pswp__caption">
						<div class="pswp__caption__center"></div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	</body>
</html>
