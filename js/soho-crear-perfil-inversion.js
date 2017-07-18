$(document).ready(function() {
	setTimeout(function() {
	$(".wizardNext").html("Comenzar");	
	}, 1 );	

	setTimeout(function() {
	$(".modal-modificar-perfil .wizardNext").html("Actualizar mi Perfil");	
	}, 1 );	
});
$(document).on('click', ".wizardNext", function() {
	$(".wizardNext").html("Siguiente");	
	setTimeout(function() {
	$(".wizardNext").html("Siguiente");	
	 
	}, 1 );	

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  e.target // newly activated tab
	  e.relatedTarget // previous active tab
	})
});

$(document).ready(function() {

	$('input[fund="corporativo"]').on('click', function(event) {
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0);
			$(this).parents('.aside-inversiones').removeClass('active');
			if ($('.modal-bottom:visible')) {
				$('.fund-selected[fund="corporativo"]').hide();
			};
			$(this).parents('.ui-marmots-label-check').removeClass('on');
		} else {
			$('.modal-bottom').show();
			if ($('.modal-bottom:visible')) {
				$('.fund-selected[fund="corporativo"]').show();
			};			
			$(this).attr("checked",false);
			$(this).parent('label').removeClass('on');
			$(this).parents('.aside-inversiones').addClass('active');
			$(this).parents('.ui-marmots-label-check').addClass('on');
			$(this).attr('data-click-state', 1);
		}
	});
	$('input[fund="valorPlus"]').on('click', function(event) {
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0);
			$(this).parents('.aside-inversiones').removeClass('active');
			if ($('.modal-bottom:visible')) {
				$('.fund-selected[fund="valorPlus"]').hide();
			};
			$(this).parents('.ui-marmots-label-check').removeClass('on');
		} else {
			$('.modal-bottom').show();
			if ($('.modal-bottom:visible')) {
				$('.fund-selected[fund="valorPlus"]').show();
			};			
			$(this).attr("checked",false);
			$(this).parents('.ui-marmots-label-check').addClass('on');
			$(this).parents('.aside-inversiones').addClass('active');
			$(this).attr('data-click-state', 1);
		}
	});

	$('.close-all').on('click', function(event) {
		$('.modal-bottom').hide();

	});	

	$('.close').on('click', function(event) {
		var element = $(this).parents('.fund-selected').attr('fund');
		$(this).parents('.fund-selected').hide();
		$('input[fund="'+element+'"]').parents('.aside-inversiones').removeClass('active');
		$('input[type="checkbox"]').attr("checked",false);
		$('input[fund="'+element+'"]').parents('label').removeClass('on');
		$('input').attr('data-click-state', 0);
	});

	$('[btn="toggle"]').on('click', function(event) {
		if($(this).attr('data-click-state') == 1) {
			$('.search').height(0);
			$(this).attr('data-click-state', 0);
		} else {
			$('.search').height('auto');
			$(this).attr('data-click-state', 1);
		}
	});
	$('[btn="toggle1"]').on('click', function(event) {
		if($(this).attr('data-click-state') == 1) {
			$('.search1').height(0);
			$(this).attr('data-click-state', 0);
		} else {
			$('.search1').height('auto');
			$(this).attr('data-click-state', 1);
		}
	});

});

