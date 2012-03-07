<?php include_component('inicio','buscarsubcentros',array ('ue' => 'cea_crear_inicio/crear')); ?>
<br />
<?php if (isset($notice_error)): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $notice,'icono' => '/images/Scared.png' )); ?>
<?php endif; ?>
<div id="divResults" style="margin-left: auto;margin-right: auto;width: 920px;"  >
    
</div>