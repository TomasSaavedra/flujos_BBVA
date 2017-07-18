<?php if($_SERVER['SERVER_NAME'] == 'localhost_22'){ ?>
	<!-- less -->
	<script type="text/javascript">
	    less = {
	        env: "development", // "development" or "production"
	        async: false,       // load imports async
	        fileAsync: false,   // load imports async when in a page under a file protocol
	        poll: 1000,         // when in watch mode, time in ms between polls
	        dumpLineNumbers: "all", // "comments" or "mediaQuery" or "all"
	        relativeUrls: false // whether to adjust url's to be relative if false, url's are already relative to the entry less file
	    };
	</script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/less/less-1.5.0.min.js"></script>

	<!-- general vendor libraries -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/modernizr/modernizr_2.6.2.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/selectivizr-1.0.2/selectivizr.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery/jquery-1.11.0.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery.mobile-1.4.0/jquery.mobile.custom.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/bootstrap-3.0.3/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/respond-1.4.2/dest/respond.min.js"></script>

	<!-- jquery validate -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-validation-1.11.0/jquery.validate.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-validation-1.11.0/additional-methods.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-maskedinput-1.3.1/jquery.maskedinput.js"></script>

	<!-- nicescroll -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-mousewheel-3.1.6/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery.nicescroll-3.5.0/jquery.nicescroll.js"></script>

	<!-- jScrollPane -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jscroll-pane-2.0.19/script/jquery.jscrollpane.js"></script>

	<!-- highcharts -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/highcharts-3.0.9/js/highcharts.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/highcharts-3.0.9/js/modules/exporting.js"></script>

	<!-- scrollto -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery.scrollto-1.4.3.1/jquery.scrollto-1.4.3.1.js"></script>

	<!-- file upload -->
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/load-image.min.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/canvas-to-blob.min.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.iframe-transport.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload-process.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload-image.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload-audio.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload-video.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/vendor/jquery-file-upload-9.5.7/js/jquery.fileupload-validate.js"></script>

	<!-- custom libraries -->
	<script type="text/javascript" src="../../bbva-library-responsive/js/utils/jquery.utils-0.1.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/wizard/wizard.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/checkbox/jquery.marmots-checkbox.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/date/date.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/switch/switch.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/carousel/carousel.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/select/js/bootstrap-select.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/lightbox/lightbox.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/modal/modal.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/tooltip/tooltip.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/move-to/move-to.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/validation/localization/messages_es.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/validation/validation.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/nicescroll/nicescroll.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/google-maps/google-maps.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/js/close-icon/close-icon.js"></script>

	<!-- components js -->
	<script type="text/javascript" src="../../bbva-library-responsive/components/charts/charts.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/charts/themes/bbva.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/tables/tables.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/tabs/tabs.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/accordeon/accordeon.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/filters/filters.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/autocomplete/autocomplete.js"></script>
	<script type="text/javascript" src="../../bbva-library-responsive/components/fileupload/fileupload.js"></script>



	<!-- documentation js -->
	<script type="text/javascript" src="js/site.js"></script>
<?php } else { ?>
	<script type="text/javascript" src="js/libraries-min.js"></script>
	<script type="text/javascript" src="js/site-min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.slideToggleMinHeight.min.js"></script>
	<script type="text/javascript" src="js/funciones-maqueta.js"></script>
	<script type="text/javascript" src="js/accounting.js"></script>
	<script type="text/javascript" src="js/jquery.scrolling-tabs.js"></script>
	<script type="text/javascript" src="js/jquery.easy-autocomplete.js"></script>
	<script type="text/javascript" src="js/select2/js/select2.js"></script>
	<script type="text/javascript" src="js/select2/js/placeholders.jquery.min.js"></script>
	<!--<script type="text/javascript" src="js/selectivizr.js"></script>-->
<?php } ?>

<!-- google maps api -->
<!--
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	-->

<!-- Border Radius -->

<!--script src="js/jquery.corner.js"></script>
<script type="text/javascript">
	$('.btnprueba').corner('30px');
</script-->


<script type="text/javascript">
	$(document).ready(function(){

		//QUIERO EN PÁGINAS INTERIORES
		if($("ul.nav-quiero li").length > 8){
			$("ul.nav-quiero").addClass("left");
		}
	});

	$(document).ready(function(){

		//QUIERO EN BOTONES
        $("ul.list").each(function(){
            if($("li", this).length > 8){
                $(this).addClass("listQuiero");
            }
        })

	});
</script>



