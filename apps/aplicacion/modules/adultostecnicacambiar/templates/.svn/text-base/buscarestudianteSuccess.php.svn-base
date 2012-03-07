<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php if(isset($notice)): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#F00','mensaje' => html_entity_decode($notice),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
        <br />
        <?php include_partial('adultoshumanisticacambiar/datosestudiante', array('estudiante' => $estudiante)); ?>
        <br />
        <?php include_partial('adultostecnicacambiar/datosinscripcion', array('inscripcion' => $inscripcion)); ?>
        <br />
        <?php include_partial('adultostecnicacambiar/datosunidadeducativa', array('modalidades' => $modalidades)); ?>
        <br />
<?php endif; ?>
