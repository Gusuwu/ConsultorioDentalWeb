<?php
	include('conexion.php');
	
	session_start();
	if(!isset($_SESSION['id_usuario'])){
		header("Location: nosotros.html");
	}	
	$iduser = $_SESSION['id_usuario'];

	$sql = "SELECT id, nombre FROM usuario WHERE id = '$iduser'";
	$resultado = $conexion -> query($sql);
	$row = $resultado->fetch_assoc();

?>

<html class="js flexbox cssmask objectfit object-fit pc" prefix="og: https://ogp.me/ns#" lang="es"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Sobre nosotros :: Consultorio Sonsrisa Feliz</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
		<meta name="msapplication-tap-highlight" content="no">
		<link href="https://d1di2lzuh97fh2.cloudfront.net/files/2z/2zf/2zf89c.css?ph=2f2d2c3c0b" rel="stylesheet">
		<link href="https://d1di2lzuh97fh2.cloudfront.net/files/0j/0jj/0jjtww.css?ph=2f2d2c3c0b" rel="stylesheet">
		<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/0h/0hh/0hhkev.css?ph=2f2d2c3c0b" data-wnd_color_scheme_file="">
		<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/42/42e/42e5o5.css?ph=2f2d2c3c0b" data-wnd_additive_color_file="">
		<link rel="stylesheet" href="https://d1di2lzuh97fh2.cloudfront.net/files/2f/2f9/2f9knw.css?ph=2f2d2c3c0b" data-wnd_typography_file="">
		<meta name="description" content="Te ofrece tratamientos de alta calidad. Ponemos a tu disposición en la ciudad de RESISTENCIA - CHACO un equipo de odontólogos altamente especializados para cumplir con tus expectativas. Si estás preocupado por tu SALUD y ESTÉTICA DENTAL este es el lugar que estabas buscando.">
		<meta name="keywords" content="">
		<meta name="generator" content="Webnode 2">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">

<meta property="og:url" content="https://consultorio-sonsrisa-feliz.webnode.es/sobre-nosotros/">
<meta property="og:title" content="Sobre nosotros :: Consultorio Sonsrisa Feliz">
<meta property="og:type" content="article">
<meta property="og:description" content="Te ofrece tratamientos de alta calidad. Ponemos a tu disposición en la ciudad de RESISTENCIA - CHACO un equipo de odontólogos altamente especializados para cumplir con tus expectativas. Si estás preocupado por tu SALUD y ESTÉTICA DENTAL este es el lugar que estabas buscando.">
<meta property="og:site_name" content="Consultorio Sonsrisa Feliz">
<meta property="og:image" content="https://d1di2lzuh97fh2.cloudfront.net/files/4a/4aa/700/4aanlk.jpg?ph=2f2d2c3c0b">
<meta property="og:article:published_time" content="2020-09-13T00:00:00+0200">
<meta name="robots" content="index,follow">
<link rel="canonical" href="https://consultorio-sonsrisa-feliz.webnode.es/sobre-nosotros/">
<script async="" src="//www.google-analytics.com/analytics.js"></script><script>window.checkAndChangeSvgColor=function(c){try{var a=document.getElementById(c);if(a){c=[["border","borderColor"],["outline","outlineColor"],["color","color"]];for(var h,b,d,f=[],e=0,m=c.length;e<m;e++)if(h=window.getComputedStyle(a)[c[e][1]].replace(/\s/g,"").match(/^rgb[a]?\(([0-9]{1,3}),([0-9]{1,3}),([0-9]{1,3})/i)){b="";for(var g=1;3>=g;g++)b+=("0"+parseInt(h[g],10).toString(16)).slice(-2);"0"===b.charAt(0)&&(d=parseInt(b.substr(0,2),16),d=Math.max(16,d),b=d.toString(16)+b.slice(-4));f.push(c[e][0]+"="+b)}if(f.length){var k=a.getAttribute("data-src"),l=k+(0>k.indexOf("?")?"?":"&")+f.join("&");a.src!=l&&(a.src=l,a.outerHTML=a.outerHTML)}}}catch(n){}};</script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-797705-6', 'auto',{"name":"wnd_header"});ga('wnd_header.set', 'dimension1', 'W2');ga('wnd_header.set', 'anonymizeIp', true);ga('wnd_header.send', 'pageview');</script></head><body class="l l-05 layout-05 c-s-l wt-page b-btn-r b-btn-s-m b-btn-dn b-btn-bw-1 img-d-n img-t-u img-h-n line-solid b-e-ds lbox-d c-s-l wnd-fe desktop safari">
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
			<a class="menu-item" href="home.php"><span class="menu-item-text">Inicio</span></a>
			
		</li><li class="wnd-active wnd-active-path">
			<a class="menu-item" href="nosotros.php"><span class="menu-item-text">Sobre nosotros</span></a>
			
		</li><li>
			<a class="menu-item" href="servicios.php"><span class="menu-item-text">Servicios</span></a>
			
			
		</li><li>
			<a class="menu-item" href="contacto.php"><span class="menu-item-text">Contacto</span></a>
			
		</li>
		<li class="" style="">
			<a class="menu-item" href="turnos.php"><span class="menu-item-text">Turnos</span></a>
		</li>
		<li class="" style="">
			<a class="menu-item" href="logout.php"><span class="menu-item-text">Salir</span></a>
		</li>
	</ul><span class="more-text">Más</span>
</div></nav><div id="menu-mobile" class="">
				<a href="#" id="menu-submit"><span></span>Menú</a>
			</div>
		</div>
	</div>
</div></div>
</div>

			</header><main id="main" class="l-m" role="main">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><section class="s section default-01 default sc-w"><div class="section-bg s-bg">
		<div class="section-bg-layer">
			
		</div>
		<div class="section-bg-layer section-bg-overlay"></div>
	</div>
	<div class="section-inner">
		<div class="content ez cf">
	<div class="ez-c"><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1 class="wnd-align-center" id="wnd_TextBlock_785919_inner_0" data-wnd_is_separable="1" data-wnd_separable_index="0" data-wnd_separable_id="wnd_TextBlock_785919">La clínica</h1>

<h3 id="wnd_TextBlock_785919_inner_1" data-wnd_is_separable="1" data-wnd_separable_index="1" data-wnd_separable_id="wnd_TextBlock_785919">Te ofrece tratamientos de alta calidad. Ponemos a tu disposición en la ciudad de RESISTENCIA - CHACO un equipo de odontólogos altamente especializados para cumplir con tus expectativas. Si estás preocupado por tu SALUD y ESTÉTICA DENTAL este es el lugar que estabas buscando.</h3>


</div>
</div><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1>Acerca de nosotros</h1><p>Somos profesionales de la salud que buscamos la precisión en cada diagnóstico y la excelencia en cada tratamiento. La esencia de nuestra labor diaria es la pasión por lo que hacemos, unida a la calidez y el afecto generando un estrecho vínculo con el paciente y su familia.<br>Nuestra atención combina trayectoria profesional, calidad en los procedimientos y tecnología de avanzada para recuperar la salud y lograr una mejor calidad de vida.</p></div>
</div><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf"><h1>Nuestras instalaciones</h1><p>Nuestros consultorios están desarrollados y diseñados de acuerdo a su función específica: un consultorio para la atención del paciente pediátrico y un consultorio odontológico. Ambos poseen vistas a espacios verdes con abundante luz natural, indispensable para las actividades que realizamos.<br>La ambientación de nuestras áreas de espera está pensada para lograr un momento de relax, con iluminación suave, música calma y aromatización delicada del ambiente, con sanitarios equipados con cambiadores para bebés y productos de higiene.</p></div>
</div><div class="b b-text cf">
	<div class="b-c b-text-c b-s b-s-t60 b-s-b60 cf">



<p class="wnd-align-justify wnd-offset-5" id="wnd_TextBlock_785919_inner_2" data-wnd_is_separable="1" data-wnd_separable_index="2" data-wnd_separable_id="wnd_TextBlock_785919">&nbsp;</p>
</div>
</div><div class="column-wrapper cw cf">
	<div class="cw-c c-s-hc cf"><div class="column-content c pr cf pr-0 pr-320" style="width:50%;">
	<div class="c-c c-s-h cf"><div class="b-img b-img-default b b-s cf wnd-orientation-landscape wnd-type-image img-s-n" style="margin-left:0;margin-right:0;" id="wnd_ImageBlock_352741">
    <div class="b-img-w">
        <div class="b-img-c cf" style="padding-bottom:37%;text-align:center;">
            <img src="https://d1di2lzuh97fh2.cloudfront.net/files/4a/4aa/450/4aanlk.jpg?ph=2f2d2c3c0b" alt="" style="top:-45.91%;left:0%;width:100%;height:191.8125%;position:absolute;"><div class="b-img-embed">
                </div>
        </div>

        <div class="b-img-t"></div>
    </div>
</div></div>
</div><div class="column-content c pr cf pr-0 pr-320" style="width:50%;">
	<div class="c-c c-s-h cf"><div class="b-img b-img-default b b-s cf wnd-orientation-landscape wnd-type-image img-s-n" style="margin-left:0;margin-right:0;" id="wnd_ImageBlock_823150">
    <div class="b-img-w">
        <div class="b-img-c cf" style="padding-bottom:57.54%;text-align:center;">
            <img src="https://d1di2lzuh97fh2.cloudfront.net/files/0r/0r2/450/0r21io.jpg?ph=2f2d2c3c0b" alt="" style="top:-11.68%;left:0%;width:100%;height:123.35209003215%;position:absolute;"><div class="b-img-embed">
                </div>
        </div>

        <div class="b-img-t"></div>
    </div>
</div></div>
</div></div>
</div><div class="b b-s b-hr-line c-s-v">
	<hr class="line-style line-color">
</div></div>
</div>
	</div>
</section></div>
</div>

			</main><footer id="footer" class="l-f">

				<div class="section-wrapper cf">
	<div class="section-wrapper-content cf"><section wn-border="top" wn-border-element="footer-line" class="s section footer-02 footer-font typo-07 sc-w"><div class="section-bg s-bg">
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
				<span class="sf">

</span>
			</div>
			<div class="footer-column footer-right cf">
				<div class="lang-select cf">
	
</div>
			</div>
		</div>
	</div>
</section></div>
</div>

			</footer></div>

	</div>

	
<div id="wnd_footer"><style type="text/css">#wnd_footer {display: block; box-sizing: border-box; text-align: center; overflow: hidden; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; position: relative; width: 100%; font-family: Arial, Roboto, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 15px; line-height: 1.5; background-color: rgba(0, 0, 0, 0.7);}#wnd_footer a {color: #fff; text-decoration: none; display: inline-block;}#wnd_footer_left {width: 100%;}#wnd_footer_left_wrapper {padding: 12px 12px 6px;}#wnd_footer_right {width: 100%;}#wnd_footer_right_wrapper {padding: 6px 12px 14px;}#wnd_footer_logo {background: url(https://d1di2lzuh97fh2.cloudfront.net/client/img/wnd-logo2.svg?ph=2f2d2c3c0b) no-repeat; display: inline-block; width: 103px; height: 20px; opacity: .83;}#wnd_footer_logo b {opacity: 0;}@media only screen and (min-width: 480px) {#wnd_footer_left {float: left; min-height: 60px; width: auto; display: table;}#wnd_footer_left_wrapper {text-align: left; padding: 8px 160px 8px 12px; display: table-cell; vertical-align: middle;}#wnd_footer_right {position: absolute; top: 0; left: auto; right: 12px; bottom: 0; width: auto;}#wnd_footer_right_wrapper {text-align: right; padding: 19px 0;}}@media only screen and (min-width: 768px) {#wnd_footer_left_wrapper {padding: 16px 160px 16px 20px;}#wnd_footer_right {right: 20px;}}@media only screen and (min-width: 1200px) {#wnd_footer_left_wrapper {padding-left: 30px;}#wnd_footer_right {right: 30px;}}@media print {#wnd_footer style {display: none !important;}}</style><div id="wnd_footer_left"></div><script type="application/javascript">!function(){if(0==document.getElementsByClassName("wnd-cms").length)for(var e=document.getElementsByClassName("column-content"),s=0;s<e.length;s++){var t=e[s].querySelector("div"),l=t.getElementsByClassName("b-text-c");void 0!=l[0]&&t.firstChild==t.lastChild&&""===l[0].innerText&&(e[s].classList?e[s].classList.add("column-empty"):(e[s].classList?e[s].classList.contains("column-empty"):new RegExp("\\bcolumn-empty\\b").test(e[s].className))&&(e[s].className+=" column-empty"))}}()</script><script type="text/javascript" src="https://d1di2lzuh97fh2.cloudfront.net/files/20/20m/20mjyx.js?ph=2f2d2c3c0b"></script><script src="https://d1di2lzuh97fh2.cloudfront.net/client.fe/js.compiled/lang.es.230.js?ph=2f2d2c3c0b" crossorigin="anonymous"></script><script src="https://d1di2lzuh97fh2.cloudfront.net/client.fe/js.compiled/compiled.multi.2-766.js?ph=2f2d2c3c0b" crossorigin="anonymous"></script><script>var wnd = wnd || {};wnd.$data = {"image_content_items":{"wnd_ThumbnailBlock_130935":{"id":"wnd_ThumbnailBlock_130935","type":"wnd.pc.ThumbnailBlock"},"wnd_Section_default_760160":{"id":"wnd_Section_default_760160","type":"wnd.pc.Section"},"wnd_ImageBlock_352741":{"id":"wnd_ImageBlock_352741","type":"wnd.pc.ImageBlock"},"wnd_ImageBlock_823150":{"id":"wnd_ImageBlock_823150","type":"wnd.pc.ImageBlock"},"wnd_HeaderSection_header_887193":{"id":"wnd_HeaderSection_header_887193","type":"wnd.pc.HeaderSection"},"wnd_LogoBlock_823393":{"id":"wnd_LogoBlock_823393","type":"wnd.pc.LogoBlock"},"wnd_FooterSection_footer_623012":{"id":"wnd_FooterSection_footer_623012","type":"wnd.pc.FooterSection"}},"svg_content_items":{"wnd_ImageBlock_352741":{"id":"wnd_ImageBlock_352741","type":"wnd.pc.ImageBlock"},"wnd_ImageBlock_823150":{"id":"wnd_ImageBlock_823150","type":"wnd.pc.ImageBlock"},"wnd_LogoBlock_823393":{"id":"wnd_LogoBlock_823393","type":"wnd.pc.LogoBlock"}},"content_items":[],"project_info":{"isMultilanguage":false,"eshop_tax_enabled":"1","country_code":"","contact_state":"","eshop_tax_type":"VAT","eshop_discounts":false}};</script><script>wnd.$system = {"filesPath":"https:\/\/consultorio-sonsrisa-feliz.webnode.es\/_files\/","staticFiles":"https:\/\/d1di2lzuh97fh2.cloudfront.net\/files","isCms":false,"staticCDNServers":["https:\/\/d1di2lzuh97fh2.cloudfront.net\/"],"fileUploadAllowExtension":["jpg","jpeg","png","gif","bmp","ico","svg","webp","tiff","pdf","doc","docx","ppt","pptx","pps","ppsx","odt","xls","xlsx","txt","rtf","mp3","wma","wav","ogg","amr","flac","m4a","3gp","avi","wmv","mov","mpg","mkv","mp4","mpeg","m4v","swf","gpx","stl","csv","xml","txt","dxf","dwg","iges","igs","step","stp"],"maxUserFormFileLimit":4194304,"frontendLanguage":"es","backendLanguage":"es","page":{"id":200000020,"identifier":"sobre-nosotros","template":{"id":200000002,"styles":{"typography":"t-11","scheme":"cs-sky","additiveColor":"ac-none","acHeadings":false,"acSubheadings":false,"acIcons":false,"acOthers":false,"imageStyle":"img-d-n","imageHover":"img-h-n","imageTitle":"img-t-u","buttonStyle":"b-btn-r","buttonSize":"b-btn-s-m","buttonDecoration":"b-btn-dn","buttonBorders":"b-btn-bw-1","lineStyle":"line-solid","eshopGridItemStyle":"b-e-ds","lightboxStyle":"lbox-d","columnSpaces":"c-s-l","background":{"default":null},"backgroundSettings":{"default":""}}},"layout":"default","name":"Sobre nosotros","html_title":"","language":"es","langId":1,"isHomepage":false,"meta_description":null,"meta_keywords":null,"header_code":null,"footer_code":null,"styles":[],"countFormsEntries":[]},"listingsPrefix":"\/l\/","productPrefix":"\/p\/","cartPrefix":"\/cart\/","checkoutPrefix":"\/checkout\/","isCheckout":false,"isEshop":false,"isProductDetail":false,"isListingDetail":false,"hasEshopAnalytics":false,"gTagId":null,"currency":"USD","format":{"be":{"DATE_TIME":{"mask":"%d.%m.%Y %H:%M","regexp":"^(((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})(( [0-1][0-9]| 2[0-3]):[0-5][0-9])?|(([0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1,2][0-9]|3[0,1])(0[0-9]|1[0-9]|2[0-3])[0-5][0-9][0-5][0-9])))?$"},"DATE":{"mask":"%d.%m.%Y","regexp":"^((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})$"},"CURRENCY":{"mask":{"point":",","thousands":".","decimals":2,"mask":"%s","zerofill":true}}},"fe":{"DATE_TIME":{"mask":"%d.%m.%Y %H:%M","regexp":"^(((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})(( [0-1][0-9]| 2[0-3]):[0-5][0-9])?|(([0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1,2][0-9]|3[0,1])(0[0-9]|1[0-9]|2[0-3])[0-5][0-9][0-5][0-9])))?$"},"DATE":{"mask":"%d.%m.%Y","regexp":"^((0?[1-9]|[1,2][0-9]|3[0,1])\\.(0?[1-9]|1[0-2])\\.[0-9]{1,4})$"},"CURRENCY":{"mask":{"point":",","thousands":".","decimals":2,"mask":"%s","zerofill":true}}}},"e_product":null,"listing_item":null,"labels":{"wnd.fe.CheckoutZipField.brInvalid":"Please enter valid ZIP code in format XXXXX-XXX","wnd.fe.CookieBar.message":"Esta p\u00e1gina web utiliza Cookies para funcionar correctamente y mejorar tu experiencia de uso. Si continuas navegando por la web, estar\u00e1s aceptando nuestra pol\u00edtica de privacidad.","wnd.fe.FeFooter.createWebsite":"\u00a1Crea tu p\u00e1gina web gratis!","wnd.fe.FormManager.error.file.notAllowedExtension":"La extensi\u00f3n \u0022{EXTENSION}\u0022 no est\u00e1 permitida.","wnd.fe.FormManager.error.file.required":"Por favor, elige el archivo que deseas subir.","wnd.fe.FormManager.error.file.sizeExceeded":"El tama\u00f1o m\u00e1ximo permitido para el archivo subido es de {SIZE} MB.","wnd.fe.FormManager.error.userChangePassword":"Las contrase\u00f1as no coinciden","wnd.fe.FormManager.error.userLogin.inactiveAccount":"Tu registro no ha sido confirmado, a\u00fan no puedes acceder.","wnd.fe.FormManager.error.userLogin.invalidLogin":"\u00a1Correo y\/o contrase\u00f1a incorrectos!","wnd.fe.ListingData.shortMonthName.Apr":"Abril","wnd.fe.ListingData.shortMonthName.Aug":"Agosto","wnd.fe.ListingData.shortMonthName.Dec":"Diciembre","wnd.fe.ListingData.shortMonthName.Feb":"Febrero","wnd.fe.ListingData.shortMonthName.Jan":"Enero","wnd.fe.ListingData.shortMonthName.Jul":"Julio","wnd.fe.ListingData.shortMonthName.Jun":"Junio","wnd.fe.ListingData.shortMonthName.Mar":"Marzo","wnd.fe.ListingData.shortMonthName.May":"Mayo","wnd.fe.ListingData.shortMonthName.Nov":"Noviembre","wnd.fe.ListingData.shortMonthName.Oct":"Octubre","wnd.fe.ListingData.shortMonthName.Sep":"Septiembre","wnd.fe.ShoppingCartManager.count.between2And4":"{COUNT} art\u00edculos","wnd.fe.ShoppingCartManager.count.moreThan5":"{COUNT} art\u00edculos","wnd.fe.ShoppingCartManager.count.one":"{COUNT} art\u00edculo","wnd.fe.ShoppingCartTable.label.itemsInStock":"Only {COUNT} pcs available in stock","wnd.fe.ShoppingCartTable.label.itemsInStock.between2And4":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.itemsInStock.moreThan5":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.itemsInStock.one":"S\u00f3lo {COUNT} uds disponibles","wnd.fe.ShoppingCartTable.label.outOfStock":"Agotado","wnd.fe.UserBar.logOut":"Salir","wnd.pc.BlogDetailPageZone.next":"Art\u00edculos recientes","wnd.pc.BlogDetailPageZone.previous":"Art\u00edculos antiguos","wnd.pc.FileBlock.download":"DESCARGAR","wnd.pc.FormBlock.action.defaultMessage.text":"El formulario se ha enviado con \u00e9xito.","wnd.pc.FormBlock.action.defaultMessage.title":"\u00a1Muchas gracias!","wnd.pc.ListingDetailPageZone.next":"Siguiente","wnd.pc.ListingDetailPageZone.previous":"Anterior","wnd.pc.ListingItemCopy.namePrefix":"Copia de","wnd.pc.Option.defaultText":"Otra opci\u00f3n m\u00e1s","wnd.pc.PageCopy.namePrefix":"Copia de","wnd.pc.ProductAddToCartBlock.addToCart":"A\u00f1adir a la cesta","wnd.pc.ProductItem.button.viewDetail":"P\u00e1gina del producto","wnd.pc.ProductOptionGroupBlock.notSelected":"Ninguna variante seleccionada","wnd.pc.ProductOutOfStockBlock.label":"Agotado","wnd.pc.ProductPriceBlock.prefixText":"Desde ","wnd.pc.ProductPriceBlock.suffixText":"","wnd.pc.ProductsZone.label.collections":"Categor\u00edas","wnd.pc.ProductsZoneModel.label.allCollections":"Todos los productos","wnd.pc.ShoppingCartTable.label.checkout":"Pagar","wnd.pc.ShoppingCartTable.label.checkoutDisabled":"El pago no est\u00e1 disponible en este momento (no hay m\u00e9todos de env\u00edo o de pago)","wnd.pc.ShoppingCartTable.label.continue":"Seguir comprando","wnd.pc.ShoppingCartTable.label.delete":"Eliminar","wnd.pc.ShoppingCartTable.label.item":"Producto","wnd.pc.ShoppingCartTable.label.price":"Precio","wnd.pc.ShoppingCartTable.label.quantity":"Cantidad","wnd.pc.ShoppingCartTable.label.sum":"Total","wnd.pc.ShoppingCartTable.label.totalPrice":"Total","wnd.pc.ShoppingCartTable.placeholder.text":"\u00a1C\u00e1mbialo! Elige algo y vuelve aqu\u00ed.","wnd.pc.ShoppingCartTable.placeholder.title":"Tu cesta est\u00e1 vac\u00eda.","wnd.pc.SystemFooterBlock.poweredByWebnode":"Creado con {START_LINK}Webnode{END_LINK}","wnd.pc.UserChangePasswordFormBlock.invalidRecoveryUrl":"El enlace para restaurar tu contrase\u00f1a ha expirado. Para obtener un nuevo enlace ve a la p\u00e1gina {START_LINK}Forgotten password{END_LINK}","wnd.pc.UserRecoveryFormBlock.action.defaultMessage.text":"El enlace que te permite cambiar tu contrase\u00f1a ha sido enviado a tu bandeja de entrada. Si no has recibido este email por favor revisar tu bandeja de correo no deseados.","wnd.pc.UserRecoveryFormBlock.action.defaultMessage.title":"Un email con las instrucciones ha sido enviado.","wnd.pc.UserRegistrationFormBlock.action.defaultMessage.text":"Tu registro esta en espera de aprobaci\u00f3n. Cuando el mismo sea confirmado te informaremos v\u00eda correo.","wnd.pc.UserRegistrationFormBlock.action.defaultMessage.title":"Gracias por registrarte en nuestra p\u00e1gina web.","wnd.pm.AddNewPagePattern.onlineStore":"Tienda Online"},"kbLinks":{"faq":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/404\/","domainRegistration":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/3505\/","domainTransfer":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/1578\/","webmailLogin":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/272\/","webmail":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/410\/","introduction":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/2004\/","orderTracking":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/5045\/","storageBandwidth":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/573\/","subPage":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/3308\/","eshopPromo":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/List\/Index\/58\/","eshopPromoVariants":"https:\/\/www.webnode.com\/blog\/2018\/09\/variants-are-here-sell-your-products-in-all-sizes-colors-or-flavors\/","eshopDiscounts":"https:\/\/www.webnode.es\/ayuda\/index.php?\/Knowledgebase\/Article\/View\/5486","domainBirthdateInfo":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/150\/","skRegistration":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/228\/","euTransfer":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/230\/","import":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/5157\/","checkoutFi":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/5392\/","emailAccounts":"https:\/\/www.webnode.com\/support\/index.php?\/Knowledgebase\/Article\/View\/3211\/","freightPriceSettings":"https:\/\/www.webnode.co.uk\/support\/index.php?\/Knowledgebase\/Article\/View\/5659\/"},"aviary":[]};</script>
<!-- Root element of PhotoSwipe. Must have class pswp. --><div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div></body></html>