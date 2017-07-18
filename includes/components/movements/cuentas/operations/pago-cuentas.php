<div id="operacion-consulta">
    <div id="consulta-busqueda">
        <header>
            <div class="operation-header hidden-xs">
                <a class="close-operation-tab" href="#"><span class="close-icon"></span></a>
                <div class="row">
                    <div class="col-md-8">
                    <h3 class="tab-title">
                        <button class="btn arrow-left primary quiero close-operation" type="button">Quiero</button>
                        Gestionar PAC
                    </h3>
                    </div>
                </div>
            </div>
            <div class="operation-header visible-xs">
                <a class="close-operation-tab" href="#">
                    <span class="close-icon"></span>
                </a>
                <h3 class="tab-title ">Pagos automáticos de cuentas (PAC) asociados al Fondo Mutuo</h3>
            </div>
        </header>
        
        <div class="operation-body">
            <form>
                <div class="container">
                    <div class="row">
                        <article class="capgemini-tables holder">
                            <div>
                                <div class="tables-body table-scroll">
                                    <div class="">
                                        <h2 class="title-wizard hidden-xs">
                                            Pagos automáticos de cuentas (PAC) asociados al Fondo Mutuo
                                        </h2>

                                        <table class="responsive" id="opcionesPac">
                                            <tbody>
                                                <tr class="hidden-xs">
                                                    <th>ALIAS</th>
                                                    <th>MONTO</th>
                                                    <th>DÍA DE CARGO</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td data-content="Alias">Inversión meta auto</td>
                                                    <td data-content="Monto">$ 100.000</td>
                                                    <td data-content="Día de cargo">03</td>
                                                    <td>
                                                        <a href="includes/components/movements/ahorro-inversiones/dialogs/gestionar-pac-editar.html" class="btn primary modal-trigger">
                                                            <span class="icon-16 blue n04-editar"></span>
                                                        </a>    
                                                        <a class="btn primary modal-trigger" href="includes/components/movements/ahorro-inversiones/dialogs/gestionar-pac-eliminar.html">
                                                            <span class="icon-16 blue n05-eliminar"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="eliminarPac" style="display: none;" class="operaciones">
                                            <div class="box" style="min-height: 50px !important">
                                                <p> <strong>Este Fondo Mutuo no tiene pagos automáticos de cuentas (PAC) asociados.</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
