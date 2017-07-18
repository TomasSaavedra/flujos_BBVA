<?php
$root = 'templates/';

$src = 'home.php';
if(isset($_GET['src'])){
	$src = $_GET['src'];
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
$current = '';
if(isset($_REQUEST['src'])) {
	if($_REQUEST['src'] == 'S02-posicion-global.php'
			|| $_REQUEST['src'] == 'S02-posicion-global-intro.php'
			|| $_REQUEST['src'] == 'S17-ofertas-un-click.php') {
		$current = 'home';
	}
	if($_REQUEST['src'] == 'S02-cuentas.php' 
			|| $_REQUEST['src'] == 'S03-cuentas.php' 
			|| $_REQUEST['src'] == 'S03-linea-credito.php' 
			|| $_REQUEST['src'] == 'S03-bono-facil.php'
			|| $_REQUEST['src'] == 'S03-cheques.php'
			|| $_REQUEST['src'] == 'S02-cierre-producto.php'
			) {
		$current = 'cuentas';
	}
	if($_REQUEST['src'] == 'S02-tarjetas.php' 
			|| $_REQUEST['src'] == 'S03-tarjetas.php'
			|| $_REQUEST['src'] == 'S03-tarjetas-debito.php') {
		$current = 'tarjetas';
	}
	if($_REQUEST['src'] == 'S07-creditos.php'
			|| $_REQUEST['src'] == 'S07-creditos-detalle.php'
			|| $_REQUEST['src'] == 'S07-credito-hipotecario.php'
			|| $_REQUEST['src'] == 'S07-credito-hipotecario-gastos.php') {
		$current = 'creditos';
	}
	if($_REQUEST['src'] == 'S02-ahorro-inversion.php'
			|| $_REQUEST['src'] == 'S08-ffmm.php'
			|| $_REQUEST['src'] == 'S08-inversion.php'
			|| $_REQUEST['src'] == 'S08-filtrar-catalogo.php'
			|| $_REQUEST['src'] == 'S08-solicitud-inversion.php'
			|| $_REQUEST['src'] == 'S08-rentabilizar.php'
			|| $_REQUEST['src'] == 'S10-avance-para-campana.php'
			|| $_REQUEST['src'] == 'S11-inversiones.php'
			|| $_REQUEST['src'] == 'S09-ahorro-detalle.php') {
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
		|| $_REQUEST['src'] == 'S12-seguro-automotriz'
		) {
		$current = 'seguros';
	}

	if($_REQUEST['src'] == 'S20-cloud-contact.php'
			|| $_REQUEST['src'] == 'S20-cloud-client-no.php'
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

	if($_REQUEST['src'] == 'S02-cierre-de-productos.php' 
		|| $_REQUEST['src'] == '') {
		$current = 'Cierre de productos';
	}
	
	if($_REQUEST['src'] == 'S02-cierre-producto.php' 
		|| $_REQUEST['src'] == '') {
		$current = 'Solicitar cierre de producto';
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
	
	// Get only HTML from template
	// header("Content-disposition: attachment; filename= ".$src."");
	// readfile($root . $src);
	
	// Get all HTML from full page
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
	<?php 
		if($logged){
			include 'includes/components/header-private-premium.php';
		} else { 
			include 'includes/components/header-private-premium.php';
		} 
	?>

	<!-- body -->
	<div class="content">
		<?php
		if ($src != '' && file_exists($root . $src)){
				include $root . $src;
			} else {
				echo '<h1 style="font-size: xx-large; padding: 120px 10px; text-align: center; background-color: #F3F5F7; border-radius: 10px; margin:40px 0;">Plantilla no disponible</h1>';
			} 
		?>
	</div>

	<?php 
		if($logged){
			include 'includes/components/footer-private.html';
		} else { 
			include 'includes/components/footer-private.html';
		} 
	?>
</body>
</html>
