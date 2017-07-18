
<div class="container">
    <div class="menu-miga">
        <p><a href="?src=S02-cuentas.php">Inicio</a> <span>Ahorro e inversión</span></p>
    </div>

    <!-- Cloud Contact cliente-->
    <div class="section-tabs cloud-contact">
        
        <!-- Titulo -->
        <div class="text-center">
            <h1>BBVA CLOUD</h1>
            <p>En esta sección podrás documentos con el banco.</p>
                <div class="box">
                    <a class="modal-trigger btn" href="includes/components/movements/cloud/modal/subir-archivos.html">Subir Documentos</a>
                </div>
            <hr class="separador">
        </div>
        <!-- Fin Titulo-->


        <div class="section-ahorro-inversion">
        <!--Barra lateral-->
            <div class="banner-column" id="ahorro-lateral"> 
                <nav class="nav-sidebar">
                    <a href="#" id="seccion1" class="active">Documentos del Banco</a>
                    <a href="#" id="seccion2" class="">Documentos Personales</a>
                </nav>
            </div>
        <!--Fin Barra lateral-->

        <!-- Contenido-->
        <div class="content-column" id="productos-inversion">     

            <!--Seccion Personas-->
            <div id="docBank">
                <aside class="links dated aside-consolidado aside-inversiones">
                    <article class="capgemini-tables ffmm-inicio">
                        <header class="tables-header clearfix">
                            <h1>Documentos del Banco</h1>
                        </header>

                        <div class="body-consolidado capgemini-chart cloud-contact" style="display:block;">
                            <div class=" plus-one big-blue text-center">   
                                <article class="capgemini-tables holder">                   
                                    <div class="tables-body table-scroll">
                                        <div class="body-tab tables-body">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="plazo" style="width:50% !important">Tipo de Documento</th>
                                                        <th>Fecha</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr >
                                                        <td>Documento 1</td>
                                                        <td>11/11/2017</td>
                                                        <td>
                                                            <a id="download" href="">
                                                                <i class="icon-16 l01-pdf" id="download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>  
                                </article>
                            </div>
                        </div>

                    </article>
                </aside>
                <div class="paginador">
                    <button class="btn primary"><span class="blue">1</span></button>
                    <button class="btn primary"><span class="blue">2</span></button>
                    <button class="btn primary"><span class="blue">3</span></button>
                </div>
            </div>
            <!--Fin Seccion Personas-->

            <!--Seccion Banco-->
            <div id="docPerson" style="display: none;">
                <aside class="links dated aside-consolidado aside-inversiones">
                    <article class="capgemini-tables ffmm-inicio">
                        <header class="tables-header clearfix">
                            <h1>Documentos Personales</h1>
                        </header>

                         <div class="body-consolidado capgemini-chart cloud-contact" style="display:block;">
                            <div class=" plus-one big-blue text-center">   
                                <article class="capgemini-tables holder">                   
                                    <div class="tables-body table-scroll">
                                        <div class="body-tab tables-body">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="plazo" style="width:50% !important">Tipo de Documento</th>
                                                        <th>Fecha</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr >
                                                        <td>Documento 1</td>
                                                        <td>11/11/2017</td>
                                                        <td>
                                                            <a id="download" href="">
                                                                <i class="icon-16 l01-pdf" id="download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>  
                                </article>
                            </div>
                        </div>
                    </article>
                </aside>
               
            </div>
            <!--Fin Secccion Banco-->

        </div>
        <!--Fin Contenido -->       
        </div>
    </div>
    <!--Fin Cloud Contact cliente-->
</div>

<script type="text/javascript">

    $('#download').attr({target: '_blank', 
        href: 'http://www.brandemia.org/sites/default/files/sites/default/files/logo_google_nuevo.jpg'});
    $('#seccion1').click(function(){
        $(this).addClass('active');
        $('#seccion2').removeClass('active');
        $('#docBank').show();
        $('#docPerson').hide();
      });
    $('#seccion2').click(function(){
        $(this).addClass('active');
        $('#seccion1').removeClass('active');
        $('#docPerson').show();
        $('#docBank').hide();
      });
</script>
