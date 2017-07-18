<style type="text/css">
    .coronita .pago-de-cuentas .box .capgemini-tables .tables-body.table-scroll table tr {
        font-size: 12px !important;
    }
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
                <a href="?src=S02-inscritas-cuentas.php"><i class="arrow-right-button"></i>Cuentas inscritas</a>
                <a href="" class="active"><i class="arrow-right-button-active"></i>Historial de pagos</a>
            </nav>
        </div>
    </div>
    <div class="content-column pago-de-cuentas" >   
        <div class="row">
            <div class="content-column">
               <div class="box">
                    <div id="miHistorial">
                        <div class="row mgBottom12px">
                            <div class="col-md-12 col-sx-12" style="margin-top: -6px">
                                <h4><strong>Mis historial de pagos</strong></h4>
                            </div>
                        </div>
                       
                        <div class="form-group mgBottom60px">
                            <div class="col-lg-4 col-md-4 col-sx-12 text-left">
                                <label  for="clave-segura">Selecciona un servicio</label>
                            </div>
                            
                           <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="select selectpicker-out select-largo-maq">
                                    <select class="js-example-basic-single" style="width: 350px">
                                          <option value="AL">Agua</option>
                                          <option value="AG">Arriendos</option>
                                          <option value="TI">Autopistas</option>
                                          <option value="MA">Carrier</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                        <hr style="clear: both">
                        <div class="col-lg-12 col-md-12 col-sx-12 pd0px">

                            <div class="form-group col-md-4 pd0px" id="fecha-termino">
                                <div class="col-md-4 text-left">
                                    <label class="mgTop4px">Desde:</label>
                                </div>
                                <div class="col-md-8 pd0px">
                                    <input type="text" size="38" class="datepicker form-control" id="fecha-de-inicio" name="fecha-de-termino" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
                                </div>
                            </div>
                           
                            <div class="col-lg-1 col-md-1"></div>

                            <div class="form-group col-md-4 pd0px" id="fecha-termino">
                                <div class="col-md-4 text-left">
                                    <label class="mgTop4px">Hasta:</label>
                                </div>
                                <div class="col-md-8 p0">
                                    <input type="text" size="38" class="datepicker form-control" id="fecha-de-termino" name="fecha-de-termino" data-format="dd/mm/yy" placeholder="dd/mm/yyyy"/>
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-1"></div>

                            <div class="col-md-2 col-lg-2 col-sx-12 pd0px text-right">
                                <a href="" class="btn">Consultar</a>
                            </div>
                        
                        </div>  
                        

                        <div class="utility-icons mgBottom10px">
                            <a class="btn primary" href="#"><span class="icon-16 blue l01-pdf" title="Descargar pdf"></span></a> 
                            <a class="btn primary" href="#"><span class="icon-16 blue l02-excel" title="Exportar a excel"></span></a>
                        </div>


                        <article class="capgemini-tables holder">
                            <div class="tables-body table-scroll">
                                <table class="responsive">
                                    <thead>
                                        <tr>
                                            <th>EMPRESA</th>  
                                            <th>CUENTA</th>
                                            <th>FECHA PAGO</th>
                                            <th>MONTO</th>
                                            <th>IDENTIFICADOR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td data-content="Todo" class="text-center">AGUAS ANDINAS</td>
                                            <td data-content="Alias" class="text-center">AGUA</td>
                                            <td data-content="Identificador" class="text-center">03/01/2017</td>
                                            <td data-content="Vencimiento" class="text-center">$5.746</td>
                                            <td data-content="Vencimiento" class="text-center">75648392</td>
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

<script type="text/javascript">
    $(function(){
        $(".js-example-basic-single").select2();
    });
</script>







