<?php
function listar_directorios_ruta($ruta){ 
    // abrir un directorio y listarlo recursivo
	if (is_dir($ruta)) {
	 	if ($dh = opendir($ruta)) {
	 		echo "<br /><strong>$ruta</strong>"; // Aqui se imprime el nombre de la carpeta o directorio

	 		while (($file = readdir($dh)) !== false)
			{
			 //if (is_dir($ruta . $file) && $file!="." && $file!="..") // Si se desea mostrar solo directorios
				if ($file!="." && $file!="..") // Si se desea mostrar directorios y archivos
				{
			 	//solo si el archivo es un directorio, distinto que "." y ".."
			 	echo "<br />$ruta$file"; // Aqui se imprime el nombre del Archivo con su ruta relativa
			 	listar_directorios_ruta($ruta . $file . DIRECTORY_SEPARATOR); // Ahora volvemos a llamar la función
		 		}
	 		}

	 		closedir($dh);
	 	}
 	}
}
?>

<div class="container " > 
	
	<h1 class="text-center">Hoja de estilos BBVA</h1>

	<!-- Textos  -->
	<div class="panel panel-info">
		<div class="panel-heading">Textos</div>
	  	<div class="panel-body">
		    <div class="col-sm-6">
		    	<h1>Título h1</h1>
				<h2>Título h2</h2>
				<h3>Título h3</h3>
				<h4>Título h4</h4>
				<h5>Título h5</h5>
				<h6>Título h6</h6>
		    </div>
		    <div class="col-sm-6"> 
				<p>Parrafos prueba Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac odio justo. Nam sit amet finibus nibh. Donec tempor, nunc vitae dignissim condimentum, metus libero pellentesque metus, vitae tempus risus purus quis mi. Suspendisse faucibus tempor laoreet. Pellentesque eget risus vel urna cursus ullamcorper in ut tortor. Curabitur malesuada, quam ac lacinia lobortis, urna dolor tristique quam, ut molestie erat nibh ut ipsum. </p>
				 
				<ul>
					<li>Lista ul 01</li>
					<li>Lista ul 02</li>
					<li>Lista ul 03</li>
				</ul>
				<ol>
					<li>Lista ol 01</li>
					<li>Lista ol 02</li>
					<li>Lista ol 03</li>
				</ol>
		    </div>
	  	</div>
	</div>

	<!-- Botones -->
	<div class="panel panel-info">
		<div class="panel-heading">Botones</div>
	  	<div class="panel-body">
		    <div class="col-sm-12">
		    	<a href="#" class="btn btn-default "> Botón </a> 
			    <a href="#" class="btn btn-primary "> Botón </a> <hr>
			    <a href="#" class="btn btn-big2 btn-default "> Botón </a>
			    <a href="#" class="btn btn-big2 btn-primary "> Botón </a> 
			    <a href="#" class="btn btn-big2  btn-disabled "> Botón </a>
			    <a href="#" class="btn btn-big2 btn-big-gray "> Botón </a> 
			    <a href="#" > Botón sin estilo</a><hr>
		    </div>
		    <div class="col-sm-12"> 
			    <a href="#" class="btn btn-big2 btn-big-green "> Botón </a> 
			    <a href="#" class="btn-cta"> Botón </a> 
		    </div>

		</div>
	</div>

	<!-- Formularios -->
	<div class="panel panel-info">
		<div class="panel-heading">Formularios</div>
		<div class="panel-body">
			<div class="form-group">
				<label>Input text </label>
				<input   type="text"  value="input text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<textarea    class="form-control" name="name">Text area </textarea>
			</div>
			<div class="form-group">
				<label>Select</label>
				<select class="selectpicker ">
					<option>Opcion 1</option>
					<option>Opcion 2</option>
					<option>Opcion 3</option> 
				</select>
			</div>
			<div class="form-group">
				<!-- radio -->
				<label for="opcion1" class="ui-marmots-label-check marmots-label-left ">
					<input id="opcion1" type="checkbox" name="seguro"  disabled="disabled" checked> Opcion 1 Disable 
				</label>
				<label for="opcion2" class="ui-marmots-label-check marmots-label-left">
					<input id="opcion2" type="checkbox" name="seguro"> Opcion 2 
				</label>
				<label for="opcion3" class="ui-marmots-label-check marmots-label-left">
					<input id="opcion3" type="checkbox" name="seguro"> Opcion 3
				</label>
			</div>
			<div class="form-group">
				<!-- checkbox -->
				<label for="radio1" class="ui-marmots-label-radio marmots-label-left ">
					<input id="radio1" type="radio" name="radio"> radio 1 
				</label> 
				<label for="radio2" class="ui-marmots-label-radio marmots-label-left ">
					<input id="radio2" type="radio" name="radio"> radio 2
				</label> 
				<label for="radio3" class="ui-marmots-label-radio marmots-label-left ">
					<input id="radio3" type="radio" name="radio"> radio 3 
				</label> 
			</div> 
			
		</div>
	</div> 

	<!-- Banners -->
	<div class="panel panel-info">
		<div class="panel-heading">Banners</div>
		<div class="panel-body">
			<ol>  
				<?php
					if ($handle = opendir('includes/components/banners')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=banners/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
		</div>
	</div>   
		
	<!-- Carousel -->
	<div class="panel panel-info">
		<div class="panel-heading">Carousel</div>
		<div class="panel-body">
			<ol>  
				<?php
					if ($handle = opendir('includes/components/carousel')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=carousel/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol>  
		</div>
	</div> 

	<!-- Dialogs -->
	<div class="panel panel-info">
		<div class="panel-heading">Dialogs</div>
		<div class="panel-body"> 
			<ol>  
				<?php
					if ($handle = opendir('includes/components/dialogs')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=dialogs/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
		</div>
	</div> 

	<!-- movements -->
	<div class="panel panel-info">
		<div class="panel-heading">movements</div>
		<div class="panel-body">
			<?php listar_directorios_ruta("includes/components/movements/"); ?>
			<h3>Agenda</h3>
			<ol>  
				<?php
					if ($handle = opendir('includes/components/movements/agenda/dialogs')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=movements/agenda/dialogs/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
			<h3>Ahorro Inversiones</h3>
			<ol>  
				<?php
					if ($handle = opendir('includes/components/movements/ahorro-inversiones')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=movements/ahorro-inversiones/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
		</div>
	</div>

	<!-- Tables -->
	<div class="panel panel-info">
		<div class="panel-heading">Tables</div>
		<div class="panel-body">
			<ol>  
				<?php
					if ($handle = opendir('includes/components/tables')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=tables/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
		</div>
	</div>

	<!-- Extra -->
	<div class="panel panel-info">
		<div class="panel-heading">Extra</div>
		<div class="panel-body"> 
			<ol>  
				<?php
					if ($handle = opendir('includes/components/extra')) {
						while (false !== ($entry = readdir($handle))) {
							if(strpos($entry, '.') !== 0){
				?>
					<li><a target="_blank" href="?cp=extra/<?php echo $entry; ?>"><?php echo $entry; ?></a></li> 
				<?php 			
							}
						}
					}
				?>
			</ol> 
		</div>
	</div>
	 		
</div>


 

 