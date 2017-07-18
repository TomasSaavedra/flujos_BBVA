
$(function(){
	var ocultar = setInterval(function(){$("button#wizardNext").hide();},4);

	$('.BotonGift, .clickSinMapa').click(function(){
		$("button#wizardNext").show();
		clearInterval(ocultar);
	})


});









