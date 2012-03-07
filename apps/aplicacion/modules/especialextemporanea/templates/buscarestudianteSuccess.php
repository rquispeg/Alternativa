<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php if(isset($notice)): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#F00','mensaje' => html_entity_decode($notice),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
        <br />
        <?php include_partial('especialextemporanea/datosestudiante', array('estudiante' => $estudiante)); ?>
        <?php if(isset($notice1)): ?>
            <br />
            <?php include_partial('especialextemporanea/datosinscripcion', array('inscripcion' => $inscripcion)); ?>
        <?php endif; ?>
        <br />
        <?php include_partial('especialextemporanea/datosunidadeducativa',array ('unidades' => $unidades)); ?>
<?php endif; ?>
