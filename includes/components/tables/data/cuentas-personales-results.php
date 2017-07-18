<?php
	if(!isset($_REQUEST['q'])){
		// Ejemplo que devuelve todos los resultados (no tenemos el parámetro q)
?>
<table>
	<tr>
		<th colspan="2"></th>
		<th>SALDO</th>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">0182-1234-111222333444</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>Cuenta ahorro</small>
		</td>
		<td>
			<strong>$ 9.500,00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</spna> $ 9.700,00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">0182-1234-111222333444</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>Cuenta ahorro</small>
		</td>
		<td>
			<strong>$ 9.500,00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 9.700,00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">0182-1234-111222333444</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>Cuenta ahorro</small>
		</td>
		<td>
			<strong>$ 9.500,00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 9.700,00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">0182-1234-111222333444</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>Cuenta ahorro</small>
		</td>
		<td>
			<strong>$ 9.500,00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 9.700,00</small>
		</td>
	</tr>
</table>
<?php		
	} else {		
		// Sí tenemos el parámetro q - se realiza la consulta (Para el ejemplo usamos un random para mostrar resultados filtrados o mensaje de no resultados)
		if(rand(0,1) == 1){
			// Encontramos resultados
?>
<table>
	<tr>
		<th colspan="2"></th>
		<th>SALDO</th>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">0182-1234-111222333444</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>Cuenta ahorro</small>
		</td>
		<td>
			<strong>$ 9.500,00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 9.700,00</small>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="?src=S03-cuentas.php">Cuenta Catalina</a>
			<?php include '../actions/cuentas.html'; ?>
			<small>0182-2370-450201520255<br>Cuenta vista</small>
		</td>
		<td>
			<strong>$ 10,000.00</strong>
			<small class="muted"><span class="hidden-xss">Saldo contable</span> $ 10,100.00</small>
		</td>
	</tr>
</table>
<?php 		
		} else {
			// no results	
?>
<div class="block-warning iconed-24">
	<i class="icon-24 m03-aviso"></i>La búsqueda de la tarjeta <strong>Catalina 2</strong> no ha obtenido ningún resultado.
</div>
<?php 
		}
	}
?>