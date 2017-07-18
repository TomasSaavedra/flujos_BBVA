/*
URL : www.soho.cl
Hecho por : Erick Caroca
Para : BBVA
Fecha :  Junio 2014
*/
$(document).ready(function() {
	
	var qs = getQueryStrings();
	var operacion = qs["operacion"]; 
	if(operacion=="gestionar-operaciones-programadas")
	{
		setTimeout(function() {
			$( "#tab-operaciones-link" ).trigger( "click" );
			$( ".link-gestionar-operaciones-programadas" ).trigger( "click" );
		
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


