<div id="dato"  style="width:780px;margin-left: auto;margin-right: auto;">
<?php include_component('inicio','buscarude',array ('url' => 'estudiantealtmodificarestado/historialestado')); ?><BR />
</div>
<div id="divResults" style="width:880px;margin-left: auto; margin-right: auto;">
<?php if ($sf_user->hasFlash('notice7')): ?>
            <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#f00','mensaje' => $sf_user->getFlash('notice7'),'icono' => '/images/Happy.png' )); ?>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice_error7')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice_error7'),'icono' => '/images/Cry.png' )); ?>
<?php endif; ?>
</div>