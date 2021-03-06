<?php
header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);

include_once 'app/core/config.inc.php';

$title = '404 - Página no encontrada';

include_once 'template/document-declaration.inc.phtml';
?>

<div class="card" style="float: none; margin: 0 auto; margin-top: 1.5rem; width: 23rem;">
    <div class="card-header text-danger">
        <h4><i class="fas fa-unlink"></i> Error 404</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title">¡Página no encontrada!</h5>
        <p class="card-text text-secondary text-justify">Asegúrate de escribir la dirección de la página correctamente o vuelve a la página anterior.</p>
        <a href="<?php echo SERVER; ?>" class="btn btn-primary"><i class="fas fa-home"></i> Ir al inicio</a>
    </div>
</div>

<?php
include_once './template/document-close.inc.phtml';
?>