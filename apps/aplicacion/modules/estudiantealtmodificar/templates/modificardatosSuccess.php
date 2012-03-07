<?php if ($sf_user->hasFlash('notice6')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#f00','mensaje' => $sf_user->getFlash('notice6'),'icono' => '/images/Happy.png' )); ?>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice_error6')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice_error6'),'icono' => '/images/Cry.png' )); ?>
<?php endif; ?>
