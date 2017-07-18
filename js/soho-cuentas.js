/*
URL : www.soho.cl
Hecho por : Erick Caroca
Para : BBVA
Fecha :  Mayo 2014
*/
$(document).ready(function() {
	
	var qs = getQueryStrings();
	var operacion = qs["operacion"]; 
	if(operacion=="comprar-dolares")
	{
		setTimeout(function() {
			$( "#tab-operaciones-link" ).trigger( "click" );
			$( ".link-comprar-dolares" ).trigger( "click" );
			
		}, 5 );	
		
		
	}else if(operacion=="vender-dolares")
	{
		setTimeout(function() {
			$( "#tab-operaciones-link" ).trigger( "click" );	
			$( ".link-vender-dolares" ).trigger( "click" );
		
		}, 5 );	
	}else if(operacion=="gestionar-operaciones")
	{
		setTimeout(function() {
			$( "#tab-operaciones-link" ).trigger( "click" );	
			$( ".link-gestionar-operaciones" ).trigger( "click" );
		
		}, 5 );	
	}else if(operacion=="realizar-abono")
	{
		setTimeout(function() {
			$( "#tab-operaciones-link" ).trigger( "click" );	
			$( ".link-realizar-abono" ).trigger( "click" );
		
		}, 5 );	
	}else if (operacion== "seleccionar-cuenta-pagar-servicio"){
		setTimeout(function() {

			
			$( "#tab-operaciones-link" ).trigger( "click" );	
			$( ".pagar_servicios_global" ).trigger( "click" );
		
		}, 5 );
	}

	
	function getQueryStrings() { 
	  var assoc  = {};
	  var decode = function (s) { return decodeURIComponent(s.replace(/\+/g, " ")); };
	  var queryString = location.search.substring(1); 
	  var keyValues = queryString.split('&'); 
	
	  for(var i in keyValues) { 
		var key = keyValues[i].split('=');
		if (key.length > 1) {
		  assoc[decode(key[0])] = decode(key[1]);
		}
	  } 
	
	  return assoc; 
	}
			
});


