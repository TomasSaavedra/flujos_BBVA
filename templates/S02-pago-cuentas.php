<div class="container coronita">
    <div class="menu-miga">
        <p>
            <a href="?src=S02-cuentas.php">Cuentas</a> 
            <span>Pagar mis Cuentas de servicios</span>
        </p>
    </div>
    <h2 class="title-sh">Mis Cuentas de servicios</h2>
    <hr class="separador">
    <div class="section-ahorro-inversion">
        <div class="banner-column" id="ahorro-lateral"> 
            <nav class="nav-sidebar">
                <a href="" class="active"><i class="arrow-right-button-active"></i>Cuentas por pagar</a>
                <a href="?src=S02-inscritas-cuentas.php"><i class="arrow-right-button"></i>Cuentas inscritas</a>
                <a href="?src=S02-historial-cuentas.php"><i class="arrow-right-button"></i>Historial de pagos</a>
            </nav>
        </div>
    </div>
    <div class="content-column pago-de-cuentas" >   
        <div class="row">
            <div class="content-column">
               <div class="box">

                    <div id="sinCuentas" style="display: none;">
                        <i class="icon-doc-search"></i>
                        <h3>Aún no tienes cuentas por pagar</h3>
                        <p>Puedes inscribir tus cuentas para gestionar los pagos fácilmente</p>
                        <a  href="includes/components/movements/cuentas/dialogs/pagar-cuentas-dialogo.html" class="modal-trigger button">
                            <i class="icon-more" style="color:#fff;"></i>
                            Cuenta nueva
                        </a>
                    </div>

                    <div id="conCuentas">
                        <div class="row mgBottom12px">
                            <div class="col-md-8 col-sd-12" style="margin-top: -6px">
                                <h4><strong>Selecciona las cuentas que deseas pagar</strong></h4>
                            </div>
                            <div class="col-md-4 col-sd-12 mgTop6px">
                                <a  href="includes/components/movements/cuentas/dialogs/pagar-cuentas-dialogo.html" class="modal-trigger button">
                                    <i class="icon-more" style="color:#fff;"></i>
                                    Cuenta nueva
                                </a>
                            </div>
                        </div>
                        <article class="capgemini-tables holder">
                            <div class="tables-body table-scroll">
                                <table class="responsive">
                                    <thead>
                                        <tr>
                                            <th style="padding: 8px 0px 8px 8px;">
                                                <label for="todos"  class="ui-marmots-label-check marmots-label-left">
                                                   &nbsp <input id="todos" name="todos" type="checkbox" value="1">
                                                </label>
                                            </th>  
                                            <th>TODO</th>
                                            <th>ALIAS</th>
                                            <th>IDENTIFICADOR</th>
                                            <th>VENCIMIENTO</th>
                                            <th>MONTO A PAGAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 8px 0px 8px 8px;">
                                                <label for="agua" class="ui-marmots-label-check marmots-label-left">
                                                   &nbsp <input id="agua" name="agua" class="" type="checkbox" value="2">
                                                </label>
                                            </td>  
                                            <td data-content="Todo" class="text-center"><img src="img/aguaAndinas.png"></td>
                                            <td data-content="Alias" class="text-center">Agua</td>
                                            <td data-content="Identificador" class="text-center">23508932</td>
                                            <td data-content="Vencimiento" class="text-center">03/02/2017</td>
                                            <td data-content="Monto a pagar" class="text-center"><div class="monto">$ 5.764</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 col-lg-12 mgBottom10px mgTop10px" id="montoTotal" style="display: none">
                                <div class="col-md-7 col-lg-7"></div>
                                <div class="col-md-5 col-lg-5">
                                    <div class="col-md-6 col-xs-6 text-left pd0px"> Total a pagar:</div>
                                    <div class="col-md-6 col-xs-6 text-right"><strong style="color: #006ec1; padding-right: 14px;"> $54.264</strong> </div>
                                </div>
                            </div>
                        </article>  
                        
                        <a class="btn" href="?src=S02-flujo-cuentas.html" style="float: right; margin-top: 33px;">Pagar</a>
                    </div>

                </div>
            </div> 
        </div>
    </div> 
</div>

<script type="text/javascript">
    $(function(){
        $('input[name=agua]').click(function(){
            $('#montoTotal').fadeIn();
        });
    });
</script>






