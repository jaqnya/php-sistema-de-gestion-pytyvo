<?php
include_once 'app/core/config.inc.php';
include_once 'app/core/SessionControl.inc.php';
include_once 'app/core/Redirection.inc.php';

if (!SessionControl::session_started()) {
    Redirection::redirect(ROUTE_SIGNIN);
}

include_once 'template/document-declaration.inc.phtml';
include_once 'template/navbar.inc.phtml';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo SERVER; ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?php echo ROUTE_ADMINISTRATION; ?>">Gesti&#243;n</a></li>
        <li class="breadcrumb-item"><a href="<?php echo ROUTE_ADMINISTRATION_SETUP; ?>">Definiciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Servicio t&#233;cnico</li>
    </ol>
</nav>

<div class="container rounded">
    <div class="row p-4" style="background: white;">
        <div class="col-md-12">
            <a class="quick-btn" href="<?php echo ROUTE_ADMINISTRATION_SETUP_SERVICE_MACHINE_MANAGER; ?>">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>M&#225;quinas</span>
            </a>
            <a class="quick-btn" href="<?php echo ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_BRAND_MANAGER; ?>">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Marcas</span>
            </a>
            <a class="quick-btn" href="<?php echo ROUTE_ADMINISTRATION_SETUP_SERVICE_MODEL_MANAGER; ?>">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Modelos</span>
            </a>
            <a class="quick-btn" href="<?php echo ROUTE_ADMINISTRATION_SETUP_SERVICE_WO_STATUS_MANAGER; ?>">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Estados de OT</span>
            </a>
        </div>
    </div>
</div>

<?php
include_once 'template/document-close.inc.phtml';
?>