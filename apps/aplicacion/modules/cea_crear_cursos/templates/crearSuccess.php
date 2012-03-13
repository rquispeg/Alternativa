<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<!-- Todas la Variables hidden -->
<input id="subsistema_id" type="hidden" name="subsistema" value="<?php echo $acreditacion;?>"/>
<input id="unidad_educativa" type="hidden" name="unidadeducativa" value="<?php echo $codue;?>"/>			
<input id="periodo_id" type="hidden" name="periodo" value="<?php echo $periodo;?>"/>
<input id="modalidad_id" type="hidden" name="modalidad" value="<?php echo $modalidad;?>"/>
<?php if($acreditacion == '21'): ?>
	<?php include_partial('cea_crear_cursos/datosunidadeducativahumanistica',array ('subcentros' => $subcentros,'niveles'=>$niveles)); ?>
<?php elseif($acreditacion == '22'): ?>
	<?php include_partial('cea_crear_cursos/datosunidadeducativatecnica',array ('subcentros' => $subcentros,'niveles'=>$niveles,'especialidades'=>$especialidades)); ?>
<?php elseif($acreditacion == '23'): ?>
	<?php include_partial('cea_crear_cursos/datosunidadeducativaespecial',array ('subcentros' => $subcentros,'niveles'=>$niveles,'discapacidades'=>$discapacidades)); ?>	
<?php endif; ?>

