<?php
	$step = '';
	if(isset($_REQUEST['step'])){
		$step = $_REQUEST['step'];
	}
	$pagoFlexible = '';
	if(isset($_REQUEST['pagoFlexible'])){
		$pagoFlexible = $_REQUEST['pagoFlexible'];
	}
?>
<script type="text/javascript" src="js/soho.js"></script>
<script type="text/javascript" src="js/soho-valida-numero.js"></script>

<div class="operation-header hidden-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">
		<button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
		<span class="TituloPagar">Cobrar Vales Vista <?php echo $pagoFlexible; ?></span>
	</h3>
</div>

<div class="operation-header visible-xs">
	<a class="close-operation-tab" href="#">Cerrar <span class="close-icon"></span></a>
	<h3 class="tab-title">Pagar deuda</h3>
	<hr/>
</div> 

<div class="buttons">
    <span class="btn-group">
        <a class="btn large primary yes show-operation active" href="#" id="btnValesAvailables" ><strong>Disponibles</strong></a>
        <a class="btn large primary no show-operation" href="#" id="btnValesChargeds"><strong>Cobrados</strong></a>
    </span>
</div>

<div class="pagardeuda" id="vistasDisponibles">
	<div class="main-transferencia <?php echo $step == '2' ? 'init-step2' : ''; ?>">
		<form novalidate id="form-transferencia" class="form-horizontal tooltip-validation transfer-filter">
			<article id="wizardPagarDeuda" class="wizard">
				<div data-title="Disponibles" class="">
					


                    <div id="availablesVales" class="tab-mobile">
                        <div id="newHeaderVV">
                            <aside id="vv_header2" class="product-header">
                                <div class="left" style="margin: -5px 15px 0px;">
                                    <p>Cantidad disponible:  </p>
                                    <p><strong id="cantidad_total_vv"> 23 Vales Vista</strong></p>
                                </div>
                                <div class="capgemini-chart mid" style="margin: -5px 40px 0px;">
                                    <p>Total disponible:  </p>
                                    <p><strong id="monto_total_vv"> $ 81.403.143</strong></p>
                                </div>
                                <div class="right" style="margin: -40px 15px 0px;">
                                    <p>
                                        <button id="btn-todo" class="btn wizardNext">Cobrar Todo</button>
                                    </p>
                                </div>
                            </aside>
                        </div>
                        <div id="container-mov-table" class="table-footer-inter">
                            <article class="capgemini-tables mov-table">
                                <h3 id="tituloTabla"></h3>
                                <p class="iconed-24 block-warning aviso-no-encontrado hidden" id="noResults"><i class="icon-24 m03-aviso"></i>No se registran Vales Vista para ser cobrados.</p>
                                <p class="iconed-24 block-warning aviso-no-encontrado hidden" id="intenteMasTarde"><i class="icon-24 m03-aviso"></i>En estos momentos no podemos atenderlo, por favor intente mas tarde.</p>
                                <div class="tables-body table-resultados" id="divAvailables">
                                    <table class="responsive" id="tableAvailables">
                                        <thead>
                                            <tr class="hidden-xs">
                                                <th style="text-align:center;"><label for="check1" style="color: #434A58;" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="check1" name="box1" type="checkbox" class="registro-avance"></label></th>
                                                <th style="text-align:center;">Fecha Emisión</th>
                                                <th style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;Emisor</th>
                                                <th style="text-align:center;">Monto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="avanceEncontrado" style="border:none !important;padding:5px !important; margin-bottom:50px !important; margin-top:10px;">
                                                <td style="text-align:center;" data-content="Seleccionar"><label for="checkVales0" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVales0" unchecked="" name="checkAvailables" type="checkbox" data-indice="0" class="registro-avance" value="00000011042016-01-2800100001;1123212"></label></td>
                                                <td style="text-align:center;" data-content="Fecha Emisión"><em>28/01/2016</em></td>
                                                <td style="text-align:left;" data-content="Nombre del Emisor"><em> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</em></td>
                                                <td style="text-align:right;" data-content="Monto"><em> $ 1.123.212&nbsp;&nbsp;&nbsp;&nbsp;</em></td>
                                                <td class="xs-view" style="padding:10px !important;">
                                                    <div class="left" style="margin-top:10px"><small><label for="checkVale0" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVale0" name="checkAvailables" type="checkbox" data-indice="0" class="registro-vales" value="00000011042016-01-2800100001;1123212"></label></small><em>28/01/2016</em></div>
                                                    <div class="right" style="margin-top:10px"><small> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</small><em> $ 1.123.212</em></div>
                                                </td>
                                            </tr>
                                            <tr class="avanceEncontrado" style="border:none !important;padding:5px !important; margin-bottom:50px !important; margin-top:10px;">
                                                <td style="text-align:center;" data-content="Seleccionar"><label for="checkVales1" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVales1" unchecked="" name="checkAvailables" type="checkbox" data-indice="1" class="registro-avance" value="00000011042016-01-2800200001;2991097"></label></td>
                                                <td style="text-align:center;" data-content="Fecha Emisión"><em>28/01/2016</em></td>
                                                <td style="text-align:left;" data-content="Nombre del Emisor"><em> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</em></td>
                                                <td style="text-align:right;" data-content="Monto"><em> $ 2.991.097&nbsp;&nbsp;&nbsp;&nbsp;</em></td>
                                                <td class="xs-view" style="padding:10px !important;">
                                                    <div class="left" style="margin-top:10px"><small><label for="checkVale1" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVale1" name="checkAvailables" type="checkbox" data-indice="1" class="registro-vales" value="00000011042016-01-2800200001;2991097"></label></small><em>28/01/2016</em></div>
                                                    <div class="right" style="margin-top:10px"><small> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</small><em> $ 2.991.097</em></div>
                                                </td>
                                            </tr>
                                            <tr class="avanceEncontrado" style="border:none !important;padding:5px !important; margin-bottom:50px !important; margin-top:10px;">
                                                <td style="text-align:center;" data-content="Seleccionar"><label for="checkVales2" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVales2" unchecked="" name="checkAvailables" type="checkbox" data-indice="2" class="registro-avance" value="00000011042016-01-2800500001;15013310"></label></td>
                                                <td style="text-align:center;" data-content="Fecha Emisión"><em>28/01/2016</em></td>
                                                <td style="text-align:left;" data-content="Nombre del Emisor"><em> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</em></td>
                                                <td style="text-align:right;" data-content="Monto"><em> $ 15.013.310&nbsp;&nbsp;&nbsp;&nbsp;</em></td>
                                                <td class="xs-view" style="padding:10px !important;">
                                                    <div class="left" style="margin-top:10px"><small><label for="checkVale2" class="ui-marmots-label-check marmots-label-left"><span class="link"> &nbsp;&nbsp;&nbsp;&nbsp;</span><input id="checkVale2" name="checkAvailables" type="checkbox" data-indice="2" class="registro-vales" value="00000011042016-01-2800500001;15013310"></label></small><em>28/01/2016</em></div>
                                                    <div class="right" style="margin-top:10px"><small> &nbsp;&nbsp;&nbsp;&nbsp;BBVA PAGOS MIXTOS PRESTAMOS</small><em> $ 15.013.310</em></div>
                                                </td>
                                            </tr>
                                             
                                        </tbody>
                                    </table>
                                </div>
                                 
                            </article>
                        </div> 
                    </div>


				</div>
				<div data-title="Confirmar" class="ConfirmaPagoContenedor" data-multistep="false">
					<div class="" >
					<?php include(dirname(__FILE__) . '/vales-vista/remote-step-3-confirmar.html'); ?>
					</div> 
				</div>
				<div data-title="Comprobante"> 
					<div class=" " >
					<?php include(dirname(__FILE__) . '/vales-vista/remote-step-4-comprobante.html'); ?>
					</div>
				</div>
			</article>
		</form>
	</div>
</div>

<div id="contenedor-mov-table" class="table-footer-inter" style="display:none;">
        <article class="capgemini-tables mov-table">
            <h3 id="tituloTabla"></h3>
            <p class="iconed-24 block-warning aviso-no-encontrado hidden" id="avisoNoHayResultados"><i class="icon-24 m03-aviso"></i>No se registran Vales Vista cobrados a su nombre.</p>
            <p class="iconed-24 block-warning aviso-no-encontrado hidden" id="avisoErrorVales"><i class="icon-24 m03-aviso"></i>En estos momentos no podemos atenderlo, por favor intente mas tarde.</p>
            <div class="tables-body table-resultados" id="divDatos">
                <table class="responsive" id="tablaDatosCobrados">
                    <thead><tr class="hidden-xs"><th style="text-align:center;">Fecha Cobro</th><th style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;Emisor</th><th style="text-align:center;">Canal</th><th style="text-align:center;">Monto</th></tr></thead>
                    <tbody><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>28/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 8.516&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>28/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 8.516</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>28/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 39.903&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>28/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 39.903</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>28/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 30.301&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>28/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 30.301</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>28/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 15.080&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>28/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 15.080</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>28/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 128.409&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>28/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 128.409</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>29/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 21.929&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>29/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 21.929</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>30/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 22.465&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>30/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 22.465</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>30/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 19.116&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>30/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 19.116</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>30/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 70.416&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>30/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 70.416</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 31.821&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 31.821</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 38.576&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 38.576</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 690&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 690</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 690&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 690</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 690&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 690</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>29/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 690&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>29/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 690</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 69.615&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 69.615</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 30.280&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 30.280</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>30/06/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 20.813&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>30/06/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 20.813</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 9.467&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 9.467</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 10.093&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 10.093</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 6.311&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 6.311</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>05/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 256.225&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>05/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 256.225</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>05/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 19.595&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>05/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 19.595</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>01/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 4.104&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>01/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 4.104</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>04/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 4.613&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>04/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 4.613</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>05/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 8.141&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>05/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 8.141</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>06/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 2.136&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>06/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 2.136</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>06/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 9.156&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>06/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 9.156</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>06/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 26.048&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>06/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 26.048</small></div></td></tr><tr class="avanceEncontrado" style="border:none !important;padding:0px !important; margin-bottom:60px !important; margin-top:10px !important;"><td style="text-align:center;" data-content="Fecha Cobro"><em>07/07/2016</em></td><td style="text-align:left;" data-content="Nombre del Emisor"><em style="font-weight:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;BBVA FOGAPE</em></td><td style="text-align:center;" data-content="Canal"><em>IN</em></td><td style="text-align:right;" data-content="Monto"><em> $ 7.512&nbsp;&nbsp;&nbsp;&nbsp;</em></td><td class="xs-view" style="padding:0px !important;"><div class="left" style="margin-top:10px; padding:0px !important"><span>07/07/2016</span><small>BBVA FOGAPE</small></div><div class="right" style="margin-top:10px; padding:0px !important"><em>IN</em><small> $ 7.512</small></div></td></tr></tbody>
                </table>
            </div>
            <footer class="tables-footer table-resultados" id="footerMostarMas" style="">
                <p style="margin: 0 0 0px;">&nbsp;</p>
                <button type="button" id="btnMostarMas" class="btn"><span>Mostrar más</span></button>
            </footer>
        </article>
    </div>


 

<hr class="operation-bottom visible-xs"/>


<script>
	var tipoPagoTarjeta='';
	
	if($('#tabnac').hasClass('ui-tabs-active ui-state-active') && $("#contenedorAcordeones1").is(':visible')){
		$('#tabnac').removeClass('ui-tabs-active ui-state-active');
		$('#tabnac').attr('aria-selected','false');
	} 

	
	$(document).ready(function(){

        $('#btn-todo').click( function(){ 
            $('#wizardNext').trigger('click');
            return false;
        });

        $('#btnValesAvailables').click( function(){  
            $("#contenedor-mov-table").hide();
            $("#vistasDisponibles").show();
            $('.btn-group a').removeClass('active');
            $(this).addClass('active');
            console.log('11');
            var $wizard = $('.wizard');
            if($wizard.length > 0) {
                //$(document).trigger('capgemini.wizard.refresh', $wizard);
                $(document).trigger('capgemini.wizard.resize', $wizard);
            }
            return false;
        });

        $('#btnValesChargeds').click( function(){  
              console.log('22');
              $("#vistasDisponibles").hide();
            $("#contenedor-mov-table").show();
            $('.btn-group a').removeClass('active');
            $(this).addClass('active');
            return false;
        });
		
		setTimeout(function(){
		//remueve las clases

			$('.pagardeuda [role=tab]').removeClass('ui-tabs-active ui-state-active');
			$('.pagardeuda [role=tab]').attr('aria-selected','false');

			 
		},150);
	});

</script>
