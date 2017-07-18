<style type="text/css">
    

    /*.wizard .step-container .slide-viewer {
        position: inherit !important;
    }*/
</style>


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
                <a href="?src=S02-pago-cuentas.php"><i class="arrow-right-button"></i>Cuentas por pagar</a>
                <a href="" class="active"><i class="arrow-right-button-active"></i>Cuentas inscritas</a>
                <a href="?src=S02-historial-cuentas.php"><i class="arrow-right-button"></i>Historial de pagos</a>
            </nav>
        </div>
    </div>
    <div class="content-column pago-de-cuentas" >   
        <div class="row">
            <div class="content-column">
               <div class="box">

                    <div id="miInscritas">
                        <div class="row" style="margin-bottom: 12px">
                            <div class="col-md-8 col-sd-12" style="margin-top: -6px">
                                <h4><strong>Mis cuentas guardadas</strong></h4>
                            </div>
                            <div class="col-md-4 col-sd-12" style="margin-top: 6px;">
                                <a  href="includes/components/movements/cuentas/dialogs/pagar-cuentas-dialogo.html" class="modal-trigger button">
                                    <i class="icon-more"></i>
                                    Cuenta nueva
                                </a>
                            </div>
                        </div>
                        <article class="capgemini-tables holder">
                            <div class="tables-body table-scroll">
                                <table class="responsive">
                                    <thead>
                                        <tr>
                                            <th>TODO</th>
                                            <th>ALIAS</th>
                                            <th>IDENTIFICADOR</th>
                                            <th>VENCIMIENTO</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-content="Todo" class="text-center"><img src="img/aguaAndinas.png"></td>
                                            <td data-content="Alias" class="text-center">Agua</td>
                                            <td data-content="Identificador" class="text-center">23508932</td>
                                            <td data-content="Vencimiento" class="text-center">03/02/2017</td>
                                            <td data-content="Monto a pagar" class="text-center" style="padding-top: 8px !important;">
                                                <a class="btn primary modal-trigger" style="display: inline-block;" data-href="includes/components/movements/cuentas/dialogs/editar-cuentas-dialogo.html"> 
                                                    <span class="icon-16 n04-editar"></span>
                                                </a> 
                                                <a class="btn primary modal-trigger" style="display: inline-block;" data-href="includes/components/movements/cuentas/dialogs/eliminar-cuentas-dialogo.html">
                                                    <span class="icon-16 n05-eliminar"></span>
                                                </a> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>  
                    </div>
                </div>
            </div> 
        </div>
    </div> 
</div>







