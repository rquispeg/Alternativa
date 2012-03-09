<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<input type="hidden" value="<?php echo $acreditacion; ?>" id="subsistema_id" />
<input type="hidden" value="<?php echo $codue; ?>" id="unidad_educativa" />
<input type="hidden" value="<?php echo $periodo; ?>" id="periodo_id" />                
<input type="hidden" value="<?php echo $modalidad; ?>" id="modalidad_id" />
<?php if(isset($notice)): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#F00','mensaje' => html_entity_decode($notice),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
        <?php include_partial('ins_con_rude/datosestudiante', array('estudiante' => $estudiante)); ?>
		<?php if($acreditacion == '21'):?>
			<?php include_partial('ins_con_rude/datosunidadeducativahumanistica',array ('subcentros' => $subcentros,'periodo' => $periodo)); ?>
		<?php elseif($acreditacion == '22'):?>
			<?php include_partial('ins_con_rude/datosunidadeducativatecnica',array ('subcentros' => $subcentros,'periodo' => $periodo)); ?>
		<?php endif;?>
<?php endif; ?>
