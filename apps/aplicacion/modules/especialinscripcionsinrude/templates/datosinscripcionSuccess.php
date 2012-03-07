<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<div style="width: 760px;margin-left: auto;margin-right: auto;">
<?php if ($sf_user->hasFlash('notice1')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#f00','mensaje' => $sf_user->getFlash('notice1'),'icono' => '/images/Happy.png' )); ?>
    <?php include_partial('adultoshumanisticaextemporanea/datosestudiante', array('estudiante' => $estudiante)); ?>
    <?php include_partial('especialinscripcionsinrude/datosinscripcion', array('inscripcion' => $inscripcion)); ?>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice_error1')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice_error1'),'icono' => '/images/Cry.png' )); ?>
<?php endif; ?>
</div>