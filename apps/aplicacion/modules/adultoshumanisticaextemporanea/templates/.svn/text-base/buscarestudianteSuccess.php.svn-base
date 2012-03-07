<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php if(isset($notice)): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#F00','mensaje' => html_entity_decode($notice),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
        <?php include_partial('adultoshumanisticaextemporanea/datosestudiante', array('estudiante' => $estudiante)); ?>
        <?php include_partial('adultoshumanisticaextemporanea/datosunidadeducativa',array ('unidades' => $unidades,'periodo' => $periodo)); ?>
<?php endif; ?>
