<?php
	$root = 'templates/';
	$rootComponents = 'includes/components/';

	$src = 'home.php';
	$cp = '';
	if(isset($_GET['src'])){
		$src = $_GET['src'];
	}
	if(isset($_GET['cp'])){
		$cp = $_GET['cp'];
	}

	// Logged
	$logged = false;

	session_start();

	if(isset($_REQUEST['login'])){
		$logged = true;
		$_SESSION['logged'] = true;
	} else if(isset($_REQUEST['logout'])){
		unset($_SESSION['logged']);
	} else if(isset($_SESSION['logged'])){
		$logged = true;
	}

	// Current menu option
	$current= '';
	$tipo   = '';
	$tour   = false;

	if(isset($_REQUEST['src'])) {

		if($_REQUEST['src'] == 'S02-posicion-global.php'
				|| $_REQUEST['src'] == 'S02-posicion-global-intro.php'
				|| $_REQUEST['src'] == 'S17-ofertas-un-click.php') {
			$current = 'home';

			if($_REQUEST['src'] == 'S02-posicion-global-intro.php')
				$tour = true;
		}

		if($_REQUEST['src'] == 'S02-cuentas.php'
				|| $_REQUEST['src'] == 'S03-cuentas.php'
				|| $_REQUEST['src'] == 'S03-linea-credito.php'
				|| $_REQUEST['src'] == 'S03-bono-facil.php'
				|| $_REQUEST['src'] == 'S17-cuenta-bbva-link.php'
				|| $_REQUEST['src'] == 'S17-detalle-cuenta-bbva-link.php'
				|| $_REQUEST['src'] == 'S03-cuentaspago-servicios.php'
				|| $_REQUEST['src'] == 'S03-cheques.php'
				|| $_REQUEST['src'] == 'S02-cierre-producto.php'
				|| $_REQUEST['src'] == 'S02-pago-cuentas.php'
				|| $_REQUEST['src'] == 'S17-solicitar-tarjeta-debito.php'
				|| $_REQUEST['src'] == 'S17-solicitar-tarjeta-debito-comprobante.php'
				) {
			$current = 'cuentas';
		}

		if($_REQUEST['src'] == 'S02-tarjetas.php'
				|| $_REQUEST['src'] == 'S03-tarjetas.php'
				|| $_REQUEST['src'] == 'S02-tarjetas-punto-error-1.php'
				|| $_REQUEST['src'] == 'S02-tarjetas-punto-error-2.php'
				|| $_REQUEST['src'] == 'S02-tarjetas-punto-error-3.php'
				|| $_REQUEST['src'] == 'S03-tarjetas-debito.php') {
			$current = 'tarjetas';
		}
		if($_REQUEST['src'] == 'S07-creditos.php'
				|| $_REQUEST['src'] == 'S07-creditos-detalle.php'
				|| $_REQUEST['src'] == 'S07-credito-hipotecario.php'
				|| $_REQUEST['src'] == 'S07-creditos-detalle-hip.php'
				|| $_REQUEST['src'] == 'S07-credito-hipotecario-gastos.php'
				|| $_REQUEST['src'] == 'S17-upload-ejecutivo-consumo.php'
				|| $_REQUEST['src'] == 'S17-upload-ejecutivo-consumo-comprobante.php'
				|| $_REQUEST['src'] == 'S17-consumo-convenio.php'
				|| $_REQUEST['src'] == 'S17-consumo-convenio-comprobante.php'
				) {
			$current = 'creditos';
		}

		if($_REQUEST['src'] == 'S18-ahorro-e-inversion.php'
				|| $_REQUEST['src'] == 'S08-ffmm.php'
				|| $_REQUEST['src'] == 'S08-ffmm-catalogo-pre.php'
				|| $_REQUEST['src'] == 'S08-ffmm-catalogo.php'
				|| $_REQUEST['src'] == 'S08-inversion.php'
				|| $_REQUEST['src'] == 'S08-filtrar-catalogo.php'
				|| $_REQUEST['src'] == 'S08-solicitud-inversion.php'
				|| $_REQUEST['src'] == 'S08-rentabilizar.php'
				|| $_REQUEST['src'] == 'S10-avance-para-campana.php'
				|| $_REQUEST['src'] == 'S11-inversiones.php'
				|| $_REQUEST['src'] == 'S08-ahorro-inversion.php'
				|| $_REQUEST['src'] == 'S12-deposito-a-plazo-a.php'
				|| $_REQUEST['src'] == 'S09-ahorro-detalle.php'
				|| $_REQUEST['src'] == 'S18-productos-de-inversion.php'
				|| $_REQUEST['src'] == 'S18-ffmm-1.php'
				|| $_REQUEST['src'] == 'S18-dap-con-perfil.php'
				|| $_REQUEST['src'] == 'S20-enrolamiento-1.php'
				|| $_REQUEST['src'] == 'S21-portal-inversiones.php'
				|| $_REQUEST['src'] == 'S20-deposito-a-plazo.php'
				|| $_REQUEST['src'] == 'S20-deposito-a-plazo_2.php'
				|| $_REQUEST['src'] == 'S21-portal-inversiones-1.php'
				|| $_REQUEST['src'] == 'S21-portal-inversiones-2.php'
				|| $_REQUEST['src'] == 'S21-vincular-productos.php'
				) {
			$current = 'ahorro-inversion';
		}

		if($_REQUEST['src'] == 'S02-seguros.php'
			|| $_REQUEST['src'] == 'S12-buscar-seguro.php'
			|| $_REQUEST['src'] == 'S12-seguro-hogar.php'
			|| $_REQUEST['src'] == 'S12-seguro-incendio-sismo.php'
			|| $_REQUEST['src'] == 'S12-contratar-seguro.php'
			|| $_REQUEST['src'] == 'S12-cuentas.php'
			|| $_REQUEST['src'] == 'S12-contratar-deposito.php'
			|| $_REQUEST['src'] == 'S12-deposito-a-plazo.php'
			|| $_REQUEST['src'] == 'S12-seguro-automotriz.php'
			|| $_REQUEST['src'] == 'S12-seguro-automotriz-full.php'
			) {
			$current = 'seguros';
		}

		if($_REQUEST['src'] == 'S22-upload-credito-consumo-web.php'
			|| $_REQUEST['src'] == 'S22-upload-credito-consumo-web-resumen.php'
			|| $_REQUEST['src'] == 'S22-upload-credito-consumo-web-comprobante.php'
			) {
			$current = 'upload-credito-consumo-web';
		}

		if($_REQUEST['src'] == 'S20-cloud-contact.php'
			|| $_REQUEST['src'] == 'S20-cloud-client-no.php'
			|| $_REQUEST['src'] == 'S20-cloud-contact-select.php'
			) {
			$current = 'cloud';
		}

		if($_REQUEST['src'] == 'S14-pago-automatico-de-cuentas.php'
			|| $_REQUEST['src'] == 'S14-linea-aumentar-cupo.php') {
			$current = 'PAC';
		}

		if($_REQUEST['src'] == 'S16-on-click.php'
			|| $_REQUEST['src'] == '') {
			$current = 'On click';
		}

		if($_REQUEST['src'] == 'S02-estado-cuenta-simplificado.php'){
			$current = 'eecc-nacional';
		}
		if($_REQUEST['src'] == 'S02-hazte-cliente.php'){
			$current = 'hazte-cliente';
		}
		if($_REQUEST['src'] == 'S02-estado-cuenta-simplificado-internacional.php'){
			$current = 'eecc-internacional';
		}

		if($_REQUEST['src'] == 'S13-mi-perfil-ingreso-requerimientos.php'){
			$current = 'Ingreso requerimientos';
		}

		if($_REQUEST['src'] == 'S02-cierre-de-productos.php'){
			$current = 'Cierre de productos';
		}

		if($_REQUEST['src'] == 'S19-hazte-cliente.php'){
			$current = 'Hazte Cliente';
		}

		if($_REQUEST['src'] == 'S19-simula.php'){
			$current = 'Hazte Cliente';
		}

		if($current == '') {
			$current = isset($_SESSION['current']);
		} else {
			$_SESSION['current'] = $current;
		}
	}

	// Download HTML template
	if(isset($_GET['download'])){
		header('Content-Description: File Transfer');
		header("Content-type: text/html");
		ini_set("allow_url_fopen", true);
		header("Content-disposition: attachment; filename=template.html");
		readFile('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . '?src=' . $src);
		exit;
	}

?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>BBVA :: Chile</title>
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<?php include 'includes/css.php'; ?>
		<?php include 'includes/js.php'; ?>
		<link rel="shortcut icon" href="./img/favicon.ico">
	</head>
	<body>
		<?php if ($current == 'home' && !$tour) { ?>
		<div id="divAbTesting" class="container content-banner">
			<button id="abTestingClose" type="button" class="close-icon"></button>
			<script>
			$(".content-banner .close-icon").click(function(){
				$(this).parent().slideUp();
			});
			</script>
			<a href="#" id="linkAbTesting">
				<img id="imgAbTesting" src="img/banner-cobro.jpg" alt="banner" class="img-responsive">
			</a>
		</div>
		<?php } ?>
		<?php
			
			if($logged){
				if ($current == 'home' && !$tour) {
					include 'includes/components/tour-interstitial.php';
				}

				include 'includes/components/header-private.php';

			} else {
				if ($current == 'home' && !$tour) {
				include 'includes/components/tour-interstitial.php';
				}
				include 'includes/components/header-private.php';

			}
		?>

		<!-- body -->
		<div class="content">
			<?php
				if ($cp != '' && file_exists($rootComponents . $cp)) {
					echo '<div class="container " style="padding-top:20px;">';
					include $rootComponents . $cp;
					echo '</div>';
				}else if($src != '' && file_exists($root . $src)){
					include $root . $src;
					?><script>//console.log('Hola');</script><?php
				}else {
					echo '<h1 style="font-size: xx-large; padding: 120px 10px; text-align: center; background-color: #F3F5F7; border-radius: 10px; margin:40px 0;">Plantilla no disponible</h1>';
				}
			?>
		</div>
		<?php
			if($logged){
				include 'includes/components/footer-private.html';
			} else {
				include 'includes/components/footer-public.html';
			}
		?>
		<div id="btn-laterales">
			<a href="#;" class="btn-conoce"><span></span></a>
			<a href="#;" class="btn-chat"><span></span></a>
		</div>
		<!-- LiveReload -->
		<!--<script src="http://192.168.0.3:35729/livereload.js?snipver=1"></script>-->
		<!--<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>-->
	</body>
</html>
