<script type="text/javascript" src="js/soho-crear-perfil-inversion.js"></script>

<div class="container view-inversion">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>
    <div class="section-tabs">
        <!-- Utility icons -->
        <div class="utility-icons">
            <!--a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a-->
            <!--a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
                <a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a-->
        </div>
        <!-- title -->
        <h2 class="title-sh">Ahorro e inversión</h2>
         
        <hr class="separador">
        <div class="section-ahorro-inversion">
             
                <div class="banner-column" id="ahorro-lateral"> 
                    <nav class="nav-sidebar">
                        <a href="?src=S18-ahorro-e-inversion.php">Mis Productos</a>
                        <a href="#">Mis Metas</a>
                        <a href="?src=S18-productos-de-inversion.php" class="active">Contratar productos</a>
                    </nav>

                    <aside class="links dated mini-triangled favoritas editable perfil-inversor perfil-inversor-lateral">
                        <header>
                            <h1>Perfil inversor</h1>
                        </header>

                        <section> 
                            <ul>
                                <li>Conservador</li>
                                <li class="active">Moderado</li>
                                <li class="last">Arriesgado</li>
                            </ul>
                            <div class="barra">
                                <span class="barra-azul moderado"></span>
                            </div> 
                        </section>

                        <footer>
                            <a href="includes/components/dialogs/modificar-perfil.html" class="btn modal-trigger">Cambiar Mi Perfil</a>
                        </footer>
                    </aside>
                </div>

                <div class="content-column" id="ahorro-inversion">  

                    <ul class="nav nav-tabs align-center">
                        <li class="active"><a href="#buscar-filtros" role="tab" data-toggle="tab">Buscar por filtros</a></li>
                        <li><a href="#buscar-nombre" role="tab" data-toggle="tab">Buscar por nombre</a></li>
                    </ul>
                    <hr class="separador">

                    <div class="tab-content">
                        <div  role="tabpanel" class="tab-pane active" id="buscar-filtros">
                            <div class="buscador-ffmm">
                                <div class="text-center">
                                    <h2>Buscador de Fondos Mutuos</h2>
                                    <p>Ingrese la información necesaria para buscar un fondo acorde a sus preferencias</p>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="label-form" for="monto"> Moneda: </label>                        
                                        <select class="selectpicker" data-container="body"> 
                                            <option>CLP $</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="label-form" for="monto"><span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Texto acá"></span> Monto a invertir: </label>                        
                                        <select class="selectpicker" data-container="body"> 
                                              
                                              <option value="   Entre $0 y $100.000">Entre $0 y $100.000</option>
                                              <option value="   Entre $100.000 y $200.000">Entre $100.000 y $200.000</option>
                                              <option value="   Entre $200.000 y $300.000">Entre $200.000 y $300.000</option>
                                              <option value="   Entre $300.000 y $400.000">Entre $300.000 y $400.000</option>
                                              <option value="   Entre $400.000 y $500.000">Entre $400.000 y $500.000</option>
                                              <option value="   Entre $500.000 y $1.000.000">Entre $500.000 y $1.000.000</option>
                                              <option value="   Entre $100.000 y $5.000.000">Entre $100.000 y $5.000.000</option>
                                              <option value="   Más de 5.000.000">&nbsp;&nbsp; Más de 5.000.000</option>
                                             
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="label-form" for="monto"> Tiempo permanecia: </label>                        
                                        <select class="selectpicker" data-container="body"> 
                                            <option>Menos de un año</option>
                                            <option>Entre 1 año y 3 años</option>
                                            <option>Más de 3 años</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="label-form" for="monto"> Riesgo del fondo: </label>                        
                                        <select class="selectpicker" data-container="body"> 
                                            <option>Conservador</option>
                                            <option>Moderado</option>
                                            <option>Arriesgado</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <a href="#" class="btn btn-primary" btn="toggle">Buscar Fondos</a>
                                    </div>
                                </div>
                            </div>


                            <div class="resultados-busqueda search">
                                <h3>Resultado de la búsqueda:</h3>
                                <h4>Seleccione los Fondos que desees contratar:</h4>

                                <div class="box">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label  for="monto"><span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Texto acá"></span>  Comisión de salida </label>                        
                                            <select class="selectpicker" data-container="body"> 
                                                  <option selected="" value="Sin comisión">Sin comisión</option>
                                                  <option value="Hasta 6 meses sin comisión">Hasta 6 meses sin comisión</option>
                                                  <option value="6 meses a 1 año sin comisión">6 meses a 1 año sin comisión</option>
                                                  <option value="Hasta 1 año sin comisión">Hasta 1 año sin comisión</option>
                                                  <option value="más de 2 años sin comisión">más de 2 años sin comisión</option> 
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label  for="monto">Fondo para APV</label>                        
                                            <select class="selectpicker" data-container="body">
                                                <option>Si</option>
                                                <option>No</option> 
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label  for="monto"><span class="icon-16 blue d06-masinformacion tooltip-help zindex" title="" data-original-title="Texto acá"></span>  Con gestión activa</label>                        
                                            <select class="selectpicker" data-container="body">
                                                <option>Si</option>
                                                <option>No</option> 
                                            </select>
                                        </div> 
                                        <div class="col-sm-3">
                                            <label  for="monto">Con inversión recurrente</label>                        
                                            <select class="selectpicker" data-container="body">
                                                <option>Si</option>
                                                <option>No</option> 
                                            </select>
                                        </div> 
                                    </div>

                                    <aside class="links dated aside-consolidado aside-inversiones"> 
                                        <article class="capgemini-tables ffmm-inicio">
                                            <header class="tables-header clearfix"><!--header-->
                                                <div class="pull-left fondo-check-select">
                                                    <div class="item first check">
                                                        <div class="form-group formline confirmar">
                                                            <label for="fondo-corporativo" class="ui-marmots-label-check marmots-label-left">
                                                                <br/>
                                                                <input id="fondo-corporativo" name="fondo-corporativo" type="checkbox" fund="corporativo">
                                                            </label>
                                                        </div>    
                                                    </div>
                                                </div>                                            
                                                <div class="pull-left">
                                                    <h1 class="force-align">Corporativo</h1>  
                                                    <p class="force-align">Serie A  |  Conservador</p>
                                                </div>
                                                <div class="pull-right">
                                                    <p>Rentabilidad último año: <strong>9,96%</strong></p> 
                                                    <p>(últimos 12 meses)</p>
                                                </div>
                                                

                                                <span class="btn-group ">
                                                     <button type="button" class="btn sprite-arrow active"></button>
                                                </span>
                                            </header><!--header-->

                                            <div class="body-consolidado capgemini-chart"><!--body-consolidado-->
                                                <article class="capgemini-tables datos-tabla"  >
                                                    <div class="tables-body">
                                                        <div class="bajada"> 
                                                            <p>El fondo Invierte principalmente en instrumentos de deuda nacionales denominado en pesos y UF., con una duración máxima de 90 días. <a href="#">Ver detalle del Fondo</a></p>
                                                        </div>
                                                        
                                                        <table >
                                                            <tbody>
                                                                <tr> 
                                                                    <th width="">Comisión de salida</th> 
                                                                    <th width="">Monto mínimo de inversión</th> 
                                                                </tr>
                                                                <tr data-select-radio="true"> 
                                                                    <td class="text-left"><p>20% sin comisión sobre 20%: 0-30 días 1,5% </p><p>31-90 días: 1%Desde 91 días: 0%</p></td> 
                                                                    <td class="text-right">$ 100.000</td> 
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <a href="#">Ver folleto de esta Serie</a>
                                                                    </td>
                                                                </tr>
                                                                 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </article>
                                            </div><!--Fin body-consolidado--> 
                 
                                        
                                        </article> 
                                    </aside>

                                    <aside class="links dated aside-consolidado aside-inversiones"> 
                                        <article class="capgemini-tables ffmm-inicio">
                                            <header class="tables-header clearfix"><!--header-->
                                                <div class="pull-left fondo-check-select">
                                                    <div class="item first check">
                                                        <div class="form-group formline confirmar">
                                                            <label for="fondo-valor-plus" class="ui-marmots-label-check marmots-label-left">
                                                                <br/>
                                                                <input id="fondo-valor-plus" name="fondo-valor-plus" type="checkbox" fund="valorPlus">
                                                            </label>
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class="pull-left">
                                                    <h1 class="force-align">Valor Plus</h1>  
                                                    <p class="force-align">Serie A  |  Conservador</p>
                                                </div>
                                                <div class="pull-right">
                                                    <p>Rentabilidad último año: <strong>9,96%</strong></p> 
                                                    <p>(últimos 12 meses)</p>
                                                </div>
                                                

                                                <span class="btn-group ">
                                                     <button type="button" class="btn sprite-arrow active"></button>
                                                </span>
                                            </header><!--header-->

                                            <div class="body-consolidado capgemini-chart"><!--body-consolidado-->
                                                <article class="capgemini-tables datos-tabla"  >
                                                    <div class="tables-body">
                                                        <div class="bajada"> 
                                                            <p>El fondo Invierte principalmente en instrumentos de deuda nacionales denominado en pesos y UF., con una duración máxima de 90 días. <a href="#">Ver detalle del Fondo</a></p>
                                                        </div>
                                                        
                                                        <table >
                                                            <tbody>
                                                                <tr> 
                                                                    <th width="">Comisión de salida</th> 
                                                                    <th width="">Monto mínimo de inversión</th> 
                                                                </tr>
                                                                <tr data-select-radio="true"> 
                                                                    <td class="text-left"><p>20% sin comisión sobre 20%: 0-30 días 1,5% </p><p>31-90 días: 1%Desde 91 días: 0%</p></td> 
                                                                    <td class="text-right">$ 100.000</td> 
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <a href="#">Ver folleto de esta Serie</a>
                                                                    </td>
                                                                </tr>
                                                                 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </article>
                                            </div><!--Fin body-consolidado--> 
                 
                                        
                                        </article> 
                                    </aside>

                                    

                                    <p>2 de 25 resultados</p>

                                    <ul class="pagination pagination-default">
                                              <li class="disabled prev"><a href="#"></a></li>
                                              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">3</a></li>
                                              <li><a href="#">4</a></li>
                                              <li><a href="#">5</a></li>
                                              <li class="next"><a href="#"></a></li>
                                           </ul>

                                    <div class="text-center">
                                        <a href="?src=S18-ffmm-2.php" class="btn btn-primary ">Contratar fondos</a>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                        <div  role="tabpanel" class="tab-pane" id="buscar-nombre">
                            <div class="buscador-ffmm">
                                <div class="text-center">
                                    <h2>Buscador de Fondos Mutuos</h2>
                                    <p>Ingrese el nombre del fondo que deseas buscar</p>
                                </div>

                                <div class="row">
                                     
                                     
                                    <div class="col-sm-10">
                                        <input type="text" value=" " class="form-control ">
                                    </div>
                                    
                                    <div class="col-sm-2 text-left">
                                        <a href="#" class="btn btn-primary" btn="toggle1">Buscar Fondos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="resultados-busqueda search1">
                                <h3>Resultado de la búsqueda:</h3>
                                <h4>Hemos encontrado 2 Fondos con los términos de búsqueda ingresados:</h4>

                                <div class="box">
                                    

                                    <aside class="links dated aside-consolidado aside-inversiones"> 
                                        <article class="capgemini-tables ffmm-inicio">
                                            <header class="tables-header clearfix"><!--header-->
                                                <div class="pull-left fondo-check-select">
                                                    <div class="item first check">
                                                        <div class="form-group formline confirmar">
                                                            <label for="fondo-corporativo2" class="ui-marmots-label-check marmots-label-left">
                                                                <br/>
                                                                <input id="fondo-corporativo2" name="fondo-corporativo" type="checkbox" fund="corporativo">
                                                            </label>
                                                        </div>    
                                                    </div>
                                                </div>                                            
                                                <div class="pull-left">
                                                    <h1>Corporativo</h1>  
                                                    <p>Serie A  |  Conservador</p>
                                                </div>
                                                <div class="pull-right">
                                                    <p>Rentabilidad último año: <strong>9,96%</strong></p> 
                                                    <p>(últimos 12 meses)</p>
                                                </div>
                                                

                                                <span class="btn-group ">
                                                     <button type="button" class="btn sprite-arrow active"></button>
                                                </span>
                                            </header><!--header-->

                                            <div class="body-consolidado capgemini-chart"><!--body-consolidado-->
                                                <article class="capgemini-tables datos-tabla"  >
                                                    <div class="tables-body">
                                                        <div class="bajada"> 
                                                            <p>El fondo Invierte principalmente en instrumentos de deuda nacionales denominado en pesos y UF., con una duración máxima de 90 días. <a href="#">Ver detalle del Fondo</a></p>
                                                        </div>
                                                        
                                                        <table >
                                                            <tbody>
                                                                <tr> 
                                                                    <th width="">Comisión de salida</th> 
                                                                    <th width="">Monto mínimo de inversión</th> 
                                                                </tr>
                                                                <tr data-select-radio="true"> 
                                                                    <td class="text-left"><p>20% sin comisión sobre 20%: 0-30 días 1,5% </p><p>31-90 días: 1%Desde 91 días: 0%</p></td> 
                                                                    <td class="text-right">$ 100.000</td> 
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <a href="#">Ver folleto de esta Serie</a>
                                                                    </td>
                                                                </tr>
                                                                 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </article>
                                            </div><!--Fin body-consolidado--> 
                 
                                        
                                        </article> 
                                    </aside>

                                    <aside class="links dated aside-consolidado aside-inversiones"> 
                                        <article class="capgemini-tables ffmm-inicio">
                                            <header class="tables-header clearfix"><!--header-->
                                                <div class="pull-left fondo-check-select">
                                                    <div class="item first check">
                                                        <div class="form-group formline confirmar">
                                                            <label for="fondo-valor-plus2" class="ui-marmots-label-check marmots-label-left">
                                                                <br/>
                                                                <input id="fondo-valor-plus2" name="fondo-valor-plus" type="checkbox" fund="valorPlus">
                                                            </label>
                                                        </div>    
                                                    </div>
                                                </div>                                            
                                                <div class="pull-left">
                                                    <h1>Valor Plus</h1>  
                                                    <p>Serie A  |  Conservador</p>
                                                </div>
                                                <div class="pull-right">
                                                    <p>Rentabilidad último año: <strong>9,96%</strong></p> 
                                                    <p>(últimos 12 meses)</p>
                                                </div>
                                                

                                                <span class="btn-group ">
                                                     <button type="button" class="btn sprite-arrow active"></button>
                                                </span>
                                            </header><!--header-->

                                            <div class="body-consolidado capgemini-chart"><!--body-consolidado-->
                                                <article class="capgemini-tables datos-tabla"  >
                                                    <div class="tables-body">
                                                        <div class="bajada"> 
                                                            <p>El fondo Invierte principalmente en instrumentos de deuda nacionales denominado en pesos y UF., con una duración máxima de 90 días. <a href="#">Ver detalle del Fondo</a></p>
                                                        </div>
                                                        
                                                        <table >
                                                            <tbody>
                                                                <tr> 
                                                                    <th width="">Comisión de salida</th> 
                                                                    <th width="">Monto mínimo de inversión</th> 
                                                                </tr>
                                                                <tr data-select-radio="true"> 
                                                                    <td class="text-left"><p>20% sin comisión sobre 20%: 0-30 días 1,5% </p><p>31-90 días: 1%Desde 91 días: 0%</p></td> 
                                                                    <td class="text-right">$ 100.000</td> 
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <a href="#">Ver folleto de esta Serie</a>
                                                                    </td>
                                                                </tr>
                                                                 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </article>
                                            </div><!--Fin body-consolidado--> 
                 
                                        
                                        </article> 
                                    </aside>

                                    

                                    

                                    <div class="text-center">
                                        <a href="?src=S18-ffmm-2.php" class="btn btn-primary ">Contratar fondos</a>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>


                    

                    

                    


                    
                </div> 
            
              
        </div>
    </div>
</div>
</div>
<!-- Selector de cuentas -->
<div id="selected-foud" class="modal-bottom">
    <button class="close-all">
        <i class="glyphicon glyphicon-remove"></i>
    </button>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h3>Fondos Seleccionados Para contratar:</h3>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-4 fund-selected" fund="corporativo">
                    <button class="close">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                    <strong>Corporativo</strong>   
                    <p>Serie A</p>    
                    <span>Rentabilidad: 9,96%</span>
                </div>
                <div class="col-sm-4 fund-selected" fund="valorPlus">
                    <button class="close">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                    <strong>Valor Plus</strong>   
                    <p>Serie A</p>    
                    <span>Rentabilidad: 9,96%</span>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>