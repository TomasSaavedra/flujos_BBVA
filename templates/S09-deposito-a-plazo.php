
<div class="container">
    
    <div class="menu-miga">
        <p><a href="?src=S18-ahorro-e-inversion.php">Inicio</a> <span>Depósito a plazo</span></p>
    </div>

    <div class="section-tabs">
        <!-- Utility icons -->
        <div class="utility-icons">
            <a href="#"><span class="icon-16 gray l01-pdf" title="Descargar pdf"></span></a>
            <a href="#"><span class="icon-16 gray m07-correspondenciavirtual" title="Enviar"></span></a>
            <a href="#"><span class="icon-16 gray n01-imprimir" title="Imprimir"></span></a>
        </div>
        
        <!-- title -->
        <h2 class="title-sh">Depósitos a plazo</h2>
        
        <!-- Section tabs  -->
        <ul class="nav nav-tabs align-center">
            <li class="active"><a href="#mis-productos">Mis productos</a></li>
            <li><a href="?src=S08-ffmm-catalogo-pre.php">Catálogo de productos</a></li>
        </ul>

        <hr class="separador">
        
        <div class="tab-content">
            <div class="tab-pane active" id="mis-productos">
                <div class="content-column" id="ahorro-inversion">
                    <?php include 'includes/components/movements/deposito-a-plazo/header.html'; ?>
                    <?php include 'includes/components/movements/deposito-a-plazo/tabs.html'; ?>
                    <!--?php include 'includes/components/movements/ahorro-inversiones/table.html'; ?-->
                        
                </div> 
                <div class="banner-column" id="ahorro-lateral">
                    <?php include 'includes/components/banners/sabias-que-inversiones.html'; ?>
                    <?php include 'includes/components/banners/perfil-inversor.html'; ?>
                    <?php include 'includes/components/banners/fondos-mutuos.html'; ?>
                </div>
            </div>

            <div class="tab-pane" id="catalogo-productos">
            </div>
        </div>
    </div>
</div>