
var min_version = {					
	'Safari_iPad_y_Mac'	:'8',
	'Safari_iPhone'		:'8',
	'Chrome'			:'47', 
	'explorer'			:'10',
	'explorerNT'		:'10',
	'firefox'			:'41'
}; 

$(document).ready(function(){
	if(!$("#smartbanner").hasClass("shown")){
		cookiesHelps = {
			chrome: '<div><ol><li><p>Selecciona el ícono del menú de Chrome <img src="http://lh3.googleusercontent.com/tgmsrPRh34tM4q0WYv7l-NNXDz7dqm7ftk8TyCEguoY30xkEg8lcw_ULI23ki9Q=w18-h18" width="18" height="18" alt="Chrome menu" title="Chrome menu">.</p> </li><li><p>Selecciona <strong>Configuración</strong>.</p></li><li><p>En la parte inferior de la página, selecciona <strong>Mostrar configuración avanzada</strong>.</p></li><li><p>En la sección "Privacidad", selecciona <strong>Configuración de contenido</strong>.</p></li><li><p>Selecciona la opción para <strong>permitir la configuración de datos locales (recomendado)</strong>.</p></li><li><p>Selecciona <strong>Listo</strong>.</p></li></ol></div>',
			firefox: '<div><ol><li><p>Haz clic en el botón Menú  <img alt="New Fx Menu" src="http://support.cdn.mozilla.net/media/uploads/gallery/images/2014-01-10-13-08-08-f52b8c.png" title="">  y elige <span class="button">Opciones o Preferencias</span>.</p></li><li><p>Selecciona el panel <span class="menu">Privacidad</span>.</p></li><li><p>En <strong>Firefox podrá:</strong> elige <strong>Usar una configuración personalizada para el historial</strong>.<br><img alt="customhistory38" src="http://support.cdn.mozilla.net/media/uploads/gallery/images/2015-05-09-05-27-21-fb1f0d.png" title=""></p></li><li><p>Marca la opción <strong>Aceptar cookies</strong> para activarlas, y desmárcala para desactivarlas.<span><img alt="PrivacyCookies" class="wiki-image frameless" data-original-src="http://support.cdn.mozilla.net/media/uploads/gallery/images/2015-01-28-14-49-18-156714.png" src="http://support.cdn.mozilla.net/media/uploads/gallery/images/2015-01-28-14-49-18-156714.png" title=""></span><span>Si estás tratando de resolver problemas relacionados con las cookies, asegúrate de que la opción <strong>Incluso las de terceros</strong> no está marcada con el valor <strong>Nunca</strong>. Para más información, consulta el artículo <a href="https://support.mozilla.org/es/kb/Deshabilitar%20cookies%20de%20terceros">Deshabilitar cookies de terceros</a>.</li></span></p></li><li><p>Elige durante cuánto tiempo las cookies serán almacenadas:<ol><li><p>Mantener hasta que <strong>caduquen</strong>: Las cookies se borrarán cuando alcancen su fecha de caducidad, que la configura el sitio que envió la cookie.</p></li><li><p>Mantener hasta que <strong>cierre Firefox</strong>: Las cookies que son almacenadas en tu ordenador serán borradas cuando se cierre Firefox.</p></li><li><p>Mantener hasta que <strong>preguntar siempre</strong>: Muestra una alerta cada vez que un sitio web intenta enviar cookies preguntando si deseas almacenarlas.</p></li></ol></p></li><li><p>Cierra la página <em>preferences</em> <small>(es la que se abre al entrar en Preferencias)</small>. Cualquier cambio que hayas hecho se guardará automáticamente.</p></li></ol></div>',
			safari: '<div><div><div><div><p>Por omisión, Safari acepta cookies y datos de los sitios web solo de los sitios web que visite. Esto ayuda a evitar que determinada publicidad almacene datos en el Mac. Puede cambiar las opciones en el panel de preferencias de Safari, de modo que Safari siempre acepte o bloquee cookies y otros datos de los sitios web.</p><p><strong>Importante:&nbsp;&nbsp; </strong>Si modifica sus preferencias de cookies o elimina cookies y datos de sitios web en Safari, es posible que estas acciones afecten también a otras apps, incluido el Dashboard.</p></div><div><p>Seleccione Safari&nbsp;&gt; Preferencias, haga clic en Privacidad y realice alguna de las siguientes operaciones:</p><div><p>Cambie qué cookies y datos de sitios web se aceptan: Seleccionar la opción “Cookies y datos de sitios web”:</p><p><ol><li><p><strong>Bloquear siempre: </strong>Safari no permite que ningún sitio web que visite, ni terceros ni la publicidad almacenen cookies ni otros datos en el Mac. Esto puede impedir que algunos sitios web funcionen adecuadamente.</p></li><li><p><strong>Permitir solo del sitio web actual: </strong>Safari acepta cookies y datos de los sitios web solo de los sitios web que esté visitando en el momento. Normalmente los sitios web disponen de contenido integrado de otras fuentes. Safari no permite que esas terceras personas almacenen o accedan a cookies y otros datos.</p></li><li><p><strong>Permitir de los sitios que visitó: </strong>Safari acepta cookies y datos de los sitios web solo de los sitios web que visite. Safari usa sus cookies existentes para determinar si ha visitado un sitio web anteriormente. Al seleccionar esta opción, contribuye a evitar que los sitios web que dispongan de contenido integrado en otros sitios web que usted visita almacenen cookies y datos en el Mac.</p></li><li><p><strong>Permitir siempre: </strong>Safari permite a todos los sitios web que visite, a terceros y a la publicidad almacenar cookies y otros datos en el Mac.</p></li></ol></p><p>Elimine cookies y datos almacenados: haga clic en “Eliminar todos los datos de los sitios web” o en Detalles, seleccione uno o más sitios web y haga clic en Eliminar.</p><p>El hecho de eliminar los datos podría reducir el seguimiento, sin embargo, también puede conllevar que se cierren sus sesiones en los sitios web o que cambie su comportamiento.</p><p>Vea qué sitios web almacenan cookies o datos: haga clic en Detalles.</p><p>Pedir a los sitios web que no le rastreen: algunos sitios web guardan el rastro de sus actividades de navegación cuando le proporcionan contenido, lo que les proporciona la posibilidad de adaptar lo que le ofrecen. Puede hacer que Safari solicite a los sitios y a sus proveedores de contenido de terceros (incluida la publicidad) que no le rastreen.</p><p>Con esta opción activada, cada vez que Safari obtenga contenido de un sitio web, solicitará que no se le rastree, pero dependerá del sitio web el hecho de que se respete esta solicitud.</p></div></div><div></div></div></div></div>',
			explorer: '<div><ol><li><p>Abra el escritorio y luego pulse o haga clic en el icono de Internet&nbsp;Explorer en la barra de tareas.</p></li><li><p>Pulse o haga clic en el botón <span>Herramientas</span> <img src="http://res2.windows.microsoft.com/resbox/en/6.2/main/f2d3a394-a4c3-4747-989e-cf3f6b782b2f_43.jpg" alt="Botón Herramientas"> y luego en <span>Opciones de Internet</span>.</p></li><li><p>Pulse o haga clic en la pestaña <span>Privacidad</span> y, en <span>Configuración</span>, mueva el control deslizante totalmente hacia abajo para permitir las cookies y luego pulse o haga clic en <span>Aceptar</span>.</p></li></ol></div>',
		};
		$('.warning__bbva, .box__descarga').hide();
		getBrowser = function(){
			userAgent = navigator.userAgent; 
			//alert(userAgent)
			appName = navigator.appName;			
			if((navigator.userAgent.indexOf('iPad') != -1 || navigator.userAgent.indexOf('Macintosh') != -1) && navigator.userAgent.indexOf('CriOS') == -1  && navigator.userAgent.indexOf('Chrome') == -1 && navigator.userAgent.indexOf('Firefox') == -1 && navigator.userAgent.indexOf('FxiOS') == -1){//Opera-Safari
				
				arraySafari = navigator.userAgent.substring(navigator.userAgent.indexOf('Version')).split(" ");
			
				arrayarraySafariAux = arraySafari[0].split("/");
				name = 'safari';
				version = arrayarraySafariAux[1].split('.')[0];
				
				browser = {
					'name': name, 
					'version': version,
					'download': 'http://www.apple.com/safari/',
					'min_version': min_version.Safari_iPad_y_Mac
				};  
			// safari por iPhone
			}else if(navigator.userAgent.indexOf('iPhone') != -1 && navigator.userAgent.indexOf('CriOS') == -1){				
				arrayiPhone = navigator.userAgent.substring(navigator.userAgent.indexOf('iPhone OS')).split(" ");				
				arrayarrayiPhoneAux = arrayiPhone[2].split("_");				
				name = 'safari';
				version = arrayarrayiPhoneAux[0];				
				browser = {
					'name': name, 
					'version': version,
					'download': 'http://www.apple.com/safari/',
					'min_version': min_version.Safari_iPhone
				}; 
			}	
			else{
				if(navigator.userAgent.indexOf('Edge') != -1){	
					is_chrome = null;
				}else{
					is_chrome = userAgent.match(/Chrome\/(.*)$/);
						if(is_chrome == null){
							is_chrome = userAgent.match(/CriOS\/(.*)$/);
						}else if(userAgent.indexOf('OPR') != -1){
							is_chrome = null;
						}	
				}				
				is_firefox = userAgent.match(/Firefox\/(.*)$/);
				is_explorer = userAgent.match(/MSIE\ (.*)$/);
				is_explorerNT = userAgent.match(/NET\ (.*)$/);
				if( is_chrome != null && is_chrome.length > 0 ){
					name = is_chrome[0].split('/')[0];
					
						if(name=="CriOS"){
							name="Chrome";
						}
					version = is_chrome[1].split(' ')[0];
					version = version.split('.')[0];
					browser = {
						'name': name, 
						'version': version, 
						'download': 'https://www.google.com/chrome/browser/desktop/index.html',
						'min_version': min_version.Chrome
					};
				}else if( is_explorer != null && is_explorer.length > 0 ){
					name = is_explorer[0].split(' ')[0];
					version = is_explorer[0].split(' ')[1];
					version = version.split('.')[0];
					browser = {
						'name': 'explorer', 
						'version': version,
						'download': 'http://windows.microsoft.com/es-es/internet-explorer/download-ie',
						'min_version': min_version.explorer
					};
				}else if( is_explorerNT != null && is_explorerNT.length > 0 ){
					name = 'explorer';
					version = is_explorerNT[0].split('rv:')[1];
					version = version.split('.')[0];
					browser = {
						'name': name, 
						'version': version,
						'download': 'http://windows.microsoft.com/es-es/internet-explorer/download-ie',
						'min_version': min_version.explorerNT
					};
				}else if( is_firefox != null && is_firefox.length > 0 ){
					name = is_firefox[0].split('/')[0];
					version = is_firefox[1].split(' ')[0];
					version = version.split('.')[0];
					browser = {
						'name': name, 
						'version': version,
						'download': 'https://www.mozilla.org/firefox/desktop/',
						'min_version': min_version.firefox
					};
				}else{
					browser = null;
				}
			}
			return browser;
		};
		
		_browser = getBrowser();
		if(_browser != null){
			if(compruebaFecha()){
				if(parseInt(_browser.version,10) < parseInt(_browser.min_version,10)){
					var htm = 	'<div class="warning__bbva" style="display: block; width: 100%;border: 1px solid #F2D7BB;border-bottom: 1px solid #F2D7BB;background-color: #FBF1D0;position: relative;">';
					htm +=			'<div class="container" style="padding-left: 20px; padding-right: 20px; text-align: center;">';
					htm +=				'<img id="imgLogo" name="imgLogo" style="color#71777F; margin-top:18px;" src="html/contenedor/img/logo__chrome.png" alt="Chrome" />';
					htm +=				'<div class="info__warning" style="margin-top: 16px; float: right; width: 90%;">';
					htm +=					'<div class="left__info" style="float:left; width: 77%;">';
					htm +=						'<h2 style="font-size: 24px;">Tu navegador <strong style="font-family: BBVA Web Medium;"></strong> se encuentra desactualizado</h2>';
					htm +=						'<p style="margin: 0 0 10px;">Para lograr la mejor experiencia posible en <span style="font-size: 20px; color: #0078D2; font-family: BBVA Web Light,arial,sans-serif;">BBVA.CL</span>, te recomendamos actualizarlo a la versi&oacute;n m&aacute;s reciente.</p>';
					htm +=					'</div>';
					htm +=					'<div>';
					htm +=						'<a class="btn large" style="padding: 3px 15px; margin-top: 20px; margin-right: 10px; line-height:45px;" href="https://www.bbva.cl/personas/navegador-antiguo.jsp">M&aacute;s informaci&oacute;n</a>';
					htm +=						'<a href="" style="float:right; cursor: pointer; margin-top: 20px;"><img src="https://www.bbvanet.cl/imagenes/navegadores/img/icon__cerrar.png" onclick="ocultaBanner();" style="position: absolute; top: 30px; right: 30px;"/></a>';
					htm +=					'</div>';
					htm +=				'</div>';
					htm +=			'</div>';
					htm += 		'</div>';
					
					$("header.body-header").prepend(htm);
					$("#home-carousel").attr("style","margin-top:95px;");
					$("div.left__info h2 strong").html(_browser.name+" v."+_browser.version);
					$("img#imgLogo").attr('src','https://www.bbvanet.cl/imagenes/navegadores/img/logo__'+_browser.name.toLowerCase()+'.png');
					$("img#imgLogo").attr('alt',_browser.name);
					
				  
					$browserName = $('.info__warning .left__info h2 strong');
					$browserLogo = $('.warning__bbva:not(.cookies) .logo__navegador');
					$browserName.text(_browser.name+" v."+_browser.version);
					$('.warning__bbva:not(.cookies)').slideDown();
				}
			   if( $('#cookie-help').length > 0 ){
					bname = _browser.name.toLowerCase();
					cookie_help = cookiesHelps[bname];
					$('#cookie-help').html(cookie_help);
				}
			}	
		}

		$boxDescarga = $('.box__descarga');
		$boxDescarga.show();
		if( $boxDescarga.length > 0 && typeof(_browser) != 'undefined'){
			$boxDescarga.find('img').attr({src: 'https://www.bbvanet.cl/imagenes/navegadores/img/logo__'+_browser.name.toLowerCase()+".png", 'alt': _browser.name });
			$boxDescarga.find('h2').text(_browser.name);
			$boxDescarga.find('.btn').attr({href: browser.download});
			$('.box__navegador.browser-'+_browser.name.toLowerCase()).remove();
			$boxDescarga.show();
		}
		$('.warning__bbva.cookies').hide();
		if( !navigator.cookieEnabled ){
			$('.warning__bbva.cookies').slideDown();
		}
	}
});

function ocultaBanner(){
	var hoy = new Date();
	var dia = hoy.getDate();
	var mes =hoy.getMonth()+1;
	var anio=hoy.getFullYear();
	
	var diaF = dia.toString();
	var	mesF = mes.toString();

	if(diaF.length <2){
		diaF = "0"+diaF;
	}
	if(mesF.length <2){
		mesF="0"+mesF;
	}

	var fechaFinal = diaF+"/"+mesF+"/"+anio.toString();
	setCookie("fechaInicioCookie", fechaFinal);
	
	$("div.warning__bbva").hide();
	$("#home-carousel").attr("style","margin-top:0px;");
}

function compruebaFecha(){
	var hoy = new Date();
	var dia = hoy.getDate();
	var mes =hoy.getMonth()+1;
	var anio=hoy.getFullYear();
	
	var diaF = dia.toString();
	var	mesF = mes.toString();
		if(diaF.length <2){
			diaF = "0"+diaF;
		}
		if(mesF.length <2){
			mesF="0"+mesF;
		}
	var fechaFinal = diaF+"/"+mesF+"/"+anio.toString();
	
	if(getCookie("fechaInicioCookie") != null ){
		
		var comprarNav = false;
		var difMes = 0;
		
		var fechaOrigen = getCookie("fechaInicioCookie").split("/");
		var anioOrigen = parseInt(fechaOrigen[2],10);
		var mesOrigen = parseInt(fechaOrigen[1],10);
	
		if(anio == anioOrigen){
			if(mes != mesOrigen){
				difMes = mes - mesOrigen;
				if(difMes > 1){
					comprarNav = true;
					setCookie("fechaInicioCookie", fechaFinal);
				}
			}
		}else{
			if(anio > anioOrigen){
				mes = mes+12;
				difMes = mes-mesOrigen;
				if(difMes >1){
					comprarNav = true;
					setCookie("fechaInicioCookie", fechaFinal);
				}
			}
		}
		return comprarNav;
	}else{
		return true;
	}	
}

function setCookie(cName, value, exdays, path, domain) {
	var cookie = cName + "=" + escape(value);
	if (exdays != null) {
		cookie += "; expires=" + getNowPlusDays(exdays).toUTCString();
	}
	if (domain != null) {
		cookie += "; domain=" + domain;
	}
	if (path != null) {
		cookie += "; path=" + path;
	}
	document.cookie = cookie;
}

function getCookie(cName) {
	var cookies = document.cookie.split(";");
	for (var i = 0; i < cookies.length; i++) {
		var p = cookies[i].indexOf("=");
		var n = cookies[i].substr(0, p).replace(/^\s+|\s+$/g, "");
		if (n == cName) {
			return unescape(cookies[i].substr(p + 1));
		}
	}
	return null;
}